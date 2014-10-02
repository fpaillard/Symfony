<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Site d'annonces</h1>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteWebClientBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Annonce WebSite";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "        ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        // line 48
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
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
        return array (  121 => 48,  119 => 47,  116 => 46,  112 => 35,  109 => 34,  104 => 12,  101 => 11,  95 => 9,  89 => 51,  87 => 46,  80 => 42,  72 => 36,  70 => 34,  64 => 31,  57 => 27,  37 => 11,  23 => 2,  63 => 18,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  84 => 25,  77 => 23,  69 => 20,  65 => 19,  60 => 17,  56 => 16,  53 => 26,  48 => 14,  42 => 10,  39 => 14,  32 => 9,  29 => 5,);
    }
}
