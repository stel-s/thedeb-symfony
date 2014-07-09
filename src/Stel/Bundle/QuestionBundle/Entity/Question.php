<?php
namespace Stel\Bundle\QuestionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="question")
 */
class Question
{
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
     * @ORM\Column(type="string", length=20)
     */
    protected $category;

    /**
     * @ORM\Column(type="text",length=255)
     */
    protected $description;
     /**
     * @ORM\Column(type="integer")
     */
    protected $votes_for;
     /**
     * @ORM\Column(type="integer")
     */
    protected $votes_against;
     /**
     * @ORM\Column(type="string", length=20)
     */
    protected $tags;
    /**
     * @ORM\OneToMany(targetEntity="ReasonAgainst", mappedBy="question")
     */
    protected $reasons_against;
   
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
     * @return Question
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
     * Set category
     *
     * @param string $category
     * @return Question
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Question
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Question
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set votes_for
     *
     * @param integer $votesFor
     * @return Question
     */
    public function setVotesFor($votesFor)
    {
        $this->votes_for = $votesFor;

        return $this;
    }

    /**
     * Get votes_for
     *
     * @return integer 
     */
    public function getVotesFor()
    {
        return $this->votes_for;
    }

    /**
     * Set votes_against
     *
     * @param integer $votesAgainst
     * @return Question
     */
    public function setVotesAgainst($votesAgainst)
    {
        $this->votes_against = $votesAgainst;

        return $this;
    }

    /**
     * Get votes_against
     *
     * @return integer 
     */
    public function getVotesAgainst()
    {
        return $this->votes_against;
    }

    
   

   
   

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reasons_against = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reasons_against
     *
     * @param \Stel\Bundle\QuestionBundle\Entity\ReasonAgainst $reasonsAgainst
     * @return Question
     */
    public function addReasonsAgainst(\Stel\Bundle\QuestionBundle\Entity\ReasonAgainst $reasonsAgainst)
    {
        $this->reasons_against[] = $reasonsAgainst;

        return $this;
    }

    /**
     * Remove reasons_against
     *
     * @param \Stel\Bundle\QuestionBundle\Entity\ReasonAgainst $reasonsAgainst
     */
    public function removeReasonsAgainst(\Stel\Bundle\QuestionBundle\Entity\ReasonAgainst $reasonsAgainst)
    {
        $this->reasons_against->removeElement($reasonsAgainst);
    }

    /**
     * Get reasons_against
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReasonsAgainst()
    {
        return $this->reasons_against;
    }
}
