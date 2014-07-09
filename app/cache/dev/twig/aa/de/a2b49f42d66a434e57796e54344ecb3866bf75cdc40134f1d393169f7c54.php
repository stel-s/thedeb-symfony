<?php

/* ::base.html.twig */
class __TwigTemplate_aadea2b49f42d66a434e57796e54344ecb3866bf75cdc40134f1d393169f7c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">

        <style>
           body {
    padding-top: 65px;
}
body h1, body h2, body h3 {
    text-transform: uppercase;
    color: #666666;
}
.btn {
    text-transform: uppercase;
}
body h1 {
    font-size: 1.4em;
}
body h2 {
    font-size: 1.3em;
}
body h3 {
    font-size: 1.2em;
}

.page-wrap {
    min-height: 100%;
    /* equal to footer height */
    margin-bottom: -142px;
}
.page-wrap:after {
    content: \"\";
    display: block;
}
.site-footer, .page-wrap:after {
    /* .push must be the same height as footer */
    height: 142px;
}
.site-footer {
    background: orange;
}

.serif {
    font-family: Georgia, \"Times New Roman\", Times, serif;
}
/** {*/
/*    position: relative;*/
/*    z-index: 2;*/
/*}*/

a .user-name {
    color: #999999;
}
a:hover .user-name {
    color: #ffffff;
}
.user-name {
    margin-left: 5px;
    padding-top: 15px;
    margin-right: 5px;
}
@media all and (max-width: 574px) {
    .user-name{
        display:none;
    }
}
#header-bar {
    background: #45484d;
    background: -moz-linear-gradient(top,  #000000 0%, #45484d 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(100%,#45484d));
    background: -webkit-linear-gradient(top,  #000000 0%,#45484d 100%);
    background: -o-linear-gradient(top,  #000000 0%,#45484d 100%);
    background: -ms-linear-gradient(top,  #000000 0%,#45484d 100%);
    background: linear-gradient(to bottom,  #000000 0%,#45484d 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#45484d',GradientType=0 );
}

#header-bar .navbar-nav {
    margin:0px;
}
#header-bar .dropdown-toggle {
    text-align: right;
}
#user-menu {
    margin-right: 10px;
}

#user-menu .dropdown-toggle {
    padding-top: 0px;
    padding-bottom: 0px;
}
#header-search-form {
    margin-top: 8px;
}
#logo {
    display: block;
    width: 160px;
    margin-top: 4px;
}
@media all and (max-width: 380px) {
    body #logo {
      display: none;
    }
    body #small-logo {
        display: block;
    }
}

#small-logo {
    display: none;
    width: 45px;
    margin-top: 3px;
}

#header-search-form {
    width: 300px;
    margin-left: 15px;
}
#header-search-form .input-group-addon {
    background-color: #fff;
}

@media all and (max-width: 991px) {
    #header-search-form {
        width: 200px;
    }
}
#main-nav .dropdown-toggle {
    height: 50px;
    padding-top: 18px;
}
#notification-count {
    cursor: pointer;
    display: block;
    position: absolute;
    height: 20px;
    width: 20px;
    top: 0px;
    right: 0px;
    font-size: 1em;
    z-index: 2;
}
#notification-icon {
    font-size: 2em;
}

#notifications-popover {
    top: 40px;
    left: -108px;
    width: 400px;
}
#notification-container {
    position: relative;
    height: 34px;
    padding-top: 8px;
    padding-bottom: 8px;
    margin-bottom: 16px;
    padding-right: 15px;
    padding-left: 15px;
}


#notification-container .timeago {
    display: block;
    color: #000000;
    text-decoration: none;
    text-align: right;
}
#notification-container .timeago:hover {
    text-decoration: none;
}
#notification-container .notification-link {
    display:block;
    padding-top: 5px;
    padding-bottom:5px;
    cursor: pointer;
}

