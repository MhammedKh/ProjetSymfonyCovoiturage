<?php

/* ::base.html.twig */
class __TwigTemplate_1f12c3dce531b2a233be86a6bc4999f3c2e978a1558e5a922542af3a65082f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styleMap' => array($this, 'block_styleMap'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascriptsMap' => array($this, 'block_javascriptsMap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
 <html class=\"not-ie no-js\" lang=\"en\">  <!--<![endif]-->
    <head>

        
        <meta charset=\"utf-8\">
        <title>My ride</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

        <!-- Mobile Specific Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Forms -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealforms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Select  -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Slicknav  -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Main style -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Modernizr -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <!-- Fonts -->
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Montserrat"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
            ";
        // line 42
        $this->displayBlock('styleMap', $context, $blocks);
        // line 43
        echo "    </head
    <body>
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "        
    </body>
</html>
";
    }

    // line 42
    public function block_styleMap($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<!-- Javascript -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Main jQuery -->
        <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.main.js"), "html", null, true);
        echo "\"></script>
        <!-- Form -->
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealforms.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealselect.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.11.2/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <!-- Menu -->
        <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
        <!-- Counter-Up  -->
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Rating  -->
        <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-rating-input.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slicknav  -->
        <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 67
        $this->displayBlock('javascriptsMap', $context, $blocks);
        // line 68
        echo "        ";
    }

    // line 67
    public function block_javascriptsMap($context, array $blocks = array())
    {
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 67,  190 => 68,  188 => 67,  183 => 65,  178 => 63,  173 => 61,  169 => 60,  164 => 58,  160 => 57,  155 => 55,  151 => 54,  147 => 53,  142 => 51,  137 => 49,  132 => 47,  127 => 46,  122 => 45,  117 => 42,  110 => 69,  107 => 46,  105 => 45,  101 => 43,  99 => 42,  94 => 40,  90 => 39,  82 => 34,  78 => 33,  72 => 30,  66 => 27,  61 => 25,  56 => 23,  51 => 21,  46 => 19,  42 => 18,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/*  <html class="not-ie no-js" lang="en">  <!--<![endif]-->*/
/*     <head>*/
/* */
/*         */
/*         <meta charset="utf-8">*/
/*         <title>My ride</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*         <!-- Mobile Specific Metas -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <!-- Styles -->*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">*/
/*         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <!-- Forms -->*/
/*         <link href="{{ asset('css/jquery.idealforms.css') }}" rel="stylesheet">*/
/*         <!-- Select  -->*/
/*         <link href="{{ asset('css/jquery.idealselect.css') }}" rel="stylesheet">*/
/*         <!-- Slicknav  -->*/
/*         <link href="{{ asset('css/slicknav.css') }}" rel="stylesheet">*/
/*         <!-- Main style -->*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Modernizr -->*/
/*         <script src="{{ asset('js/modernizr.js') }}"></script>*/
/* */
/*         <!-- Fonts -->*/
/*         <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('http://fonts.googleapis.com/css?family=Montserrat') }}" rel='stylesheet' type='text/css'>*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>*/
/*         <script src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>*/
/*         <![endif]-->*/
/*             {% block styleMap %}{% endblock %}*/
/*     </head*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}<!-- Javascript -->*/
/*         <script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>*/
/*         <!-- Bootstrap -->*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <!-- Main jQuery -->*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.main.js') }}"></script>*/
/*         <!-- Form -->*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.idealforms.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.idealselect.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('http://code.jquery.com/ui/1.11.2/jquery-ui.js') }}"></script>*/
/*         <!-- Menu -->*/
/*         <script type="text/javascript" src="{{ asset('js/hoverIntent.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>*/
/*         <!-- Counter-Up  -->*/
/*         <script type="text/javascript" src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>*/
/*         <!-- Rating  -->*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap-rating-input.min.js') }}"></script>*/
/*         <!-- Slicknav  -->*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>*/
/*         */
/*         {% block javascriptsMap %}  {% endblock %}*/
/*         {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
