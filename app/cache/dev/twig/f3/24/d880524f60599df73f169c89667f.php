<?php

/* XenopediaAdminBundle:Management:minoriteEditManagement.html.twig */
class __TwigTemplate_f324d880524f60599df73f169c89667f extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_admin_minorite_manager_edit", array("idMinorite" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
<input type=\"submit\" class=\"btn btn-primary\" />
</form>";
    }

    public function getTemplateName()
    {
        return "XenopediaAdminBundle:Management:minoriteEditManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  35 => 6,  27 => 4,  50 => 11,  44 => 9,  42 => 8,  34 => 6,  30 => 5,  23 => 3,  19 => 1,  136 => 27,  131 => 23,  126 => 18,  119 => 11,  116 => 10,  111 => 8,  103 => 47,  97 => 45,  94 => 44,  85 => 42,  78 => 40,  76 => 39,  54 => 23,  48 => 19,  46 => 18,  39 => 13,  37 => 10,  24 => 2,  88 => 23,  81 => 41,  77 => 24,  75 => 23,  72 => 22,  64 => 19,  61 => 27,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  38 => 7,  32 => 8,  69 => 21,  63 => 28,  56 => 24,  49 => 10,  41 => 8,  36 => 7,  31 => 5,  28 => 3,);
    }
}
