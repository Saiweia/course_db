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
        $__internal_9381c8e7656c1e687b2c6bb6fcac2734bd29857ec858e596773d764191e9a94b = $this->env->getExtension("native_profiler");
        $__internal_9381c8e7656c1e687b2c6bb6fcac2734bd29857ec858e596773d764191e9a94b->enter($__internal_9381c8e7656c1e687b2c6bb6fcac2734bd29857ec858e596773d764191e9a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9381c8e7656c1e687b2c6bb6fcac2734bd29857ec858e596773d764191e9a94b->leave($__internal_9381c8e7656c1e687b2c6bb6fcac2734bd29857ec858e596773d764191e9a94b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7da141e7728c8c63a62ac37604822a42e5d9866aed975a415005a24569365bab = $this->env->getExtension("native_profiler");
        $__internal_7da141e7728c8c63a62ac37604822a42e5d9866aed975a415005a24569365bab->enter($__internal_7da141e7728c8c63a62ac37604822a42e5d9866aed975a415005a24569365bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7da141e7728c8c63a62ac37604822a42e5d9866aed975a415005a24569365bab->leave($__internal_7da141e7728c8c63a62ac37604822a42e5d9866aed975a415005a24569365bab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85ba85e41099936536048b8d7a6b973274e9523a75218ed62277e6b706e50e89 = $this->env->getExtension("native_profiler");
        $__internal_85ba85e41099936536048b8d7a6b973274e9523a75218ed62277e6b706e50e89->enter($__internal_85ba85e41099936536048b8d7a6b973274e9523a75218ed62277e6b706e50e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85ba85e41099936536048b8d7a6b973274e9523a75218ed62277e6b706e50e89->leave($__internal_85ba85e41099936536048b8d7a6b973274e9523a75218ed62277e6b706e50e89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8cb5b1f8acab0e0b20fcf6337126bf38583a147346d36e954ffe8057b917b98 = $this->env->getExtension("native_profiler");
        $__internal_f8cb5b1f8acab0e0b20fcf6337126bf38583a147346d36e954ffe8057b917b98->enter($__internal_f8cb5b1f8acab0e0b20fcf6337126bf38583a147346d36e954ffe8057b917b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f8cb5b1f8acab0e0b20fcf6337126bf38583a147346d36e954ffe8057b917b98->leave($__internal_f8cb5b1f8acab0e0b20fcf6337126bf38583a147346d36e954ffe8057b917b98_prof);

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
