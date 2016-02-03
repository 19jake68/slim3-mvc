<?php

/* ./layouts/layout2.twig */
class __TwigTemplate_8312b2e1ecf1676827f3030d9940320294e7ebdd671d068cd3479595c1670911 extends Twig_Template
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
        echo twig_escape_filter($this->env, ((((isset($context["pageTitle"]) ? $context["pageTitle"] : null) != null)) ? ((((isset($context["siteTitle"]) ? $context["siteTitle"] : null) . " | ") . (isset($context["pageTitle"]) ? $context["pageTitle"] : null))) : ((isset($context["siteTitle"]) ? $context["siteTitle"] : null))), "html", null, true);
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
\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/css/nprogress.css\" rel=\"stylesheet\" />
\t\t<!-- END STYLESHEETS -->
\t\t
\t\t<!-- START HEADER SCRIPTS -->
\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/nprogress.js\"></script>
\t\t<script>
\t\t\tNProgress.start();
\t\t</script>
\t\t<!-- END HEADER SCRIPTS -->
\t\t
\t\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t\t
\t\t";
        // line 42
        $this->displayBlock('style', $context, $blocks);
        // line 44
        echo "\t</head>
\t<body class=\"nav-md\">
\t\t<!-- container -->
\t\t<div class=\"container body\">
\t\t\t<div class=\"main_container\">
\t\t\t
\t\t\t\t<!-- sidebar -->
\t\t\t\t<div class=\"col-md-3 left_col\">
\t\t\t\t\t<div class=\"left_col scroll-view\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"navbar nav_title\" style=\"border:0\">
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "\" class=\"site_title\"><i class=\"fa fa-book\"></i> <span>";
        echo twig_escape_filter($this->env, (isset($context["siteTitle"]) ? $context["siteTitle"] : null), "html", null, true);
        echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- menu profile quick info -->
\t\t\t\t\t\t<div class=\"profile\">
\t\t\t\t\t\t\t<div class=\"profile_pic\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/images/img.jpg\" alt=\"..\" class=\"img-circle profile_img\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"profile_info\">
\t\t\t\t\t\t\t\t<span>Welcome,</span>
\t\t\t\t\t\t\t\t<h2>Antonio Luna</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /menu profile quick info -->
\t\t\t\t\t\t
\t\t\t\t\t\t<br />
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- sidebar menu -->
\t\t\t\t\t\t<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
\t\t\t\t\t\t\t<div class=\"menu_section\">
\t\t\t\t\t\t\t\t<h3>General</h3>
\t\t\t\t\t\t\t\t<ul class=\"nav side-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Home</a></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><i class=\"fa fa-edit\"></i> Documentations <span class=\"fa fa-chevron-down\"></span></a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav child_menu\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("documentation"), "html", null, true);
        echo "\"> List Documentation</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("addDoc"), "html", null, true);
        echo "\"> Add New Documentation</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /sidebar menu -->
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- menu footer buttons -->
\t\t\t\t\t\t<div class=\"sidebar-footer hidden-small\">
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("logout"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /menu footer buttons -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sidebar -->
\t\t\t\t
\t\t\t\t<!-- top navigation -->
\t\t\t\t<div class=\"top_nav\">
\t\t\t\t\t<div class=\"nav_menu\">
\t\t\t\t\t\t<nav class=\"\" role=\"navigation\">
\t\t\t\t\t\t\t<div class=\"nav toggle\">
\t\t\t\t\t\t\t\t<a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/images/img.jpg\" alt=\"\" />Antonio Luna
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-angle-down\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\"> Profile</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-red pull-right\">50%</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\">Help</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("logout"), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /top navigation -->
\t\t\t\t
\t\t\t\t<!-- page content -->
\t\t\t\t<div class=\"right_col\" role=\"main\">
\t\t\t\t\t<!-- main content -->
\t\t\t\t\t";
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "\t\t\t\t\t<!-- /main content -->
\t\t\t\t
\t\t\t\t\t<!-- footer content -->
\t\t\t\t\t<footer>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<p class=\"pull-right\">";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["siteTitle"]) ? $context["siteTitle"] : null), "html", null, true);
        echo " is a Bootstrap 3 template. | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "\" style=\"text-decoration:none\"><span class=\"lead\"> <i class=\"fa fa-book\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["siteTitle"]) ? $context["siteTitle"] : null), "html", null, true);
        echo "</span></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- /footer content -->
