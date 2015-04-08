<?php

/* XenopediaAdminBundle:Management:userManagement.html.twig */
class __TwigTemplate_ed7f1852456b5ccb17cd831b8e29f9a5 extends Twig_Template
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
<h3>Liste Utilisateurs</h3>
<ul>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tab_user"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "\t<li>";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("XenopediaAdminBundle:Management:editUser", array("username" => $this->getAttribute($this->getContext($context, "user"), "username"))));
            echo "</li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "\t<li>Aucun user trouvée dans la base de donnée</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>


";
    }

    public function getTemplateName()
    {
        return "XenopediaAdminBundle:Management:userManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 10,  41 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
