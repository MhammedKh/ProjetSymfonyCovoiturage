<?php

/* AcmeCovoiturageBundle:Reservation:index.html.twig */
class __TwigTemplate_6e3ade7ca7794fc16215617483269757b23d8f732dd390f6671c6c21159e6a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Reservation:index.html.twig", 1);
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
        echo "<!--<h1>Reservation list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Nbrplace</th>
                <th>Commentaireres</th>
                <th>Statusres</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "        <tr>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrPlace", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaireRes", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "statusRes", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td>
            <ul>
                <li>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </li>
                <li>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </li>
            </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>

    <ul>
    <li>
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("reservation_new");
        echo "\">
            Create a new entry
        </a>
    </li>
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
        // line 74
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
        // line 94
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 95
            echo "                                    
                                    
                                    <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                        <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=";
            // line 103
            echo $this->env->getExtension('routing')->getPath("index");
            echo ">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("reservation");
            echo "\">Your Reservation</a>
                                                </li>

                                                <li>
                                                    <a>Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("annonce_new");
            echo "\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
            // line 116
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
        // line 129
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
                        <h2>Your Reservation</h2>
                        <div class=\"line\"></div>
                    </div><!-- end .page-sub-title -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">

                            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 170
            echo "


                                <article class=\"ride-box clearfix\"  >


                                    <div class=\"ride-content\" >
                                        <h4><a href=\"#\">From: </a>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "getVilleDepString", array()), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                            <a href=\"#\">To: </a>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "getVilleArrString", array()), "html", null, true);
            echo "  </h4>
                                        <h4><a href=\"#\" >Annoncment By: </a>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "  </h4>
                                        <h4><a href=\"#\" >Phone Number: </a>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "getTel", array()), "html", null, true);
            echo "  </h4>
                                        <h4><a href=\"#\" >E-mail: </a>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "getEmail", array()), "html", null, true);
            echo "  </h4> 
                                    </div>

                                    <ul class=\"ride-meta\"  style=\"padding-top:40px;\">



                                        <li class=\"ride-people\">
                                            <h3>
                                                <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-calendar\"></i>
                                                    ";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "dateDep", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                        </li><!-- end .ride-people -->

                                        <li class=\"ride-people\">
                                            <h3>
                                                <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-car\"></i>
                                                    ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "marqueVoiture", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                        </li><!-- end .ride-people -->

                                        <li class=\"ride-people\">
                                            <h3>
                                                <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-user\"></i>
                                                    ";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getNbrPlace", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                        </li><!-- end .ride-people -->
                                        <li class=\"ride-people\">
                                            <h3>
                                                <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                    <i class=\"fa fa-dollar\"></i>
                                                    ";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "prixPlace", array()), "html", null, true);
            echo "
                                                </a>
                                            </h3>
                                        </li><!-- end .ride-people -->
                                        ";
            // line 222
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "yes")) {
                // line 223
                echo "                                            <li class=\"ride-people\">
                                                <h3>
                                                    <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                                        confirmed
                                                    </a>
                                                </h3>
                                            </li><!-- end .ride-people -->
                                        ";
            }
            // line 232
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "no")) {
                // line 233
                echo "                                            <li class=\"ride-people\">
                                                <h3>
                                                    <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                                                        Not confirmed
                                                    </a>
                                                </h3>
                                            </li><!-- end .ride-people -->
                                        ";
            }
            // line 242
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "non confirmer")) {
                // line 243
                echo "                                            <li class=\"ride-people\">
                                                <h3>
                                                    <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">

                                                        <i class=\"fa fa-refresh fa-spin \"></i>
                                                        <span class=\"sr-only\">Loading...</span>
                                                        Waiting
                                                    </a>
                                                </h3>
                                            </li><!-- end .ride-people -->
                                        ";
            }
            // line 254
            echo "

                                    </ul><!-- end .ride-meta -->
                                    ";
            // line 257
            if ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "dateDep", array()), "Y-m-d") < twig_date_converter($this->env)) && ($this->getAttribute($context["entity"], "getStatusRes", array()) == "yes")) && ($this->getAttribute($context["entity"], "note", array()) == 0))) {
                // line 258
                echo "                                        <article class=\"rating\" style=\"font-size: 2em; padding-right:5px; color: #aaa ; padding-left: 500px; transition: color .4s;text-decoration: none;   \">
                                            <a href=\"";
                // line 259
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_user", array("id_ann" => $this->getAttribute($context["entity"], "idAnnonce", array()), "note" => 1)), "html", null, true);
                echo "\" title=\"One point\"  onmouseover=\"this.style.color'#c0392b' ; this.style.cursor='pointer'; this.focus();\" >☆</a>
                                            <a href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_user", array("id_ann" => $this->getAttribute($context["entity"], "idAnnonce", array()), "note" => 2)), "html", null, true);
                echo "\"   title=\"Two points\" onmouseover=\"this.style.color'#c0392b' ; this.style.cursor='pointer';\">☆</a>
                                            <a href=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_user", array("id_ann" => $this->getAttribute($context["entity"], "idAnnonce", array()), "note" => 3)), "html", null, true);
                echo "\"   title=\"Three points\" style=\":hover,:focus{ color: #c0392b; cursor: pointer;}\">☆</a>
                                            <a href=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_user", array("id_ann" => $this->getAttribute($context["entity"], "idAnnonce", array()), "note" => 4)), "html", null, true);
                echo "\" title=\"Four points\"  style=\":hover,:focus{ color: #c0392b; cursor: pointer;}\">☆</a>
                                            <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avis_user", array("id_ann" => $this->getAttribute($context["entity"], "idAnnonce", array()), "note" => 5)), "html", null, true);
                echo "\"   title=\"Five points\" style=\":hover,:focus{ color: #c0392b; cursor: pointer;}\">☆</a>

                                        </article>
                                    ";
            }
            // line 266
            echo "            

                                </article><!-- end .ride-box -->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "





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
        // line 322
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
        // line 338
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
        return "AcmeCovoiturageBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 338,  476 => 322,  422 => 270,  413 => 266,  406 => 263,  402 => 262,  398 => 261,  394 => 260,  390 => 259,  387 => 258,  385 => 257,  380 => 254,  367 => 243,  364 => 242,  353 => 233,  350 => 232,  339 => 223,  337 => 222,  330 => 218,  319 => 210,  307 => 201,  295 => 192,  281 => 181,  277 => 180,  273 => 179,  269 => 178,  265 => 177,  256 => 170,  252 => 169,  210 => 129,  193 => 116,  187 => 113,  177 => 106,  171 => 103,  161 => 95,  159 => 94,  136 => 74,  99 => 40,  92 => 35,  80 => 29,  74 => 26,  67 => 22,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <!--<h1>Reservation list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nbrplace</th>*/
