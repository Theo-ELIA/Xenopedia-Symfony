<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f38fdd0104940654ea5e294ccae7edef extends Twig_Template
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
        // line 2
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    <table cellspacing=\"0\" cellpadding=\"0\"> <!-- Tabeau contenant les différents éléments du formulaires -->
\t\t\t\t\t\t\t\t<th><p>Formulaire d'inscription</p></th>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'label', array("label" => "Pseudo"));
        echo "<p>Ce pseudo servira à vous identifier sur le site. Il doit être constitué de 3 à 20 caractères.</p></td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t\t\t<td id=\"alert_pseudo\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><label for=\"email\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'label', array("label" => "Adresse e-mail"));
        echo "</label><p>Cette adresse mail doit être valide : nous sommes susceptibles de vous envoyer des e-mails.</p></td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t\t\t<td id=\"alert_email\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><label for=\"mdp1\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "plainPassword"), 'label', array("label" => "Mot de passe"));
        echo "</label><p>Votre mot de passe doit être constitué de 3 à 20 caractères.</p></td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "plainPassword"), 'widget');
        echo "</td>
\t\t\t\t\t\t\t\t\t<td id=\"alert_mdp1\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><label for=\"mdp2\">Vérification du mot de passe</label></td>
\t\t\t\t\t\t\t\t\t<td><input type=\"password\" name=\"mdp2\" id=\"mdp2\" /></td>
\t\t\t\t\t\t\t\t\t<td id=\"alert_mdp2\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><label for=\"sexe\">Sexe</label></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sexe\" value=\"Homme\" id=\"homme\" /> <label for=\"homme\">Homme</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sexe\" value=\"Femme\" id=\"femme\" /> <label for=\"femme\">Femme</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td id=\"alert_sexe\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t\t</table> <!-- Fin du tableau contenant les éléments du formulaire
    <div>
        <input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  57 => 19,  53 => 18,  45 => 13,  41 => 12,  33 => 7,  29 => 6,  19 => 2,);
    }
}
