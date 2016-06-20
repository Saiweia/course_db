<?php

/* default/viewCategory.html.twig */
class __TwigTemplate_5ea99c2c4ea44c0e955f494e91cb378a02e6c09bb039ce7978a693c09a13a79d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/viewCategory.html.twig", 1);
        $this->blocks = array(
            'main_menu_links' => array($this, 'block_main_menu_links'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'leftColumn' => array($this, 'block_leftColumn'),
            'contentDescription' => array($this, 'block_contentDescription'),
            'rightColumn' => array($this, 'block_rightColumn'),
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
        $__internal_d8188edc86a7b7944fb57afd8221613140d0fc2f3b8abfb3130166a50e730d7e = $this->env->getExtension("native_profiler");
        $__internal_d8188edc86a7b7944fb57afd8221613140d0fc2f3b8abfb3130166a50e730d7e->enter($__internal_d8188edc86a7b7944fb57afd8221613140d0fc2f3b8abfb3130166a50e730d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/viewCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8188edc86a7b7944fb57afd8221613140d0fc2f3b8abfb3130166a50e730d7e->leave($__internal_d8188edc86a7b7944fb57afd8221613140d0fc2f3b8abfb3130166a50e730d7e_prof);

    }

    // line 3
    public function block_main_menu_links($context, array $blocks = array())
    {
        $__internal_cd0e118d94bf2faf43b7ac93b6cc8f43f9c943ee080df3632d5035381d2d7d43 = $this->env->getExtension("native_profiler");
        $__internal_cd0e118d94bf2faf43b7ac93b6cc8f43f9c943ee080df3632d5035381d2d7d43->enter($__internal_cd0e118d94bf2faf43b7ac93b6cc8f43f9c943ee080df3632d5035381d2d7d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_links"));

        // line 4
        echo "            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"toggle_buttons\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
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
            echo "                      <!-- set class active depending on current Category -->
                      <li ";
            // line 11
            if (($this->getAttribute((isset($context["currentCat"]) ? $context["currentCat"] : $this->getContext($context, "currentCat")), "name", array()) == $this->getAttribute($context["category"], "name", array()))) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_course_showProgramByCategory", array("categoryId" => $this->getAttribute(            // line 13
$context["category"], "id", array()))), "html", null, true);
            echo "\">
                          ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                        </a>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_cd0e118d94bf2faf43b7ac93b6cc8f43f9c943ee080df3632d5035381d2d7d43->leave($__internal_cd0e118d94bf2faf43b7ac93b6cc8f43f9c943ee080df3632d5035381d2d7d43_prof);

    }

    // line 20
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_9daff2042e575923fff11473ad280aca24dbef7101d1281513057b6a84c0920d = $this->env->getExtension("native_profiler");
        $__internal_9daff2042e575923fff11473ad280aca24dbef7101d1281513057b6a84c0920d->enter($__internal_9daff2042e575923fff11473ad280aca24dbef7101d1281513057b6a84c0920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 21
        echo "  <h1>Unsere Kursangebote für \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentCat"]) ? $context["currentCat"] : $this->getContext($context, "currentCat")), "name", array()), "html", null, true);
        echo "\"</h1>
  <ol class=\"breadcrumb\">
    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("app_course_showProgramByCategory");
        echo "\">Startseite</a></li>
    <li class=\"active\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentCat"]) ? $context["currentCat"] : $this->getContext($context, "currentCat")), "name", array()), "html", null, true);
        echo "</li>
  </ol>
