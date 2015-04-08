<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d88d6a3eea2db9477c6f11d3b95f4980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("XenopediaSiteBundle:Site:layout.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "XenopediaSiteBundle:Site:layout.html.twig";
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
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  42 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}
