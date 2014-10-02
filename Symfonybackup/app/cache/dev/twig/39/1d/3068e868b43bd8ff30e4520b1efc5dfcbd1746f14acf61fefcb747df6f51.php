<?php

/* SiteWebClientBundle:Advert:myAdverts.html.twig */
class __TwigTemplate_391d3068e868b43bd8ff30e4520b1efc5dfcbd1746f14acf61fefcb747df6f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteWebClientBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'SiteWebClientBundle_body' => array($this, 'block_SiteWebClientBundle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteWebClientBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_SiteWebClientBundle_body($context, array $blocks = array())
    {
        // line 11
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <div class=\"bg-info\">
        ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  <p>
    Entrez votre mail pour recevoir vos annonces actives par mail.
  </p>
  <div class=\"well\">
    <form role=\"form\" class=\"form-horizontal\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_myAdverts");
        echo "\" method=\"post\">
      <div class=\"form-group\">
        <label class=\"col-xs-2 control-label\">Adresse mail</label>
        <input type=\"email\" name=\"email\" class=\"col-xs-4 form-control\" id=\"email\" placeholder=\"Entrer votre adresse mail\" />
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-offset-2 col-sm-10\">
          <button type=\"submit\" class=\"btn btn-primary\">Chercher</button>
        </div>
      </div>
    </form>
  </div>

";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle:Advert:myAdverts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  65 => 20,  76 => 34,  100 => 12,  97 => 11,  70 => 19,  53 => 26,  23 => 2,  194 => 94,  186 => 89,  181 => 87,  160 => 75,  155 => 73,  134 => 61,  129 => 59,  114 => 50,  84 => 35,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 111,  214 => 108,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 103,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 16,  38 => 6,  94 => 27,  89 => 20,  85 => 50,  75 => 30,  68 => 32,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 38,  88 => 36,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 66,  138 => 54,  136 => 56,  121 => 46,  117 => 47,  105 => 32,  91 => 9,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 36,  72 => 16,  69 => 29,  47 => 12,  40 => 9,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 33,  101 => 29,  98 => 31,  96 => 31,  83 => 45,  74 => 14,  66 => 15,  55 => 19,  52 => 13,  50 => 13,  43 => 11,  41 => 7,  35 => 5,  32 => 7,  29 => 6,  209 => 82,  203 => 78,  199 => 96,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 82,  168 => 80,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 68,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 45,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 23,  80 => 19,  73 => 20,  64 => 17,  60 => 16,  57 => 27,  54 => 10,  51 => 15,  48 => 13,  45 => 11,  42 => 11,  39 => 10,  36 => 5,  33 => 6,  30 => 5,);
    }
}
