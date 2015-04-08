<?php

/* XenopediaUserBundle:Submission:ajouterCliche.html.twig */
class __TwigTemplate_ecab4797749e0b2237b6fff246edb188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("XenopediaSiteBundle:Site:layout.html.twig");

        $this->blocks = array(
            'article' => array($this, 'block_article'),
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

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<h3>Soumettre un cliché</h3>
";
        // line 8
        if (array_key_exists("info", $context)) {
            // line 9
            echo "<div class=\"info\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "info"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "<div class=\"well\">
  <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "XenopediaUserBundle:Submission:ajouterCliche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  43 => 11,  37 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
