<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d1ee4e64d91aac806e376e1754364c60 extends Twig_Template
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
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  20 => 1,  23 => 3,  59 => 13,  97 => 45,  81 => 24,  77 => 24,  90 => 23,  76 => 39,  63 => 28,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 11,  107 => 36,  71 => 19,  38 => 8,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 18,  114 => 42,  84 => 28,  70 => 20,  67 => 20,  61 => 27,  94 => 44,  89 => 20,  85 => 42,  75 => 23,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 23,  78 => 40,  46 => 14,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 27,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 11,  24 => 2,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 21,  47 => 11,  40 => 11,  37 => 8,  22 => 3,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 23,  123 => 47,  120 => 40,  115 => 43,  111 => 8,  108 => 30,  101 => 28,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 11,  50 => 10,  43 => 8,  41 => 9,  35 => 5,  32 => 8,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 10,  112 => 42,  109 => 41,  106 => 36,  103 => 28,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 21,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 16,  51 => 13,  48 => 19,  45 => 10,  42 => 9,  39 => 13,  36 => 7,  33 => 6,  30 => 7,);
    }
}
