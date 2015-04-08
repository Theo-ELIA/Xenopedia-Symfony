<?php

/* XenopediaUserBundle:Display:topbar_NotConnected.html.twig */
class __TwigTemplate_5b945de7550d164f659bfd7a6d4879d4 extends Twig_Template
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
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />
 
\t\t\t<label for=\"password\">Mot de passe :</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t<input type=\"submit\" value=\"Connexion\" />
\t\t\t <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t<label for=\"remember_me\">Se souvenir de moi ?</label>
\t</form>
\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\">S'inscrire</a>
</div>";
    }

    public function getTemplateName()
    {
        return "XenopediaUserBundle:Display:topbar_NotConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,  88 => 23,  81 => 26,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  64 => 19,  61 => 18,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 5,  79 => 25,  74 => 23,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  48 => 12,  42 => 8,  36 => 13,  34 => 5,  31 => 4,  28 => 3,);
    }
}
