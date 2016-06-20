<?php

/* base.html.twig */
class __TwigTemplate_1453cba3cbe4316a0480fd4f5ea6de41e5600d01378526bbbb4ec6bfdf8ea465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'main_menu_links' => array($this, 'block_main_menu_links'),
            'body' => array($this, 'block_body'),
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79437f866e277b413dfd827ed66d26a366d87d756f4d6130d7b5f0f9dab0ed6d = $this->env->getExtension("native_profiler");
        $__internal_79437f866e277b413dfd827ed66d26a366d87d756f4d6130d7b5f0f9dab0ed6d->enter($__internal_79437f866e277b413dfd827ed66d26a366d87d756f4d6130d7b5f0f9dab0ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta name=\"author\" content=\"Sylvia Klatt\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
    ";
        // line 32
        $this->displayBlock('navbar', $context, $blocks);
        // line 91
        echo " <!-- end block navbar -->

    <!-- main content goes here -->
    <div class=\"container\">
      ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo " <!-- endblock wholeColum -->

    ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "  </body>
</html>
";
        
        $__internal_79437f866e277b413dfd827ed66d26a366d87d756f4d6130d7b5f0f9dab0ed6d->leave($__internal_79437f866e277b413dfd827ed66d26a366d87d756f4d6130d7b5f0f9dab0ed6d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9972fbb3330170123d2d4811bf0124c20993be5d1a390dde81b83d32d94ee38 = $this->env->getExtension("native_profiler");
        $__internal_d9972fbb3330170123d2d4811bf0124c20993be5d1a390dde81b83d32d94ee38->enter($__internal_d9972fbb3330170123d2d4811bf0124c20993be5d1a390dde81b83d32d94ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "        <title>Der Bildungsserver</title>
    ";
        
        $__internal_d9972fbb3330170123d2d4811bf0124c20993be5d1a390dde81b83d32d94ee38->leave($__internal_d9972fbb3330170123d2d4811bf0124c20993be5d1a390dde81b83d32d94ee38_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1ea840e3c88dae40456103a671987b98c62f6fa9e7d22454de9d44c8a5308c6 = $this->env->getExtension("native_profiler");
        $__internal_c1ea840e3c88dae40456103a671987b98c62f6fa9e7d22454de9d44c8a5308c6->enter($__internal_c1ea840e3c88dae40456103a671987b98c62f6fa9e7d22454de9d44c8a5308c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        
    ";
        
        $__internal_c1ea840e3c88dae40456103a671987b98c62f6fa9e7d22454de9d44c8a5308c6->leave($__internal_c1ea840e3c88dae40456103a671987b98c62f6fa9e7d22454de9d44c8a5308c6_prof);

    }

    // line 32
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_926b0854183c88fad61be2e5a72c459da5c42b45234c07d7a846bd452d591a12 = $this->env->getExtension("native_profiler");
        $__internal_926b0854183c88fad61be2e5a72c459da5c42b45234c07d7a846bd452d591a12->enter($__internal_926b0854183c88fad61be2e5a72c459da5c42b45234c07d7a846bd452d591a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 33
        echo "      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#toggle_buttons\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("app_course_showProgramByCategory");
        echo "\">
              Der Bildungsserver
            </a>
          </div>
          ";
        // line 47
        $this->displayBlock('main_menu_links', $context, $blocks);
        // line 62
        echo "            </ul>
            <form class=\"navbar-form navbar-left\" role=\"search\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
              </div>
              <button type=\"submit\" class=\"btn btn-default\">Suchen</button>
            </form>


            <!-- if authenticated show dropdown with menu for user, else show login button -->
            <ul class=\"nav navbar-nav navbar-right\">
             ";
        // line 73
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("app_user_showCoursesByUserId");
            echo "\">Meine Kurse</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/logout\">Logout</a></li>
                  </ul>
                </li>
              ";
        } else {
            // line 85
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login für Kursleiter</a></li>
              ";
        }
        // line 87
        echo "            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    ";
        
        $__internal_926b0854183c88fad61be2e5a72c459da5c42b45234c07d7a846bd452d591a12->leave($__internal_926b0854183c88fad61be2e5a72c459da5c42b45234c07d7a846bd452d591a12_prof);

    }

    // line 47
    public function block_main_menu_links($context, array $blocks = array())
    {
        $__internal_a1f434bc28c7af36d8c65fe05539308bdcb68035720734c384aa37dd69ae3a29 = $this->env->getExtension("native_profiler");
        $__internal_a1f434bc28c7af36d8c65fe05539308bdcb68035720734c384aa37dd69ae3a29->enter($__internal_a1f434bc28c7af36d8c65fe05539308bdcb68035720734c384aa37dd69ae3a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_links"));

        // line 48
        echo "            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"toggle_buttons\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Startseite 
                  <span class=\"sr-only\">(current)</span></a></li>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 54
            echo "                      <li>
                        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_course_showProgramByCategory", array("categoryId" => $this->getAttribute(            // line 56
$context["category"], "id", array()))), "html", null, true);
            echo "\">
                          ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                        </a>
                      </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "          ";
        
        $__internal_a1f434bc28c7af36d8c65fe05539308bdcb68035720734c384aa37dd69ae3a29->leave($__internal_a1f434bc28c7af36d8c65fe05539308bdcb68035720734c384aa37dd69ae3a29_prof);

    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f798cc0a2943b77087535d657eea12a65cc6f0d3c53724d19939af9e7e550e6 = $this->env->getExtension("native_profiler");
        $__internal_5f798cc0a2943b77087535d657eea12a65cc6f0d3c53724d19939af9e7e550e6->enter($__internal_5f798cc0a2943b77087535d657eea12a65cc6f0d3c53724d19939af9e7e550e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "        <div class=\"starter-template\">
          ";
        // line 97
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 98
        echo "  <!-- endblock mainTitle -->
        </div>
        
        ";
        // line 101
        $this->displayBlock('leftColumn', $context, $blocks);
        // line 105
        echo "  <!-- endblock leftColumn -->

        ";
        // line 107
        $this->displayBlock('rightColumn', $context, $blocks);
        // line 110
        echo " <!-- endblock rightColumn -->

        ";
        // line 112
        $this->displayBlock('wholeColumn', $context, $blocks);
        // line 129
        echo " <!-- endblock container -->
      </div><!-- /.container -->
    ";
        
        $__internal_5f798cc0a2943b77087535d657eea12a65cc6f0d3c53724d19939af9e7e550e6->leave($__internal_5f798cc0a2943b77087535d657eea12a65cc6f0d3c53724d19939af9e7e550e6_prof);

    }

    // line 97
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6a67f108194409fd71afaa81a928b6fe6cf03d53f14b76e4d6dd1a9b6325fd91 = $this->env->getExtension("native_profiler");
        $__internal_6a67f108194409fd71afaa81a928b6fe6cf03d53f14b76e4d6dd1a9b6325fd91->enter($__internal_6a67f108194409fd71afaa81a928b6fe6cf03d53f14b76e4d6dd1a9b6325fd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 98
        echo "          ";
        
        $__internal_6a67f108194409fd71afaa81a928b6fe6cf03d53f14b76e4d6dd1a9b6325fd91->leave($__internal_6a67f108194409fd71afaa81a928b6fe6cf03d53f14b76e4d6dd1a9b6325fd91_prof);

    }

    // line 101
    public function block_leftColumn($context, array $blocks = array())
    {
        $__internal_5991ab7555a20ee4da50e316289d274acd96a93558e5746ddc5fdf583a9da02c = $this->env->getExtension("native_profiler");
        $__internal_5991ab7555a20ee4da50e316289d274acd96a93558e5746ddc5fdf583a9da02c->enter($__internal_5991ab7555a20ee4da50e316289d274acd96a93558e5746ddc5fdf583a9da02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftColumn"));

        echo " <!-- deviding page for layout purposes -->
          <!-- decription of category goes in here -->
          ";
        // line 103
        $this->displayBlock('leftColumnSection', $context, $blocks);
        // line 104
        echo " <!-- endblock categoryContent -->
        ";
        
        $__internal_5991ab7555a20ee4da50e316289d274acd96a93558e5746ddc5fdf583a9da02c->leave($__internal_5991ab7555a20ee4da50e316289d274acd96a93558e5746ddc5fdf583a9da02c_prof);

    }

    // line 103
    public function block_leftColumnSection($context, array $blocks = array())
    {
        $__internal_0be3d28f2d480211950bad0d5ef80ee3ae9f480c40ca83f2c985550040afc19c = $this->env->getExtension("native_profiler");
        $__internal_0be3d28f2d480211950bad0d5ef80ee3ae9f480c40ca83f2c985550040afc19c->enter($__internal_0be3d28f2d480211950bad0d5ef80ee3ae9f480c40ca83f2c985550040afc19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftColumnSection"));

        // line 104
        echo "          ";
        
        $__internal_0be3d28f2d480211950bad0d5ef80ee3ae9f480c40ca83f2c985550040afc19c->leave($__internal_0be3d28f2d480211950bad0d5ef80ee3ae9f480c40ca83f2c985550040afc19c_prof);

    }

    // line 107
    public function block_rightColumn($context, array $blocks = array())
    {
        $__internal_012b507f756f3b5a2a0df6fd60dcc84c05800921913766eb8a657ff9014e0af1 = $this->env->getExtension("native_profiler");
        $__internal_012b507f756f3b5a2a0df6fd60dcc84c05800921913766eb8a657ff9014e0af1->enter($__internal_012b507f756f3b5a2a0df6fd60dcc84c05800921913766eb8a657ff9014e0af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightColumn"));

        echo " <!-- deviding page for layout purposes -->
          ";
        // line 108
        $this->displayBlock('rightColumnSection', $context, $blocks);
        // line 110
        echo "        ";
        
        $__internal_012b507f756f3b5a2a0df6fd60dcc84c05800921913766eb8a657ff9014e0af1->leave($__internal_012b507f756f3b5a2a0df6fd60dcc84c05800921913766eb8a657ff9014e0af1_prof);

    }

    // line 108
    public function block_rightColumnSection($context, array $blocks = array())
    {
        $__internal_a9a62a810dd9b5db7dedb8a29c549c666483c43aa52de3064b5731fff7ba5f1c = $this->env->getExtension("native_profiler");
        $__internal_a9a62a810dd9b5db7dedb8a29c549c666483c43aa52de3064b5731fff7ba5f1c->enter($__internal_a9a62a810dd9b5db7dedb8a29c549c666483c43aa52de3064b5731fff7ba5f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightColumnSection"));

        echo " <!-- table providing detailed course information -->
          ";
        
        $__internal_a9a62a810dd9b5db7dedb8a29c549c666483c43aa52de3064b5731fff7ba5f1c->leave($__internal_a9a62a810dd9b5db7dedb8a29c549c666483c43aa52de3064b5731fff7ba5f1c_prof);

    }

    // line 112
    public function block_wholeColumn($context, array $blocks = array())
    {
        $__internal_0b360cc37cb156a1b9dca8216e6b841f3e0aae7bb17c01c62ff0a1be6ea4f112 = $this->env->getExtension("native_profiler");
        $__internal_0b360cc37cb156a1b9dca8216e6b841f3e0aae7bb17c01c62ff0a1be6ea4f112->enter($__internal_0b360cc37cb156a1b9dca8216e6b841f3e0aae7bb17c01c62ff0a1be6ea4f112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumn"));

        // line 113
        echo "          <!-- announces the number of courses found -->
          ";
        // line 114
        $this->displayBlock('foundCourses', $context, $blocks);
        // line 115
        echo " <!-- endblock foundCourses -->

          <!-- table showing available courses -->
          ";
        // line 118
        $this->displayBlock('wholeColumnSection', $context, $blocks);
        // line 128
        echo " <!-- endblock wholeColumnSection -->
        ";
        
        $__internal_0b360cc37cb156a1b9dca8216e6b841f3e0aae7bb17c01c62ff0a1be6ea4f112->leave($__internal_0b360cc37cb156a1b9dca8216e6b841f3e0aae7bb17c01c62ff0a1be6ea4f112_prof);

    }

    // line 114
    public function block_foundCourses($context, array $blocks = array())
    {
        $__internal_fbe8bacecb618aa1a22bb9d04cbc07a26c92c46e2f2f29b7f8374688f1293d39 = $this->env->getExtension("native_profiler");
        $__internal_fbe8bacecb618aa1a22bb9d04cbc07a26c92c46e2f2f29b7f8374688f1293d39->enter($__internal_fbe8bacecb618aa1a22bb9d04cbc07a26c92c46e2f2f29b7f8374688f1293d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foundCourses"));

        // line 115
        echo "          ";
        
        $__internal_fbe8bacecb618aa1a22bb9d04cbc07a26c92c46e2f2f29b7f8374688f1293d39->leave($__internal_fbe8bacecb618aa1a22bb9d04cbc07a26c92c46e2f2f29b7f8374688f1293d39_prof);

    }

    // line 118
    public function block_wholeColumnSection($context, array $blocks = array())
    {
        $__internal_8bb40f486d6cd45030368e067d0df12900e27efc5bdbf5d50bcad50e229414c1 = $this->env->getExtension("native_profiler");
        $__internal_8bb40f486d6cd45030368e067d0df12900e27efc5bdbf5d50bcad50e229414c1->enter($__internal_8bb40f486d6cd45030368e067d0df12900e27efc5bdbf5d50bcad50e229414c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wholeColumnSection"));

        // line 119
        echo "            <!-- inherit section if using a table, otherwise overwrite this section -->
            <thead> 
              ";
        // line 121
        $this->displayBlock('tableHeader', $context, $blocks);
        // line 122
        echo " <!-- endblock tableHeader --> 
            </thead> 
            <tbody> 
              ";
        // line 125
        $this->displayBlock('tableBody', $context, $blocks);
        // line 126
        echo " <!-- endblock tableBody -->
            </tbody> 
          ";
        
        $__internal_8bb40f486d6cd45030368e067d0df12900e27efc5bdbf5d50bcad50e229414c1->leave($__internal_8bb40f486d6cd45030368e067d0df12900e27efc5bdbf5d50bcad50e229414c1_prof);

    }

    // line 121
    public function block_tableHeader($context, array $blocks = array())
    {
        $__internal_4ce28c264067cc4069aa306c6e5798f65ff85a98fc8b90a05bcb5dc30c1341c6 = $this->env->getExtension("native_profiler");
        $__internal_4ce28c264067cc4069aa306c6e5798f65ff85a98fc8b90a05bcb5dc30c1341c6->enter($__internal_4ce28c264067cc4069aa306c6e5798f65ff85a98fc8b90a05bcb5dc30c1341c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableHeader"));

        echo "  
              ";
        
        $__internal_4ce28c264067cc4069aa306c6e5798f65ff85a98fc8b90a05bcb5dc30c1341c6->leave($__internal_4ce28c264067cc4069aa306c6e5798f65ff85a98fc8b90a05bcb5dc30c1341c6_prof);

    }

    // line 125
    public function block_tableBody($context, array $blocks = array())
    {
        $__internal_ea7cedd42cc373fd821f3e5f922dce0d7cbc6364e05f59af518bbc16c852515d = $this->env->getExtension("native_profiler");
        $__internal_ea7cedd42cc373fd821f3e5f922dce0d7cbc6364e05f59af518bbc16c852515d->enter($__internal_ea7cedd42cc373fd821f3e5f922dce0d7cbc6364e05f59af518bbc16c852515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableBody"));

        echo "  
              ";
        
        $__internal_ea7cedd42cc373fd821f3e5f922dce0d7cbc6364e05f59af518bbc16c852515d->leave($__internal_ea7cedd42cc373fd821f3e5f922dce0d7cbc6364e05f59af518bbc16c852515d_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3be79fca759b9a0f3be66af534c55aa2b43daa8c7a344ba3662df4275406367 = $this->env->getExtension("native_profiler");
        $__internal_e3be79fca759b9a0f3be66af534c55aa2b43daa8c7a344ba3662df4275406367->enter($__internal_e3be79fca759b9a0f3be66af534c55aa2b43daa8c7a344ba3662df4275406367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
      <!--<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>-->
      
      <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <!--<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>-->
    ";
        
        $__internal_e3be79fca759b9a0f3be66af534c55aa2b43daa8c7a344ba3662df4275406367->leave($__internal_e3be79fca759b9a0f3be66af534c55aa2b43daa8c7a344ba3662df4275406367_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 137,  473 => 134,  467 => 133,  454 => 125,  441 => 121,  432 => 126,  430 => 125,  425 => 122,  423 => 121,  419 => 119,  413 => 118,  406 => 115,  400 => 114,  392 => 128,  390 => 118,  385 => 115,  383 => 114,  380 => 113,  374 => 112,  361 => 108,  354 => 110,  352 => 108,  344 => 107,  337 => 104,  331 => 103,  323 => 104,  321 => 103,  312 => 101,  305 => 98,  299 => 97,  290 => 129,  288 => 112,  284 => 110,  282 => 107,  278 => 105,  276 => 101,  271 => 98,  269 => 97,  266 => 96,  260 => 95,  253 => 61,  243 => 57,  239 => 56,  238 => 55,  235 => 54,  231 => 53,  226 => 51,  221 => 48,  215 => 47,  204 => 87,  198 => 85,  189 => 79,  181 => 76,  177 => 74,  175 => 73,  162 => 62,  160 => 47,  153 => 43,  141 => 33,  135 => 32,  125 => 21,  119 => 18,  116 => 17,  110 => 16,  102 => 13,  96 => 12,  87 => 141,  85 => 133,  81 => 131,  79 => 95,  73 => 91,  71 => 32,  61 => 24,  59 => 16,  56 => 15,  54 => 12,  49 => 10,  38 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="de">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     */
/*     <meta name="author" content="Sylvia Klatt">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {% block title %}*/
/*         <title>Der Bildungsserver</title>*/
/*     {% endblock %}*/
/* */
/*     {% block stylesheets %}*/
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*         */
/*         <!-- Custom styles for this template -->*/
/*         <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />*/
/*         */
/*     {% endblock %}*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/* */
/*   <body>*/
/*     {% block navbar %}*/
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <!-- Brand and toggle get grouped for better mobile display -->*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle_buttons" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('app_course_showProgramByCategory') }}">*/
/*               Der Bildungsserver*/
/*             </a>*/
/*           </div>*/
/*           {% block main_menu_links %}*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="toggle_buttons">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ path('index') }}">Startseite */
/*                   <span class="sr-only">(current)</span></a></li>*/
/*                     {% for category in categories %}*/
/*                       <li>*/
/*                         <a href="{{ path('app_course_showProgramByCategory', */
/*                           {'categoryId': category.id}) }}">*/
/*                           {{category.name}}*/
/*                         </a>*/
/*                       </li>*/
/*                     {% endfor %}*/
/*           {% endblock %}*/
/*             </ul>*/
/*             <form class="navbar-form navbar-left" role="search">*/
/*               <div class="form-group">*/
/*                 <input type="text" class="form-control" placeholder="Search">*/
/*               </div>*/
/*               <button type="submit" class="btn btn-default">Suchen</button>*/
/*             </form>*/
/* */
/* */
/*             <!-- if authenticated show dropdown with menu for user, else show login button -->*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*              {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 <li class="dropdown">*/
/*                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                     {{ app.user.firstName }} {{ app.user.name }}  <span class="caret"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('app_user_showCoursesByUserId') }}">Meine Kurse</a></li>*/
/*                     <li role="separator" class="divider"></li>*/
/*                     <li><a href="/logout">Logout</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*               {% else %}*/
/*                 <li><a href="{{ path('login') }}">Login für Kursleiter</a></li>*/
/*               {% endif %}*/
/*             </ul>*/
/*           </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*       </nav>*/
/*     {% endblock %} <!-- end block navbar -->*/
/* */
/*     <!-- main content goes here -->*/
/*     <div class="container">*/
/*       {% block body %}*/
/*         <div class="starter-template">*/
/*           {% block pageTitle %}*/
/*           {% endblock %}  <!-- endblock mainTitle -->*/
/*         </div>*/
/*         */
/*         {% block leftColumn %} <!-- deviding page for layout purposes -->*/
/*           <!-- decription of category goes in here -->*/
/*           {% block leftColumnSection %}*/
/*           {% endblock %} <!-- endblock categoryContent -->*/
/*         {% endblock %}  <!-- endblock leftColumn -->*/
/* */
/*         {% block rightColumn %} <!-- deviding page for layout purposes -->*/
/*           {% block rightColumnSection %} <!-- table providing detailed course information -->*/
/*           {% endblock %}*/
/*         {% endblock %} <!-- endblock rightColumn -->*/
/* */
/*         {% block wholeColumn %}*/
/*           <!-- announces the number of courses found -->*/
/*           {% block foundCourses %}*/
/*           {% endblock %} <!-- endblock foundCourses -->*/
/* */
/*           <!-- table showing available courses -->*/
/*           {% block wholeColumnSection %}*/
/*             <!-- inherit section if using a table, otherwise overwrite this section -->*/
/*             <thead> */
/*               {% block tableHeader %}  */
/*               {% endblock %} <!-- endblock tableHeader --> */
/*             </thead> */
/*             <tbody> */
/*               {% block tableBody %}  */
/*               {% endblock %} <!-- endblock tableBody -->*/
/*             </tbody> */
/*           {% endblock %} <!-- endblock wholeColumnSection -->*/
/*         {% endblock %} <!-- endblock container -->*/
/*       </div><!-- /.container -->*/
/*     {% endblock %} <!-- endblock wholeColum -->*/
/* */
/*     {% block javascripts %}*/
/*       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*       <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->*/
/*       */
/*       <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*       <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
