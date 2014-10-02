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
        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_add");
        echo "\">Ajouter une annonce</a></li>
          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("Siteweb_Client_myAdverts");
        echo "\">Mes annonces</a></li>
        </ul>
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "      </div>
    </div>

    <hr>

    <footer>
      
        <p style=\"text-align:center;\"> Software is like sex, it’s better when it’s free.</p>
    </footer>
  </div>

  ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
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

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        // line 47
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
        return array (  117 => 47,  115 => 46,  112 => 45,  108 => 33,  105 => 32,  100 => 12,  97 => 11,  91 => 9,  85 => 50,  83 => 45,  70 => 34,  61 => 28,  37 => 11,  23 => 2,  60 => 16,  52 => 17,  49 => 15,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  102 => 37,  98 => 36,  94 => 35,  88 => 34,  78 => 27,  72 => 24,  68 => 32,  62 => 20,  57 => 27,  53 => 26,  45 => 12,  42 => 11,  39 => 14,  32 => 9,  29 => 6,);
    }
}
