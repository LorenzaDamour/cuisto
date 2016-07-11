<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b76459731b86ff857eab2ef0449e4ab71208bcef9a2878bd385e53b337b18ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0147bfb9831a62ae69f3bc68855fe925a0c67c086de8ddc45ad55d051fb354a = $this->env->getExtension("native_profiler");
        $__internal_e0147bfb9831a62ae69f3bc68855fe925a0c67c086de8ddc45ad55d051fb354a->enter($__internal_e0147bfb9831a62ae69f3bc68855fe925a0c67c086de8ddc45ad55d051fb354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0147bfb9831a62ae69f3bc68855fe925a0c67c086de8ddc45ad55d051fb354a->leave($__internal_e0147bfb9831a62ae69f3bc68855fe925a0c67c086de8ddc45ad55d051fb354a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_549094e41d06432db3ae2a9166605c86999dba77e993fd0b9aa69b341629b163 = $this->env->getExtension("native_profiler");
        $__internal_549094e41d06432db3ae2a9166605c86999dba77e993fd0b9aa69b341629b163->enter($__internal_549094e41d06432db3ae2a9166605c86999dba77e993fd0b9aa69b341629b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_549094e41d06432db3ae2a9166605c86999dba77e993fd0b9aa69b341629b163->leave($__internal_549094e41d06432db3ae2a9166605c86999dba77e993fd0b9aa69b341629b163_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb26a649f9dd71b75b1bb2cef55b015437e0d461d2afb26f04b713a0bbebf1dd = $this->env->getExtension("native_profiler");
        $__internal_cb26a649f9dd71b75b1bb2cef55b015437e0d461d2afb26f04b713a0bbebf1dd->enter($__internal_cb26a649f9dd71b75b1bb2cef55b015437e0d461d2afb26f04b713a0bbebf1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb26a649f9dd71b75b1bb2cef55b015437e0d461d2afb26f04b713a0bbebf1dd->leave($__internal_cb26a649f9dd71b75b1bb2cef55b015437e0d461d2afb26f04b713a0bbebf1dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84cc96d0104e1a4f4aa7c995657a06fa3f83816886bbfb724f19b977ad187fcc = $this->env->getExtension("native_profiler");
        $__internal_84cc96d0104e1a4f4aa7c995657a06fa3f83816886bbfb724f19b977ad187fcc->enter($__internal_84cc96d0104e1a4f4aa7c995657a06fa3f83816886bbfb724f19b977ad187fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84cc96d0104e1a4f4aa7c995657a06fa3f83816886bbfb724f19b977ad187fcc->leave($__internal_84cc96d0104e1a4f4aa7c995657a06fa3f83816886bbfb724f19b977ad187fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
