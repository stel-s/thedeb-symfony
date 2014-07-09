<?php

namespace Stel\Bundle\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StelQuestionBundle:Default:index.html.twig', array('name' => $name));
    }
public function getAllAction()
    {
    $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('StelQuestionBundle:Question')->findAll();

        return $this->render('StelQuestionBundle:Default:indexq.html.twig', array(
            'questions' => $questions,
        ));    
    
    }    
}
