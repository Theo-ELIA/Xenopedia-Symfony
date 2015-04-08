<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f341ffcb0646170d6087ecf3f6664a01 extends Twig_Template
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
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 3,  19 => 1,  31 => 4,  28 => 3,);
    }
}
