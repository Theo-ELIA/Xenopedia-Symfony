<?php

/* XenopediaAdminBundle:Management:categorieMinoriteEditManagement.html.twig */
class __TwigTemplate_04c5281daa318f16dc7a44932e9c991c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_admin_categorie_minorite_manager_edit", array("idCategorieMinorite" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "value"), "id"))), "html", null, true);
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
        return "XenopediaAdminBundle:Management:categorieMinoriteEditManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,  66 => 17,  62 => 16,  55 => 11,  48 => 9,  40 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
