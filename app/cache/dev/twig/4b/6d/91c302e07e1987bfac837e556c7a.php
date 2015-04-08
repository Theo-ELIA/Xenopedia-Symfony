<?php

/* XenopediaSiteBundle:Site:layout.html.twig */
class __TwigTemplate_4b6d91c302e07e1987bfac837e556c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'topbar' => array($this, 'block_topbar'),
            'menu' => array($this, 'block_menu'),
            'blocCorps' => array($this, 'block_blocCorps'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Xenopedia : Admin";
    }

    // line 7
    public function block_topbar($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"topbar\">

";
        // line 10
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 11
            echo "\t";
            $this->env->loadTemplate("XenopediaUserBundle:Display:topbar_NotConnected.html.twig")->display($context);
        } else {
            // line 13
            echo "\t";
            $this->env->loadTemplate("XenopediaUserBundle:Display:topbar_Connected.html.twig")->display($context);
        }
        // line 15
        echo "
</div>
";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "\t";
        $this->env->loadTemplate("XenopediaSiteBundle:Site:menu_nav.html.twig")->display($context);
    }

    // line 21
    public function block_blocCorps($context, array $blocks = array())
    {
        // line 22
        echo "\t<article id=\"corps\">
\t\t";
        // line 23
        $this->displayBlock('article', $context, $blocks);
        // line 24
        echo "\t</article>
\t<aside id=\"menu_lateral\">
\t\t";
        // line 26
        $this->env->loadTemplate("XenopediaSiteBundle:Site:menu_lateral.html.twig")->display($context);
        echo "\t
\t</aside>
";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "XenopediaSiteBundle:Site:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  81 => 26,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  64 => 19,  61 => 18,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 5,  79 => 25,  74 => 23,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  48 => 12,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
