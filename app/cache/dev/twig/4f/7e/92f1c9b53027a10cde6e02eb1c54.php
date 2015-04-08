<?php

/* XenopediaAdminBundle:Management:userEditManagement.html.twig */
class __TwigTemplate_4f7e92f1c9b53027a10cde6e02eb1c54 extends Twig_Template
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
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
 ";
        // line 2
        if ($this->env->isDebug()) {
            var_dump($this->getContext($context, "form"));
        }
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
<input type=\"submit\" class=\"btn btn-primary\" />
<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_admin_grant_admin", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "username"))), "html", null, true);
        echo "\">Donner les droits admins</a>
</form>";
    }

    public function getTemplateName()
    {
        return "XenopediaAdminBundle:Management:userEditManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  24 => 2,  19 => 1,  56 => 12,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
