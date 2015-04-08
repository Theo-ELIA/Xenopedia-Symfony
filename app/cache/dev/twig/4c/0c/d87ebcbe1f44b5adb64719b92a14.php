<?php

/* XenopediaAdminBundle:Management:minoriteManagement.html.twig */
class __TwigTemplate_4c0cd87ebcbe1f44b5adb64719b92a14 extends Twig_Template
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
        echo "
<h3>Liste minorités</h3>
<ul>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tab_minorite"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["minorite"]) {
            // line 8
            echo "\t<li>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("XenopediaAdminBundle:Management:editMinorite", array("idMinorite" => $this->getAttribute($this->getContext($context, "minorite"), "id"))));
            echo "</li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "\t<li>Aucune minorité trouvée dans la base de donnée</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>

<h3>Ajouter des minorités</h3>
 
<div class=\"well\">
  <form method=\"post\"  action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_admin_minorite_manager"), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "XenopediaAdminBundle:Management:minoriteManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  63 => 17,  56 => 12,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
