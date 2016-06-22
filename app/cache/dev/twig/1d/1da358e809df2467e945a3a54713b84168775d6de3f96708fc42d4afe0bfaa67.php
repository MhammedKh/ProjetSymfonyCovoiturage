<?php

/* AcmeCovoiturageBundle:Annonce:index.html.twig */
class __TwigTemplate_04bd4ab838b6b363693e2963e72fb0761beddff28adacc75be5cd1831f00bd44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Annonce:index.html.twig", 1);
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
                            <h2>All Announcement</h2>
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
                           

                            <article class=\"ride-box clearfix\">
                                
                      
                                <div class=\"ride-content\">
                                     <h3><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("map", array("from" => $this->getAttribute($this->getAttribute($context["entity"], "villeDep", array()), "id", array()), "to" => $this->getAttribute($this->getAttribute($context["entity"], "villeArr", array()), "id", array()))), "html", null, true);
            echo "\">From ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleDepString", array()), "html", null, true);
            echo " To ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleArrString", array()), "html", null, true);
            echo " </a></h3> ride by: <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "idUtilisateur", array()), "nom", array()), "html", null, true);
            echo "</a> <a href=\"#\">&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "idUtilisateur", array()), "prenom", array()), "html", null, true);
            echo "</a>
                                        <br>
                                    ";
            // line 141
            if (($this->getAttribute($this->getAttribute($context["entity"], "idUtilisateur", array()), "note", array()) != 0)) {
                // line 142
                echo "                                        
                                        <div class=\"rating\" style=\"padding-left: 50px;\" >
                                            ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($context["entity"], "idUtilisateur", array()), "note", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 145
                    echo "                                            <a style=\"font-size: 2em;  color: #63a599 ;  \" >☆</a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "                                             ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(4, $this->getAttribute($this->getAttribute($context["entity"], "idUtilisateur", array()), "note", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 148
                    echo "                                            <a style=\"font-size: 2em;  color: #aaa ;  \" >☆</a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "                                        </div>
                                        
                                        
                                        ";
            }
            // line 154
            echo "                                </div>

                                <ul class=\"ride-meta\">
                                        ";
            // line 157
            if (($this->getAttribute($context["entity"], "fumeur", array()) == 1)) {
                // line 158
                echo "                                            <li class=\"ride-people\">
                                                <span class=\"fa-stack fa-lg\">
                                                    <i class=\"flaticon-smoking-sign fa-stack-2x\" style=\"\"></i>
                                                   <!-- <i class=\"fa fa-ban fa-stack-2x text-danger\" style=\"margin-left:13px; margin-top:2px;\"></i> -->
                                                </span>
                                            </li>
                                        ";
            }
            // line 165
            echo "
                                        ";
            // line 166
            if (($this->getAttribute($context["entity"], "musique", array()) == 1)) {
                // line 167
                echo "                                            <li class=\"ride-people\">
                                                <span class=\"fa-stack fa-lg\">
                                                    <i class=\"fa fa-music fa-stack-2x\"></i>
                                                   <!-- <i class=\"fa fa-ban fa-stack-2x text-danger\" ></i> -->
                                                    
                                                </span>
                                            </li>
                                        ";
            }
            // line 175
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "discussion", array()) == 1)) {
                // line 176
                echo "                                            <li class=\"ride-people\">
                                                <span class=\"fa-stack fa-lg\">
                                                    <i class=\"fa fa-comments-o fa-stack-2x\"></i>
                                                    
                                                    
                                                </span>
                                            </li>
                                        ";
            }
            // line 184
            echo "                                        
                                    <li class=\"ride-date\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-calendar\"></i>
                                            ";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "getDateDep", array()), "Y-m-d"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getHeurDep", array()), "html", null, true);
            echo " PM
                                        </a>
                                    </li><!-- end .ride-date -->

                                    <li class=\"ride-people\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-user\"></i>
                                            ";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrPlacedesp", array()), "html", null, true);
            echo "
                                        </a>
                                    </li><!-- end .ride-people -->

                                    <li>
                                        <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-file\"></i>
                                            Read more
                                        </a>
                                    </li>

                                </ul><!-- end .ride-meta -->

                            </article><!-- end .ride-box -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                           

                            <div class=\"clearfix\"></div>

                          

                        </div><!-- end .events-list -->

                    </div><!-- end .page-content -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                 
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

                  
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

                </div><!-- end .row -->
            </div><!-- end .container -->

        </section><!-- end .main-content -->

       

    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
        // line 244
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
        // line 260
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
        return "AcmeCovoiturageBundle:Annonce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 260,  362 => 244,  326 => 210,  310 => 200,  302 => 195,  290 => 188,  284 => 184,  274 => 176,  271 => 175,  261 => 167,  259 => 166,  256 => 165,  247 => 158,  245 => 157,  240 => 154,  234 => 150,  227 => 148,  222 => 147,  215 => 145,  211 => 144,  207 => 142,  205 => 141,  192 => 139,  183 => 132,  179 => 131,  136 => 90,  119 => 77,  113 => 74,  103 => 67,  97 => 64,  87 => 56,  85 => 55,  62 => 35,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     */
