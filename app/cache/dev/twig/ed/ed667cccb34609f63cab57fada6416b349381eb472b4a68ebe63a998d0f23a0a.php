<?php

/* test.html.twig */
class __TwigTemplate_8ae1f92be90456c13a0dc344185e70d5fcb52a826c33ae97d059353a5fbd1086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fad68405bd3a94507be1fb46f8ef42450445fd1bc1d2ab0d86bac6cd78085ef1 = $this->env->getExtension("native_profiler");
        $__internal_fad68405bd3a94507be1fb46f8ef42450445fd1bc1d2ab0d86bac6cd78085ef1->enter($__internal_fad68405bd3a94507be1fb46f8ef42450445fd1bc1d2ab0d86bac6cd78085ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
  <head>
    
  </head>

  <body>
    Hello World
    <h1>Crawling Home Page</h1>
 
<p>Here's our crawling home page.</p>
 
<p>Please visit <a href=\"#\">this other page</a> too!</p>

 <h2> Es wurden ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))), "html", null, true);
        echo " Kurse gefunden </h2>
  </body>
</html>
";
        
        $__internal_fad68405bd3a94507be1fb46f8ef42450445fd1bc1d2ab0d86bac6cd78085ef1->leave($__internal_fad68405bd3a94507be1fb46f8ef42450445fd1bc1d2ab0d86bac6cd78085ef1_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="de">*/
/*   <head>*/
/*     */
/*   </head>*/
/* */
/*   <body>*/
/*     Hello World*/
/*     <h1>Crawling Home Page</h1>*/
/*  */
/* <p>Here's our crawling home page.</p>*/
/*  */
/* <p>Please visit <a href="#">this other page</a> too!</p>*/
/* */
/*  <h2> Es wurden {{ courses|length }} Kurse gefunden </h2>*/
/*   </body>*/
/* </html>*/
/* */
