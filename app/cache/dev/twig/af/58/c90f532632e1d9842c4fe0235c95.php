<?php

/* XenopediaUserBundle:Security:topbar_NotConnected.html.twig */
class __TwigTemplate_af58c90f532632e1d9842c4fe0235c95 extends Twig_Template
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
        echo "<div id=\"connexion\">
\t
\t<form method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\">
\t\t\t<label for=\"username\">Login :</label>
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
 
\t\t\t<label for=\"password\">Mot de passe :</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t<input type=\"submit\" value=\"Connexion\" />
\t\t\t <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t<label for=\"remember_me\">Se souvenir de moi ?</label>
\t</form>
\t<a href=#>S'inscrire</a>
\t ";
        // line 14
        if ($this->getContext($context, "error")) {
            // line 15
            echo "\t\t<p class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "getMessage"), "html", null, true);
            echo "</p>
\t";
        }
        // line 17
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "XenopediaUserBundle:Security:topbar_NotConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  42 => 15,  40 => 14,  28 => 5,  23 => 3,  19 => 1,);
    }
}
