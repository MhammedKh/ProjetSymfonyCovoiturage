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
        // line 55
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

                                         <div class=\"col-md-8 col-sm-8 col-xs-12\">

                                        <nav id=\"nav\" class=\"main-navigation\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=\"index.html\">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"rides.html\">Your Reservation</a>
                                                </li>
                                                
                                                <li>
                                                    <a href=\"#\">Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"events.html\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"single-post.html\">Your Announcement</a>
                                                        </li>
                                                      
                                                    </ul>
                                                </li>
                                              
                                                <li>
                                                    <a href=\"contact-page.html\">Contact</a>
                                                </li>
                                            </ul>

                                        </nav><!-- end .main-navigation -->

                                    </div><!-- end .col-md-8 -->

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
                            <h2>All Announcement</h2>
                            <div class=\"line\"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->
                    
                     <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">
                            
                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 150
            echo "                                
                           

                            <article class=\"ride-box clearfix\">
                                
                      
                                <div class=\"ride-content\">
                                    <h3><a href=\"#\">From ";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleDep", array()), "html", null, true);
            echo " To ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleArr", array()), "html", null, true);
            echo " </a></h3> ride by <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getNameUser", array()), "html", null, true);
            echo "</a>
                                </div>

                                <ul class=\"ride-meta\">

                                    <li class=\"ride-date\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-calendar\"></i>
                                            ";
            // line 165
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
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrPlacedesp", array()), "html", null, true);
            echo "
                                        </a>
                                    </li><!-- end .ride-people -->

                                    <li>
                                        <a href=\"\">
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
        // line 187
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
    
    
<!--
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Marquevoiture</th>
                <th>Nombreplace</th>
                <th>Prixplace</th>
                <th>Datedep</th>
                <th>Heuredep</th>
                <th>Lieudep</th>
                <th>Commentaire</th>
                <th>Status</th>
                <th>Dateins</th>
                <th>Fumeur</th>
                <th>Musique</th>
                <th>Discussion</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 330
            echo "            <tr>
                <td><a href=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marqueVoiture", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrePlace", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prixPlace", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 334
            if ($this->getAttribute($context["entity"], "dateDep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDep", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "heureDep", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 336
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuDep", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "commentaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 339
            if ($this->getAttribute($context["entity"], "dateIns", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateIns", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 340
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fumeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "musique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 342
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "discussion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 350
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 356
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 361
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>-->
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
        return array (  477 => 361,  470 => 356,  458 => 350,  452 => 347,  445 => 343,  441 => 342,  437 => 341,  433 => 340,  427 => 339,  423 => 338,  419 => 337,  415 => 336,  411 => 335,  405 => 334,  401 => 333,  397 => 332,  391 => 331,  388 => 330,  384 => 329,  240 => 187,  219 => 172,  207 => 165,  192 => 157,  183 => 150,  179 => 149,  82 => 55,  31 => 6,  28 => 3,  11 => 1,);
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
/*                                          <div class="col-md-8 col-sm-8 col-xs-12">*/
/* */
/*                                         <nav id="nav" class="main-navigation">*/
/* */
/*                                             <ul class="navigation">*/
/*                                                 <li>*/
/*                                                     <a href="index.html">Home</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="rides.html">Your Reservation</a>*/
/*                                                 </li>*/
/*                                                 */
/*                                                 <li>*/
/*                                                     <a href="#">Announcement</a>*/
/*                                                     <ul class="sub-menu">*/
/*                                                         <li>*/
/*                                                             <a href="events.html">New Announcement</a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="single-post.html">Your Announcement</a>*/
/*                                                         </li>*/
/*                                                       */
/*                                                     </ul>*/
/*                                                 </li>*/
/*                                               */
/*                                                 <li>*/
/*                                                     <a href="contact-page.html">Contact</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/* */
/*                                         </nav><!-- end .main-navigation -->*/
/* */
/*                                     </div><!-- end .col-md-8 -->*/
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
/*                                     <h3><a href="#">From {{ entity.getVilleDep }} To {{ entity.getVilleArr }} </a></h3> ride by <a href="#">{{ entity.getNameUser }}</a>*/
/*                                 </div>*/
/* */
/*                                 <ul class="ride-meta">*/
/* */
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
/*                                         <a href="">*/
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
/*     */
/* <!--*/
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Marquevoiture</th>*/
/*                 <th>Nombreplace</th>*/
/*                 <th>Prixplace</th>*/
/*                 <th>Datedep</th>*/
/*                 <th>Heuredep</th>*/
/*                 <th>Lieudep</th>*/
/*                 <th>Commentaire</th>*/
/*                 <th>Status</th>*/
/*                 <th>Dateins</th>*/
/*                 <th>Fumeur</th>*/
/*                 <th>Musique</th>*/
/*                 <th>Discussion</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('annonce_show', { 'id': entity.id }) }}">{{ entity.marqueVoiture }}</a></td>*/
/*                 <td>{{ entity.nombrePlace }}</td>*/
/*                 <td>{{ entity.prixPlace }}</td>*/
/*                 <td>{% if entity.dateDep %}{{ entity.dateDep|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.heureDep }}</td>*/
/*                 <td>{{ entity.lieuDep }}</td>*/
/*                 <td>{{ entity.commentaire }}</td>*/
/*                 <td>{{ entity.status }}</td>*/
/*                 <td>{% if entity.dateIns %}{{ entity.dateIns|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.fumeur }}</td>*/
/*                 <td>{{ entity.musique }}</td>*/
/*                 <td>{{ entity.discussion }}</td>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('annonce_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('annonce_edit', { 'id': entity.id }) }}">edit</a>*/
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
/*             <a href="{{ path('annonce_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>-->*/
/*     {% endblock %}*/
/* */
