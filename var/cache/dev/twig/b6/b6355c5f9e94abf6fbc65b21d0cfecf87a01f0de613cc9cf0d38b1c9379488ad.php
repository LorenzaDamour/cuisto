<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ae2bc7f4c4b80850977f7d2ccd9b8a7210f5211dd773c6f594b011902339928b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fda07e99d602b3f4f14ef56b26380b5051e929021aab73e36f1687a3bd814894 = $this->env->getExtension("native_profiler");
        $__internal_fda07e99d602b3f4f14ef56b26380b5051e929021aab73e36f1687a3bd814894->enter($__internal_fda07e99d602b3f4f14ef56b26380b5051e929021aab73e36f1687a3bd814894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fda07e99d602b3f4f14ef56b26380b5051e929021aab73e36f1687a3bd814894->leave($__internal_fda07e99d602b3f4f14ef56b26380b5051e929021aab73e36f1687a3bd814894_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69d69954aa85749f2a70ddb630cf80c09579e2909e6b267f9c88715892994697 = $this->env->getExtension("native_profiler");
        $__internal_69d69954aa85749f2a70ddb630cf80c09579e2909e6b267f9c88715892994697->enter($__internal_69d69954aa85749f2a70ddb630cf80c09579e2909e6b267f9c88715892994697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_69d69954aa85749f2a70ddb630cf80c09579e2909e6b267f9c88715892994697->leave($__internal_69d69954aa85749f2a70ddb630cf80c09579e2909e6b267f9c88715892994697_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dabac896e4cb6b77b5176244b2eeebcc33012473acff2be88dcd197add1aeb34 = $this->env->getExtension("native_profiler");
        $__internal_dabac896e4cb6b77b5176244b2eeebcc33012473acff2be88dcd197add1aeb34->enter($__internal_dabac896e4cb6b77b5176244b2eeebcc33012473acff2be88dcd197add1aeb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dabac896e4cb6b77b5176244b2eeebcc33012473acff2be88dcd197add1aeb34->leave($__internal_dabac896e4cb6b77b5176244b2eeebcc33012473acff2be88dcd197add1aeb34_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3059cc34c74b7ff1c8781ae136b086b5deee7772f3737bbf7e17599efeba0188 = $this->env->getExtension("native_profiler");
        $__internal_3059cc34c74b7ff1c8781ae136b086b5deee7772f3737bbf7e17599efeba0188->enter($__internal_3059cc34c74b7ff1c8781ae136b086b5deee7772f3737bbf7e17599efeba0188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3059cc34c74b7ff1c8781ae136b086b5deee7772f3737bbf7e17599efeba0188->leave($__internal_3059cc34c74b7ff1c8781ae136b086b5deee7772f3737bbf7e17599efeba0188_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
