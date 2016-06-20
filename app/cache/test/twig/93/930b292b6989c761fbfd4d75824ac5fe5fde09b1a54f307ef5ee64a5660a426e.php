<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_108f56a60cd53d3c5e52aefbe18e7e8cb3d2527630c49b9229121e6211fa58e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4791e96ba6926e3464b96bb928ec4194ab6be9df4318fd44417f6e09911764 = $this->env->getExtension("native_profiler");
        $__internal_8b4791e96ba6926e3464b96bb928ec4194ab6be9df4318fd44417f6e09911764->enter($__internal_8b4791e96ba6926e3464b96bb928ec4194ab6be9df4318fd44417f6e09911764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4791e96ba6926e3464b96bb928ec4194ab6be9df4318fd44417f6e09911764->leave($__internal_8b4791e96ba6926e3464b96bb928ec4194ab6be9df4318fd44417f6e09911764_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_936d48854b48345b87f58a85956b6e40f48b33297573b6b6f2d611c863eb3943 = $this->env->getExtension("native_profiler");
        $__internal_936d48854b48345b87f58a85956b6e40f48b33297573b6b6f2d611c863eb3943->enter($__internal_936d48854b48345b87f58a85956b6e40f48b33297573b6b6f2d611c863eb3943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_936d48854b48345b87f58a85956b6e40f48b33297573b6b6f2d611c863eb3943->leave($__internal_936d48854b48345b87f58a85956b6e40f48b33297573b6b6f2d611c863eb3943_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ac3f384fec3f2ba7615d05e9a83b78ca4aa3a5555edecf950c93ac9c84b9b4 = $this->env->getExtension("native_profiler");
        $__internal_01ac3f384fec3f2ba7615d05e9a83b78ca4aa3a5555edecf950c93ac9c84b9b4->enter($__internal_01ac3f384fec3f2ba7615d05e9a83b78ca4aa3a5555edecf950c93ac9c84b9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_01ac3f384fec3f2ba7615d05e9a83b78ca4aa3a5555edecf950c93ac9c84b9b4->leave($__internal_01ac3f384fec3f2ba7615d05e9a83b78ca4aa3a5555edecf950c93ac9c84b9b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78ee133fc674fef1c17de8bdd42ffccbc731c35afde1ab242e08f9f578d41981 = $this->env->getExtension("native_profiler");
        $__internal_78ee133fc674fef1c17de8bdd42ffccbc731c35afde1ab242e08f9f578d41981->enter($__internal_78ee133fc674fef1c17de8bdd42ffccbc731c35afde1ab242e08f9f578d41981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78ee133fc674fef1c17de8bdd42ffccbc731c35afde1ab242e08f9f578d41981->leave($__internal_78ee133fc674fef1c17de8bdd42ffccbc731c35afde1ab242e08f9f578d41981_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
