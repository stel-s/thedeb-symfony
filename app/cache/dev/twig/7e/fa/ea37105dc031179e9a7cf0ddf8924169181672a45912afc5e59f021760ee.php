<?php

/* StelQuestionBundle:Question:show.html.twig */
class __TwigTemplate_7efaea37105dc031179e9a7cf0ddf8924169181672a45912afc5e59f021760ee extends Twig_Template
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
        // line 6
        echo "<div class=\"container\">
    <h1>Question</h1>
    <div class=\"question-header panel clearfix\" style=\"background-color: #333;\">
        <div class=\"question-q col-sm-2 hidden-xs true-blue-color\">
            <span class=\"pull-right\">Q:</span>
        </div>
        <div class=\"question-text lead col-sm-10 col-xs-12\">
            <a href='#' >";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "title"), "html", null, true);
        echo "</a>
            <div class=\"question-feed-sub-text\">
                <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "description"), "html", null, true);
        echo "</span>
                ·
                question created by #user<span id=\"ember1668\" class=\"ember-view timeago\" title=\"2014-06-25T02:07:52.707Z\">#2 days ago</span>
            </div>
        </div>

    </div>


    <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
            <div class=\"thumbnail\">
                <div class=\"feed-image\" style=\"background-image:url('https://d2wvi262ccxt74.cloudfront.net/uploads/prod/position/position~question~000009a~0000001/w500.jpg');\" data-bindattr-28=\"28\">
                </div>
            </div>
        </div>
        <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">
            <h1 class=\"position-title\">Position</h1>
            <p class=\"lead serif\" style=\"margin-bottom: 5px;\"><script id=\"metamorph-31-start\" type=\"text/x-placeholder\"></script> 3dsffffffsdfsdfsdfsdfsdfsdfsdsdfewrewr  http://www.iflscience.com/space/mysterious-bright-object-spotted-titan<script id=\"metamorph-31-end\" type=\"text/x-placeholder\"></script></p>
            <div class=\"meta-info pull-right\">
                <script id=\"metamorph-32-start\" type=\"text/x-placeholder\"></script>#category Science<script id=\"metamorph-32-end\" type=\"text/x-placeholder\"></script> · 
                created
                <span id=\"ember527\" class=\"ember-view timeago\" title=\"2014-06-25T02:08:57.418Z\">2 days ago</span> 
                by 
                <img class=\"img-circle tiny-author-image\" src=\"https://secure.gravatar.com/avatar/fc7c3f74e71b197927155f6f2235f0d0?s=80&amp;r=pg&amp;d=identicon\" data-bindattr-29=\"29\">
                <a href=\"/user/SurvivorRK\" data-bindattr-30=\"30\" data-ember-action=\"31\"><script id=\"metamorph-33-start\" type=\"text/x-placeholder\"></script>SurvivorRK<script id=\"metamorph-33-end\" type=\"text/x-placeholder\"></script></a>
                <span title=\"credibility\" class=\"credibility-score\"><i class=\"glyphicon glyphicon-fire\"></i> <script id=\"metamorph-34-start\" type=\"text/x-placeholder\"></script>1400<script id=\"metamorph-34-end\" type=\"text/x-placeholder\"></script></span>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_vote_for", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
        echo "\"><button data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "votesfor"), "html", null, true);
        echo "\"> <i class=\"glyphicon glyphicon-thumbs-up\"></i></button></a>
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_vote_against", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
        echo "\"><button data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "votesagainst"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-thumbs-down\"></i></button></a>

    <div class=\"progress\">
        <div class=\"progress-bar progress-bar-success\" style=\"width: ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "votesfor"), "html", null, true);
        echo "%\">
            <span class=\"sr-only\">35% Complete (success)</span>
        </div>

        <div class=\"progress-bar progress-bar-danger\" style=\"width: ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "votesagainst"), "html", null, true);
        echo "%\">
            <span class=\"sr-only\">10% Complete (danger)</span>
        </div>
    </div>

    <div class=\"row\" style=\"padding-top: 10px;\">
        <div class=\"col-sm-10 col-sm-push-2\">
            <div class=\"truthometer progress\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "votesfor"), "html", null, true);
        echo "%\" ></div>
                <div id=\"2\" class=\"progress-bar progress-bar-warning\" style=\"width:2%\" ></div>
            </div>
        </div>
        <div class=\"col-sm-2 col-sm-pull-10\">
            <div id=\"position-vote-buttons\">

                <button onclick=\"mitsos();\">mitsos</button>
                <button  class=\"btn btn-default position-vote\"><i class=\"glyphicon glyphicon-thumbs-up\"></i></button>
                <button  class=\"btn btn-default position-vote\"><i class=\"glyphicon glyphicon-thumbs-down\"></i></button>
                <script>
               var mitsos=function(){ 
                    \$.ajax({
  type: \"POST\",
  url: \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_vote_against", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
        echo "\",
  data: {data1:1},
  success: function(response){
  alert(response.votes);
  \$('#2').css(\"width\",\"\"+response.votes+\"%\");
    },
    
            
  dataType: \"json\"
});
};
                    </script>
            
            </div>
        </div>
    </div>
</div>
<div id=\"reasons-for-container\" class=\"col-md-6\">
        <div class=\"panel reason-container for-reason\">
            <div class=\"panel-body\">
                <div class=\"reason-header clearfix\">
                    <h2 id=\"reasons-for\" class=\"pull-left\">Reasons <span class=\"true-blue-color\">to</span> Believe This Position</h2>
                    <button data-bindattr-188=\"188\" type=\"button\" class=\"btn btn-default pull-right\" data-ember-action=\"189\">
                        <i class=\"glyphicon glyphicon-plus\"></i>
                        Add Reason
                    </button>
                </div>

                <script id=\"metamorph-228-start\" type=\"text/x-placeholder\"></script><script id=\"metamorph-228-start\" type=\"text/x-placeholder\"></script>
                    <script id=\"metamorph-303-start\" type=\"text/x-placeholder\"></script>
                        <form class=\"form-horizontal\" data-ember-action=\"251\">
                            <div class=\"form-group\" data-bindattr-252=\"252\">
                                <div class=\"col-sm-12\">
                                    <h1>New Reason</h1>
                                    <textarea id=\"ember884\" class=\"ember-view ember-text-area form-control\" spellcheck=\"true\"></textarea>
                                    <span class=\"help-block\">2,000 characters</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-6\">
                                    <button class=\"btn btn-primary\" type=\"submit\">Save</button>
                                    <button class=\"btn btn-default\" >Cancel</button>

                                </div>
                            </div>
                        </form>
                  
                    <div class=\"reason-row\">
    <div class=\"row\">
        <div class=\"col-xs-10\">
            <p class=\"serif\">
                <a href=\"/user/ColeMiner\" ><script id=\"metamorph-233-start\" type=\"text/x-placeholder\"></script>ColeMiner<script id=\"metamorph-233-end\" type=\"text/x-placeholder\"></script></a> <span class=\"meta-info\"><span id=\"ember808\" class=\"ember-view timeago\" title=\"2014-06-29T23:42:44.884Z\">6 days ago</span></span> <br>
                
                    <script id=\"metamorph-235-start\" type=\"text/x-placeholder\"></script>The notion of this bill is not to \"allow\" people with student loans to refinance them (they can do that today if they get a better rate).  The notion is to get other people to pay for a rate decrease.  By other people, it's the \"guilt free\" model, \"Steal from the rich and give it to the poor\".  <script id=\"metamorph-235-end\" type=\"text/x-placeholder\"></script>
            </p>
        </div>
        <div class=\"col-xs-2\">
            <div class=\"pull-right\">
            <div class=\"reason-vote-buttons clearfix\">
                  <a href=\"#\" data-bindattr-192=\"192\" class=\"reason-vote reason-vote-up\" ><i class=\"glyphicon-chevron-up glyphicon\"></i></a>
                    <div class=\"reason-upvotes\"><a href=\"#\" title=\"Show Vote Log\">60%</a></div>
                    <a href=\"#\" data-bindattr-195=\"195\" class=\"reason-vote reason-vote-down\" ><i class=\"glyphicon-chevron-down glyphicon\"></i></a>
                <div style=\"clear:both\"></div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"reason-sub-menu\">
                            <a class=\"btn btn-default btn-xs\" data-ember-action=\"197\"><i class=\"glyphicon glyphicon-comment\"></i> Comments (<script id=\"metamorph-243-start\" type=\"text/x-placeholder\"></script>0<script id=\"metamorph-243-end\" type=\"text/x-placeholder\"></script>)</a>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                </div>
            </div>


        </div>
    </div>

</div>
                    <div class=\"reason-row\">
    <div class=\"row\">
        <div class=\"col-xs-10\">
            <p class=\"serif\">
                <a href=\"/user/ColeMiner\" data-bindattr-198=\"198\" data-ember-action=\"199\"><script id=\"metamorph-247-start\" type=\"text/x-placeholder\"></script>ColeMiner<script id=\"metamorph-247-end\" type=\"text/x-placeholder\"></script></a> <span class=\"meta-info\"><span id=\"ember819\" class=\"ember-view timeago\" title=\"2014-06-29T23:44:07.541Z\">6 days ago</span></span> <br>
            </p>
        </div>
        <div class=\"col-xs-2\">
            <div class=\"pull-right\">
            <div class=\"reason-vote-buttons clearfix\">
               
                    <a href=\"#\" data-bindattr-200=\"200\" class=\"reason-vote reason-vote-up\" data-ember-action=\"201\"><i class=\"glyphicon-chevron-up glyphicon\"></i></a>
                    <div class=\"reason-upvotes\"><a href=\"#\" title=\"Show Vote Log\" data-ember-action=\"202\"><script id=\"metamorph-254-start\" type=\"text/x-placeholder\"></script>60<script id=\"metamorph-254-end\" type=\"text/x-placeholder\"></script>%</a></div>
                    <a href=\"#\" data-bindattr-203=\"203\" class=\"reason-vote reason-vote-down\" data-ember-action=\"204\"><i class=\"glyphicon-chevron-down glyphicon\"></i></a>
                <script id=\"metamorph-253-end\" type=\"text/x-placeholder\"></script>
                <div style=\"clear:both\"></div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"reason-sub-menu\">
                            <a class=\"btn btn-default btn-xs\" ><i class=\"glyphicon glyphicon-comment\"></i> Comments (<script id=\"metamorph-257-start\" type=\"text/x-placeholder\"></script>0<script id=\"metamorph-257-end\" type=\"text/x-placeholder\"></script>)</a>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                </div>
            </div>


        </div>
    </div>

</div>
                    <div class=\"reason-row\">
    <div class=\"row\">
        <div class=\"col-xs-10\">
            <p class=\"serif\">
                <a href=\"/user/SurvivorRK\" data-bindattr-206=\"206\" data-ember-action=\"207\"><script id=\"metamorph-261-start\" type=\"text/x-placeholder\"></script>SurvivorRK<script id=\"metamorph-261-end\" type=\"text/x-placeholder\"></script></a> <span class=\"meta-info\"><span id=\"ember830\" class=\"ember-view timeago\" title=\"2014-06-30T00:13:23.738Z\">6 days ago</span></span> <br>
                    <script id=\"metamorph-263-start\" type=\"text/x-placeholder\"></script>Totally agree- so sick of people self-righteously trying to force their hands into the pockets of the people who have succeeded in the American dream simply because they have no hope of achieving it.<script id=\"metamorph-263-end\" type=\"text/x-placeholder\"></script>
            </p>
        </div>
        <div class=\"col-xs-2\">
            <div class=\"pull-right\">
            <div class=\"reason-vote-buttons clearfix\">
                    <a href=\"#\"  class=\"reason-vote reason-vote-up\" ><i class=\"glyphicon-chevron-up glyphicon\"></i></a>
                    <div class=\"reason-upvotes\"><a href=\"#\" title=\"Show Vote Log\" >33%</a></div>
                    <a href=\"#\"  class=\"reason-vote reason-vote-down\" ><i class=\"glyphicon-chevron-down glyphicon\"></i></a>
                <div style=\"clear:both\"></div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"reason-sub-menu\">
                            <a class=\"btn btn-default btn-xs\" ><i class=\"glyphicon glyphicon-comment\"></i> Comments (<script id=\"metamorph-271-start\" type=\"text/x-placeholder\"></script>1<script id=\"metamorph-271-end\" type=\"text/x-placeholder\"></script>)</a>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                </div>
            </div>


        </div>
    </div>

</div>

                <div class=\"reason-footer clearfix\">
                        <button data-bindattr-214=\"214\" type=\"button\" class=\"btn btn-default pull-right\" data-ember-action=\"215\">
                            <i class=\"glyphicon glyphicon-plus\"></i>
                            Add Reason
                        </button>
                </div>
            </div>
        </div>
    </div>
<div id=\"reasons-against\" class=\"col-md-6 reasons-against-container\">
    <div class=\"panel reason-container against-reason\">
        <div class=\"panel-body\">
            <div class=\"reason-header clearfix\">
                <h2 id=\"reasons-against\" class=\"pull-left\">Reasons <span class=\"false-orange-color\">Not</span> to Believe This Position</h2>
                <button id='addReason' type=\"button\" class=\"btn btn-default pull-right\" >
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    Add Reason
                </button>
            </div>

            <form id=\"reason\" class=\"form-horizontal\" style=\"display: none;\">
                <div class=\"form-group\" >
                    <div class=\"col-sm-12\">
                        <h1>New Reason</h1>
                        <textarea id=\"884\" class=\"ember-view ember-text-area form-control\" spellcheck=\"true\"></textarea>
                        <span class=\"help-block\">2,000 characters</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-6\">
                        <button id=\"save\" class=\"btn btn-primary\" type=\"submit\">Save</button>
                        <button id=\"cancel\" class=\"btn btn-default\" >Cancel</button>

                    </div>
                </div>
            </form>
               <div class=\"reason-row\">
           ";
        // line 270
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reasons_against"]) ? $context["reasons_against"] : $this->getContext($context, "reasons_against")));
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            // line 271
            echo "              
    <div class=\"row\">
        <div class=\"col-xs-10\">
            <p class=\"serif\">
                <a href=\"/user/ColeMiner\" data-bindattr-198=\"198\" data-ember-action=\"199\"><script id=\"metamorph-247-start\" type=\"text/x-placeholder\"></script>ColeMiner<script id=\"metamorph-247-end\" type=\"text/x-placeholder\"></script></a> <span class=\"meta-info\"><span id=\"ember819\" class=\"ember-view timeago\" title=\"2014-06-29T23:44:07.541Z\">6 days ago</span></span> <br>
            ";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reason"]) ? $context["reason"] : $this->getContext($context, "reason")), "title"), "html", null, true);
            echo "
                ";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reason"]) ? $context["reason"] : $this->getContext($context, "reason")), "body"), "html", null, true);
            echo "
            </p>
        </div>
        <div class=\"col-xs-2\">
            <div class=\"pull-right\">
            <div class=\"reason-vote-buttons clearfix\">
               
                    <a href=\"#\" data-bindattr-200=\"200\" class=\"reason-vote reason-vote-up\" data-ember-action=\"201\"><i class=\"glyphicon-chevron-up glyphicon\"></i></a>
                    <div class=\"reason-upvotes\"><a href=\"#\" title=\"Show Vote Log\" data-ember-action=\"202\"><script id=\"metamorph-254-start\" type=\"text/x-placeholder\"></script>60<script id=\"metamorph-254-end\" type=\"text/x-placeholder\"></script>%</a></div>
                    <a href=\"#\" data-bindattr-203=\"203\" class=\"reason-vote reason-vote-down\" data-ember-action=\"204\"><i class=\"glyphicon-chevron-down glyphicon\"></i></a>
                <script id=\"metamorph-253-end\" type=\"text/x-placeholder\"></script>
                <div style=\"clear:both\"></div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"reason-sub-menu\">
                            <a class=\"btn btn-default btn-xs\" ><i class=\"glyphicon glyphicon-comment\"></i> Comments (<script id=\"metamorph-257-start\" type=\"text/x-placeholder\"></script>0<script id=\"metamorph-257-end\" type=\"text/x-placeholder\"></script>)</a>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                </div>
            </div>


        </div>
    </div>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                   ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 313
            echo "                   <script>
                       global_authenticated=1;
                       </script>
