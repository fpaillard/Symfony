<?php

/* SiteWebClientBundle::layout.html.twig */
class __TwigTemplate_91b4a140de23b84a6ac0dadf0d9c8f0651cc2e04d3d51398c8bb16a7b8a8a6e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'SiteWebClientBundle_body' => array($this, 'block_SiteWebClientBundle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "

  <hr/>
 
  ";
        // line 15
        echo "  ";
        $this->displayBlock('SiteWebClientBundle_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_SiteWebClientBundle_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "SiteWebClientBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  52 => 17,  49 => 15,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  102 => 37,  98 => 36,  94 => 35,  88 => 34,  78 => 27,  72 => 24,  68 => 22,  62 => 20,  57 => 15,  53 => 17,  45 => 12,  42 => 11,  39 => 10,  32 => 7,  29 => 6,);
    }
}