/*                 <th>Commentaireres</th>*/
/*                 <th>Statusres</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*     {% for entity in entities %}*/
/*         <tr>*/
/*             <td><a href="{{ path('reservation_show', { 'id': entity.id }) }}">{{ entity.nbrPlace }}</a></td>*/
/*             <td>{{ entity.commentaireRes }}</td>*/
/*             <td>{{ entity.statusRes }}</td>*/
/*             <td>{{ entity.id }}</td>*/
/*             <td>*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('reservation_show', { 'id': entity.id }) }}">show</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('reservation_edit', { 'id': entity.id }) }}">edit</a>*/
/*                 </li>*/
/*             </ul>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/*     <ul>*/
/*     <li>*/
/*         <a href="{{ path('reservation_new') }}">*/
/*             Create a new entry*/
/*         </a>*/
/*     </li>*/
/* </ul>-->*/
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
/*                   */
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
/*                         <h2>Your Reservation</h2>*/
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
/*                                 <article class="ride-box clearfix"  >*/
/* */
/* */
/*                                     <div class="ride-content" >*/
/*                                         <h4><a href="#">From: </a>{{ entity.getIdAnnonce.getVilleDepString }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  */
/*                                             <a href="#">To: </a>{{ entity.getIdAnnonce.getVilleArrString }}  </h4>*/
/*                                         <h4><a href="#" >Annoncment By: </a>{{ entity.getIdAnnonce.idUtilisateur.username }}  </h4>*/
/*                                         <h4><a href="#" >Phone Number: </a>{{ entity.getIdAnnonce.idUtilisateur.getTel }}  </h4>*/
/*                                         <h4><a href="#" >E-mail: </a>{{ entity.getIdAnnonce.idUtilisateur.getEmail }}  </h4> */
/*                                     </div>*/
/* */
/*                                     <ul class="ride-meta"  style="padding-top:40px;">*/
/* */
/* */
/* */
/*                                         <li class="ride-people">*/
/*                                             <h3>*/
/*                                                 <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-calendar"></i>*/
/*                                                     {{entity.getIdAnnonce.dateDep}}*/
/*                                                 </a>*/
/*                                             </h3>*/
/*                                         </li><!-- end .ride-people -->*/
/* */
/*                                         <li class="ride-people">*/
/*                                             <h3>*/
/*                                                 <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-car"></i>*/
/*                                                     {{entity.getIdAnnonce.marqueVoiture}}*/
/*                                                 </a>*/
/*                                             </h3>*/
/*                                         </li><!-- end .ride-people -->*/
/* */
/*                                         <li class="ride-people">*/
/*                                             <h3>*/
/*                                                 <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-user"></i>*/
/*                                                     {{entity.getNbrPlace}}*/
/*                                                 </a>*/
/*                                             </h3>*/
/*                                         </li><!-- end .ride-people -->*/
/*                                         <li class="ride-people">*/
/*                                             <h3>*/
/*                                                 <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                     <i class="fa fa-dollar"></i>*/
/*                                                     {{entity.getIdAnnonce.prixPlace}}*/
/*                                                 </a>*/
/*                                             </h3>*/
/*                                         </li><!-- end .ride-people -->*/
/*                                         {% if entity.getStatusRes=="yes" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <h3>*/
/*                                                     <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                         <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                                         confirmed*/
/*                                                     </a>*/
/*                                                 </h3>*/
/*                                             </li><!-- end .ride-people -->*/
/*                                         {% endif %}*/
/*                                         {% if entity.getStatusRes=="no" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <h3>*/
/*                                                     <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                         <i class="fa fa-times" aria-hidden="true"></i>*/
/*                                                         Not confirmed*/
/*                                                     </a>*/
/*                                                 </h3>*/
/*                                             </li><!-- end .ride-people -->*/
/*                                         {% endif %}*/
/*                                         {% if entity.getStatusRes=="non confirmer" %}*/
/*                                             <li class="ride-people">*/
/*                                                 <h3>*/
/*                                                     <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/* */
/*                                                         <i class="fa fa-refresh fa-spin "></i>*/
/*                                                         <span class="sr-only">Loading...</span>*/
/*                                                         Waiting*/
/*                                                     </a>*/
/*                                                 </h3>*/
/*                                             </li><!-- end .ride-people -->*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     </ul><!-- end .ride-meta -->*/
/*                                     {% if entity.getIdAnnonce.dateDep|date('Y-m-d') < date() and   entity.getStatusRes=="yes" and  entity.note==0 %}*/
/*                                         <article class="rating" style="font-size: 2em; padding-right:5px; color: #aaa ; padding-left: 500px; transition: color .4s;text-decoration: none;   ">*/
/*                                             <a href="{{ path('avis_user', { 'id_ann': entity.idAnnonce , 'note': 1}) }}" title="One point"  onmouseover="this.style.color'#c0392b' ; this.style.cursor='pointer'; this.focus();" >☆</a>*/
/*                                             <a href="{{ path('avis_user', { 'id_ann': entity.idAnnonce , 'note': 2}) }}"   title="Two points" onmouseover="this.style.color'#c0392b' ; this.style.cursor='pointer';">☆</a>*/
/*                                             <a href="{{ path('avis_user', { 'id_ann': entity.idAnnonce , 'note': 3}) }}"   title="Three points" style=":hover,:focus{ color: #c0392b; cursor: pointer;}">☆</a>*/
/*                                             <a href="{{ path('avis_user', { 'id_ann': entity.idAnnonce , 'note': 4}) }}" title="Four points"  style=":hover,:focus{ color: #c0392b; cursor: pointer;}">☆</a>*/
/*                                             <a href="{{ path('avis_user', { 'id_ann': entity.idAnnonce , 'note': 5}) }}"   title="Five points" style=":hover,:focus{ color: #c0392b; cursor: pointer;}">☆</a>*/
/* */
/*                                         </article>*/
/*                                     {% endif %}            */
/* */
/*                                 </article><!-- end .ride-box -->*/
/*                             {% endfor %}*/
/* */
/* */
/* */
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