\t\t\t\t</div>
\t\t\t\t<!-- /page content -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /container -->
\t\t
\t\t<!-- BEGIN SCRIPTS -->
\t\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
\t\t
\t\t<!-- bootstrap progress js -->
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/progressbar/bootstrap-progressbar.min.js\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/nicescroll/jquery.nicescroll.min.js\"></script>

\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->baseUrl(), "html", null, true);
        echo "/js/custom.js\"></script>\t\t
\t\t";
        // line 175
        $this->displayBlock('script', $context, $blocks);
        // line 177
        echo "\t\t<script>
\t\t\tNProgress.done();
\t\t</script>
\t\t<!-- END SCRIPTS -->
\t</body>
</html>";
    }

    // line 42
    public function block_style($context, array $blocks = array())
    {
        // line 43
        echo "\t\t";
    }

    // line 148
    public function block_content($context, array $blocks = array())
    {
        // line 149
        echo "\t\t\t\t\t";
    }

    // line 175
    public function block_script($context, array $blocks = array())
    {
        // line 176
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "./layouts/layout2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 176,  299 => 175,  295 => 149,  292 => 148,  288 => 43,  285 => 42,  276 => 177,  274 => 175,  270 => 174,  265 => 172,  261 => 171,  255 => 168,  235 => 155,  228 => 150,  226 => 148,  210 => 135,  194 => 122,  171 => 102,  149 => 83,  145 => 82,  138 => 78,  119 => 62,  107 => 55,  94 => 44,  92 => 42,  77 => 30,  73 => 29,  66 => 25,  62 => 24,  58 => 23,  52 => 20,  48 => 19,  44 => 18,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<!-- Title -->*/
/* 		<title>{{ pageTitle != null ? siteTitle ~ ' | ' ~ pageTitle : siteTitle }}</title>*/
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
/* 		<link href="{{base_url()}}/css/nprogress.css" rel="stylesheet" />*/
/* 		<!-- END STYLESHEETS -->*/
/* 		*/
/* 		<!-- START HEADER SCRIPTS -->*/
/* 		<script src="{{base_url()}}/js/jquery.min.js"></script>*/
/* 		<script src="{{base_url()}}/js/nprogress.js"></script>*/
/* 		<script>*/
/* 			NProgress.start();*/
/* 		</script>*/
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
/* 		<!-- container -->*/
/* 		<div class="container body">*/
/* 			<div class="main_container">*/
/* 			*/
/* 				<!-- sidebar -->*/
/* 				<div class="col-md-3 left_col">*/
/* 					<div class="left_col scroll-view">*/
/* 					*/
/* 						<div class="navbar nav_title" style="border:0">*/
/* 							<a href="{{base_url()}}" class="site_title"><i class="fa fa-book"></i> <span>{{siteTitle}}</span></a>*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 						*/
/* 						<!-- menu profile quick info -->*/
/* 						<div class="profile">*/
/* 							<div class="profile_pic">*/
/* 								<img src="{{base_url()}}/images/img.jpg" alt=".." class="img-circle profile_img" />*/
/* 							</div>*/
/* 							<div class="profile_info">*/
/* 								<span>Welcome,</span>*/
/* 								<h2>Antonio Luna</h2>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- /menu profile quick info -->*/
/* 						*/
/* 						<br />*/
/* 						*/
/* 						<!-- sidebar menu -->*/
/* 						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* 							<div class="menu_section">*/
/* 								<h3>General</h3>*/
/* 								<ul class="nav side-menu">*/
/* 									<li><a href="{{base_url()}}"><i class="fa fa-home"></i> Home</a></li>*/
/* 									<li>*/
/* 										<a href="javascript:void(0);"><i class="fa fa-edit"></i> Documentations <span class="fa fa-chevron-down"></span></a>*/
/* 										<ul class="nav child_menu" style="display:none">*/
/* 											<li><a href="{{path_for('documentation')}}"> List Documentation</a></li>*/
/* 											<li><a href="{{path_for('addDoc')}}"> Add New Documentation</a></li>*/
/* 										</ul>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- /sidebar menu -->*/
/* 						*/
/* 						<!-- menu footer buttons -->*/
/* 						<div class="sidebar-footer hidden-small">*/
/* 							<a href="#" data-toggle="tooltip" data-placement="top" title="Settings">*/
/* 								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/* 							</a>*/
/* 							<a href="#" data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/* 								<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/* 							</a>*/
/* 							<a href="#" data-toggle="tooltip" data-placement="top" title="Lock">*/
/* 								<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/* 							</a>*/
/* 							<a href="{{path_for('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">*/
/* 								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/* 							</a>*/
/* 						</div>*/
/* 						<!-- /menu footer buttons -->*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- /sidebar -->*/
/* 				*/
/* 				<!-- top navigation -->*/
/* 				<div class="top_nav">*/
/* 					<div class="nav_menu">*/
/* 						<nav class="" role="navigation">*/
/* 							<div class="nav toggle">*/
/* 								<a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/* 							</div>*/
/* 							*/
/* 							<ul class="nav navbar-nav navbar-right">*/
/* 								<li class="">*/
/* 									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/* 										<img src="{{base_url()}}/images/img.jpg" alt="" />Antonio Luna*/
/* 										<span class="fa fa-angle-down"></span>*/
/* 									</a>*/
/* 									<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/* 										<li><a href="javascript:;"> Profile</a></li>*/
/* 										<li>*/
/* 											<a href="javascript:;">*/
/* 												<span class="badge bg-red pull-right">50%</span>*/
/* 												<span>Settings</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li><a href="javascript:;">Help</a></li>*/
/* 										<li>*/
/* 											<a href="{{path_for('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</nav>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- /top navigation -->*/
/* 				*/
/* 				<!-- page content -->*/
/* 				<div class="right_col" role="main">*/
/* 					<!-- main content -->*/
/* 					{% block content %}*/
/* 					{% endblock content %}*/
/* 					<!-- /main content -->*/
/* 				*/
/* 					<!-- footer content -->*/
/* 					<footer>*/
/* 						<div class="">*/
/* 							<p class="pull-right">{{siteTitle}} is a Bootstrap 3 template. | <a href="{{base_url()}}" style="text-decoration:none"><span class="lead"> <i class="fa fa-book"></i> {{siteTitle}}</span></a>*/
/* 							</p>*/
/* 						</div>*/
/* 						<div class="clearfix"></div>*/
/* 					</footer>*/
/* 					<!-- /footer content -->*/
/* 				</div>*/
/* 				<!-- /page content -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- /container -->*/
/* 		*/
/* 		<!-- BEGIN SCRIPTS -->*/
/* 		<script src="{{base_url()}}/js/bootstrap.min.js"></script>*/
/* 		*/
/* 		<!-- bootstrap progress js -->*/
/* 		<script src="{{base_url()}}/js/progressbar/bootstrap-progressbar.min.js"></script>*/
/* 		<script src="{{base_url()}}/js/nicescroll/jquery.nicescroll.min.js"></script>*/
/* */
/* 		<script src="{{base_url()}}/js/custom.js"></script>		*/
/* 		{% block script %}*/
/* 		{% endblock script %}*/
/* 		<script>*/
/* 			NProgress.done();*/
/* 		</script>*/
/* 		<!-- END SCRIPTS -->*/
/* 	</body>*/
/* </html>*/
