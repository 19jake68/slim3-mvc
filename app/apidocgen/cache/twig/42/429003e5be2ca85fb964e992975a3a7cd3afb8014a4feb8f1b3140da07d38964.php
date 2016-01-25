<?php

/* admin/login.twig */
class __TwigTemplate_1b13ec3135b5cf8718b7bd522d5d7d44e4a7529c0fa1d631cb43ffe1b5e7c13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/layout1.twig", "admin/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"wrapper\">
\t<div id=\"login\" class=\"animate form\">
\t\t<section class=\"login_content\">
\t\t\t<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("login"), "html", null, true);
        echo "\" method=\"POST\">
\t\t\t\t<h1>Admin Login</h1>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default submit\">Log in</button>
\t\t\t\t\t<a class=\"reset_pass\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("forgotpass"), "html", null, true);
        echo "\">Lost your password?</a>
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrfNameKey"]) ? $context["csrfNameKey"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrfName"]) ? $context["csrfName"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrfValueKey"]) ? $context["csrfValueKey"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrfValue"]) ? $context["csrfValue"] : null), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"separator\">
\t\t\t\t\t<p class=\"change_link\">New to site?
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("register"), "html", null, true);
        echo "\" class=\"to_register\"> Create Account </a>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<br />
\t\t\t\t\t<div>
\t\t\t\t\t\t<h1><i class=\"fa fa-pw\" style=\"font-size:26px\"></i> API Doc Gen</h1>
\t\t\t\t\t\t<p>© 2015 All Rights Reserved. API Doc Gen is a Bootstrap 3 template. Privacy and Terms</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<!-- /form -->
\t\t</section>
\t\t<!-- /section -->
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  59 => 19,  53 => 18,  49 => 17,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends './layouts/layout1.twig' %}*/
/* */
/* {% block content %}*/
/* <div id="wrapper">*/
/* 	<div id="login" class="animate form">*/
/* 		<section class="login_content">*/
/* 			<form action="{{path_for('login')}}" method="POST">*/
/* 				<h1>Admin Login</h1>*/
/* 				<div>*/
/* 					<input type="text" name="username" class="form-control" placeholder="Username" required="" />*/
/* 				</div>*/
/* 				<div>*/
/* 					<input type="password" name="password" class="form-control" placeholder="Password" required="" />*/
/* 				</div>*/
/* 				<div>*/
/* 					<button type="submit" class="btn btn-default submit">Log in</button>*/
/* 					<a class="reset_pass" href="{{path_for('forgotpass')}}">Lost your password?</a>*/
/* 					<input type="hidden" name="{{csrfNameKey}}" value="{{csrfName}}" />*/
/* 					<input type="hidden" name="{{csrfValueKey}}" value="{{csrfValue}}" />*/
/* 				</div>*/
/* 				<div class="clearfix"></div>*/
/* 				<div class="separator">*/
/* 					<p class="change_link">New to site?*/
/* 						<a href="{{path_for('register')}}" class="to_register"> Create Account </a>*/
/* 					</p>*/
/* 					<div class="clearfix"></div>*/
/* 					<br />*/
/* 					<div>*/
/* 						<h1><i class="fa fa-pw" style="font-size:26px"></i> API Doc Gen</h1>*/
/* 						<p>© 2015 All Rights Reserved. API Doc Gen is a Bootstrap 3 template. Privacy and Terms</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			<!-- /form -->*/
/* 		</section>*/
/* 		<!-- /section -->*/
/* 	</div>*/
/* </div>*/
/* {% endblock content %}*/