/*     */
/*             <header class="header">*/
/* */
/*             <div class="top-menu">*/
/* */
/*                 <section class="container">*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-md-4 col-sm-4 col-xs-12">*/
/*                             <div class="user-log">*/
/* */
/*                                 <a data-toggle="modal" data-target="#loginModal">*/
/*                                     Log in*/
/*                                 </a> /*/
/*                                 <a data-toggle="modal" data-target="#regModal">*/
/*                                     Sign up*/
/*                                 </a>*/
/* */
/*                             </div><!-- end .user-log -->*/
/*                         </div><!-- end .col-sm-4 -->*/
/* */
/*                         */
/* */
/*                     </div><!-- end .row -->*/
/*                 </section><!-- end .container -->*/
/* */
/*             </div><!-- end .top-menu -->*/
/* */
/*             <div class="main-baner">*/
/* */
/*                 <div class="background parallax clearfix" style="background-image:url({{ asset('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg') }});" data-img-width="1600" data-img-height="1064">*/
/* */
/*                 <div class="main-parallax-content">*/
/* */
/*                         <div class="second-parallax-content">*/
/* */
/*                             <section class="container">*/
/* */
/*                                 <div class="row">*/
/* */
/*                                     <div class="main-header-container clearfix">*/
/* */
/*                                         <div class="col-md-4 col-sm-12 col-xs-12">*/
/* */
/*                                             <div class="logo">*/
/*                                             <h1>Carpool.Tn</h1>*/
/*                                         </div><!-- end .logo -->*/
/* */
/*                                         </div><!-- end .col-sm-4 -->*/
/* */
/*                                        {% if  app.user!=null %}*/
/*                                     */
/*                                     */
/*                                     <div class="col-md-8 col-sm-8 col-xs-12"   style="padding-left:20px;">*/
/* */
/*                                         <nav id="nav" class="main-navigation" style="padding-left:60px;">*/
/* */
/*                                             <ul class="navigation">*/
/*                                                 <li>*/
/*                                                     <a href={{ path('index') }}>Home</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('reservation') }}">Your Reservation</a>*/
/*                                                 </li>*/
/* */
/*                                                 <li>*/
/*                                                     <a>Announcement</a>*/
/*                                                     <ul class="sub-menu">*/
/*                                                         <li>*/
/*                                                             <a href="{{ path('annonce_new') }}">New Announcement</a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="{{ path('annonceUser') }}">Your Announcement</a>*/
/*                                                         </li>*/
/* */
/*                                                     </ul>*/
/*                                                 </li>*/
/* */
/*                                               */
/*                                             </ul>*/
/* */
/*                                         </nav><!-- end .main-navigation -->*/
/* */
/*                                     </div><!-- end .col-md-8 -->*/
/*                                     */
/*                                      {% endif %}  */
/*                                     */
/* */
/*                                 </div><!-- end .row -->*/
/* */
/*                             </section><!-- end .container -->*/
/* */
/*                         </div><!-- end .second-parallax-content -->*/
/*                         */
/*                         */
/*                         */
/*                         */
/* */
/*                     </div><!-- end .main-parallax-content -->*/
/* */
/*                 </div><!-- end .background .parallax -->*/
/* */
/*             </div><!-- end .main-baner -->*/
/* */
/*         </header><!-- end .header -->*/
/* */
/*         <section class="main-content">*/
/* */
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                         <div class="page-sub-title textcenter">*/
/*                             <h2>All Announcement</h2>*/
/*                             <div class="line"></div>*/
/*                         </div><!-- end .page-sub-title -->*/
/* */
/*                     </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/*                     */
/*                      <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                     <div class="page-content">*/
/* */
/*                         <div class="rides-list">*/
/*                             */
/*                             {% for entity in entities %}*/
/*                                 */
/*                            */
/* */
/*                             <article class="ride-box clearfix">*/
/*                                 */
/*                       */
/*                                 <div class="ride-content">*/
/*                                      <h3><a href="{{ path('map', { 'from': entity.villeDep.id ,'to': entity.villeArr.id }) }}">From {{ entity. getVilleDepString }} To {{ entity.getVilleArrString }} </a></h3> ride by: <a href="#">{{ entity.idUtilisateur.nom }}</a> <a href="#">&nbsp;{{ entity.idUtilisateur.prenom }}</a>*/
/*                                         <br>*/
/*                                     {% if entity.idUtilisateur.note!=0 %}*/
/*                                         */
/*                                         <div class="rating" style="padding-left: 50px;" >*/
/*                                             {% for i in 1..entity.idUtilisateur.note %}*/
/*                                             <a style="font-size: 2em;  color: #63a599 ;  " >☆</a>*/
/*                                             {% endfor %}*/
/*                                              {% for i in 4..entity.idUtilisateur.note %}*/
/*                                             <a style="font-size: 2em;  color: #aaa ;  " >☆</a>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         */
/*                                         */
/*                                         {% endif %}*/
/*                                 </div>*/
/* */
/*                                 <ul class="ride-meta">*/
/*                                         {% if entity.fumeur==1 %}*/
/*                                             <li class="ride-people">*/
/*                                                 <span class="fa-stack fa-lg">*/
/*                                                     <i class="flaticon-smoking-sign fa-stack-2x" style=""></i>*/
/*                                                    <!-- <i class="fa fa-ban fa-stack-2x text-danger" style="margin-left:13px; margin-top:2px;"></i> -->*/
/*                                                 </span>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/* */
/*                                         {% if entity.musique==1 %}*/
/*                                             <li class="ride-people">*/
/*                                                 <span class="fa-stack fa-lg">*/
/*                                                     <i class="fa fa-music fa-stack-2x"></i>*/
/*                                                    <!-- <i class="fa fa-ban fa-stack-2x text-danger" ></i> -->*/
/*                                                     */
/*                                                 </span>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                         {% if entity.discussion==1 %}*/
/*                                             <li class="ride-people">*/
/*                                                 <span class="fa-stack fa-lg">*/
/*                                                     <i class="fa fa-comments-o fa-stack-2x"></i>*/
/*                                                     */
/*                                                     */
/*                                                 </span>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                         */
/*                                     <li class="ride-date">*/
/*                                         <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">*/
/*                                             <i class="fa fa-calendar"></i>*/
/*                                             {{ entity.getDateDep|date('Y-m-d') }} at {{ entity.getHeurDep }} PM*/
/*                                         </a>*/
/*                                     </li><!-- end .ride-date -->*/
/* */
/*                                     <li class="ride-people">*/
/*                                         <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa fa-user"></i>*/
/*                                             {{entity.nbrPlacedesp}}*/
/*                                         </a>*/
/*                                     </li><!-- end .ride-people -->*/
/* */
/*                                     <li>*/
/*                                         <a href="{{ path('annonce_show', { 'id': entity.id }) }}">*/
/*                                             <i class="fa fa-file"></i>*/
/*                                             Read more*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                 </ul><!-- end .ride-meta -->*/
/* */
/*                             </article><!-- end .ride-box -->*/
/* {% endfor %}*/
/*                            */
/* */
/*                             <div class="clearfix"></div>*/
/* */
/*                           */
/* */
/*                         </div><!-- end .events-list -->*/
/* */
/*                     </div><!-- end .page-content -->*/
/* */
/*                 </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/* */
/*                  */
/* 					*/
/* 					*/
/* 					*/
/* */
/*                   */
/* 					*/
/* 					*/
/* 					*/
/* 					*/
/* 					*/
/* */
/*                 </div><!-- end .row -->*/
/*             </div><!-- end .container -->*/
/* */
/*         </section><!-- end .main-content -->*/
/* */
/*        */
/* */
/*     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 {{ render(controller("FOSUserBundle:Security:login")) }}*/
/*               */
/*         */
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
/*               {{ render(controller("AcmeCovoiturageBundle:Utilisateur:new")) }} */
/*                 </div><!-- end .modal-body -->*/
/* */
/*             </div><!-- end .modal-content -->*/
/*         </div><!-- end .modal-dialog -->*/
/*     </div><!-- end .modal -->*/
/*     {% endblock %}*/
/* */
