<?php

/* StelQuestionBundle:Default:indexq.html.twig */
class __TwigTemplate_a88ffe498310cbfd657eee4e044588ed74e15048d491117dbb85aff3b62e42ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Question</h1>
    
<div class=\"container\">

    

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 11
            echo "
    <div class=\"container\">
<div class=\"question-header panel clearfix\" style=\"background-color: #333;\">
    <div class=\"question-q col-sm-2 hidden-xs true-blue-color\">
              <span class=\"pull-right\">Q:</span>
          </div>
    <div class=\"question-text lead col-sm-10 col-xs-12\">
             <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_show", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" data-bindattr-758=\"758\" data-ember-action=\"759\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "title"), "html", null, true);
            echo "</a>
              <div class=\"question-feed-sub-text\">
              <span></span>
              ·
              question created by <span id=\"ember1668\" class=\"ember-view timeago\" title=\"2014-06-25T02:07:52.707Z\">2 days ago</span>
              </div>
          </div>
</div>
</div>
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "     <a href=\"";
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">
         <button>Create a new entry</button>
            </a>
    ";
    }

    public function getTemplateName()
    {
        return "StelQuestionBundle:Default:indexq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  52 => 18,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
