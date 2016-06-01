<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a6811c17e5df91dacc70ed54a5b08e4ff0d3abdcd75900b6a2ec92e05d9c7c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>   
        
        
<html>
     <head>
        <meta charset=\"UTF-8\" />
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Forms -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealforms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Select  -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.idealselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Slicknav  -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Main style -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Modernizr -->
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <!-- Fonts -->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Montserrat"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

    </head>
    
    <body>
        <div>
            ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 55
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 57
        echo "        </div>

        ";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 61
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 62
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 63
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "
        <div>
            ";
        // line 70
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 72
        echo "        </div>
 
    </body>
    ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "    
</html>
";
    }

    // line 70
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 71
        echo "            ";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<!-- Javascript -->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Main jQuery -->
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.main.js"), "html", null, true);
        echo "\"></script>
        <!-- Form -->
        <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealforms.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.idealselect.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.11.2/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <!-- Menu -->
        <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.js"), "html", null, true);
        echo "\"></script>
        <!-- Counter-Up  -->
        <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Rating  -->
        <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-rating-input.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Slicknav  -->
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  242 => 92,  237 => 90,  233 => 89,  228 => 87,  224 => 86,  219 => 84,  215 => 83,  211 => 82,  206 => 80,  201 => 78,  196 => 76,  191 => 75,  187 => 71,  184 => 70,  178 => 95,  176 => 75,  171 => 72,  169 => 70,  165 => 68,  162 => 67,  156 => 66,  147 => 63,  142 => 62,  137 => 61,  132 => 60,  130 => 59,  126 => 57,  118 => 55,  112 => 52,  108 => 51,  103 => 50,  101 => 49,  91 => 42,  87 => 41,  79 => 36,  75 => 35,  69 => 32,  63 => 29,  58 => 27,  53 => 25,  48 => 23,  43 => 21,  21 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>   */
/*         */
/*         */
/* <html>*/
/*      <head>*/
/*         <meta charset="UTF-8" />*/
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
/* */
/*     </head>*/
/*     */
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*  */
/*     </body>*/
/*     {% block javascripts %}<!-- Javascript -->*/
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
/*         <script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>{% endblock %}*/
/*     */
/* </html>*/
/* */
