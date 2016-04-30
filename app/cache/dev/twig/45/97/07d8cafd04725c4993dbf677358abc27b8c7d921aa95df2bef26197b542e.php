<?php

/* ::base.html.twig */
class __TwigTemplate_459707d8cafd04725c4993dbf677358abc27b8c7d921aa95df2bef26197b542e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Forms -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealforms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Select  -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Slicknav  -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Main style -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Modernizr -->
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <!-- Fonts -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Montserrat"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

    </head
    <body>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>
";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<!-- Javascript -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Main jQuery -->
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.main.js"), "html", null, true);
        echo "\"></script>
        <!-- Form -->
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealforms.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealselect.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.11.2/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <!-- Menu -->
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
        <!-- Counter-Up  -->
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Rating  -->
        <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-rating-input.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slicknav  -->
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>";
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
        return array (  168 => 64,  163 => 62,  158 => 60,  154 => 59,  149 => 57,  145 => 56,  140 => 54,  136 => 53,  132 => 52,  127 => 50,  122 => 48,  117 => 46,  112 => 45,  107 => 44,  101 => 65,  98 => 45,  96 => 44,  88 => 39,  84 => 38,  76 => 33,  72 => 32,  66 => 29,  60 => 26,  55 => 24,  50 => 22,  45 => 20,  40 => 18,  21 => 1,);
    }
}