#notifications-button {
    cursor: pointer;
    color: #ffffff;
}
.profile-image {
    float: left;
    width: 50px;
    height: 50px;
    margin-right: 10px;
}
.profile-image-small {
    width:50px;
    height:50px;
    margin-left: 5px;
}
.author-image {
    width:50px;
    height:50px;
    margin-bottom: 5px;
}
.tiny-author-image {
  width:20px;
  height:20px;
}
.author-info {
    padding-top:10px;
    padding-bottom:10px;
    font-size: .9em;
    border-bottom: solid 1px #dbdbdb;
}
.user-widget{
    color: #fff;
}

.push-down {
    margin-bottom: 15px;
}

.vertical-padding {
    padding-top:5px;
    padding-bottom:5px;
}
.vertical-padding-top {
    padding-top: 10px;
}
.vertical-padding-bottom {
    padding-bottom: 10px;
}

.vertical-margin-top {
    margin-top: 5px;
}
.voting-widget .progress {
    margin-bottom: 5px;
}
.voting-widget button {
    margin-right: 5px;
    margin-left: 5px;
}

.month-input {
    width: 90px;
    margin-right: 5px;
}
.year-input {
    width:100px;
}
.day-input{
    width: 75px;
    margin-right: 5px;
}

.hover-pointer:hover {
    cursor: pointer;
}
.menu-icon {
    width: 22px;
    float:right;
}
#header-bar .icon-bar {
   display: block;
   width: 22px;
   height: 2px;
   background-color: #ffffff;
   border-radius: 1px;
}
#header-bar .icon-bar + .icon-bar {
    margin-top: 5px;
}
#main-nav, #mobile-user-nav {
    list-style-type: none;
    padding-left: 0px;
}

#main-nav a, #mobile-user-nav a {
    display: block;
    color: rgb(153, 153, 153);
    padding: 5px;
    cursor: pointer;
}
#main-nav a:hover, #mobile-user-nav a:hover {
    color: #ffffff;
    text-decoration: none;
}

#main-menu-link {
    display: block;
    float: right;
    padding-top: 15px;
    height: 50px;
    width: 30px;
    cursor: pointer;
    margin-right: 10px;
}

#large-menu-link {
    height: 50px;

}

body .truthometer {
    height: 34px;
    margin-bottom: 3px;
}

