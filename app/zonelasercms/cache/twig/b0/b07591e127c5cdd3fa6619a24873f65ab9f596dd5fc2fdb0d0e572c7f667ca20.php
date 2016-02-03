<?php

/* documentation/view.twig */
class __TwigTemplate_6507b3035c314c0fde0700dabf008383ac4124d3f2edc8cba0160319267c405b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/layout2.twig", "documentation/view.twig", 1);
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
\t\t<div class=\"title_left\">
\t\t\t<h3>Documentation</h3>
\t\t</div>
\t\t
\t\t<div class=\"title_right\">
\t\t\t<div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">Go!</button>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
\t 
\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t<div class=\"x_panel\" style=\"height:600px;\">
\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t<h2>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t<li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Settings 1</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Settings 2</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 50
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "documentation/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 50,  65 => 30,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
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
/* 		<div class="title_left">*/
/* 			<h3>Documentation</h3>*/
/* 		</div>*/
/* 		*/
/* 		<div class="title_right">*/
/* 			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/* 				<div class="input-group">*/
/* 					<input type="text" class="form-control" placeholder="Search for...">*/
/* 					<span class="input-group-btn">*/
/* 						<button class="btn btn-default" type="button">Go!</button>*/
/* 					</span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* 	 */
/* 	<div class="row">*/
/* 		<div class="col-md-12 col-sm-12 col-xs-12">*/
/* 			<div class="x_panel" style="height:600px;">*/
/* 				<div class="x_title">*/
/* 					<h2>{{title}}</h2>*/
/* 					<ul class="nav navbar-right panel_toolbox">*/
/* 						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>*/
/* 						<li class="dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/* 							<ul class="dropdown-menu" role="menu">*/
/* 								<li><a href="#">Settings 1</a></li>*/
/* 								<li><a href="#">Settings 2</a></li>*/
/* 							</ul>*/
/* 						</li>*/
/* 						<li><a class="close-link"><i class="fa fa-close"></i></a></li>*/
/* 					</ul>*/
/* 					<div class="clearfix"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/* {% endblock script %}*/
