<?php

/* SiteWebClientBundle:Advert:view.html.twig */
class __TwigTemplate_b37722055e4bed4174a8a1afa5f00d6734212422a8224e657d5127cd7631c72b extends Twig_Template
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
        echo "
  <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title"), "html", null, true);
        echo "</h1>

  <div class=\"row\">

    <div class=\"col-xs-4 col-sm-2\">
      ";
        // line 17
        if (($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image") != null)) {
            echo " 
        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image"), "getUploadDir", array(), "method") . "/") . $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image"), "url"))), "html", null, true);
            echo "\" width=\"100\" height=\"100\"> 
      ";
        } else {
            // line 20
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("Uploads/Images" . "/") . "0.png")), "html", null, true);
            echo "\" width=\"100\" height=\"100\">
      ";
        }
        // line 22
        echo "    </div>
    <div class=\"col-xs-6 col-sm-6\">
      ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content"), "html", null, true);
        echo "
    </div>
    <div class=\"col-xs-6 col-sm-2\">
      <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Siteweb_Client_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id"))), "html", null, true);
        echo "\">
        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
      </a>
    </div>               
  </div>
  <div class=\"row\">
    <div class=\"col-xs-12 col-sm-6 col-md-8\">
      Publiée par <strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author"), "html", null, true);
        echo "</strong> le ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date"), "format", array(0 => "d-m-Y"), "method"), "html", null, true);
        echo ". <br>
      Prix: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "prix"), "html", null, true);
        echo " €<br>
      Ville: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "ville"), "html", null, true);
        echo "<br>
      Code postal: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "codepostal"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  98 => 36,  94 => 35,  88 => 34,  78 => 27,  72 => 24,  68 => 22,  62 => 20,  57 => 18,  53 => 17,  45 => 12,  42 => 11,  39 => 10,  32 => 7,  29 => 6,);
    }
}
