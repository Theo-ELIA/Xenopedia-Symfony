<?php

/* XenopediaUserBundle:Security:topbar_Connected.html.twig */
class __TwigTemplate_fffd27d817b11cbd65d27cff80862a1f extends Twig_Template
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
\t\t<p id=\"avatar\"><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatar/avatar.jpg"), "html", null, true);
        echo "\"/> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "</p>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\">Mon profil</a></li>
\t\t\t\t<li><a href=\"#\">Mes votes</a></li>
\t\t\t\t<li><a href=\"#\">Mes soumissions de clichés</a></li>
\t\t\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Déconnexion</a></li>
\t\t\t</ul>
\t</div>";
    }

    public function getTemplateName()
    {
        return "XenopediaUserBundle:Security:topbar_Connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  22 => 2,  19 => 1,);
    }
}
