<?php

/* AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig */
class __TwigTemplate_c47f61a714cd432ca17ce41075870ed26369a2fd1cea9c66497b3870905816d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig", 1);
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
        // line 7
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
        // line 36
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
        // line 56
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 57
            echo "

                                        <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                            <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                                <ul class=\"navigation\">
                                                    <li>
                                                        <a href=";
            // line 65
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("reservation");
            echo "\">Your Reservation</a>
                                                    </li>

                                                    <li>
                                                        <a>Announcement</a>
                                                        <ul class=\"sub-menu\">
                                                            <li>
                                                                <a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("annonce_new");
            echo "\">New Announcement</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
            // line 78
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
        // line 91
        echo "  

                                </div><!-- end .row -->

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
                        <h2>Annonce Reservation</h2>
                        <div class=\"line\"></div>
                    </div><!-- end .page-sub-title -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">

                            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 132
            echo "


                                <article class=\"ride-box clearfix\" >


                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">Reservation by: </a>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdUtilisateur", array()), "nom", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdUtilisateur", array()), "prenom", array()), "html", null, true);
            echo "  </h3>
                                    </div>

                                    <ul class=\"ride-meta\">



                                        <li>
                                            <h2>
                                                <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-mobile\"></i>
                                                    ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdUtilisateur", array()), "getTel", array()), "html", null, true);
            echo "
                                                </a>
                                            </h2>
                                        </li>

                                        <li class=\"ride-people\">
                                            <h2>
                                                <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-user\"></i>
                                                    ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getNbrPlace", array()), "html", null, true);
            echo "
                                                </a>
                                            </h2>
                                        </li><!-- end .ride-people -->
                                        ";
            // line 163
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "yes")) {
                // line 164
                echo "                                            <li class=\"ride-people\">
                                                <h2>
                                                    <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                                        confirmed
                                                    </a>
                                                </h2>
                                            </li><!-- end .ride-people -->
                                        ";
            }
            // line 173
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "no")) {
                // line 174
                echo "                                            <li class=\"ride-people\">
                                                <h2>
                                                    <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                                                        Not confirmed
                                                    </a>
                                                </h2>
                                            </li><!-- end .ride-people -->
                                        ";
            }
            // line 183
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "non confirmer")) {
                // line 184
                echo "                                            <li class=\"ride-people\">
                                                <form method=\"\" action=\"\">

                                                    <input type=\"hidden\" name=\"id_ann\" value=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">

                                                    <button type=\"button\" class=\"btn btn-success\" name=\"accept\"><a href=\" ";
                // line 189
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acceptReservation", array("id_ann" => $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "id", array()), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" style=\"color: #ffffff;\">Accept</a></button>

                                                    <button type=\"button\" class=\"btn btn-danger\" name=\"refuse\"><a href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("refuseReservation", array("id_ann" => $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "id", array()), "id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" style=\"color: #ffffff;\">Refuse</a></button>
                                                </form>

                                            </li>
                                        ";
            }
            // line 196
            echo "

                                    </ul><!-- end .ride-meta -->


                                    ";
            // line 201
            if (($this->getAttribute($context["entity"], "getCommentaireRes", array()) != "")) {
                // line 202
                echo "                                        <article class=\"ride-box clearfix\" style=\"margin-top:20px;\">
                                            <div class=\"ride-suggestions\">
                                                <h3>Comment :</h3>
                                                ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getCommentaireRes", array()), "html", null, true);
                echo "


                                            ";
            }
            // line 209
            echo "
                                    </article><!-- end .ride-box -->
                                </article><!-- end .ride-box -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
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
        // line 266
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
        // line 282
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
        return "AcmeCovoiturageBundle:Reservation:AnnonceReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 282,  364 => 266,  309 => 213,  300 => 209,  293 => 205,  288 => 202,  286 => 201,  279 => 196,  271 => 191,  266 => 189,  261 => 187,  256 => 184,  253 => 183,  242 => 174,  239 => 173,  228 => 164,  226 => 163,  219 => 159,  207 => 150,  191 => 139,  182 => 132,  178 => 131,  136 => 91,  119 => 78,  113 => 75,  103 => 68,  97 => 65,  87 => 57,  85 => 56,  62 => 36,  31 => 7,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
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
/*                                 </div><!-- end .row -->*/
/* */
/*                         </section><!-- end .container -->*/
/* */
/*                     </div><!-- end .second-parallax-content -->*/
/* */
/* */
/* */
/* */
/* */
/*                 </div><!-- end .main-parallax-content -->*/
/* */
/*             </div><!-- end .background .parallax -->*/
/* */
/*         </div><!-- end .main-baner -->*/
/* */
/*     </header><!-- end .header -->*/
/* */
/*     <section class="main-content">*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/* */
/*                 <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                     <div class="page-sub-title textcenter">*/
/*                         <h2>Annonce Reservation</h2>*/
/*                         <div class="line"></div>*/
/*                     </div><!-- end .page-sub-title -->*/
/* */
/*                 </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/* */
/*                 <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                     <div class="page-content">*/
/* */
/*                         <div class="rides-list">*/
/* */
/*                             {% for entity in entities %}*/
/* */
/* */
/* */
/*                                 <article class="ride-box clearfix" >*/
/* */
/* */
/*                                     <div class="ride-content">*/
/*                                         <h3><a href="#">Reservation by: </a>{{ entity.getIdUtilisateur.nom }}&nbsp;{{ entity.getIdUtilisateur.prenom }}  </h3>*/
/*                                     </div>*/
/* */
/*                                     <ul class="ride-meta">*/
/* */
/* */
/* */
/*                                         <li>*/
/*                                             <h2>*/
/*                                                 <a href="#" class="tooltip-link" data-original-title="Number" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-mobile"></i>*/
/*                                                     {{entity.getIdUtilisateur.getTel}}*/
/*                                                 </a>*/
/*                                             </h2>*/
/*                                         </li>*/
/* */
/*                                         <li class="ride-people">*/
/*                                             <h2>*/
/*                                                 <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-user"></i>*/
/*                                                     {{entity.getNbrPlace}}*/
/*                                                 </a>*/
/*                                             </h2>*/
/*                                         </li><!-- end .ride-people -->*/
/*                                         {% if entity.getStatusRes=="yes" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <h2>*/
/*                                                     <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                                         confirmed*/
/*                                                     </a>*/
/*                                                 </h2>*/
/*                                             </li><!-- end .ride-people -->*/
/*                                         {% endif %}*/
/*                                         {% if entity.getStatusRes=="no" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <h2>*/
/*                                                     <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                         <i class="fa fa-times" aria-hidden="true"></i>*/
/*                                                         Not confirmed*/
/*                                                     </a>*/
/*                                                 </h2>*/
/*                                             </li><!-- end .ride-people -->*/
/*                                         {% endif %}*/
/*                                         {% if entity.getStatusRes=="non confirmer" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <form method="" action="">*/
/* */
/*                                                     <input type="hidden" name="id_ann" value="{{entity.id}}">*/
/* */
/*                                                     <button type="button" class="btn btn-success" name="accept"><a href=" {{ path('acceptReservation',{'id_ann': entity.getIdAnnonce.id ,'id': entity.id }) }}" style="color: #ffffff;">Accept</a></button>*/
/* */
/*                                                     <button type="button" class="btn btn-danger" name="refuse"><a href="{{ path('refuseReservation', {'id_ann': entity.getIdAnnonce.id ,'id': entity.id }) }}" style="color: #ffffff;">Refuse</a></button>*/
/*                                                 </form>*/
/* */
/*                                             </li>*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     </ul><!-- end .ride-meta -->*/
/* */
/* */
/*                                     {% if entity.getCommentaireRes!="" %}*/
/*                                         <article class="ride-box clearfix" style="margin-top:20px;">*/
/*                                             <div class="ride-suggestions">*/
/*                                                 <h3>Comment :</h3>*/
/*                                                 {{entity.getCommentaireRes}}*/
/* */
/* */
/*                                             {% endif %}*/
/* */
/*                                     </article><!-- end .ride-box -->*/
/*                                 </article><!-- end .ride-box -->*/
/*                             {% endfor %}*/
/* */
/* */
/*                             <div class="clearfix"></div>*/
/* */
/* */
/* */
/*                         </div><!-- end .events-list -->*/
/* */
/*                     </div><!-- end .page-content -->*/
/* */
/*                 </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
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
/*             </div><!-- end .row -->*/
/*         </div><!-- end .container -->*/
/* */
/*     </section><!-- end .main-content -->*/
/* */
/* */
/* */
/*     <footer id="footer">*/
/* */
/*         <div class="footer-copyright">*/
/* */
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                         Copyright by My ride*/
/*                     </div>*/
/* */
/*                 </div><!-- end .row -->*/
/*             </div><!-- end .container -->*/
/* */
/*         </div><!-- end .footer-copyright -->*/
/* */
/*     </footer><!-- end #footer -->*/
/* */
/* */
/*     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 {{ render(controller("FOSUserBundle:Security:login")) }}*/
/* */
/* */
/*             </div><!-- end .modal-content -->*/
/*         </div><!-- end .modal-dialog -->*/
/*     </div><!-- end .modal -->*/
/* */
/*     <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/* */
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 </div>*/
/* */
/*                 <div class="modal-body">*/
/*                     {{ render(controller("AcmeCovoiturageBundle:Utilisateur:new")) }} */
/*                 </div><!-- end .modal-body -->*/
/* */
/*             </div><!-- end .modal-content -->*/
/*         </div><!-- end .modal-dialog -->*/
/*     </div><!-- end .modal -->*/
/* {% endblock %}*/
/* */
