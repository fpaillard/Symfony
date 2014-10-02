<?php

/* SiteWebClientBundle:Advert:menu.html.twig */
class __TwigTemplate_e728ee9a2ac4fab43586a4288a6261c256fd8af200cfce47b67f8e50003f03d8 extends Twig_Template
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
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "    <li>
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Siteweb_Client_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id"))), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "title"), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  34 => 7,  27 => 5,  19 => 2,  121 => 48,  119 => 47,  116 => 46,  112 => 35,  109 => 34,  104 => 12,  101 => 11,  95 => 9,  89 => 51,  87 => 46,  80 => 42,  72 => 36,  70 => 34,  64 => 31,  57 => 27,  37 => 11,  23 => 4,  63 => 18,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 6,  84 => 25,  77 => 23,  69 => 20,  65 => 19,  60 => 17,  56 => 16,  53 => 26,  48 => 14,  42 => 10,  39 => 14,  32 => 9,  29 => 5,);
    }
}
