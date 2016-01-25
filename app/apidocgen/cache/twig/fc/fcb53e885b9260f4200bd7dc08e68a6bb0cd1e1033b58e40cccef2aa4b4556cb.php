<?php

/* documentation/create.twig */
class __TwigTemplate_385829b1fa21b026fdaec5808238fcf0ea6fa86e95af8720238c4b683fa35784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/layout2.twig", "documentation/create.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./layouts/layout2.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"\">
\t<div class=\"page-title\">
\t\t<!-- title left -->
\t\t<div class=\"title_left\">
\t\t\t<h3>Add New Documentation</h3>
\t\t</div>
\t\t<!-- /title left -->
\t\t
\t\t<!-- title right -->
\t\t<div class=\"title_right\">
\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search for...\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">Go!</button>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /title right -->
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t
\t\t\t\t\t<!-- x_title -->
\t\t\t\t\t <div class=\"x_title\">
\t\t\t\t\t\t<h2>Documentation Details <small>Sessions</small></h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t<li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Settings 1</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Settings 2</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /x_title -->
\t\t\t\t\t
\t\t\t\t\t<!-- x_content -->
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<!-- Smart Wizard -->
\t\t\t\t\t\t
\t\t\t\t\t\t<p>Configure apidoc.json, this includes common information about the project like title, short description, version and configuration options like header / footer settings or template specific options.</p>
\t\t\t\t\t\t<div id=\"wizard\" class=\"form_wizard wizard_horizontal\">
\t\t\t\t\t\t\t<ul class=\"wizard_steps\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#step-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"step_no\">1</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"step_descr\">
\t\t\t\t\t\t\t\t\t\t\tStep 1<br />
\t\t\t\t\t\t\t\t\t\t\t<small>Description</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#step-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"step_no\">2</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"step_descr\">
\t\t\t\t\t\t\t\t\t\t\tStep 2<br />
\t\t\t\t\t\t\t\t\t\t\t<small>Header</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#step-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"step_no\">3</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"step_descr\">
\t\t\t\t\t\t\t\t\t\t\tStep 3<br />
\t\t\t\t\t\t\t\t\t\t\t<small>Footer</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#step-4\">
\t\t\t\t\t\t\t\t\t\t<span class=\"step_no\">4</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"step_descr\">
\t\t\t\t\t\t\t\t\t\t\tStep 4<br />
\t\t\t\t\t\t\t\t\t\t\t<small>Submit</small>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- add documentation form -->
\t\t\t\t\t\t\t<form action=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("addDoc"), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal form-label-left\" id=\"add-doc-form\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- step 1 -->
\t\t\t\t\t\t\t\t<div id=\"step-1\">
\t\t\t\t\t\t\t\t\t<h2 class=\"StepTitle\">Step 1 Description</h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- name -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /name -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- version -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"version\">Version</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"version\" name=\"version\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /version -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- description -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"description\">Description</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" style=\"width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /description -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- title -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"title\">Title</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /title -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- url -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"url\">URL</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"url\" name=\"url\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /url -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /step 1 -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- step 2 -->
\t\t\t\t\t\t\t\t<div id=\"step-2\">
\t\t\t\t\t\t\t\t\t<h2 class=\"StepTitle\">Step 2 Header <small>Optional</small></h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- header -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"header\">Title</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"header\" name=\"header\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /header -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- header_content -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"header_content\">Content</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"header_content\" name=\"header_content\" class=\"form-control\" style=\"width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /header_content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /step 2 -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- step 3 -->
\t\t\t\t\t\t\t\t<div id=\"step-3\">
\t\t\t\t\t\t\t\t\t<h2 class=\"StepTitle\">Step 3 Footer <small>Optional</small></h2>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- footer -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"footer\">Title</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"footer\" name=\"footer\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /footer -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- footer_content -->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"footer_content\">Content</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"footer_content\" name=\"footer_content\" class=\"form-control\" style=\"width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /footer_content -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /step 3 -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- step 4 -->
\t\t\t\t\t\t\t\t<div id=\"step-4\">
\t\t\t\t\t\t\t\t\t<h2 class=\"StepTitle\">Step 4 Submit</h2>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tdo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /step 4 -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- csrf -->
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["csrfNameKey"]) ? $context["csrfNameKey"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrfName"]) ? $context["csrfName"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["csrfValueKey"]) ? $context["csrfValueKey"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrfValue"]) ? $context["csrfValue"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<!-- /csrf -->
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<!-- /add documentation form -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End SmartWizard Content -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /x_content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
</div>
";
    }

    // line 230
    public function block_script($context, array $blocks = array())
    {
        // line 231
        echo "<!-- form wizard -->
<script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/wizard/jquery.smartWizard.js\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\t// Smart Wizard \t
\t\t\$('#wizard').smartWizard({
\t\t\t// Properties
\t\t\tselected: 0,  // Selected Step, 0 = first step   
\t\t\tkeyNavigation: false, // Enable/Disable key navigation(left and right keys are used if enabled)
\t\t\tenableAllSteps: false,  // Enable/Disable all steps on first load
\t\t\ttransitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
\t\t\tcontentURL:null, // specifying content url enables ajax content loading
\t\t\tcontentURLData:null, // override ajax query parameters
\t\t\tcontentCache:true, // cache step contents, if false content is fetched always from ajax url
\t\t\tcycleSteps: false, // cycle step navigation
\t\t\tenableFinishButton: false, // makes finish button enabled always
\t\t\thideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead
\t\t\terrorSteps:[],    // array of step numbers to highlighting as error steps
\t\t\tlabelNext:'Next', // label for Next button
\t\t\tlabelPrevious:'Previous', // label for Previous button
\t\t\tlabelFinish:'Finish',  // label for Finish button        
\t\t\tnoForwardJumping:false,
\t\t\tajaxType: 'POST',
\t\t\t// Events
\t\t\tonLeaveStep: null, // triggers when leaving a step
\t\t\tonShowStep: null,  // triggers when showing a step
\t\t\tonFinish: onFinishCallback,  // triggers when Finish button is clicked
\t\t\tincludeFinishButton : true   // Add the finish button
\t\t});
\t\t
\t\tfunction onFinishCallback() {
\t\t\t\$('#add-doc-form').submit();
\t\t}
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "documentation/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 232,  281 => 231,  278 => 230,  257 => 214,  251 => 213,  134 => 99,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/layout2.twig" %}*/
/* */
/* {% block style %} */
/* {% endblock style %}*/
/* */
/* {% block content %}*/
/* <div class="">*/
/* 	<div class="page-title">*/
/* 		<!-- title left -->*/
/* 		<div class="title_left">*/
/* 			<h3>Add New Documentation</h3>*/
/* 		</div>*/
/* 		<!-- /title left -->*/
/* 		*/
/* 		<!-- title right -->*/
/* 		<div class="title_right">*/
/* 			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/* 				<div class="input-group">*/
/* 					<input type="text" class="form-control" placeholder="Search for..." />*/
/* 					<span class="input-group-btn">*/
/* 						<button class="btn btn-default" type="button">Go!</button>*/
/* 					</span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- /title right -->*/
/* 		*/
/* 		<div class="clearfix"></div>*/
/* 		*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 col-sm-12 col-xs-12">*/
/* 				<div class="x_panel">*/
/* 				*/
/* 					<!-- x_title -->*/
/* 					 <div class="x_title">*/
/* 						<h2>Documentation Details <small>Sessions</small></h2>*/
/* 						<ul class="nav navbar-right panel_toolbox">*/
/* 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/* 							</li>*/
/* 							<li class="dropdown">*/
/* 								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/* 								<ul class="dropdown-menu" role="menu">*/
/* 									<li><a href="#">Settings 1</a></li>*/
/* 									<li><a href="#">Settings 2</a></li>*/
/* 								</ul>*/
/* 							</li>*/
/* 							<li><a class="close-link"><i class="fa fa-close"></i></a></li>*/
/* 						</ul>*/
/* 						<div class="clearfix"></div>*/
/* 					</div>*/
/* 					<!-- /x_title -->*/
/* 					*/
/* 					<!-- x_content -->*/
/* 					<div class="x_content">*/
/* 						<!-- Smart Wizard -->*/
/* 						*/
/* 						<p>Configure apidoc.json, this includes common information about the project like title, short description, version and configuration options like header / footer settings or template specific options.</p>*/
/* 						<div id="wizard" class="form_wizard wizard_horizontal">*/
/* 							<ul class="wizard_steps">*/
/* 								<li>*/
/* 									<a href="#step-1">*/
/* 										<span class="step_no">1</span>*/
/* 										<span class="step_descr">*/
/* 											Step 1<br />*/
/* 											<small>Description</small>*/
/* 										</span>*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#step-2">*/
/* 										<span class="step_no">2</span>*/
/* 										<span class="step_descr">*/
/* 											Step 2<br />*/
/* 											<small>Header</small>*/
/* 										</span>*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#step-3">*/
/* 										<span class="step_no">3</span>*/
/* 										<span class="step_descr">*/
/* 											Step 3<br />*/
/* 											<small>Footer</small>*/
/* 										</span>*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#step-4">*/
/* 										<span class="step_no">4</span>*/
/* 										<span class="step_descr">*/
/* 											Step 4<br />*/
/* 											<small>Submit</small>*/
/* 										</span>*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 							*/
/* 							<!-- add documentation form -->*/
/* 							<form action="{{path_for('addDoc')}}" method="POST" class="form-horizontal form-label-left" id="add-doc-form">*/
/* 							*/
/* 								<!-- step 1 -->*/
/* 								<div id="step-1">*/
/* 									<h2 class="StepTitle">Step 1 Description</h2>*/
/* 									*/
/* 									<!-- name -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /name -->*/
/* 									*/
/* 									<!-- version -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="version">Version</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="version" name="version" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /version -->*/
/* 									*/
/* 									<!-- description -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<textarea id="description" name="description" class="form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;"></textarea>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /description -->*/
/* 									*/
/* 									<!-- title -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /title -->*/
/* 									*/
/* 									<!-- url -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="url">URL</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="url" name="url" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /url -->*/
/* 								</div>*/
/* 								<!-- /step 1 -->*/
/* 								*/
/* 								<!-- step 2 -->*/
/* 								<div id="step-2">*/
/* 									<h2 class="StepTitle">Step 2 Header <small>Optional</small></h2>*/
/* 									*/
/* 									<!-- header -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="header">Title</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="header" name="header" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /header -->*/
/* 									*/
/* 									<!-- header_content -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="header_content">Content</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<textarea id="header_content" name="header_content" class="form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;"></textarea>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /header_content -->*/
/* 								</div>*/
/* 								<!-- /step 2 -->*/
/* 								*/
/* 								<!-- step 3 -->*/
/* 								<div id="step-3">*/
/* 									<h2 class="StepTitle">Step 3 Footer <small>Optional</small></h2>*/
/* 									*/
/* 									<!-- footer -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="footer">Title</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<input type="text" id="footer" name="footer" required="required" class="form-control col-md-7 col-xs-12">*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /footer -->*/
/* 									*/
/* 									<!-- footer_content -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="footer_content">Content</label>*/
/* 										<div class="col-md-6 col-sm-6 col-xs-12">*/
/* 											<textarea id="footer_content" name="footer_content" class="form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: none; height: 120px;"></textarea>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- /footer_content -->*/
/* 								</div>*/
/* 								<!-- /step 3 -->*/
/* 								*/
/* 								<!-- step 4 -->*/
/* 								<div id="step-4">*/
/* 									<h2 class="StepTitle">Step 4 Submit</h2>*/
/* 									<p>*/
/* 										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/* 									</p>*/
/* 									<p>*/
/* 										do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/* 									</p>*/
/* 								</div>*/
/* 								<!-- /step 4 -->*/
/* 								*/
/* 								<!-- csrf -->*/
/* 								<input type="hidden" name="{{csrfNameKey}}" value="{{csrfName}}" />*/
/* 								<input type="hidden" name="{{csrfValueKey}}" value="{{csrfValue}}" />*/
/* 								<!-- /csrf -->*/
/* 							</form>*/
/* 							<!-- /add documentation form -->*/
/* 						</div>*/
/* 						<!-- End SmartWizard Content -->*/
/* 					</div>*/
/* 					<!-- /x_content -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/* <!-- form wizard -->*/
/* <script type="text/javascript" src="{{base_url()}}/js/wizard/jquery.smartWizard.js"></script>*/
/* <script type="text/javascript">*/
/* 	$(document).ready(function () {*/
/* 		// Smart Wizard 	*/
/* 		$('#wizard').smartWizard({*/
/* 			// Properties*/
/* 			selected: 0,  // Selected Step, 0 = first step   */
/* 			keyNavigation: false, // Enable/Disable key navigation(left and right keys are used if enabled)*/
/* 			enableAllSteps: false,  // Enable/Disable all steps on first load*/
/* 			transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft*/
/* 			contentURL:null, // specifying content url enables ajax content loading*/
/* 			contentURLData:null, // override ajax query parameters*/
/* 			contentCache:true, // cache step contents, if false content is fetched always from ajax url*/
/* 			cycleSteps: false, // cycle step navigation*/
/* 			enableFinishButton: false, // makes finish button enabled always*/
/* 			hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead*/
/* 			errorSteps:[],    // array of step numbers to highlighting as error steps*/
/* 			labelNext:'Next', // label for Next button*/
/* 			labelPrevious:'Previous', // label for Previous button*/
/* 			labelFinish:'Finish',  // label for Finish button        */
/* 			noForwardJumping:false,*/
/* 			ajaxType: 'POST',*/
/* 			// Events*/
/* 			onLeaveStep: null, // triggers when leaving a step*/
/* 			onShowStep: null,  // triggers when showing a step*/
/* 			onFinish: onFinishCallback,  // triggers when Finish button is clicked*/
/* 			includeFinishButton : true   // Add the finish button*/
/* 		});*/
/* 		*/
/* 		function onFinishCallback() {*/
/* 			$('#add-doc-form').submit();*/
/* 		}*/
/* 	});*/
/* </script>*/
/* {% endblock script %}*/
