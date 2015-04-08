<?php

/* ::layout.html.twig */
class __TwigTemplate_d7c51e8360cebc4fc46062c39aca8151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topbar' => array($this, 'block_topbar'),
            'menu' => array($this, 'block_menu'),
            'blocCorps' => array($this, 'block_blocCorps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>
 
\t<body>
\t\t<div id=\"bordure\">
\t\t\t<div id=\"bloc_page\">
\t\t\t\t";
        // line 18
        $this->displayBlock('topbar', $context, $blocks);
        // line 19
        echo "\t\t\t\t<header> 
\t\t\t\t<p id=\"citation\">Xenopedia...</p>
\t\t\t\t</header>
\t\t\t\t<nav>
\t\t\t\t\t";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        echo "\t\t\t\t</nav>
\t\t\t
\t\t\t\t<section id=\"bloc-corps\">
\t\t\t\t\t";
        // line 27
        $this->displayBlock('blocCorps', $context, $blocks);
        // line 28
        echo "\t\t\t\t</section>
\t\t\t
\t\t\t\t<footer>
\t\t\t\t\t<p>Copyright de l'amour</p>
\t\t\t\t</footer>
\t\t\t
\t\t\t
\t\t
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\t";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app", true), "session", array(), "any", false, true), "flashbag", array(), "any", false, true), "get", array(0 => "noticeAlertJS"), "method", true, true)) {
            // line 40
            echo "\t\t\t\tvar noticeAlert = new Array()
\t\t\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "noticeAlertJS"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 42
                echo "\t\t\t\t\tnoticeAlert.push(\"";
                echo $this->getContext($context, "flashMessage");
                echo "\");
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t";
        }
        // line 45
        echo "\t\t\tvar pathToQuote = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_quote"), "html", null, true);
        echo "\";
\t\t</script>
\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("script/designScript.js"), "html", null, true);
        echo "\">
\t\t</script>
\t</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/designXenopedia.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 18
    public function block_topbar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 27
    public function block_blocCorps($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  131 => 23,  126 => 18,  119 => 11,  116 => 10,  111 => 8,  103 => 47,  97 => 45,  94 => 44,  85 => 42,  78 => 40,  76 => 39,  54 => 23,  48 => 19,  46 => 18,  39 => 13,  37 => 10,  24 => 2,  88 => 23,  81 => 41,  77 => 24,  75 => 23,  72 => 22,  64 => 19,  61 => 27,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  38 => 7,  32 => 8,  69 => 21,  63 => 28,  56 => 24,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
