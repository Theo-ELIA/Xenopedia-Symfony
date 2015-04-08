<?php

/* XenopediaUserBundle:Display:topbar_Connected.html.twig */
class __TwigTemplate_7cca8abefec9f68252a1e238a0498a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<div id=\"espace_membre\">
\t\t<p id=\"avatar\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('ornicar_gravatar')->getUrl($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "urlGravatar")), "html", null, true);
        echo "\"/> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Mon profil</a></li>
\t\t\t\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voir_cliche_membre", array("userName" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"))), "html", null, true);
        echo "\">Mes soumissions de clichés</a></li>
\t\t\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_cliche"), "html", null, true);
        echo "\">Ajouter un cliché</a></li>
\t\t\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_admin_homepage"), "html", null, true);
            echo "\">Panneau d'administration</a></li>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Déconnexion</a></li>
\t\t\t\t
\t\t\t</ul>
\t</div>";
    }

    public function getTemplateName()
    {
        return "XenopediaUserBundle:Display:topbar_Connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  44 => 9,  42 => 8,  34 => 6,  30 => 5,  23 => 3,  19 => 1,  136 => 27,  131 => 23,  126 => 18,  119 => 11,  116 => 10,  111 => 8,  103 => 47,  97 => 45,  94 => 44,  85 => 42,  78 => 40,  76 => 39,  54 => 23,  48 => 19,  46 => 18,  39 => 13,  37 => 10,  24 => 2,  88 => 23,  81 => 41,  77 => 24,  75 => 23,  72 => 22,  64 => 19,  61 => 27,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  38 => 7,  32 => 8,  69 => 21,  63 => 28,  56 => 24,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
