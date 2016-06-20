<?php

/* default/index.html.twig */
class __TwigTemplate_31d9d65f52901bbb14f9125111d4c5b4f970c455c30b30d5806b4752819a30e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'main_menu_links' => array($this, 'block_main_menu_links'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02013671fea5ecd9673ec7ae7f6e4d57b82a99e684ba0bf5e5d26bfd13d6511c = $this->env->getExtension("native_profiler");
        $__internal_02013671fea5ecd9673ec7ae7f6e4d57b82a99e684ba0bf5e5d26bfd13d6511c->enter($__internal_02013671fea5ecd9673ec7ae7f6e4d57b82a99e684ba0bf5e5d26bfd13d6511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02013671fea5ecd9673ec7ae7f6e4d57b82a99e684ba0bf5e5d26bfd13d6511c->leave($__internal_02013671fea5ecd9673ec7ae7f6e4d57b82a99e684ba0bf5e5d26bfd13d6511c_prof);

    }

    // line 3
    public function block_main_menu_links($context, array $blocks = array())
    {
        $__internal_7454efebfdd9886a291eec81a6d8bf13a8833956d845c0386284b3642823c075 = $this->env->getExtension("native_profiler");
        $__internal_7454efebfdd9886a291eec81a6d8bf13a8833956d845c0386284b3642823c075->enter($__internal_7454efebfdd9886a291eec81a6d8bf13a8833956d845c0386284b3642823c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_links"));

        // line 4
        echo "            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"toggle_buttons\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Startseite 
                  <span class=\"sr-only\">(current)</span></a></li>
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "                      <li>
                        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_course_showProgramByCategory", array("categoryId" => $this->getAttribute(            // line 12
$context["category"], "id", array()))), "html", null, true);
            echo "\">
                          ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                        </a>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7454efebfdd9886a291eec81a6d8bf13a8833956d845c0386284b3642823c075->leave($__internal_7454efebfdd9886a291eec81a6d8bf13a8833956d845c0386284b3642823c075_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a07d3a91a0b8779a360e05d1176303530a40bbcf6ed66df14c7f2e53fc3c826 = $this->env->getExtension("native_profiler");
        $__internal_2a07d3a91a0b8779a360e05d1176303530a40bbcf6ed66df14c7f2e53fc3c826->enter($__internal_2a07d3a91a0b8779a360e05d1176303530a40bbcf6ed66df14c7f2e53fc3c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    Index page
";
        
        $__internal_2a07d3a91a0b8779a360e05d1176303530a40bbcf6ed66df14c7f2e53fc3c826->leave($__internal_2a07d3a91a0b8779a360e05d1176303530a40bbcf6ed66df14c7f2e53fc3c826_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  78 => 19,  63 => 13,  59 => 12,  58 => 11,  55 => 10,  51 => 9,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block main_menu_links %}*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="toggle_buttons">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="{{ path('index') }}">Startseite */
/*                   <span class="sr-only">(current)</span></a></li>*/
/*                     {% for category in categories %}*/
/*                       <li>*/
/*                         <a href="{{ path('app_course_showProgramByCategory', */
/*                           {'categoryId': category.id}) }}">*/
/*                           {{category.name}}*/
/*                         </a>*/
/*                       </li>*/
/*                     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     Index page*/
/* {% endblock %}*/
/* */
