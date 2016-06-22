<?php

/* AcmeCovoiturageBundle:Annonce:show.html.twig */
class __TwigTemplate_9618f9ce2ec363e66296e7deb6b1ac5607503c8f459a4c10654309c89b41c89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Annonce:show.html.twig", 1);
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
        // line 4
        echo "<!-- <h1>Annonce</h1>
 
     <table class=\"record_properties\">
         <tbody>
             <tr>
                 <th>Marquevoiture</th>
                 <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marqueVoiture", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Nombreplace</th>
                 <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrePlace", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Prixplace</th>
                 <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixPlace", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Datedep</th>
                 <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDep", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Heuredep</th>
                 <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureDep", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Lieudep</th>
                 <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lieuDep", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Commentaire</th>
                 <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Status</th>
                 <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Dateins</th>
                 <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateIns", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Fumeur</th>
                 <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fumeur", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Musique</th>
                 <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "musique", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Discussion</th>
                 <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "discussion", array()), "html", null, true);
        echo "</td>
             </tr>
             <tr>
                 <th>Id</th>
                 <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
             </tr>
         </tbody>
     </table>
 
         <ul class=\"record_actions\">
     <li>
         <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">
             Back to the list
         </a>
     </li>
     <li>
         <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
             Edit
         </a>
     </li>
     <li>";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
 </ul>-->




    <header class=\"header\">

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
        // line 109
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
        // line 129
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 130
            echo "                                    
                                    
                                    <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                        <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=";
            // line 138
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 141
            echo $this->env->getExtension('routing')->getPath("reservation");
            echo "\">Your Reservation</a>
                                                </li>

                                                <li>
                                                    <a>Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"";
            // line 148
            echo $this->env->getExtension('routing')->getPath("annonce_new");
            echo "\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 151
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
        // line 164
        echo "  
                                    

                                </div><!-- end .main-header-container -->

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

                    <div class=\"page-content\">

                        <article class=\"single-article\">

                          <div class=\"ride-content\">
                                     <h3><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("map", array("from" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villeDep", array()), "id", array()), "to" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "villeArr", array()), "id", array()))), "html", null, true);
        echo "\">From ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getVilleDepString", array()), "html", null, true);
        echo " To ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getVilleArrString", array()), "html", null, true);
        echo " </a></h3> ride by: <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUtilisateur", array()), "nom", array()), "html", null, true);
        echo "</a> <a href=\"#\">&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUtilisateur", array()), "prenom", array()), "html", null, true);
        echo "</a>
                                        <br>
                                    ";
        // line 197
        if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUtilisateur", array()), "note", array()) != 0)) {
            // line 198
            echo "                                        
                                        <div class=\"rating\" style=\"padding-left: 50px;\" >
                                            ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUtilisateur", array()), "note", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 201
                echo "                                            <a style=\"font-size: 2em;  color: #63a599 ;  \" >☆</a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(4, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUtilisateur", array()), "note", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 204
                echo "                                            <a style=\"font-size: 2em;  color: #aaa ;  \" >☆</a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                        </div>
                                        
                                        
                                        ";
        }
        // line 210
        echo "                                </div>

                            <ul class=\"article-meta\">

                                <li class=\"article-date\">
                                    <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                        <i class=\"fa fa-calendar\"></i>
                                        ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDep", array()), "Y-m-d"), "html", null, true);
        echo " At ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heureDep", array()), "html", null, true);
        echo " PM
                                    </a>
                                </li><!-- end .article-date -->

                                <li class=\"article-people\">
                                    <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                        <i class=\"fa fa-user\"></i>
                                        ";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrPlacedesp", array()), "html", null, true);
        echo "
                                    </a>
                                </li><!-- end .article-people -->

                                <li>
                                    <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Car\" data-toggle=\"tooltip\">
                                        <i class=\"fa fa-car\"></i>
                                        ";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marqueVoiture", array()), "html", null, true);
        echo "
                                    </a>
                                </li>


                                <li>
                                    <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number\" data-toggle=\"tooltip\">
                                        <i class=\"fa fa-mobile\"></i>
                                        ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getTelUser", array(), "method"), "html", null, true);
        echo "
                                    </a>
                                </li>

                                <li>
                                    <a>
                                        <i class=\"fa fa-dollar\"></i>
                                        ";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prixPlace", array()), "html", null, true);
        echo " DT
                                    </a>
                                </li>

                            </ul><!-- end .article-meta -->

                            <div class=\"article-content\">
                                ";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentaire", array()), "html", null, true);
        echo "
                            </div>


                        </article>
                        ";
        // line 258
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 259
            echo "                            <div class=\"ride-suggestions\">
                                <h3>Reservation</h3>
                            </div>





                            <article class=\"ride-box clearfix\">
                                <form method=\"POST\" action=\"";
            // line 268
            echo $this->env->getExtension('routing')->getPath("reservation_add");
            echo "\">
                                    <div class=\"field\">
                                        <input type=\"hidden\" name=\"id_ann\" value=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "\">
                                        <input name=\"nbr_p\" type=\"number\" min =\"1\" max=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrPlacedesp", array()), "html", null, true);
            echo "\"> 
                                    </div>
                                    <div class=\"field\">
                                        <input type=\"text\" name=\"comm_user\"> 
                                    </div>
                                    <div class=\"field buttons\">
                                        <button type=\"submit\" class=\"btn btn-lg green-color\">Submit</button>
                                    </div>

                                </form>


                            </article><!-- end .ride-box -->
                        ";
        }
        // line 285
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 286
            echo "                            <div class=\"ride-suggestions\">
                                <h3>Pls. Try to connect for reservation</h3>
                            </div>
                        ";
        }
        // line 290
        echo "                    </div><!-- end .page-content -->

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
        // line 321
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
        // line 337
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
        return "AcmeCovoiturageBundle:Annonce:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 337,  492 => 321,  459 => 290,  453 => 286,  450 => 285,  433 => 271,  429 => 270,  424 => 268,  413 => 259,  411 => 258,  403 => 253,  393 => 246,  383 => 239,  372 => 231,  362 => 224,  350 => 217,  341 => 210,  335 => 206,  328 => 204,  323 => 203,  316 => 201,  312 => 200,  308 => 198,  306 => 197,  293 => 195,  260 => 164,  243 => 151,  237 => 148,  227 => 141,  221 => 138,  211 => 130,  209 => 129,  186 => 109,  148 => 74,  141 => 70,  133 => 65,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <!-- <h1>Annonce</h1>*/
