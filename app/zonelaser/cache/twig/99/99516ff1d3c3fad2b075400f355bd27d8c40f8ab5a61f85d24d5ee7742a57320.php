<?php

/* ./layouts/layout1.twig */
class __TwigTemplate_350b6ac7db112b00afe1f7ab1ea54a6e67ed313a9894a15240cb567a3d398583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<!-- Title -->
\t\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["siteTitle"]) ? $context["siteTitle"] : null), "html", null, true);
        echo "</title>
\t\t
\t\t<!-- BEGIN META -->
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
\t\t<meta name=\"keywords\" content=\"cms,slim3,api,document,generator\">
\t\t<meta name=\"description\" content=\"CMS for RESTful API Document Generator integrated with apidocjs\">
\t\t<!-- END META -->
\t\t
\t\t<!-- BEGIN STYLESHEETS -->
\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/fonts/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/animate.min.css\" rel=\"stylesheet\">
\t\t
\t\t<!-- Custom styling plus plugins -->
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/custom.css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/icheck/flat/green.css\" rel=\"stylesheet\" />
\t\t<!-- END STYLESHEETS -->
\t\t
\t\t<!-- START HEADER SCRIPTS -->
\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t\t<!-- END HEADER SCRIPTS -->
\t\t
\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t\t
\t\t";
        // line 37
        $this->displayBlock('style', $context, $blocks);
        // line 39
        echo "\t</head>
\t<body class=\"nav-md\">
\t\t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t
\t\t";
        // line 44
        $this->displayBlock('script', $context, $blocks);
        // line 46
        echo "\t</body>
</html>";
    }

    // line 37
    public function block_style($context, array $blocks = array())
    {
        // line 38
        echo "\t\t";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "\t\t";
    }

    // line 44
    public function block_script($context, array $blocks = array())
    {
        // line 45
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "./layouts/layout1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  113 => 44,  109 => 42,  106 => 41,  102 => 38,  99 => 37,  94 => 46,  92 => 44,  89 => 43,  87 => 41,  83 => 39,  81 => 37,  69 => 28,  62 => 24,  58 => 23,  52 => 20,  48 => 19,  44 => 18,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<!-- Title -->*/
/* 		<title>{{siteTitle}}</title>*/
/* 		*/
/* 		<!-- BEGIN META -->*/
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/* 		<meta name="keywords" content="cms,slim3,api,document,generator">*/
/* 		<meta name="description" content="CMS for RESTful API Document Generator integrated with apidocjs">*/
/* 		<!-- END META -->*/
/* 		*/
/* 		<!-- BEGIN STYLESHEETS -->*/
/* 		<!-- Bootstrap core CSS -->*/
/* 		<link href="{{base_url()}}/css/bootstrap.min.css" rel="stylesheet">*/
/* 		<link href="{{base_url()}}/fonts/css/font-awesome.min.css" rel="stylesheet">*/
/* 		<link href="{{base_url()}}/css/animate.min.css" rel="stylesheet">*/
/* 		*/
/* 		<!-- Custom styling plus plugins -->*/
/* 		<link href="{{base_url()}}/css/custom.css" rel="stylesheet">*/
/* 		<link href="{{base_url()}}/css/icheck/flat/green.css" rel="stylesheet" />*/
/* 		<!-- END STYLESHEETS -->*/
/* 		*/
/* 		<!-- START HEADER SCRIPTS -->*/
/* 		<script src="{{base_url()}}/js/jquery.min.js"></script>*/
/* 		<!-- END HEADER SCRIPTS -->*/
/* 		*/
/* 		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* 		<!--[if lt IE 9]>*/
/* 			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* 			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
/* 		*/
/* 		{% block style %}*/
/* 		{% endblock style %}*/
/* 	</head>*/
/* 	<body class="nav-md">*/
/* 		{% block content %}*/
/* 		{% endblock content %}*/
/* 		*/
/* 		{% block script %}*/
/* 		{% endblock script %}*/
/* 	</body>*/
/* </html>*/
