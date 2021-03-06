<?php
namespace Stel\Bundle\QuestionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="reason_against")
 */
class ReasonAgainst{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;
    /**
     * @ORM\Column(type="text")
     */
    protected $body;
   /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="reasons_against")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    protected $question;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ReasonAgainst
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return ReasonAgainst
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

 

    /**
     * Set question
     *
     * @param \Stel\Bundle\QuestionBundle\Entity\Question $question
     * @return ReasonAgainst
     */
    public function setQuestion(\Stel\Bundle\QuestionBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \Stel\Bundle\QuestionBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
