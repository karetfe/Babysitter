<?php

/* BabySitterBundle:Map:map.html.twig */
class __TwigTemplate_fd8f3ddaa6b039b7c25311a17ef7eb2effd37a1861d02c4da72662b305b81c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BabySitterBundle:Map:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BabySitterBundle:Map:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <input id=\"lat\" type=\"hidden\" value= ";
        echo twig_escape_filter($this->env, (isset($context["Latitudes"]) ? $context["Latitudes"] : $this->getContext($context, "Latitudes")), "html", null, true);
        echo ">
    <input id=\"lng\" type=\"hidden\" value= ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["Longitudes"]) ? $context["Longitudes"] : $this->getContext($context, "Longitudes")), "html", null, true);
        echo ">
    <div id=\"map-canvas\"></div>
";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Map:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