";
        
        $__internal_9daff2042e575923fff11473ad280aca24dbef7101d1281513057b6a84c0920d->leave($__internal_9daff2042e575923fff11473ad280aca24dbef7101d1281513057b6a84c0920d_prof);

    }

    // line 28
    public function block_leftColumn($context, array $blocks = array())
    {
        $__internal_ba0b191490c8e55815f9c7312f26d47f4664818f2a973fff7dd99090dcbf61b2 = $this->env->getExtension("native_profiler");
        $__internal_ba0b191490c8e55815f9c7312f26d47f4664818f2a973fff7dd99090dcbf61b2->enter($__internal_ba0b191490c8e55815f9c7312f26d47f4664818f2a973fff7dd99090dcbf61b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftColumn"));

        // line 29
        echo "  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"jumbotron\">
        ";
        // line 32
        $this->displayParentBlock("leftColumn", $context, $blocks);
        echo "
      </div>
    </div>
  </div>        
";
        
        $__internal_ba0b191490c8e55815f9c7312f26d47f4664818f2a973fff7dd99090dcbf61b2->leave($__internal_ba0b191490c8e55815f9c7312f26d47f4664818f2a973fff7dd99090dcbf61b2_prof);

    }

    // line 38
    public function block_contentDescription($context, array $blocks = array())
    {
        $__internal_0751dcce512692aa029af7df6a2d8e9344b67cfc7db9948170f6d5cd686bc1df = $this->env->getExtension("native_profiler");
        $__internal_0751dcce512692aa029af7df6a2d8e9344b67cfc7db9948170f6d5cd686bc1df->enter($__internal_0751dcce512692aa029af7df6a2d8e9344b67cfc7db9948170f6d5cd686bc1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentDescription"));

        echo " <!-- decription of category goes here -->
  Hier kann ein beschreibender Text für die jeweilige Kategorie stehen              
";
        
        $__internal_0751dcce512692aa029af7df6a2d8e9344b67cfc7db9948170f6d5cd686bc1df->leave($__internal_0751dcce512692aa029af7df6a2d8e9344b67cfc7db9948170f6d5cd686bc1df_prof);

    }

    // line 42
    public function block_rightColumn($context, array $blocks = array())
    {
        $__internal_3334086858de62f62035c0c9691104bf26e2f5019f0c7a180d99955deec1be3e = $this->env->getExtension("native_profiler");
        $__internal_3334086858de62f62035c0c9691104bf26e2f5019f0c7a180d99955deec1be3e->enter($__internal_3334086858de62f62035c0c9691104bf26e2f5019f0c7a180d99955deec1be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightColumn"));

        echo " <!-- deviding page for layout purposes -->
  <!-- leave right column empty -->
";
        
        $__internal_3334086858de62f62035c0c9691104bf26e2f5019f0c7a180d99955deec1be3e->leave($__internal_3334086858de62f62035c0c9691104bf26e2f5019f0c7a180d99955deec1be3e_prof);

    }

    // line 46
    public function block_wholeColumn($context, array $blocks = array())
    {
        $__internal_855eaa07fbe80020c407d3b464f20ac6980a3e99e440b27fd168eb16da1304ca = $this->env->getExtension("native_profiler");
        $__internal_855eaa07fbe80020c407d3b464f20ac6980a3e99e440b27fd168eb16da1304ca->enter($__internal_855eaa07fbe80020c407d3b464f20ac6980a3e99e440b27fd168eb16da1304ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumn"));

        echo " 
   <div class=\"row\">
    <div class=\"col-sm-12\">
      ";
        // line 49
        $this->displayParentBlock("wholeColumn", $context, $blocks);
        echo "
    </div>
  </div>   
";
        
        $__internal_855eaa07fbe80020c407d3b464f20ac6980a3e99e440b27fd168eb16da1304ca->leave($__internal_855eaa07fbe80020c407d3b464f20ac6980a3e99e440b27fd168eb16da1304ca_prof);

    }

    // line 54
    public function block_foundCourses($context, array $blocks = array())
    {
        $__internal_23050fa36e6e5d906f8b5128edf5e06306ad9d52e0e70f676aee23c980a4d3eb = $this->env->getExtension("native_profiler");
        $__internal_23050fa36e6e5d906f8b5128edf5e06306ad9d52e0e70f676aee23c980a4d3eb->enter($__internal_23050fa36e6e5d906f8b5128edf5e06306ad9d52e0e70f676aee23c980a4d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foundCourses"));

        // line 55
        echo "  <h2> Es wurden ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))), "html", null, true);
        echo " Kurse gefunden </h2>
";
        
        $__internal_23050fa36e6e5d906f8b5128edf5e06306ad9d52e0e70f676aee23c980a4d3eb->leave($__internal_23050fa36e6e5d906f8b5128edf5e06306ad9d52e0e70f676aee23c980a4d3eb_prof);

    }

    // line 58
    public function block_wholeColumnSection($context, array $blocks = array())
    {
        $__internal_72caed305e9869db1fe480179afd8c318513ed4abaa83922ccecf92fbfe3331b = $this->env->getExtension("native_profiler");
        $__internal_72caed305e9869db1fe480179afd8c318513ed4abaa83922ccecf92fbfe3331b->enter($__internal_72caed305e9869db1fe480179afd8c318513ed4abaa83922ccecf92fbfe3331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumnSection"));

        // line 59
        echo "  <table class=\"table table-responsive table-hover table-striped table-bordered\"> 
    ";
        // line 60
        $this->displayParentBlock("wholeColumnSection", $context, $blocks);
        echo "
  </table>
";
        
        $__internal_72caed305e9869db1fe480179afd8c318513ed4abaa83922ccecf92fbfe3331b->leave($__internal_72caed305e9869db1fe480179afd8c318513ed4abaa83922ccecf92fbfe3331b_prof);

    }

    // line 64
    public function block_tableHeader($context, array $blocks = array())
    {
        $__internal_8ac06425a58778a5f6ad0178b4fffb9ce90fb285b98a08ae24251610911da9e5 = $this->env->getExtension("native_profiler");
        $__internal_8ac06425a58778a5f6ad0178b4fffb9ce90fb285b98a08ae24251610911da9e5->enter($__internal_8ac06425a58778a5f6ad0178b4fffb9ce90fb285b98a08ae24251610911da9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeader"));

        // line 65
        echo "  <tr> 
    <th>Was?</th> 
    <th>Für wen?</th> 
    <th>Belegung</th> 
  </tr>
";
        
        $__internal_8ac06425a58778a5f6ad0178b4fffb9ce90fb285b98a08ae24251610911da9e5->leave($__internal_8ac06425a58778a5f6ad0178b4fffb9ce90fb285b98a08ae24251610911da9e5_prof);

    }

    // line 72
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_65fa2e06ec0d8710132ff09281e261de09dc9456304c840ad6be4c3e38042f3b = $this->env->getExtension("native_profiler");
        $__internal_65fa2e06ec0d8710132ff09281e261de09dc9456304c840ad6be4c3e38042f3b->enter($__internal_65fa2e06ec0d8710132ff09281e261de09dc9456304c840ad6be4c3e38042f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        echo "  <!-- table showing available courses by Category -->
  <!-- fetching course data from array -->
  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 75
            echo "    <tr>
      <td>
        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_course_showCourseDetailsByCourseId", array("categoryId" => $this->getAttribute((isset($context["currentCat"]) ? $context["currentCat"] : $this->getContext($context, "currentCat")), "id", array()), "courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "
        </a>
      </td>
      <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "targetGroup", array()), "html", null, true);
            echo "</td> 
      <!-- set background depending on available course places -->
      <td ";
            // line 83
            if ((($this->getAttribute($context["course"], "availablePlaces", array()) - $this->getAttribute($context["course"], "booked", array())) < 1)) {
                echo " class=\"danger\" 
          ";
            } elseif ((((100 * $this->getAttribute(            // line 84
$context["course"], "booked", array())) / $this->getAttribute($context["course"], "availablePlaces", array())) >= 80)) {
                echo " class=\"warning\"
          ";
            } else {
                // line 85
                echo " class=\"success\" ";
            }
            echo ">
          noch ";
            // line 86
            echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "availablePlaces", array()) - $this->getAttribute($context["course"], "booked", array())), "html", null, true);
            echo " Plätze frei 
      </td>
    </tr> 
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_65fa2e06ec0d8710132ff09281e261de09dc9456304c840ad6be4c3e38042f3b->leave($__internal_65fa2e06ec0d8710132ff09281e261de09dc9456304c840ad6be4c3e38042f3b_prof);

    }

    public function getTemplateName()
    {
        return "default/viewCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 86,  284 => 85,  279 => 84,  275 => 83,  270 => 81,  264 => 78,  260 => 77,  256 => 75,  252 => 74,  243 => 72,  231 => 65,  225 => 64,  215 => 60,  212 => 59,  206 => 58,  196 => 55,  190 => 54,  179 => 49,  169 => 46,  155 => 42,  141 => 38,  129 => 32,  124 => 29,  118 => 28,  108 => 24,  104 => 23,  98 => 21,  92 => 20,  77 => 14,  73 => 13,  72 => 12,  66 => 11,  63 => 10,  59 => 9,  54 => 7,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block main_menu_links %}*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="toggle_buttons">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ path('index') }}">Startseite */
/*                   <span class="sr-only">(current)</span></a></li>*/
/*                     {% for category in categories %}*/
/*                       <!-- set class active depending on current Category -->*/
/*                       <li {% if currentCat.name == category.name %}class="active"{% endif %}>*/
/*                         <a href="{{ path('app_course_showProgramByCategory', */
/*                           {'categoryId': category.id}) }}">*/
/*                           {{category.name}}*/
/*                         </a>*/
/*                       </li>*/
/*                     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block pageTitle %}*/
/*   <h1>Unsere Kursangebote für "{{ currentCat.name }}"</h1>*/
/*   <ol class="breadcrumb">*/
/*     <li><a href="{{ path('app_course_showProgramByCategory') }}">Startseite</a></li>*/
/*     <li class="active">{{ currentCat.name }}</li>*/
/*   </ol>*/
/* {% endblock %} */
/* */
/* {% block leftColumn %}*/
/*   <div class="row">*/
/*     <div class="col-md-6">*/
/*       <div class="jumbotron">*/
/*         {{ parent() }}*/
/*       </div>*/
/*     </div>*/
/*   </div>        */
/* {% endblock leftColumn %}*/
/*   */
/* {% block contentDescription %} <!-- decription of category goes here -->*/
/*   Hier kann ein beschreibender Text für die jeweilige Kategorie stehen              */
/* {% endblock %} */
/* */
/* {% block rightColumn %} <!-- deviding page for layout purposes -->*/
/*   <!-- leave right column empty -->*/
/* {% endblock %} */
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
/*   <h2> Es wurden {{ courses|length }} Kurse gefunden </h2>*/
/* {% endblock %} */
/* */
/* {% block wholeColumnSection %}*/
/*   <table class="table table-responsive table-hover table-striped table-bordered"> */
/*     {{ parent() }}*/
/*   </table>*/
/* {% endblock %}*/
/* */
/* {% block tableHeader %}*/
/*   <tr> */
/*     <th>Was?</th> */
/*     <th>Für wen?</th> */
/*     <th>Belegung</th> */
/*   </tr>*/
/* {% endblock %}*/
/* */
/* {% block tableBody %}  <!-- table showing available courses by Category -->*/
/*   <!-- fetching course data from array -->*/
/*   {% for course in courses %}*/
/*     <tr>*/
/*       <td>*/
/*         <a href="{{ path('app_course_showCourseDetailsByCourseId', {'categoryId' : currentCat.id, 'courseId': course.id} ) }}">*/
/*           {{ course.name }}*/
/*         </a>*/
/*       </td>*/
/*       <td>{{ course.targetGroup }}</td> */
/*       <!-- set background depending on available course places -->*/
/*       <td {% if course.availablePlaces - course.booked < 1 %} class="danger" */
/*           {% elseif 100 * course.booked / course.availablePlaces >= 80 %} class="warning"*/
/*           {% else %} class="success" {% endif %}>*/
/*           noch {{ course.availablePlaces - course.booked }} Plätze frei */
/*       </td>*/
/*     </tr> */
/*   {% endfor %}*/
/* {% endblock %} */
/*      */
/*   */
