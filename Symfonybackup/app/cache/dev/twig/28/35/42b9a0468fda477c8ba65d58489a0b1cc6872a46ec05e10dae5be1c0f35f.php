<?php

/* SiteWebClientBundle:Advert:add.html.twig */
class __TwigTemplate_283542b9a0468fda477c8ba65d58489a0b1cc6872a46ec05e10dae5be1c0f35f extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajout - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_SiteWebClientBundle_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h1>Ajout d'une annonce</h1>


  
  <div class=\"well\">
  ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    
      <div class=\"form-group\">
        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'annonce"));
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "

        <div class=\"col-sm-4\">
          ";
        // line 30
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
    
      <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prix"));
        echo "
          <div class=\"col-sm-4\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Image"));
        echo "
          <div class=\"col-sm-4\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), "file"), 'widget', array("attr" => array("class" => "control-label")));
        echo "
          </div>
      </div>
    

    
     \t<div class=\"form-group\">
    \t \t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom et prénom"));
        echo "
    \t \t<div class=\"col-sm-4\">
    \t \t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    \t \t</div>
     \t</div>

      <div class=\"form-group\">
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Ville"));
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code postal"));
        echo "
          <div class=\"col-sm-4\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Téléphone"));
        echo "
          <div class=\"col-sm-4\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email"));
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>

      <div class=\"form-group\">
        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motdepasse"), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe"));
        echo "
          <div class=\"col-sm-4\">
            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motdepasse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
      </div>
    


  ";
        // line 103
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 108
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 111
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 111,  214 => 108,  208 => 103,  199 => 96,  194 => 94,  186 => 89,  181 => 87,  173 => 82,  168 => 80,  160 => 75,  155 => 73,  147 => 68,  142 => 66,  134 => 61,  129 => 59,  119 => 52,  114 => 50,  106 => 45,  101 => 43,  93 => 38,  88 => 36,  84 => 35,  75 => 30,  68 => 26,  62 => 23,  55 => 19,  50 => 16,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
