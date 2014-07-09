<?php

namespace Stel\Bundle\QuestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Stel\Bundle\QuestionBundle\Entity\Question;
use Stel\Bundle\QuestionBundle\Form\QuestionType;
use Stel\Bundle\QuestionBundle\Entity\ReasonAgainst;
/**
 * Question controller.
 *
 */
class QuestionController extends Controller
{

    /**
     * Lists all Question entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('StelQuestionBundle:Question')->findAll();

        return $this->render('StelQuestionBundle:Question:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Question entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Question();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('question_show', array('id' => $entity->getId())));
        }

        return $this->render('StelQuestionBundle:Question:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Question entity.
     *
     * @param Question $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Question $entity)
    {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));
$entity->setVotesFor(0);
        $entity->setVotesAgainst(0);
        return $form;
    }

    /**
     * Displays a form to create a new Question entity.
     *
     */
    public function newAction()
    {
        $entity = new Question();
        
        $form   = $this->createCreateForm($entity);

        return $this->render('StelQuestionBundle:Question:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Question entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $question = $em->getRepository('StelQuestionBundle:Question')->find($id);
////$comments=$em->getRepository('StelQuestionBundle:ReasonAgainst')->findBy(
////    array('question_id' => $id)
//   
//);
        $reasons=$question->getReasonsAgainst();
        if (!$question) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StelQuestionBundle:Question:show.html.twig', array(
            'question'      => $question,
            'reasons_against'=>$reasons,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Question entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StelQuestionBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('StelQuestionBundle:Question:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Question entity.
    *
    * @param Question $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Question $entity)
    {
        $form = $this->createForm(new QuestionType(), $entity, array(
            'action' => $this->generateUrl('question_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Question entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('StelQuestionBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('question_edit', array('id' => $id)));
        }

        return $this->render('StelQuestionBundle:Question:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Question entity.
     *
     */
    public function vote_forAction($id){
        $em=$this->getDoctrine()->getManager();
        $entity=$em->getRepository('StelQuestionBundle:Question')->find($id);
       $votes= $entity->getVotesFor();
        $votes++;
        $entity->setVotesFor($votes);
        $em->flush();
             return $this->redirect($this->generateUrl('question_show',array('id' => $id))); 
    }
    public function reason_againstAction($id,Request $request){
        
        if ($request->isXmlHttpRequest()){
               $reason = new ReasonAgainst();
               $data1 = $request->request->get('data1');
           $reason->setTitle("fddf");
//           $reason->setUser //TODO implement get user and add them to reason
           
           
           
       $reason->setBody($data1);
       $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository('StelQuestionBundle:Question')->find($id);
       // relate this product to the category
//        $reason->setQuestion($category);
$reason->setQuestion($question);
              $em->persist($question);
        $em->persist($reason);
        $em->flush();
      
       
  //handle data
 
  //prepare the response, e.g.
  $response = array("code" => 100, "success" => true,"reason_against"=> $data1);
  //you can return result as JSON
  return new Response(json_encode($response)); 
    }
    }
     public function vote_againstAction($id,Request $request){
         if ($request->isXmlHttpRequest()){
             
             $request = $this->container->get('request');        
  $data1 = $request->query->get('data1');
  $em=$this->getDoctrine()->getManager();
        $entity=$em->getRepository('StelQuestionBundle:Question')->find($id);
       $votes= $entity->getVotesAgainst();
  $votes++;
        $entity->setVotesAgainst($votes);
        $em->flush();
  //handle data
 
  //prepare the response, e.g.
  $response = array("code" => 100, "success" => true,"votes"=>$votes);
  //you can return result as JSON
  return new Response(json_encode($response)); 
         }
           
        $em=$this->getDoctrine()->getManager();
        $entity=$em->getRepository('StelQuestionBundle:Question')->find($id);
       $votes= $entity->getVotesAgainst();
        $votes--;
        $entity->setVotesAgainst($votes);
        $em->flush();
             return $this->redirect($this->generateUrl('question_show',array('id' => $id))); 
    }
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('StelQuestionBundle:Question')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Question entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('question'));
    }

    /**
     * Creates a form to delete a Question entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('question_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    public function addReasonAgainstAction($id){
        $reason = new ReasonAgainst();
           $reason->setTitle("fddf");
       $reason->setBody("fddf");
       $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository('StelQuestionBundle:Question')->find($id);
       // relate this product to the category
//        $reason->setQuestion($category);
$reason->setQuestion($question);
              $em->persist($question);
        $em->persist($reason);
        $em->flush();
      return $this->redirect($this->generateUrl('question'));

    }
}
