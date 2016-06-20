<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_038094c6036528030b9b85498c31247f2bccafee3c5df31a4e14b623d31f60f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d0d4dfae627220cce0b736cc6ac5644c4c8dd5ecf085ff1b969634ab6800d8 = $this->env->getExtension("native_profiler");
        $__internal_62d0d4dfae627220cce0b736cc6ac5644c4c8dd5ecf085ff1b969634ab6800d8->enter($__internal_62d0d4dfae627220cce0b736cc6ac5644c4c8dd5ecf085ff1b969634ab6800d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d0d4dfae627220cce0b736cc6ac5644c4c8dd5ecf085ff1b969634ab6800d8->leave($__internal_62d0d4dfae627220cce0b736cc6ac5644c4c8dd5ecf085ff1b969634ab6800d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e94169015a0d97a88cd91a23e1ae3959c1f8ecd5b6f9be80929ab955283754d = $this->env->getExtension("native_profiler");
        $__internal_7e94169015a0d97a88cd91a23e1ae3959c1f8ecd5b6f9be80929ab955283754d->enter($__internal_7e94169015a0d97a88cd91a23e1ae3959c1f8ecd5b6f9be80929ab955283754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e94169015a0d97a88cd91a23e1ae3959c1f8ecd5b6f9be80929ab955283754d->leave($__internal_7e94169015a0d97a88cd91a23e1ae3959c1f8ecd5b6f9be80929ab955283754d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67f4c19d34e7a3992ce3a74faad1395a7b7e31e7676ef547dbc73a2002bb2e1a = $this->env->getExtension("native_profiler");
        $__internal_67f4c19d34e7a3992ce3a74faad1395a7b7e31e7676ef547dbc73a2002bb2e1a->enter($__internal_67f4c19d34e7a3992ce3a74faad1395a7b7e31e7676ef547dbc73a2002bb2e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67f4c19d34e7a3992ce3a74faad1395a7b7e31e7676ef547dbc73a2002bb2e1a->leave($__internal_67f4c19d34e7a3992ce3a74faad1395a7b7e31e7676ef547dbc73a2002bb2e1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9034846099d7159006c10f8c9eb65c0da0a04050ae57bfcd95f3f29efb731b5 = $this->env->getExtension("native_profiler");
        $__internal_b9034846099d7159006c10f8c9eb65c0da0a04050ae57bfcd95f3f29efb731b5->enter($__internal_b9034846099d7159006c10f8c9eb65c0da0a04050ae57bfcd95f3f29efb731b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9034846099d7159006c10f8c9eb65c0da0a04050ae57bfcd95f3f29efb731b5->leave($__internal_b9034846099d7159006c10f8c9eb65c0da0a04050ae57bfcd95f3f29efb731b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