.truthometer .progress-bar-success {
    background-color: #fff;
    background-image: url(https://d2wvi262ccxt74.cloudfront.net/images/striped-true-blue.png);
    background-repeat: repeat;
}
.truthometer .progress-bar-warning {
    background-color: #fff;
    background-image: url(https://d2wvi262ccxt74.cloudfront.net/images/striped-false-orange.png);
    background-repeat: repeat;
}
.true-blue-color {
    color: #66cccc;
}
.false-orange-color {
    color: #F79123;
}
.user-belief-percentage {
    font-style: italic;
    color: #c1c1c1;
}
.reason-vote-buttons {
    width: 35px;
    padding-right: 10px;
}
.reason-vote i.glyphicon-chevron-up, .reason-vote i.glyphicon-chevron-down {
    color: #666;
    font-size: 2.5em;
}
.reason-vote-up {
    padding-left: 1px;
}
.reason-vote-down {
    position:relative;
    top: -8px;
}
.reason-vote i.glyphicon-chevron-down {
    left: -1px;
}
.reason-vote {
    display: block;
    height: 35px;
    width: 35px;
}
.reason-vote:hover {
    cursor: pointer;
}
.reason-vote:hover i.glyphicon-chevron-up,  .reason-vote.active i.glyphicon-chevron-up  {
    color: #66cccc;
}

.reason-vote:hover i.glyphicon-chevron-down, .reason-vote.active i.glyphicon-chevron-down {
    color: #F79123;
}

.position-vote i.glyphicon-thumbs-up  {
    color: #66cccc;
}
.text-center {
    text-align:center;
}

.position-vote i.glyphicon-thumbs-down {
    color: #F79123;
}

.vote-counts a {
    color: #c1c1c1;
    display: block;
    float: left;
    width: 32px;
    margin-right: 5px;
    margin-left: 5px;
}
.reason-author-image {
    height: 50px;
    width: 50px;
    margin-right: 5px;
}
.reason-upvotes {
    padding-left: 0px;
    font-size: 16px;
    font-weight: bold;
    color: #666;
    width: 43px;
    text-align: center;
    margin-top: 8px;
    margin-bottom: 8px;
}
.reason-upvotes a {
    color: #666;
}
.horizontal-divider {
    border-bottom: 1px solid #dbdbdb;
}
.reason-sub-menu {
    padding-top: 8px;
    padding-bottom: 8px;
}
.position-sub-menu {
    padding-top: 8px;
    color: #666;
    padding-bottom: 16px;
}
.position-sub-menu a {
    margin-bottom: 8px;
}
.position-sub-menu .middot {
    vertical-align: 2px;
}
.position-sub-menu a, .reason-sub-menu a{
    color: #666;
}

.action-link {
    cursor: pointer;
}

.reason-row {
    border-bottom: solid 5px #dbdbdb;
    padding-top: 15px;
}
.reason-item-header {
    padding-top: 12px;
    padding-bottom: 12px;
}

.shadow-bottom {
    box-shadow: 0px 3px 3px #888;
    margin-bottom: 10px;
    padding-bottom: 8px;
}

.gray-background {
    background-color: #d7d7d7;
}
.reason-container {
    background-color: #fff;
}

.reason-vote-bar, .feed-item-vote-bar, .feed-thumbnail-vote-bar {
    height: 5px;
    margin-bottom: 5px;
    margin-top: 5px;
}

body .feed-thumbnail-vote-bar {
    height: 15px;
}

body .progress .progress-bar-success {
    background-color: #66cccc;

}
body .progress .progress-bar-warning {
    background-color: #ff9966;
}
.reason-header {
    border-bottom: 1px solid #cfcfcf;
    padding-bottom: 8px;
}
.reason-footer {
    padding-top: 8px;
}
.reason-header h2 {
    margin: 0px;
    margin-top: 8px;
}

.comment-author-image {
    height: 40px;
    width: 40px;
}

.comment-meta, .comment-meta a {
    color: #888;
}

.comment-meta i:hover {
    cursor: pointer;
    color: #333;
}
.expanded-reason .meta-info {
    padding-top: 8px;
    padding-bottom: 8px;
}
.meta-info, .credibility-score {
    color: #666;
}
#breadcrumbs {
    padding-bottom: 15px;
}
#breadcrumbs a {
    margin-bottom: 5px;
}
.expanded-background {
    background-color: #fcfcfc;
}
.comment-pager-meta {
    padding: 5px;
    background-color: #fcfcfc;
}
#position-vote-buttons button {
    margin-bottom: 5px;
}
#position-reasons-divider {
    background-color: #fff;
    height: 2px;
    border-bottom: 2px solid #dcdcdc;
    box-shadow: 0px 3px 3px #888;
    margin-bottom: 10px;
    padding-bottom: 8px;
}

.end-gray-background {
    height: 2px;
    background-color: #d7d7d7;
    margin-bottom: 8px;
    box-shadow: 0px 3px 3px #888;
}
.reason-label {
    color: #339999;
    text-transform: uppercase;
    font-weight: 600;
}
.convincing-text {
    font-size: .9em;
    font-style: italic;
}

.lost-credibility span {
    color: red;
}
.gained-credibility span {
    color: green;
}
.position-question {
    padding-top: 8px;
    font-size: 1.2em;
    text-indent: 8px;
    font-style: italic;
    color: #666;
}
.reason-container .glyphicon-plus {
    color : #666;
}

.for-reason {
    border: solid;
    border-color: #66cccc;
}

.against-reason {
    border: solid;
    border-color:#F79123;
}

.question-blockquote {
    margin-bottom: 10px;
}
body a.list-group-item .list-group-item-heading, #question-homepage-feed h4 a, #question-homepage-feed h4 a:link, #question-homepage-feed h4 a:visited {
    color: #66cccc;
}
body .list-group a.list-group-item {
    margin-bottom: 5px;
}
.align-right {
    text-align: right;
}
.no-float {
    float: none;
}
#feed-select {
    width: 225px;
    margin-left: 15px;
    margin-top: 12px;
    float:left;
}
.feed-sub-text {
    color: #666;
    font-size: .9em;
}
.question-feed-sub-text {
    color: #ccc;
    font-size: .8em;
}
.feed-question {
    margin-top: 10px;
}

