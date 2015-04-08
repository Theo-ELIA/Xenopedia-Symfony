<?php

/* XenopediaSiteBundle:Site:displayCliche.html.twig */
class __TwigTemplate_053a2ef9be4c5f89c4a6d59c86418e5f extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getContext($context, "titre"), "html", null, true);
        echo "</h1>
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tab_cliche"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliche"]) {
            // line 8
            echo "\t<div class=\"cliche_overview\">
\t\t\t\t";
            // line 9
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "minorite"), "urlImage") != "")) {
                // line 10
                echo "\t\t\t\t";
                $context["urlImage"] = $this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "minorite"), "urlImage");
                // line 11
                echo "\t\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t";
                $context["urlImage"] = "http://www.astrosurf.com/luxorion/Images/terre-europe.jpg";
                // line 13
                echo "\t\t\t\t";
            }
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "urlImage"), "html", null, true);
            echo "\" class=\"img_overview\"/>
                <p>Minorité incriminée : <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voir_minorite_cliche", array("minorite" => $this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "minorite"), "nom"))), "html", null, true);
            echo "\" title=\"Voir tous les clichés sur cette minorité\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "minorite"), "nom"), "html", null, true);
            echo "</a></p>
                <p>Auteur : <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voir_cliche_membre", array("userName" => $this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "auteur"), "username"))), "html", null, true);
            echo "\" title=\"Voir tous les clichés de cet auteur\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "cliche"), "auteur"), "username"), "html", null, true);
            echo "</a></p>
                <br/>
                <p class=\"cliche_content\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliche"), "contenu"), "html", null, true);
            echo "</p>
                
                <br/>
                <p>Upvotes : +";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cliche"), "vote"), "html", null, true);
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xenopedia_voter", array("idCliche" => $this->getAttribute($this->getContext($context, "cliche"), "id"))), "html", null, true);
            echo "\" title=\"Voter pour ce cliché\">+1</a></p>
\t\t\t\t";
            // line 22
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 23
                echo "\t\t\t\t<p><a href=\"#\">Supprimer</a></p>
\t\t\t\t";
            }
            // line 25
            echo "                
               </div>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t<p>Il n'y a pas de cliché trouvé pour cette requette</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "XenopediaSiteBundle:Site:displayCliche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  101 => 28,  94 => 25,  90 => 23,  88 => 22,  82 => 21,  76 => 18,  69 => 16,  63 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  36 => 7,  31 => 6,  28 => 5,);
    }
}