";
        } elseif ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 317
            echo "   <script>
                       global_authenticated=0;
                       </script>
";
        }
        // line 321
        echo "                   </div>
            <script>
                var f=\$('#884').val();
                var s=\" <div class='row'>\"+
        \"<div class='col-xs-10'>\"+
           \" <p class='serif'>\"+
                \"<a href=  >";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
        echo "</a>\"+\$('#884').val()+\"6 days ago<br>\"+
        
            
            \"</p></div>\"+
        \"<div class='col-xs-2'>\"+
            \"<div class='pull-right'>\"+
            '<div class=\"reason-vote-buttons clearfix\">'+
               
         ' <a href=\"#\"  class=\"reason-vote reason-vote-up\" ><i class=\"glyphicon-chevron-up glyphicon\"></i></a>'+
              '<div class=\"reason-upvotes\"><a href=\"#\" title=\"Show Vote Log\" > 60%</a></div>'+
      ' <a href=\"#\"  class=\"reason-vote reason-vote-down\" ><i class=\"glyphicon-chevron-down glyphicon\"></i></a>'+
          '           <div style=\"clear:both\"></div>'+
           ' </div>            </div>        </div>    </div>';
    var newdiv1=s;        
    \$(document).ready(function(){
                      
        \$('#addReason').click(function() {
                 if(global_authenticated===1){
                     \$('#reason').show();
                 }else if(global_authenticated===0){
                    window.location = \"";
        // line 347
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\";
                 }
        
                });
                \$('#cancel').click(function(event) {
event.preventDefault();
                    \$('#reason').hide();
                });
                \$('#save').click(function(event){ 
 event.preventDefault();
        var reason=\$('#884').val();
                    \$.ajax({
  type: \"POST\",
  url: \"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question_reason_against", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
        echo "\",
  data: {data1:reason},
  success: function(response){
  ";
        // line 364
        echo "  \$('div.reasons-against-container div.reason-row ').prepend(newdiv1);
    },
    
            
  dataType: \"json\"
});
}    );
              
                });
 
            </script>
";
        // line 376
        echo "

            <div class=\"reason-footer clearfix\">
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "StelQuestionBundle:Question:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 376,  449 => 364,  443 => 360,  427 => 347,  404 => 327,  396 => 321,  390 => 317,  384 => 313,  381 => 312,  340 => 277,  336 => 276,  329 => 271,  325 => 270,  127 => 75,  110 => 61,  99 => 53,  92 => 49,  84 => 46,  78 => 45,  45 => 15,  40 => 13,  31 => 6,  28 => 3,);
    }
}
