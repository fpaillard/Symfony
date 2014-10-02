<?php

/* SiteWebClientBundle:Advert:mailHTML.html.twig */
class __TwigTemplate_55dfaf9bf68db3f2ab8a58321638557fa52ec476233c43a726674cc6c04c96b8 extends Twig_Template
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
        echo "<html>
\t<head></head>
\t<body>
\t\t<p>
\t\t\tBonjour, <br />
\t\t\tVoici vos annnonces:<br />
\t\t\t<ul>
\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) ? $context["adverts"] : $this->getContext($context, "adverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 9
            echo "\t\t\t \t\t<li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("Siteweb_Client_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title"), "html", null, true);
            echo " </a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t</ul>
\t\t</p>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle:Advert:mailHTML.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  65 => 18,  76 => 34,  100 => 12,  97 => 11,  70 => 19,  53 => 26,  23 => 2,  194 => 94,  186 => 89,  181 => 87,  160 => 75,  155 => 73,  134 => 61,  129 => 59,  114 => 50,  84 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 111,  214 => 108,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 103,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 27,  89 => 20,  85 => 50,  75 => 30,  68 => 32,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 38,  88 => 36,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 66,  138 => 54,  136 => 56,  121 => 46,  117 => 47,  105 => 32,  91 => 9,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 29,  47 => 9,  40 => 9,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 33,  101 => 29,  98 => 31,  96 => 31,  83 => 45,  74 => 14,  66 => 15,  55 => 19,  52 => 13,  50 => 16,  43 => 11,  41 => 7,  35 => 5,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 96,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 82,  168 => 80,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 68,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 45,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 23,  80 => 19,  73 => 20,  64 => 17,  60 => 16,  57 => 27,  54 => 10,  51 => 15,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 5,);
    }
}
