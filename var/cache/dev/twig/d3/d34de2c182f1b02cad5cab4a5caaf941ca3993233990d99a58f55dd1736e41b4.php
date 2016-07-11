<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7997f5ec484dfa4e791c84e5a37c70f70b53193d8d2dcee1ee5184602f857299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9db9921300fd13e2622192febabec0457ebf56bd9b8ab9a45e384e039947a835 = $this->env->getExtension("native_profiler");
        $__internal_9db9921300fd13e2622192febabec0457ebf56bd9b8ab9a45e384e039947a835->enter($__internal_9db9921300fd13e2622192febabec0457ebf56bd9b8ab9a45e384e039947a835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db9921300fd13e2622192febabec0457ebf56bd9b8ab9a45e384e039947a835->leave($__internal_9db9921300fd13e2622192febabec0457ebf56bd9b8ab9a45e384e039947a835_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69e8443f3c05981b2da0e895b1dfa5e42922c8a004a51bc56b5d32d3b2f45270 = $this->env->getExtension("native_profiler");
        $__internal_69e8443f3c05981b2da0e895b1dfa5e42922c8a004a51bc56b5d32d3b2f45270->enter($__internal_69e8443f3c05981b2da0e895b1dfa5e42922c8a004a51bc56b5d32d3b2f45270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69e8443f3c05981b2da0e895b1dfa5e42922c8a004a51bc56b5d32d3b2f45270->leave($__internal_69e8443f3c05981b2da0e895b1dfa5e42922c8a004a51bc56b5d32d3b2f45270_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ca1507a9a334321a75fcd9e3bba6f21de014f9c625634d5c7a59af89dced860 = $this->env->getExtension("native_profiler");
        $__internal_9ca1507a9a334321a75fcd9e3bba6f21de014f9c625634d5c7a59af89dced860->enter($__internal_9ca1507a9a334321a75fcd9e3bba6f21de014f9c625634d5c7a59af89dced860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ca1507a9a334321a75fcd9e3bba6f21de014f9c625634d5c7a59af89dced860->leave($__internal_9ca1507a9a334321a75fcd9e3bba6f21de014f9c625634d5c7a59af89dced860_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f27d301368a7e99c288b750a7d3200a67a5a99fc3ca93bda902e4b550840de6b = $this->env->getExtension("native_profiler");
        $__internal_f27d301368a7e99c288b750a7d3200a67a5a99fc3ca93bda902e4b550840de6b->enter($__internal_f27d301368a7e99c288b750a7d3200a67a5a99fc3ca93bda902e4b550840de6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f27d301368a7e99c288b750a7d3200a67a5a99fc3ca93bda902e4b550840de6b->leave($__internal_f27d301368a7e99c288b750a7d3200a67a5a99fc3ca93bda902e4b550840de6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
