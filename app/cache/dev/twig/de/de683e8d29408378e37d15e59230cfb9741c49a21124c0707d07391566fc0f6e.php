<?php

/* AcmeCovoiturageBundle:Annonce:userAnnonce.html.twig */
class __TwigTemplate_4423cec8f87816f8c1d105864b256f3500002f4508882a1f4b1fba2c43ff93b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Annonce:userAnnonce.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<header class=\"header\">

        <div class=\"top-menu\">

            <section class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"user-log\">

                            <a data-toggle=\"modal\" data-target=\"#loginModal\">
                                Log in
                            </a> /
                            <a data-toggle=\"modal\" data-target=\"#regModal\">
                                Sign up
                            </a>

                        </div><!-- end .user-log -->
                    </div><!-- end .col-sm-4 -->



                </div><!-- end .row -->
            </section><!-- end .container -->

        </div><!-- end .top-menu -->

        <div class=\"main-baner\">

            <div class=\"background parallax clearfix\" style=\"background-image:url(";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg"), "html", null, true);
        echo ");\" data-img-width=\"1600\" data-img-height=\"1064\">

                <div class=\"main-parallax-content\">

                    <div class=\"second-parallax-content\">

                        <section class=\"container\">

                            <div class=\"row\">

                                <div class=\"main-header-container clearfix\">

                                    <div class=\"col-md-4 col-sm-12 col-xs-12\">

                                        <div class=\"logo\">
                                            <h1>Carpool.Tn</h1>
                                        </div><!-- end .logo -->

                                    </div><!-- end .col-sm-4 -->

                                    ";
        // line 55
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 56
            echo "

                                        <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                            <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                                <ul class=\"navigation\">
                                                    <li>
                                                        <a href=";
            // line 64
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("reservation");
            echo "\">Your Reservation</a>
                                                    </li>

                                                    <li>
                                                        <a>Announcement</a>
                                                        <ul class=\"sub-menu\">
                                                            <li>
                                                                <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("annonce_new");
            echo "\">New Announcement</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("annonceUser");
            echo "\">Your Announcement</a>
                                                            </li>

                                                        </ul>
                                                    </li>


                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    ";
        }
        // line 90
        echo "  

                                    </section><!-- end .container -->

                                </div><!-- end .second-parallax-content -->





                            </div><!-- end .main-parallax-content -->

                    </div><!-- end .background .parallax -->

                </div><!-- end .main-baner -->

                </header><!-- end .header -->

                <section class=\"main-content\">

                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                                <div class=\"page-sub-title textcenter\">
                                    <h2>All Announcement</h2>
                                    <div class=\"line\"></div>
                                </div><!-- end .page-sub-title -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                                <div class=\"page-content\">

                                    <div class=\"rides-list\">

                                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 129
            echo "


                                            <article class=\"ride-box clearfix\">


                                                <div class=\"ride-content\">
                                                    <h3><a href=\"#\">From ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleDep", array()), "html", null, true);
            echo " To ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleArr", array()), "html", null, true);
            echo " </a></h3> 
                                                </div>

                                                <ul class=\"ride-meta\">

                                                    <li class=\"ride-date\">
                                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                            ";
            // line 144
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "getDateDep", array()), "Y-m-d"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getHeurDep", array()), "html", null, true);
            echo " PM
                                                        </a>
                                                    </li><!-- end .ride-date -->

                                                    <li class=\"ride-people\">
                                                        <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservationAnnonce", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                            <i class=\"fa fa-user\"></i>
                                                            ";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sumReserv", array()), "html", null, true);
            echo " /  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrePlace", array()), "html", null, true);
            echo "
                                                        </a>
                                                    </li><!-- end .ride-people -->

                                                    <li>
                                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Car\" data-toggle=\"tooltip\">
                                                            <i class=\"fa fa-car\"></i>
                                                            ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marqueVoiture", array()), "html", null, true);
            echo "
                                                        </a>
                                                    </li>




                                                    <li>
                                                        <a>
                                                            <i class=\"fa fa-dollar\"></i>
                                                            ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixPlace", array()), "html", null, true);
            echo " DT
                                                        </a>
                                                    </li>



                                                </ul><!-- end .ride-meta -->

                                            </article><!-- end .ride-box -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "

                                        <div class=\"clearfix\"></div>



                                    </div><!-- end .events-list -->

                                </div><!-- end .page-content -->

                            </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->













                        </div><!-- end .row -->
                    </div><!-- end .container -->

                </section><!-- end .main-content -->


                <footer id=\"footer\">

                    <div class=\"footer-copyright\">

                        <div class=\"container\">
                            <div class=\"row\">

                                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                    Copyright by My ride
                                </div>

                            </div><!-- end .row -->
                        </div><!-- end .container -->

                    </div><!-- end .footer-copyright -->

                </footer><!-- end #footer -->


                <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            ";
        // line 230
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        echo "


                        </div><!-- end .modal-content -->
                    </div><!-- end .modal-dialog -->
                </div><!-- end .modal -->

                <div class=\"modal fade\" id=\"regModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">

                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            </div>

                            <div class=\"modal-body\">
                                ";
        // line 246
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeCovoiturageBundle:Utilisateur:new"));
        echo " 
                            </div><!-- end .modal-body -->

                        </div><!-- end .modal-content -->
                    </div><!-- end .modal-dialog -->
                </div><!-- end .modal -->
            ";
    }

    public function getTemplateName()
    {
        return "AcmeCovoiturageBundle:Annonce:userAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 246,  312 => 230,  258 => 178,  242 => 168,  229 => 158,  217 => 151,  212 => 149,  202 => 144,  189 => 136,  180 => 129,  176 => 128,  136 => 90,  119 => 77,  113 => 74,  103 => 67,  97 => 64,  87 => 56,  85 => 55,  62 => 35,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/* */
/*     <header class="header">*/
/* */
/*         <div class="top-menu">*/
/* */
/*             <section class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-4 col-sm-4 col-xs-12">*/
/*                         <div class="user-log">*/
/* */
/*                             <a data-toggle="modal" data-target="#loginModal">*/
/*                                 Log in*/
/*                             </a> /*/
/*                             <a data-toggle="modal" data-target="#regModal">*/
/*                                 Sign up*/
/*                             </a>*/
/* */
/*                         </div><!-- end .user-log -->*/
/*                     </div><!-- end .col-sm-4 -->*/
/* */
/* */
/* */
/*                 </div><!-- end .row -->*/
/*             </section><!-- end .container -->*/
/* */
/*         </div><!-- end .top-menu -->*/
/* */
/*         <div class="main-baner">*/
/* */
/*             <div class="background parallax clearfix" style="background-image:url({{ asset('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg') }});" data-img-width="1600" data-img-height="1064">*/
/* */
/*                 <div class="main-parallax-content">*/
/* */
/*                     <div class="second-parallax-content">*/
/* */
/*                         <section class="container">*/
/* */
/*                             <div class="row">*/
/* */
/*                                 <div class="main-header-container clearfix">*/
/* */
/*                                     <div class="col-md-4 col-sm-12 col-xs-12">*/
/* */
/*                                         <div class="logo">*/
/*                                             <h1>Carpool.Tn</h1>*/
/*                                         </div><!-- end .logo -->*/
/* */
/*                                     </div><!-- end .col-sm-4 -->*/
/* */
/*                                     {% if  app.user!=null %}*/
/* */
/* */
/*                                         <div class="col-md-8 col-sm-8 col-xs-12"   style="padding-left:20px;">*/
/* */
/*                                             <nav id="nav" class="main-navigation" style="padding-left:60px;">*/
/* */
/*                                                 <ul class="navigation">*/
/*                                                     <li>*/
/*                                                         <a href={{ path('index') }}>Home</a>*/
/*                                                     </li>*/
/*                                                     <li>*/
/*                                                         <a href="{{ path('reservation') }}">Your Reservation</a>*/
/*                                                     </li>*/
/* */
/*                                                     <li>*/
/*                                                         <a>Announcement</a>*/
/*                                                         <ul class="sub-menu">*/
/*                                                             <li>*/
/*                                                                 <a href="{{ path('annonce_new') }}">New Announcement</a>*/
/*                                                             </li>*/
/*                                                             <li>*/
/*                                                                 <a href="{{ path('annonceUser') }}">Your Announcement</a>*/
/*                                                             </li>*/
/* */
/*                                                         </ul>*/
/*                                                     </li>*/
/* */
/* */
/*                                                 </ul>*/
/* */
/*                                             </nav><!-- end .main-navigation -->*/
/* */
/*                                         </div><!-- end .col-md-8 -->*/
/* */
/*                                     {% endif %}  */
/* */
/*                                     </section><!-- end .container -->*/
/* */
/*                                 </div><!-- end .second-parallax-content -->*/
/* */
/* */
/* */
/* */
/* */
/*                             </div><!-- end .main-parallax-content -->*/
/* */
/*                     </div><!-- end .background .parallax -->*/
/* */
/*                 </div><!-- end .main-baner -->*/
/* */
/*                 </header><!-- end .header -->*/
/* */
/*                 <section class="main-content">*/
/* */
/*                     <div class="container">*/
/*                         <div class="row">*/
/* */
/*                             <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                                 <div class="page-sub-title textcenter">*/
/*                                     <h2>All Announcement</h2>*/
/*                                     <div class="line"></div>*/
/*                                 </div><!-- end .page-sub-title -->*/
/* */
/*                             </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/* */
/*                             <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                                 <div class="page-content">*/
/* */
/*                                     <div class="rides-list">*/
/* */
/*                                         {% for entity in entities %}*/
/* */
/* */
/* */
/*                                             <article class="ride-box clearfix">*/
/* */
/* */
/*                                                 <div class="ride-content">*/
/*                                                     <h3><a href="#">From {{ entity.getVilleDep }} To {{ entity.getVilleArr }} </a></h3> */
/*                                                 </div>*/
/* */
/*                                                 <ul class="ride-meta">*/
/* */
/*                                                     <li class="ride-date">*/
/*                                                         <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">*/
/*                                                             <i class="fa fa-calendar"></i>*/
/*                                                             {{ entity.getDateDep|date('Y-m-d') }} at {{ entity.getHeurDep }} PM*/
/*                                                         </a>*/
/*                                                     </li><!-- end .ride-date -->*/
/* */
/*                                                     <li class="ride-people">*/
/*                                                         <a href="{{ path('reservationAnnonce', { 'id': entity.id }) }}" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                             <i class="fa fa-user"></i>*/
/*                                                             {{entity.sumReserv}} /  {{entity.nombrePlace}}*/
/*                                                         </a>*/
/*                                                     </li><!-- end .ride-people -->*/
/* */
/*                                                     <li>*/
/*                                                         <a href="#" class="tooltip-link" data-original-title="Car" data-toggle="tooltip">*/
/*                                                             <i class="fa fa-car"></i>*/
/*                                                             {{entity.marqueVoiture}}*/
/*                                                         </a>*/
/*                                                     </li>*/
/* */
/* */
/* */
/* */
/*                                                     <li>*/
/*                                                         <a>*/
/*                                                             <i class="fa fa-dollar"></i>*/
/*                                                             {{entity.prixPlace}} DT*/
/*                                                         </a>*/
/*                                                     </li>*/
/* */
/* */
/* */
/*                                                 </ul><!-- end .ride-meta -->*/
/* */
/*                                             </article><!-- end .ride-box -->*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                         <div class="clearfix"></div>*/
/* */
/* */
/* */
/*                                     </div><!-- end .events-list -->*/
/* */
/*                                 </div><!-- end .page-content -->*/
/* */
/*                             </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                         </div><!-- end .row -->*/
/*                     </div><!-- end .container -->*/
/* */
/*                 </section><!-- end .main-content -->*/
/* */
/* */
/*                 <footer id="footer">*/
/* */
/*                     <div class="footer-copyright">*/
/* */
/*                         <div class="container">*/
/*                             <div class="row">*/
/* */
/*                                 <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                                     Copyright by My ride*/
/*                                 </div>*/
/* */
/*                             </div><!-- end .row -->*/
/*                         </div><!-- end .container -->*/
/* */
/*                     </div><!-- end .footer-copyright -->*/
/* */
/*                 </footer><!-- end #footer -->*/
/* */
/* */
/*                 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             {{ render(controller("FOSUserBundle:Security:login")) }}*/
/* */
/* */
/*                         </div><!-- end .modal-content -->*/
/*                     </div><!-- end .modal-dialog -->*/
/*                 </div><!-- end .modal -->*/
/* */
/*                 <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/* */
/*                             <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                             </div>*/
/* */
/*                             <div class="modal-body">*/
/*                                 {{ render(controller("AcmeCovoiturageBundle:Utilisateur:new")) }} */
/*                             </div><!-- end .modal-body -->*/
/* */
/*                         </div><!-- end .modal-content -->*/
/*                     </div><!-- end .modal-dialog -->*/
/*                 </div><!-- end .modal -->*/
/*             {% endblock %}*/
/* */
/* */
/* */
