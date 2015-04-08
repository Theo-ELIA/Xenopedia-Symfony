<?php

/* XenopediaSiteBundle:Site:menu_nav.html.twig */
class __TwigTemplate_d9a355a4d3b7f2ec56942dc162986152 extends Twig_Template
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
        echo "<nav>
\t<ul>
\t\t<li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_site_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voir_topCliche", array("nbCliche" => 20)), "html", null, true);
        echo "\">Top 20</a></li>
\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voir_minorite"), "html", null, true);
        echo "\">Par minorité</a></li>
\t\t<!--<li><a href=#>Par genre</a></li>-->
\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_about"), "html", null, true);
        echo "\">À propos</a></li>
\t</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "XenopediaSiteBundle:Site:menu_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,  88 => 23,  81 => 26,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  64 => 19,  61 => 18,  55 => 15,  51 => 13,  47 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 5,  79 => 25,  74 => 23,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  48 => 12,  42 => 8,  36 => 7,  34 => 5,  31 => 5,  28 => 3,);
    }
}
