<?php

/* XenopediaAdminBundle:Management:categorieMinoriteManagement.html.twig */
class __TwigTemplate_0977b4d706225e809c04bce06e0a7126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("XenopediaAdminBundle:Display:layout.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "XenopediaAdminBundle:Display:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "<h3>Liste de catégorie de minorité</h3>
<ul>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tab_categorie_minorite"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 7
            echo "\t<li>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("XenopediaAdminBundle:Management:editCategorieMinorite", array("idCategorieMinorite" => $this->getAttribute($this->getContext($context, "categorie"), "id"))));
            echo "</li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "\t<li>Aucune catégorie de minorité trouvée dans la base de donnée</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<h3>Ajouter des catégorie de minorité</h3>
 
<div class=\"well\">
  <form method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "XenopediaAdminBundle:Management:categorieMinoriteManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 16,  55 => 11,  48 => 9,  40 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
