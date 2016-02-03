<?php

/* error/404.twig */
class __TwigTemplate_36344f45b5b491956dff5337d2cface1efb4f0e32316cd4f3bb0f97ca494ec62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/layout1.twig", "error/404.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./layouts/layout1.twig";
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
        echo "<div class=\"container body\">
\t<div class=\"main_container\">
\t\t
\t\t<!-- page content -->
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-middle\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h1 class=\"error-number\">404</h1>
\t\t\t\t\t<h2>Sorry but we couldn't find this page</h2>
\t\t\t\t\t<p>This page you are looking for does not exist.</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"mid_center\">
\t\t\t\t\t\t<h3><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "\">Back to Dashboard</a></h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /page content -->
\t</div>
</div>
";
    }

    // line 29
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "error/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  54 => 19,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/layout1.twig" %}*/
/* */
/* {% block style %} */
/* {% endblock style %}*/
/* */
/* {% block content %}*/
/* <div class="container body">*/
/* 	<div class="main_container">*/
/* 		*/
/* 		<!-- page content -->*/
/* 		<div class="col-md-12">*/
/* 			<div class="col-middle">*/
/* 				<div class="text-center">*/
/* 					<h1 class="error-number">404</h1>*/
/* 					<h2>Sorry but we couldn't find this page</h2>*/
/* 					<p>This page you are looking for does not exist.</p>*/
/* 					*/
/* 					<div class="mid_center">*/
/* 						<h3><a href="{{base_url()}}">Back to Dashboard</a></h3>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- /page content -->*/
/* 	</div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/* {% endblock script %}*/
