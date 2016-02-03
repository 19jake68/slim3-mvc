<?php

/* main/index.twig */
class __TwigTemplate_5d206cb1a53672e00fc2a579de7a52ce9da82c62258ae156900aef63bc2c9b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/layout2.twig", "main/index.twig", 1);
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
        echo "
";
    }

    // line 10
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/layout2.twig" %}*/
/* */
/* {% block style %} */
/* {% endblock style %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/* {% endblock script %}*/
