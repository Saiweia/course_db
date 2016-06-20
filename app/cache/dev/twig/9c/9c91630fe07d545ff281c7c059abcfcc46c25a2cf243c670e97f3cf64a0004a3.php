<?php

/* user/userIndex.html.twig */
class __TwigTemplate_ed1cfbd7005ab2b700096fa284d0a6cf390f7435a693c96fd868d3225ff3fe11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/userIndex.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'leftColumn' => array($this, 'block_leftColumn'),
            'leftColumnSection' => array($this, 'block_leftColumnSection'),
            'rightColumn' => array($this, 'block_rightColumn'),
            'rightColumnSection' => array($this, 'block_rightColumnSection'),
            'wholeColumn' => array($this, 'block_wholeColumn'),
            'foundCourses' => array($this, 'block_foundCourses'),
            'wholeColumnSection' => array($this, 'block_wholeColumnSection'),
            'tableHeader' => array($this, 'block_tableHeader'),
            'tableBody' => array($this, 'block_tableBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bf6e91c721dfe028ab921277c23c5c086e38bc76702e8b55d5566ef9b767f1c = $this->env->getExtension("native_profiler");
        $__internal_7bf6e91c721dfe028ab921277c23c5c086e38bc76702e8b55d5566ef9b767f1c->enter($__internal_7bf6e91c721dfe028ab921277c23c5c086e38bc76702e8b55d5566ef9b767f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/userIndex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf6e91c721dfe028ab921277c23c5c086e38bc76702e8b55d5566ef9b767f1c->leave($__internal_7bf6e91c721dfe028ab921277c23c5c086e38bc76702e8b55d5566ef9b767f1c_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_f0667b4e40d63f88a9e588691aa0ab535cb7116534bae8a650d2b63934e214ae = $this->env->getExtension("native_profiler");
        $__internal_f0667b4e40d63f88a9e588691aa0ab535cb7116534bae8a650d2b63934e214ae->enter($__internal_f0667b4e40d63f88a9e588691aa0ab535cb7116534bae8a650d2b63934e214ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "    <h1>Herzlich Willkommen ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " </h1>
  ";
        }
        
        $__internal_f0667b4e40d63f88a9e588691aa0ab535cb7116534bae8a650d2b63934e214ae->leave($__internal_f0667b4e40d63f88a9e588691aa0ab535cb7116534bae8a650d2b63934e214ae_prof);

    }

    // line 9
    public function block_leftColumn($context, array $blocks = array())
    {
        $__internal_f25ea2c394b335d41e085249bd5fc70c0ade0f02a1abff4632edb02f04010370 = $this->env->getExtension("native_profiler");
        $__internal_f25ea2c394b335d41e085249bd5fc70c0ade0f02a1abff4632edb02f04010370->enter($__internal_f25ea2c394b335d41e085249bd5fc70c0ade0f02a1abff4632edb02f04010370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftColumn"));

        
        $__internal_f25ea2c394b335d41e085249bd5fc70c0ade0f02a1abff4632edb02f04010370->leave($__internal_f25ea2c394b335d41e085249bd5fc70c0ade0f02a1abff4632edb02f04010370_prof);

    }

    // line 12
    public function block_leftColumnSection($context, array $blocks = array())
    {
        $__internal_2d376807ead3521b99287db906838c740a027552fa6043901f1d5a06df58e905 = $this->env->getExtension("native_profiler");
        $__internal_2d376807ead3521b99287db906838c740a027552fa6043901f1d5a06df58e905->enter($__internal_2d376807ead3521b99287db906838c740a027552fa6043901f1d5a06df58e905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftColumnSection"));

        echo " <!-- decription goes in here -->
";
        
        $__internal_2d376807ead3521b99287db906838c740a027552fa6043901f1d5a06df58e905->leave($__internal_2d376807ead3521b99287db906838c740a027552fa6043901f1d5a06df58e905_prof);

    }

    // line 15
    public function block_rightColumn($context, array $blocks = array())
    {
        $__internal_c9d5b5edf1ada35afb7c2929c2b84784020156a21ca34cdd3f06676ff0198193 = $this->env->getExtension("native_profiler");
        $__internal_c9d5b5edf1ada35afb7c2929c2b84784020156a21ca34cdd3f06676ff0198193->enter($__internal_c9d5b5edf1ada35afb7c2929c2b84784020156a21ca34cdd3f06676ff0198193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightColumn"));

        echo " <!-- deviding page for layout purposes -->
";
        
        $__internal_c9d5b5edf1ada35afb7c2929c2b84784020156a21ca34cdd3f06676ff0198193->leave($__internal_c9d5b5edf1ada35afb7c2929c2b84784020156a21ca34cdd3f06676ff0198193_prof);

    }

    // line 18
    public function block_rightColumnSection($context, array $blocks = array())
    {
        $__internal_78ab28fb19f1341d0eae58c06f4423d1a4d160c791f204c38506ec3705cab931 = $this->env->getExtension("native_profiler");
        $__internal_78ab28fb19f1341d0eae58c06f4423d1a4d160c791f204c38506ec3705cab931->enter($__internal_78ab28fb19f1341d0eae58c06f4423d1a4d160c791f204c38506ec3705cab931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightColumnSection"));

        
        $__internal_78ab28fb19f1341d0eae58c06f4423d1a4d160c791f204c38506ec3705cab931->leave($__internal_78ab28fb19f1341d0eae58c06f4423d1a4d160c791f204c38506ec3705cab931_prof);

    }

    // line 21
    public function block_wholeColumn($context, array $blocks = array())
    {
        $__internal_d5c7d177e14190aa4c266421d821ed699aab75c284a8d970e4ec7a93978c4795 = $this->env->getExtension("native_profiler");
        $__internal_d5c7d177e14190aa4c266421d821ed699aab75c284a8d970e4ec7a93978c4795->enter($__internal_d5c7d177e14190aa4c266421d821ed699aab75c284a8d970e4ec7a93978c4795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumn"));

        echo " 
   <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 24
        $this->displayParentBlock("wholeColumn", $context, $blocks);
        echo "
    </div>
  </div>   
";
        
        $__internal_d5c7d177e14190aa4c266421d821ed699aab75c284a8d970e4ec7a93978c4795->leave($__internal_d5c7d177e14190aa4c266421d821ed699aab75c284a8d970e4ec7a93978c4795_prof);

    }

    // line 29
    public function block_foundCourses($context, array $blocks = array())
    {
        $__internal_860075a224d7c6a444e73a1e31b12b2a8b5d84fadca961ecd101a712e2bc0555 = $this->env->getExtension("native_profiler");
        $__internal_860075a224d7c6a444e73a1e31b12b2a8b5d84fadca961ecd101a712e2bc0555->enter($__internal_860075a224d7c6a444e73a1e31b12b2a8b5d84fadca961ecd101a712e2bc0555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foundCourses"));

        // line 30
        echo "  <h2> Es wurden ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))), "html", null, true);
        echo " Kurse gefunden. </h2>
";
        
        $__internal_860075a224d7c6a444e73a1e31b12b2a8b5d84fadca961ecd101a712e2bc0555->leave($__internal_860075a224d7c6a444e73a1e31b12b2a8b5d84fadca961ecd101a712e2bc0555_prof);

    }

    // line 35
    public function block_wholeColumnSection($context, array $blocks = array())
    {
        $__internal_a32204c0ecbb78b0c602e6b501969e3133c66080a6a607a0b17d1a5b23f62d75 = $this->env->getExtension("native_profiler");
        $__internal_a32204c0ecbb78b0c602e6b501969e3133c66080a6a607a0b17d1a5b23f62d75->enter($__internal_a32204c0ecbb78b0c602e6b501969e3133c66080a6a607a0b17d1a5b23f62d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumnSection"));

        // line 36
        echo "  <div class=\"pull-right\"> 
    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("user_new_course");
        echo "\" class=\"btn btn-primary\">Neuen Kurs anlegen</a>
  </div>
  <table class=\"table table-responsive table-hover table-striped table-bordered\"> 
    ";
        // line 40
        $this->displayParentBlock("wholeColumnSection", $context, $blocks);
        echo "
  </table>
";
        
        $__internal_a32204c0ecbb78b0c602e6b501969e3133c66080a6a607a0b17d1a5b23f62d75->leave($__internal_a32204c0ecbb78b0c602e6b501969e3133c66080a6a607a0b17d1a5b23f62d75_prof);

    }

    // line 44
    public function block_tableHeader($context, array $blocks = array())
    {
        $__internal_2b00ddbb92f7d578cd78085fa969d75f31a7e62fdaf57df47e5c8d685fe92461 = $this->env->getExtension("native_profiler");
        $__internal_2b00ddbb92f7d578cd78085fa969d75f31a7e62fdaf57df47e5c8d685fe92461->enter($__internal_2b00ddbb92f7d578cd78085fa969d75f31a7e62fdaf57df47e5c8d685fe92461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeader"));

        // line 45
        echo "  <tr> 
    <th>Kursnummer</th> 
    <th>Kursname</th> 
    <th>Erster Kurstermin</th> 
    <th>Teilnehmer</th> 
    <th></th>
    
  </tr>
";
        
        $__internal_2b00ddbb92f7d578cd78085fa969d75f31a7e62fdaf57df47e5c8d685fe92461->leave($__internal_2b00ddbb92f7d578cd78085fa969d75f31a7e62fdaf57df47e5c8d685fe92461_prof);

    }

    // line 55
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_f478c1916c0569bf7a6fd75c671e62088ed5971f1aa2a4031038a53259b9ddf9 = $this->env->getExtension("native_profiler");
        $__internal_f478c1916c0569bf7a6fd75c671e62088ed5971f1aa2a4031038a53259b9ddf9->enter($__internal_f478c1916c0569bf7a6fd75c671e62088ed5971f1aa2a4031038a53259b9ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        echo "  <!-- table showing available courses by Category -->
  <!-- fetching course data from array -->
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 58
            echo "    <tr>
      <td>
        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "number", array()), "html", null, true);
            echo "
       </td>
      <td>
        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "
       </td>
      <td>
        ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["course"], "dates", array())), "date", array()), "d.m.Y"), "html", null, true);
            echo "
      </td>
      <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "booked", array()), "html", null, true);
            echo "</td> 
      <td>
        <button type=\"button\" class=\"btn btn-success\">Ansehen</button>
        <button type=\"button\" class=\"btn btn-default\">Bearbeiten</button>
        <button type=\"button\" class=\"btn btn-danger\">Löschen</button>
      </td>
    </tr> 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f478c1916c0569bf7a6fd75c671e62088ed5971f1aa2a4031038a53259b9ddf9->leave($__internal_f478c1916c0569bf7a6fd75c671e62088ed5971f1aa2a4031038a53259b9ddf9_prof);

    }

    public function getTemplateName()
    {
        return "user/userIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 68,  225 => 66,  219 => 63,  213 => 60,  209 => 58,  205 => 57,  196 => 55,  181 => 45,  175 => 44,  165 => 40,  159 => 37,  156 => 36,  150 => 35,  140 => 30,  134 => 29,  123 => 24,  113 => 21,  102 => 18,  89 => 15,  76 => 12,  65 => 9,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*     <h1>Herzlich Willkommen {{ app.user.firstName }} {{ app.user.name }} </h1>*/
/*   {% endif %}*/
/* {% endblock %} */
/* */
/* {% block leftColumn %}*/
/* {% endblock leftColumn %}*/
/*   */
/* {% block leftColumnSection %} <!-- decription goes in here -->*/
/* {% endblock %} */
/*   */
/* {% block rightColumn %} <!-- deviding page for layout purposes -->*/
/* {% endblock %} */
/* */
/* {% block rightColumnSection %}*/
/* {% endblock %}*/
/* */
/* {% block wholeColumn %} */
/*    <div class="row">*/
/*     <div class="col-sm-12">*/
/*       {{ parent() }}*/
/*     </div>*/
/*   </div>   */
/* {% endblock %}*/
/* */
/* {% block foundCourses %}*/
/*   <h2> Es wurden {{ courses|length }} Kurse gefunden. </h2>*/
/* {% endblock %} */
/* */
/* */
/* */
/* {% block wholeColumnSection %}*/
/*   <div class="pull-right"> */
/*     <a href="{{ path('user_new_course') }}" class="btn btn-primary">Neuen Kurs anlegen</a>*/
/*   </div>*/
/*   <table class="table table-responsive table-hover table-striped table-bordered"> */
/*     {{ parent() }}*/
/*   </table>*/
/* {% endblock %}*/
/* */
/* {% block tableHeader %}*/
/*   <tr> */
/*     <th>Kursnummer</th> */
/*     <th>Kursname</th> */
/*     <th>Erster Kurstermin</th> */
/*     <th>Teilnehmer</th> */
/*     <th></th>*/
/*     */
/*   </tr>*/
/* {% endblock %}*/
/* */
/* {% block tableBody %}  <!-- table showing available courses by Category -->*/
/*   <!-- fetching course data from array -->*/
/*   {% for course in courses %}*/
/*     <tr>*/
/*       <td>*/
/*         {{ course.number }}*/
/*        </td>*/
/*       <td>*/
/*         {{ course.name }}*/
/*        </td>*/
/*       <td>*/
/*         {{ course.dates|first.date|date("d.m.Y") }}*/
/*       </td>*/
/*       <td>{{ course.booked }}</td> */
/*       <td>*/
/*         <button type="button" class="btn btn-success">Ansehen</button>*/
/*         <button type="button" class="btn btn-default">Bearbeiten</button>*/
/*         <button type="button" class="btn btn-danger">Löschen</button>*/
/*       </td>*/
/*     </tr> */
/*   {% endfor %}*/
/* {% endblock %} */
/*      */
/* */
