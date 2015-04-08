<?php

/* XenopediaAdminBundle:Display:layout.html.twig */
class __TwigTemplate_66d5d361ccfbb0935783e98f233fbd7f extends Twig_Template
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
        $this->env->loadTemplate("XenopediaAdminBundle:Display:menu_nav.html.twig")->display($context);
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
        $this->env->loadTemplate("XenopediaAdminBundle:Display:menu_lateral.html.twig")->display($context);
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
        return "XenopediaAdminBundle:Display:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  81 => 26,  77 => 24,  75 => 23,  72 => 22,  64 => 19,  61 => 18,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  38 => 7,  32 => 5,  69 => 21,  63 => 17,  56 => 12,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