/*  */
/*      <table class="record_properties">*/
/*          <tbody>*/
/*              <tr>*/
/*                  <th>Marquevoiture</th>*/
/*                  <td>{{ entity.marqueVoiture }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Nombreplace</th>*/
/*                  <td>{{ entity.nombrePlace }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Prixplace</th>*/
/*                  <td>{{ entity.prixPlace }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Datedep</th>*/
/*                  <td>{{ entity.dateDep|date('Y-m-d H:i:s') }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Heuredep</th>*/
/*                  <td>{{ entity.heureDep }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Lieudep</th>*/
/*                  <td>{{ entity.lieuDep }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Commentaire</th>*/
/*                  <td>{{ entity.commentaire }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Status</th>*/
/*                  <td>{{ entity.status }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Dateins</th>*/
/*                  <td>{{ entity.dateIns|date('Y-m-d H:i:s') }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Fumeur</th>*/
/*                  <td>{{ entity.fumeur }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Musique</th>*/
/*                  <td>{{ entity.musique }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Discussion</th>*/
/*                  <td>{{ entity.discussion }}</td>*/
/*              </tr>*/
/*              <tr>*/
/*                  <th>Id</th>*/
/*                  <td>{{ entity.id }}</td>*/
/*              </tr>*/
/*          </tbody>*/
/*      </table>*/
/*  */
/*          <ul class="record_actions">*/
/*      <li>*/
/*          <a href="{{ path('annonce') }}">*/
/*              Back to the list*/
/*          </a>*/
/*      </li>*/
/*      <li>*/
/*          <a href="{{ path('annonce_edit', { 'id': entity.id }) }}">*/
/*              Edit*/
/*          </a>*/
/*      </li>*/
/*      <li>{{ form(delete_form) }}</li>*/
/*  </ul>-->*/
/* */
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
/*                    */
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
/*                                    {% if  app.user!=null %}*/
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
/*                                 </div><!-- end .main-header-container -->*/
/* */
/*                             </div><!-- end .row -->*/
/* */
/*                         </section><!-- end .container -->*/
/* */
/*                     </div><!-- end .second-parallax-content -->*/
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
/*                     <div class="page-content">*/
/* */
/*                         <article class="single-article">*/
/* */
/*                           <div class="ride-content">*/
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
/*                             <ul class="article-meta">*/
/* */
/*                                 <li class="article-date">*/
/*                                     <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                         {{ entity.dateDep|date('Y-m-d') }} At {{ entity.heureDep }} PM*/
/*                                     </a>*/
/*                                 </li><!-- end .article-date -->*/
/* */
/*                                 <li class="article-people">*/
/*                                     <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                         {{entity.nbrPlacedesp}}*/
/*                                     </a>*/
/*                                 </li><!-- end .article-people -->*/
/* */
/*                                 <li>*/
/*                                     <a href="#" class="tooltip-link" data-original-title="Car" data-toggle="tooltip">*/
/*                                         <i class="fa fa-car"></i>*/
/*                                         {{entity.marqueVoiture}}*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/* */
/*                                 <li>*/
/*                                     <a href="#" class="tooltip-link" data-original-title="Number" data-toggle="tooltip">*/
/*                                         <i class="fa fa-mobile"></i>*/
/*                                         {{entity.getTelUser()}}*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                                 <li>*/
/*                                     <a>*/
/*                                         <i class="fa fa-dollar"></i>*/
/*                                         {{entity.prixPlace}} DT*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                             </ul><!-- end .article-meta -->*/
/* */
/*                             <div class="article-content">*/
/*                                 {{ entity.commentaire }}*/
/*                             </div>*/
/* */
/* */
/*                         </article>*/
/*                         {% if  app.user!=null %}*/
/*                             <div class="ride-suggestions">*/
/*                                 <h3>Reservation</h3>*/
/*                             </div>*/
/* */
/* */
/* */
/* */
/* */
/*                             <article class="ride-box clearfix">*/
/*                                 <form method="POST" action="{{path('reservation_add')}}">*/
/*                                     <div class="field">*/
/*                                         <input type="hidden" name="id_ann" value="{{entity.id}}">*/
/*                                         <input name="nbr_p" type="number" min ="1" max="{{ entity.nbrPlacedesp }}"> */
/*                                     </div>*/
/*                                     <div class="field">*/
/*                                         <input type="text" name="comm_user"> */
/*                                     </div>*/
/*                                     <div class="field buttons">*/
/*                                         <button type="submit" class="btn btn-lg green-color">Submit</button>*/
/*                                     </div>*/
/* */
/*                                 </form>*/
/* */
/* */
/*                             </article><!-- end .ride-box -->*/
/*                         {% endif %}*/
/*                         {% if  app.user==null %}*/
/*                             <div class="ride-suggestions">*/
/*                                 <h3>Pls. Try to connect for reservation</h3>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div><!-- end .page-content -->*/
/* */
/*                 </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/* */
/*             </div><!-- end .row -->*/
/*         </div><!-- end .container -->*/
/* */
/*     </section><!-- end .main-content -->*/
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
/*    */
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
/* {% endblock %}*/
/* */
