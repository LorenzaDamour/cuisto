<?php

/* base.html.twig */
class __TwigTemplate_1f32a0398a2dee981d297dbee55bbc13402feff5679fe14b6d99c1c18042c2a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15020e2c84576bef4e195a993abb5d02099cb077afa2c1038b861b1bdebe041 = $this->env->getExtension("native_profiler");
        $__internal_c15020e2c84576bef4e195a993abb5d02099cb077afa2c1038b861b1bdebe041->enter($__internal_c15020e2c84576bef4e195a993abb5d02099cb077afa2c1038b861b1bdebe041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    </head>
    <body>
      ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_c15020e2c84576bef4e195a993abb5d02099cb077afa2c1038b861b1bdebe041->leave($__internal_c15020e2c84576bef4e195a993abb5d02099cb077afa2c1038b861b1bdebe041_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f6d3c1727f7720d7560dfb9fbf76119d83e8539c9dd8a1351877ff470268312 = $this->env->getExtension("native_profiler");
        $__internal_6f6d3c1727f7720d7560dfb9fbf76119d83e8539c9dd8a1351877ff470268312->enter($__internal_6f6d3c1727f7720d7560dfb9fbf76119d83e8539c9dd8a1351877ff470268312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f6d3c1727f7720d7560dfb9fbf76119d83e8539c9dd8a1351877ff470268312->leave($__internal_6f6d3c1727f7720d7560dfb9fbf76119d83e8539c9dd8a1351877ff470268312_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9df2ee73529005f2b7afff860edfcc10857ade5f5e30a6e65ad3f1292ccf9def = $this->env->getExtension("native_profiler");
        $__internal_9df2ee73529005f2b7afff860edfcc10857ade5f5e30a6e65ad3f1292ccf9def->enter($__internal_9df2ee73529005f2b7afff860edfcc10857ade5f5e30a6e65ad3f1292ccf9def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_9df2ee73529005f2b7afff860edfcc10857ade5f5e30a6e65ad3f1292ccf9def->leave($__internal_9df2ee73529005f2b7afff860edfcc10857ade5f5e30a6e65ad3f1292ccf9def_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_600c6298aea378e883f481c682c3fba1f2ad99e1b87a564bd1b4f8f2ecd86662 = $this->env->getExtension("native_profiler");
        $__internal_600c6298aea378e883f481c682c3fba1f2ad99e1b87a564bd1b4f8f2ecd86662->enter($__internal_600c6298aea378e883f481c682c3fba1f2ad99e1b87a564bd1b4f8f2ecd86662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "<nav class=\"navbar navbar-fixed-top navbar-default\">

  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\"><i class=\"fa fa-universal-access\" aria-hidden=\"true\"> </i>AmaCuisto</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">

      ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            echo "  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("atelier_new");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Créer un atelier</a></li>
      <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("atelier_index");
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Liste des ateliers</a></li>
      <li><a href=\"/notif\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> Notif</a></li>

      ";
        }
        // line 34
        echo "
      </ul>


      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "        <li>
          <a href=\"/profile\" title=\"Profil\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Bienvenue ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        </li>


        ";
        } else {
            // line 46
            echo "
        <li>
          <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Connexion</a>
        </li>
        ";
        }
        // line 51
        echo "
        <li>
          ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
          </a>
          ";
        } else {
            // line 57
            echo "
          <li>
            <a href=\"/register\">Inscription</a>
          </li>
          ";
        }
        // line 62
        echo "
        </li>
      </ul>
    </div>
  </div>
</nav>

";
        
        $__internal_600c6298aea378e883f481c682c3fba1f2ad99e1b87a564bd1b4f8f2ecd86662->leave($__internal_600c6298aea378e883f481c682c3fba1f2ad99e1b87a564bd1b4f8f2ecd86662_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc29b6f7cd19eecb2ed2dcda05da5c1e6b16dbe7ec7f640b3d75e355b3725a63 = $this->env->getExtension("native_profiler");
        $__internal_bc29b6f7cd19eecb2ed2dcda05da5c1e6b16dbe7ec7f640b3d75e355b3725a63->enter($__internal_bc29b6f7cd19eecb2ed2dcda05da5c1e6b16dbe7ec7f640b3d75e355b3725a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc29b6f7cd19eecb2ed2dcda05da5c1e6b16dbe7ec7f640b3d75e355b3725a63->leave($__internal_bc29b6f7cd19eecb2ed2dcda05da5c1e6b16dbe7ec7f640b3d75e355b3725a63_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e9bbec50df584d75f23bdd4ee21ee94a4ac011f6a0246c6e41b5c6014e15377 = $this->env->getExtension("native_profiler");
        $__internal_6e9bbec50df584d75f23bdd4ee21ee94a4ac011f6a0246c6e41b5c6014e15377->enter($__internal_6e9bbec50df584d75f23bdd4ee21ee94a4ac011f6a0246c6e41b5c6014e15377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"
                integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js\"
                type=\"text/javascript\" charset=\"utf-8\" async defer></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
        integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>";
        
        $__internal_6e9bbec50df584d75f23bdd4ee21ee94a4ac011f6a0246c6e41b5c6014e15377->leave($__internal_6e9bbec50df584d75f23bdd4ee21ee94a4ac011f6a0246c6e41b5c6014e15377_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 72,  202 => 71,  191 => 70,  177 => 62,  170 => 57,  163 => 54,  161 => 53,  157 => 51,  151 => 48,  147 => 46,  139 => 41,  136 => 40,  134 => 39,  127 => 34,  120 => 30,  114 => 29,  97 => 14,  91 => 13,  82 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 79,  49 => 71,  46 => 70,  44 => 13,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*       {% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*       {% block header %}*/
/* <nav class="navbar navbar-fixed-top navbar-default">*/
/* */
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="/"><i class="fa fa-universal-access" aria-hidden="true"> </i>AmaCuisto</a>*/
/*     </div>*/
/* */
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/* */
/*       {% if is_granted('ROLE_USER')%}  <li><a href="{{ path ('atelier_new') }}"><i class="fa fa-edit" aria-hidden="true"></i> Créer un atelier</a></li>*/
/*       <li><a href="{{ path ('atelier_index') }}"><i class="fa fa-edit" aria-hidden="true"></i> Liste des ateliers</a></li>*/
/*       <li><a href="/notif"><i class="fa fa-edit" aria-hidden="true"></i> Notif</a></li>*/
/* */
/*       {% endif %}*/
/* */
/*       </ul>*/
/* */
/* */
/*       <ul class="nav navbar-nav navbar-right">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <li>*/
/*           <a href="/profile" title="Profil"><i class="fa fa-user" aria-hidden="true"></i> Bienvenue {{ app.user.username }}</a>*/
/*         </li>*/
/* */
/* */
/*         {% else %}*/
/* */
/*         <li>*/
/*           <a href="{{ path('fos_user_security_login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         <li>*/
/*           {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*           <a href="{{ path('fos_user_security_logout') }}">Se déconnecter <i class="fa fa-sign-out" aria-hidden="true"></i>*/
/*           </a>*/
/*           {% else %}*/
/* */
/*           <li>*/
/*             <a href="/register">Inscription</a>*/
/*           </li>*/
/*           {% endif %}*/
/* */
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* */
/* {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="https://code.jquery.com/jquery-2.2.4.min.js"*/
/*                 integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="*/
/*                 crossorigin="anonymous"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"*/
/*                 type="text/javascript" charset="utf-8" async defer></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"*/
/*         integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
