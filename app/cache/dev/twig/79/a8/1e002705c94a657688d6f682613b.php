<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_79a81e002705c94a657688d6f682613b extends Twig_Template
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

    // line 3
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if ($this->getContext($context, "error")) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "<h1>Connectez-vous à votre compte Xenopedia</h1>

<p>Vous profiterez des options de votes et de soumission de cliché et de minorité. Venez rendre Xenopedia plus complet chaque jour !</p>

<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t<p>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />

\t\t<label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" /><br/>

\t\t<label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br />

\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t<label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label><br />

\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  74 => 23,  67 => 19,  62 => 17,  58 => 16,  53 => 14,  48 => 12,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
