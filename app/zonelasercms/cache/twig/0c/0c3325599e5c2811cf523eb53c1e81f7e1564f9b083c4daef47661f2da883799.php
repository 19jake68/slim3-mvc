<?php

/* home.twig */
class __TwigTemplate_efc98784e09135e8102b1d85efac631b80e0690776f1390d6ff2a61173793fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout2.twig", "home.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout2.twig";
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h1>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flash"]) ? $context["flash"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "<p>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 13
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  49 => 9,  45 => 8,  40 => 7,  37 => 6,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layouts/layout2.twig" %}*/
/* */
/* {% block style %} */
/* {% endblock style %}*/
/* */
/* {% block content %}*/
/* <h1>{{data}}</h1>*/
/* {% for message in flash %}*/
/* <p>{{message}}</p>*/
/* {% endfor %}*/
/* {% endblock content %}*/
/* */
/* {% block script %}*/
/* {% endblock script %}*/