#home-splash {
    padding: 15px 25px 15px 25px;
    color: #666;
}
body .jumbotron .lead {
    font-size: 1.2em;
    margin-bottom: 5px;
}
body .jumbotron hr {
    border-bottom: #ccc 1px solid;
    padding: 0px;
    margin-top: 5px;
    margin-bottom: 5px;
}
body .jumbotron h4 {
    font-size: 1.4em;
}
.ask-it-state-it-explore-it p {
    text-align: justify;
    font-size: .8em;
}

#close-splash {
    height: 40px;
    width: 40px;
    font-size: 1.2em;
    position: absolute;
    top:-10px;
    right:-10px;
}
#close-splash i {
    left: 10px;
    top: -5px;
}
#show-splash-button {
    font-size: 1.4em;
    color: #666;
    height: 25px;
    width: 25px;
    float:right;
}
#close-splash:hover {
    cursor: pointer;
}
#show-splash-button:hover {
    cursor: pointer;
}
.true-blue-circle {
    background-color: #66cccc;
    color: #fff;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin-left: auto;
    margin-right: auto;
}
.true-blue-circle .glyphicon {
    position: absolute;
    top:2px;
    right:4px;
}
/*#watch-it {*/
/*    background-color: #66cccc;*/
/*    color: #fff;*/
/*    border-radius: 50%;*/
/*    width: 30px;*/
/*    height: 30px;*/
/*    margin-top:10px;*/
/*    margin-right:5px;*/
/*}*/
/*#watch-it .glyphicon {*/
/*    position: absolute;*/
/*    top:3px;*/
/*    right:3px;*/
/*}*/

.true-blue-circle .question-icon {
     right: 9px;
    top: 1px;
}

@font-face {
    font-family: 'Ronicons TruthIt';
    src: url('/cdn/fonts/ronicons-truthit.eot');
    src: url('/cdn/fonts/ronicons-truthit.eot?#iefix') format('embedded-opentype'),
    url('/cdn/fonts/ronicons-truthit.woff') format('woff'),
    url('/cdn/fonts/ronicons-truthit.ttf') format('truetype'),
    url('/cdn/fonts/ronicons-truthit.svg#glyphicons-halflingsregular') format('svg');
}

body .ronicon {
   font-family: 'Ronicons TruthIt';
    font-size: 1.8em;
}

.ronicon-thumbs-up:before { content: \"\\0075\"; }
.ronicon-it:before {content: \"\\0069\"}
.ronicon-it {
    width:30px;
    top: 8px;
}
.help-text {
    color: #737373;
}

.beta-badge {
    background-color: #ff2a28;
    color: #fff;
    position: absolute;
    bottom: -15px;
    right:0px;
}
.comment-voted {
    color: #000;
}
#facebook-button {
    display:block;
    background-image: url('https://s3.amazonaws.com/TruthIt/cdn/images/facebook/active_404.png');
    height: 46px;
    width: 202px;
}
#facebook-button:hover {
    background-image: url('https://s3.amazonaws.com/TruthIt/cdn/images/facebook/pressed_404.png');
}
#footer {
    padding-top: 18px;
    padding-bottom: 18px;
    background-color: #f5f5f5;
}
#register-or {
    padding-top: 15px;
}
body img.super-small {
    height: 25px;
    width: 25px;
}
#register-side-menu {
    width: 31px;
    z-index:100;
    height: 175px;
    background-color: #fff;
    position:fixed;
    top: 100px;
    right: 0px;
    border: 1px solid #999;
    border-right: 0px;
}
#feedback-side-menu {
    width: 31px;
    z-index:100;
    height: 175px;
    background-color: #fff;
    position:fixed;
    top: 280px;
    right: 0px;
    border: 1px solid #999;
    border-right: 0px;
}
#register-side-menu:hover, #feedback-side-menu:hover {
    cursor: pointer;
    background-color: rgb(238, 238, 238);
}
#register-side-menu h2 {
    position:relative;
    top:90px;
}
#feedback-side-menu h2 {
    position:relative;
    top:90px;
}

