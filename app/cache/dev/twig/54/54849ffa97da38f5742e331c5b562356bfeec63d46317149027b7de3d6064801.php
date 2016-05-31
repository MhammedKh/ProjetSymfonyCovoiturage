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
            echo "            <tr>
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
        echo "        </tbody>
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

                        <div class=\"col-md-8 col-sm-8 col-xs-12\">

                            <ul class=\"social-icons\">
                                <li>
                                    <a class=\"facebook\" href=\"#\">
                                        <i class=\"fa fa-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"twitter\" href=\"#\">
                                        <i class=\"fa fa-twitter\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"google\" href=\"#\">
                                        <i class=\"fa fa-google-plus\"></i>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- end .col-sm-8 -->

                    </div><!-- end .row -->
                </section><!-- end .container -->

            </div><!-- end .top-menu -->

            <div class=\"main-baner\">

                <div class=\"background parallax clearfix\" style=\"background-image:url(";
        // line 94
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

                                 <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                        <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=";
        // line 120
        echo $this->env->getExtension('routing')->getPath("index");
        echo ">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\">Your Reservation</a>
                                                </li>

                                                <li>
                                                    <a>Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("annonceUser");
        echo "\">Your Announcement</a>
                                                        </li>

                                                    </ul>
                                                </li>

                                              
                                            </ul>

                                        </nav><!-- end .main-navigation -->

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

                        <div class=\"page-sub-title textcenter\">
                            <h2>Your Reservation</h2>
                            <div class=\"line\"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">
                            
                            ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 185
            echo "                                
                           

                            <article class=\"ride-box clearfix\"  >
                                
                      
                                <div class=\"ride-content\" >
                                    <h4><a href=\"#\">From: </a>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "getVilleDepString", array()), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                    <a href=\"#\">To: </a>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "getVilleArrString", array()), "html", null, true);
            echo "  </h4>
                                     <h4><a href=\"#\" >Annoncment By: </a>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "username", array()), "html", null, true);
            echo "  </h4>
                                     <h4><a href=\"#\" >Phone Number: </a>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "getTel", array()), "html", null, true);
            echo "  </h4>
                                     <h4><a href=\"#\" >E-mail: </a>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "idUtilisateur", array()), "getEmail", array()), "html", null, true);
            echo "  </h4> 
                                </div>

                                <ul class=\"ride-meta\"  style=\"padding-top:40px;\">
                                    
                                    <li class=\"ride-people\">
                                        <h3>
                                        <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-calendar\"></i>
                                            ";
            // line 205
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
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "marqueVoiture", array()), "html", null, true);
            echo "
                                        </a>
                                        </h3>
                                    </li><!-- end .ride-people -->

                                    <li class=\"ride-people\">
                                        <h3>
                                        <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                            <i class=\"fa-ban fa-user\"></i>
                                            ";
            // line 223
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
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "getIdAnnonce", array()), "prixPlace", array()), "html", null, true);
            echo "
                                        </a>
                                        </h3>
                                    </li><!-- end .ride-people -->
                                    ";
            // line 235
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "yes")) {
                // line 236
                echo "                                      <li class=\"ride-people\">
                                        <h3>
                                        <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                               <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            confirmed
                                        </a>
                                        </h3>
                                    </li><!-- end .ride-people -->
                                    ";
            }
            // line 245
            echo "                                    ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "no")) {
                // line 246
                echo "                                    <li class=\"ride-people\">
                                        <h3>
                                        <a  class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                               <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                                            Not confirmed
                                        </a>
                                        </h3>
                                    </li><!-- end .ride-people -->
                                    ";
            }
            // line 255
            echo "                                    ";
            if (($this->getAttribute($context["entity"], "getStatusRes", array()) == "non confirmer")) {
                // line 256
                echo "                                        <li class=\"ride-people\">
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
            // line 267
            echo "                                   

                                </ul><!-- end .ride-meta -->

                          
              

                              </article><!-- end .ride-box -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                           

                        

                          

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

                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class=\"modal-body\">
                        <form action=\"\" novalidate autocomplete=\"off\" class=\"idealforms login\">

                            <div class=\"log-header\">
                                <span class=\"log-in\">Log in</span>
                            </div>

                            <div class=\"field\">
                                <input name=\"username\" type=\"text\" placeholder=\"Username\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field\">
                                <input type=\"password\" name=\"password\" placeholder=\"Password\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field buttons\">
                                <button type=\"submit\" class=\"submit btn green-color\">Log in</button>
                            </div>

                            <a href=\"#\" class=\"log-twitter twitter\"><i class=\"fa fa-twitter\"></i>Twitter</a>
                            <a href=\"#\" class=\"log-facebook facebook\"><i class=\"fa fa-facebook\"></i>Facebook</a>

                            <div class=\"clearfix\"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

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
                        <form action=\"\" novalidate autocomplete=\"off\" class=\"idealforms reg\">

                            <div class=\"log-header\">
                                <span class=\"log-in\">Sign up</span>
                            </div>

                            <div class=\"field\">
                                <input name=\"username\" type=\"text\" placeholder=\"Username\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field\">
                                <input name=\"email\" type=\"email\"  placeholder=\"E-Mail\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field\">
                                <input type=\"password\" name=\"password\" placeholder=\"Password\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field\">
                                <input name=\"confirmpass\" type=\"password\"  placeholder=\"Password\">
                                <span class=\"error\"></span>
                            </div>

                            <div class=\"field buttons\">
                                <button type=\"submit\" class=\"submit btn green-color\">Sign up</button>
                            </div>

                            <div class=\"clearfix\"></div>

                        </form><!-- end .reg -->
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
        return array (  401 => 276,  387 => 267,  374 => 256,  371 => 255,  360 => 246,  357 => 245,  346 => 236,  344 => 235,  337 => 231,  326 => 223,  314 => 214,  302 => 205,  290 => 196,  286 => 195,  282 => 194,  278 => 193,  274 => 192,  265 => 185,  261 => 184,  207 => 133,  201 => 130,  191 => 123,  185 => 120,  156 => 94,  99 => 40,  92 => 35,  80 => 29,  74 => 26,  67 => 22,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
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
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('reservation_show', { 'id': entity.id }) }}">{{ entity.nbrPlace }}</a></td>*/
/*                 <td>{{ entity.commentaireRes }}</td>*/
/*                 <td>{{ entity.statusRes }}</td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('reservation_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('reservation_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('reservation_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>-->*/
/*           <header class="header">*/
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
/*                         <div class="col-md-8 col-sm-8 col-xs-12">*/
/* */
/*                             <ul class="social-icons">*/
/*                                 <li>*/
/*                                     <a class="facebook" href="#">*/
/*                                         <i class="fa fa-facebook"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="twitter" href="#">*/
/*                                         <i class="fa fa-twitter"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a class="google" href="#">*/
/*                                         <i class="fa fa-google-plus"></i>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/* */
/*                         </div><!-- end .col-sm-8 -->*/
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
/*                                  <div class="col-md-8 col-sm-8 col-xs-12"   style="padding-left:20px;">*/
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
/*                                     </div><!-- end .main-header-container -->*/
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
/*                             <h2>Your Reservation</h2>*/
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
/*                             <article class="ride-box clearfix"  >*/
/*                                 */
/*                       */
/*                                 <div class="ride-content" >*/
/*                                     <h4><a href="#">From: </a>{{ entity.getIdAnnonce.getVilleDepString }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  */
/*                                     <a href="#">To: </a>{{ entity.getIdAnnonce.getVilleArrString }}  </h4>*/
/*                                      <h4><a href="#" >Annoncment By: </a>{{ entity.getIdAnnonce.idUtilisateur.username }}  </h4>*/
/*                                      <h4><a href="#" >Phone Number: </a>{{ entity.getIdAnnonce.idUtilisateur.getTel }}  </h4>*/
/*                                      <h4><a href="#" >E-mail: </a>{{ entity.getIdAnnonce.idUtilisateur.getEmail }}  </h4> */
/*                                 </div>*/
/* */
/*                                 <ul class="ride-meta"  style="padding-top:40px;">*/
/*                                     */
/*                                     <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa fa-calendar"></i>*/
/*                                             {{entity.getIdAnnonce.dateDep}}*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                      */
/*                                     <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa fa-car"></i>*/
/*                                             {{entity.getIdAnnonce.marqueVoiture}}*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/* */
/*                                     <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa-ban fa-user"></i>*/
/*                                             {{entity.getNbrPlace}}*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                            <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa fa-dollar"></i>*/
/*                                             {{entity.getIdAnnonce.prixPlace}}*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                     {% if entity.getStatusRes=="yes" %}*/
/*                                       <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                <i class="fa fa-check" aria-hidden="true"></i>*/
/*                                             confirmed*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                     {% endif %}*/
/*                                     {% if entity.getStatusRes=="no" %}*/
/*                                     <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                <i class="fa fa-times" aria-hidden="true"></i>*/
/*                                             Not confirmed*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                     {% endif %}*/
/*                                     {% if entity.getStatusRes=="non confirmer" %}*/
/*                                         <li class="ride-people">*/
/*                                         <h3>*/
/*                                         <a  class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                                */
/*                                                <i class="fa fa-refresh fa-spin "></i>*/
/*                                                 <span class="sr-only">Loading...</span>*/
/*                                             Waiting*/
/*                                         </a>*/
/*                                         </h3>*/
/*                                     </li><!-- end .ride-people -->*/
/*                                     {% endif %}*/
/*                                    */
/* */
/*                                 </ul><!-- end .ride-meta -->*/
/* */
/*                           */
/*               */
/* */
/*                               </article><!-- end .ride-box -->*/
/* {% endfor %}*/
/*                            */
/* */
/*                         */
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
/*         <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/* */
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     </div><!-- end .modal-header -->*/
/* */
/*                     <div class="modal-body">*/
/*                         <form action="" novalidate autocomplete="off" class="idealforms login">*/
/* */
/*                             <div class="log-header">*/
/*                                 <span class="log-in">Log in</span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input name="username" type="text" placeholder="Username">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input type="password" name="password" placeholder="Password">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field buttons">*/
/*                                 <button type="submit" class="submit btn green-color">Log in</button>*/
/*                             </div>*/
/* */
/*                             <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>*/
/*                             <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>*/
/* */
/*                             <div class="clearfix"></div>*/
/* */
/*                         </form><!-- end .login -->*/
/*                     </div><!-- end .modal-body -->*/
/* */
/*                 </div><!-- end .modal-content -->*/
/*             </div><!-- end .modal-dialog -->*/
/*         </div><!-- end .modal -->*/
/* */
/*         <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/* */
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     </div>*/
/* */
/*                     <div class="modal-body">*/
/*                         <form action="" novalidate autocomplete="off" class="idealforms reg">*/
/* */
/*                             <div class="log-header">*/
/*                                 <span class="log-in">Sign up</span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input name="username" type="text" placeholder="Username">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input name="email" type="email"  placeholder="E-Mail">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input type="password" name="password" placeholder="Password">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field">*/
/*                                 <input name="confirmpass" type="password"  placeholder="Password">*/
/*                                 <span class="error"></span>*/
/*                             </div>*/
/* */
/*                             <div class="field buttons">*/
/*                                 <button type="submit" class="submit btn green-color">Sign up</button>*/
/*                             </div>*/
/* */
/*                             <div class="clearfix"></div>*/
/* */
/*                         </form><!-- end .reg -->*/
/*                     </div><!-- end .modal-body -->*/
/* */
/*                 </div><!-- end .modal-content -->*/
/*             </div><!-- end .modal-dialog -->*/
/*         </div><!-- end .modal -->*/
/*     */
/*      */
/*         */
/*         */
/*         */
/*     {% endblock %}*/
/* */