.rotate {
    /* Safari */
-webkit-transform: rotate(-90deg);

/* Firefox */
-moz-transform: rotate(-90deg);

/* IE */
-ms-transform: rotate(-90deg);

/* Opera */
-o-transform: rotate(-90deg);

/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

#what-is-truth-it {
    color: #666;
}
#what-is-truth-it:hover {
    text-decoration: underline;
}

.reasons-for-button {
    border-color: #66cccc;
    background-color: #fff;
}
.reasons-for-button:hover, .reasons-for-button.active {
    background-color: #66cccc;
}
.reasons-against-button {
    border-color: #F79123;
    background-color: #fff;
}
.reasons-against-button:hover, .reasons-against-button.active {
    background-color: #ffb450;
}
.reason-switcher {
    padding-bottom: 15px;
}
.vote-summary .glyphicon-thumbs-up {
    color: #66cccc;
}
.vote-summary .glyphicon-thumbs-down {
    color: #F79123;
}
.question-header {
    background-color: #333;
    color: #fff;
}
.question-q {
    font-size: 3.8em;
    font-weight: bold;
}
.question-text {
    padding-top: 10px;
    padding-bottom: 10px;
}
.question-text a {
    color: #fff;
}
body .question-text {
    margin-bottom: 0px;
}
.feed-image {
    background-position: center;
    height: 150px;
    /* Make the background image cover the area of the <div>, and clip the excess */
    background-size: cover;
    position:relative;
}
.feed-image-position {
    color:#fff;
    background-color: rgba(0,0,0,.6);
    padding: 5px;
    height: 75px;
    bottom: 0px;
    position:absolute;
    width:100%;
}
h1.position-title {
  padding-top:0px;
  margin-top: 5px;
}
.feed-title-container {
  height: 40px;
}
.question-header.panel {
  margin-bottom: 10px;
}
.question-positions-container {
  margin-bottom: 10px;
}

            </style>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 865
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 866
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 867
        echo "        <!-- CSS -->
";
        // line 868
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "48ed673_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673_comments_1.css");
            // line 869
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "48ed673"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 871
        echo "        
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->
<script src=\"https://code.jquery.com/jquery-2.1.1.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\" id=\"header-bar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"/\" class=\"pull-left\" id=\"logo-link\">
                   ";
        // line 888
        echo "                </a>
                <form data-ember-action=\"4\" id=\"header-search-form\" class=\"hidden-xs pull-left\">
                    <div style=\"margin-bottom:0px;\" class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                            <input type=\"text\" name=\"q\" placeholder=\"Search\" class=\"ember-view ember-text-field form-control\" id=\"header-search\">
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-md-5\">
                <ul class=\"nav navbar-nav pull-right hidden-xs\" id=\"user-menu\">
                    <li>
                        <a href=\"#\" data-toggle=\"dropdown\" class=\"clearfix dropdown-toggle\">
                            <img data-bindattr-5=\"5\" src=\"https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y\" class=\"img-circle profile-image-small pull-right\" id=\"profile-image\">
                            <div class=\"user-name hidden-xs pull-right\"><script type=\"text/x-placeholder\" id=\"metamorph-5-start\"></script>";
        // line 903
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "<script type=\"text/x-placeholder\" id=\"metamorph-5-end\"></script> </div>
                        </a>
                        <ul aria-labelledby=\"dlabel\" role=\"menu\" class=\"dropdown-menu\">
                                <li>
                                     ";
        // line 907
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 908
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" >Logout</a>

                                    ";
        } else {
            // line 911
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" >Login</a>
                                    ";
        }
        // line 913
        echo "                                    
                                </li>
                                <li>
                                    <a href=\"/register\" data-ember-action=\"7\">Register</a>
                                </li>
                        </ul>
                    </li>
                </ul>
                <a href=\"#\" class=\"clearfix pull-right hidden-lg hidden-md hidden-sm\" data-ember-action=\"8\">
                    <img data-bindattr-9=\"9\" src=\"https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;f=y\" class=\"img-circle profile-image-small pull-right\">
                    <div class=\"user-name pull-right\"><script type=\"text/x-placeholder\" id=\"metamorph-7-start\"></script>anonymous<script type=\"text/x-placeholder\" id=\"metamorph-7-end\"></script> </div>
                </a>
                <ul class=\"nav navbar-nav pull-right hidden-xs\">
                    <li class=\"\">
                        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\" id=\"large-menu-link\">
                            <div class=\"menu-icon\">
                                <i class=\"icon-bar\"></i>
                                <i class=\"icon-bar\"></i>
                                <i class=\"icon-bar\"></i>
                            </div>
                        </a>
                        <ul aria-labelledby=\"dlabel\" role=\"menu\" class=\"dropdown-menu\">
                            <li>
                                <a  class=\"action-link\" href=\"/categories\">Categories</a>
                            </li>
                            <li>
                                <a  class=\"action-link\" href=\"/position/new\">New Position</a>
                            </li>
                            <li>
                                <a  class=\"action-link\" href=\"";
        // line 942
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\">New Question</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a class=\"visible-xs\" data-ember-action=\"13\" id=\"main-menu-link\">
                    <div class=\"menu-icon\">
                        <i class=\"icon-bar\"></i>
                        <i class=\"icon-bar\"></i>
                        <i class=\"icon-bar\"></i>
                    </div>
                </a>


            </div>
        </div>
        <ul style=\"display:none;\" role=\"menu\" id=\"main-nav\">
            <li  class=\"hidden-md hidden-lg\">
                <form >
                    <div style=\"margin-bottom:5px;margin-top:5px;\" class=\"form-group\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                            <input type=\"text\" name=\"q\" placeholder=\"Search\" class=\"ember-view ember-text-field form-control\" id=\"ember458\">
                        </div>
                    </div>
                </form>
            </li>
            <li>
                <a href=\"/categories\" data-ember-action=\"16\">Categories</a>
            </li>
            <li>
                <a href=\"";
        // line 973
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\" data-ember-action=\"17\">New Position</a>
            </li>
            <li>
                <a href=\"";
        // line 976
        echo $this->env->getExtension('routing')->getPath("question_new");
        echo "\" data-ember-action=\"18\">New Question</a>
            </li>
        </ul>
        <ul style=\"display:none;\" role=\"menu\" id=\"mobile-user-nav\">
            <ul aria-labelledby=\"dlabel\" role=\"menu\">
                <script type=\"text/x-placeholder\" id=\"metamorph-10-start\"></script>
                    <li>
                        <a data-ember-action=\"19\">Login</a>
                    </li>
                    <li>
                        <a data-ember-action=\"20\">Register</a>
                    </li>
                <script type=\"text/x-placeholder\" id=\"metamorph-10-end\"></script>
            </ul>
        </ul>
    </div>
</div>
    
        
        ";
        // line 995
        $this->displayBlock('body', $context, $blocks);
        // line 996
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 997
        echo "    </body>
</html>
";
    }

    // line 865
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 866
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 995
    public function block_body($context, array $blocks = array())
    {
    }

    // line 996
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1095 => 996,  1090 => 995,  1085 => 866,  1079 => 865,  1073 => 997,  1070 => 996,  1068 => 995,  1046 => 976,  1040 => 973,  1006 => 942,  975 => 913,  969 => 911,  962 => 908,  960 => 907,  953 => 903,  936 => 888,  920 => 873,  916 => 871,  902 => 869,  898 => 868,  895 => 867,  893 => 866,  889 => 865,  23 => 1,  462 => 376,  449 => 364,  443 => 360,  427 => 347,  404 => 327,  396 => 321,  390 => 317,  384 => 313,  381 => 312,  340 => 277,  336 => 276,  329 => 271,  325 => 270,  127 => 75,  110 => 61,  99 => 53,  92 => 49,  84 => 46,  78 => 45,  45 => 15,  40 => 13,  31 => 6,  28 => 3,);
    }
}
