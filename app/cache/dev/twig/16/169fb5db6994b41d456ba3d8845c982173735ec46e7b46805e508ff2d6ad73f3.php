<?php

/* AcmeCovoiturageBundle:Index:index.html.twig */
class __TwigTemplate_38ba0040fbecccd362d0c1fd379779962c185aa2d913d421bd4c2fcc380e5afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Index:index.html.twig", 1);
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
        // line 53
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
                                                    <a>Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("annonceUser");
        echo "\">Your Announcement</a>
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

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"search-content\">

                                <form action=\"\" novalidate autocomplete=\"off\" class=\"idealforms searchtours\">

                                    <div class=\"row\">

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">
                                            <div class=\"field\">
                                                <select id=\"destination\" name=\"from\">
                                                    <option value=\"default\">From</option>
                                                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entitiesVille"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entitiesVille"]) {
            // line 126
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entitiesVille"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entitiesVille"], "nomV", array()), "html", null, true);
            echo "</option>
                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitiesVille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field\">
                                                <select id=\"destination\" name=\"to\">
                                                    <option value=\"default\">To</option>
                                                    ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entitiesVille"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entitiesVille"]) {
            // line 138
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entitiesVille"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entitiesVille"], "nomV", array()), "html", null, true);
            echo "</option>
                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entitiesVille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                                                </select>
                                            </div>

                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field\">
                                                <input name=\"event\" type=\"text\" placeholder=\"Date\" class=\"datepicker\">
                                            </div>


                                        </div>

                                

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field buttons\">
                                                
                                                <button type=\"submit\" class=\"btn btn-lg green-color\">Search</button>
                                                
                                            </div>

                                        </div>

                                    </div>


                                </form>
                            </div><!-- end .search-content -->

                        </div><!-- end .col-sm-12 -->

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
                        <h2>Announcement of day</h2>
                        <div class=\"line\"></div>
                    </div><!-- end .page-sub-title -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">
                            
                            ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 212
            echo "                                
                           

                            <article class=\"ride-box clearfix\">
                                
                      
                                <div class=\"ride-content\">
                                    <h3><a href=\"#\">From ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleDepString", array()), "html", null, true);
            echo " To ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getVilleArrString", array()), "html", null, true);
            echo " </a></h3> ride by <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getNameUser", array()), "html", null, true);
            echo "</a>
                                </div>

                                <ul class=\"ride-meta\">

                                    <li class=\"ride-date\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-calendar\"></i>
                                            ";
            // line 227
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
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrPlacedesp", array()), "html", null, true);
            echo "
                                        </a>
                                    </li><!-- end .ride-people -->
                                    
                                    
                             

                                    <li>
                                        <a href=\"";
            // line 242
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
        // line 252
        echo "                           

                            <div class=\"clearfix\"></div>

                            <div class=\"post-pagination pagination-margin clearfix\">

                                <div class=\"next pull-right\">
                                    <a href=\"../annonce\">
                                        Next
                                        <i class=\"fa fa-chevron-right\"></i>
                                    </a>
                                </div>

                            </div><!-- end .post-pagination -->

                        </div><!-- end .events-list -->

                    </div><!-- end .page-content -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->
                
                
                
                
                

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
        return "AcmeCovoiturageBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 252,  328 => 242,  317 => 234,  305 => 227,  290 => 219,  281 => 212,  277 => 211,  204 => 140,  193 => 138,  189 => 137,  178 => 128,  167 => 126,  163 => 125,  127 => 92,  121 => 89,  82 => 53,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
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
/*                     <div class="col-md-8 col-sm-8 col-xs-12">*/
/* */
/*                         <ul class="social-icons">*/
/*                             <li>*/
/*                                 <a class="facebook" href="#">*/
/*                                     <i class="fa fa-facebook"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="twitter" href="#">*/
/*                                     <i class="fa fa-twitter"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="google" href="#">*/
/*                                     <i class="fa fa-google-plus"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/*                     </div><!-- end .col-sm-8 -->*/
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
/*                                     <div class="col-md-8 col-sm-8 col-xs-12">*/
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
/*                                                     <a>Announcement</a>*/
/*                                                     <ul class="sub-menu">*/
/*                                                         <li>*/
/*                                                             <a href="{{ path('annonce_new') }}">New Announcement</a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="{{ path('annonceUser') }}">Your Announcement</a>*/
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
/*                                 </div><!-- end .main-header-container -->*/
/* */
/*                             </div><!-- end .row -->*/
/* */
/*                         </section><!-- end .container -->*/
/* */
/*                         <div class="col-md-12 col-sm-12 col-xs-12">*/
/* */
/*                             <div class="search-content">*/
/* */
/*                                 <form action="" novalidate autocomplete="off" class="idealforms searchtours">*/
/* */
/*                                     <div class="row">*/
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/*                                             <div class="field">*/
/*                                                 <select id="destination" name="from">*/
/*                                                     <option value="default">From</option>*/
/*                                                     {% for entitiesVille in entitiesVille %}*/
/*                                                     <option value="{{ entitiesVille.id }}">{{ entitiesVille.nomV }}</option>*/
/*                                                  {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field">*/
/*                                                 <select id="destination" name="to">*/
/*                                                     <option value="default">To</option>*/
/*                                                     {% for entitiesVille in entitiesVille %}*/
/*                                                     <option value="{{ entitiesVille.id }}">{{ entitiesVille.nomV }}</option>*/
/*                                                  {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field">*/
/*                                                 <input name="event" type="text" placeholder="Date" class="datepicker">*/
/*                                             </div>*/
/* */
/* */
/*                                         </div>*/
/* */
/*                                 */
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field buttons">*/
/*                                                 */
/*                                                 <button type="submit" class="btn btn-lg green-color">Search</button>*/
/*                                                 */
/*                                             </div>*/
/* */
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/* */
/*                                 </form>*/
/*                             </div><!-- end .search-content -->*/
/* */
/*                         </div><!-- end .col-sm-12 -->*/
/* */
/*                     </div><!-- end .second-parallax-content -->*/
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
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
/*                         <h2>Announcement of day</h2>*/
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
/*                             */
/*                             {% for entity in entities %}*/
/*                                 */
/*                            */
/* */
/*                             <article class="ride-box clearfix">*/
/*                                 */
/*                       */
/*                                 <div class="ride-content">*/
/*                                     <h3><a href="#">From {{ entity. getVilleDepString }} To {{ entity.getVilleArrString }} </a></h3> ride by <a href="#">{{ entity.getNameUser }}</a>*/
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
/*                                     */
/*                                     */
/*                              */
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
/*                             <div class="post-pagination pagination-margin clearfix">*/
/* */
/*                                 <div class="next pull-right">*/
/*                                     <a href="../annonce">*/
/*                                         Next*/
/*                                         <i class="fa fa-chevron-right"></i>*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                             </div><!-- end .post-pagination -->*/
/* */
/*                         </div><!-- end .events-list -->*/
/* */
/*                     </div><!-- end .page-content -->*/
/* */
/*                 </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/* */
/*             </div><!-- end .row -->*/
/*         </div><!-- end .container -->*/
/* */
/*     </section><!-- end .main-content -->*/
/* */
/*    */
/* */
/*     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/* */
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 </div><!-- end .modal-header -->*/
/* */
/*                 <div class="modal-body">*/
/*                     <form action="" novalidate autocomplete="off" class="idealforms login">*/
/* */
/*                         <div class="log-header">*/
/*                             <span class="log-in">Log in</span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input name="username" type="text" placeholder="Username">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input type="password" name="password" placeholder="Password">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field buttons">*/
/*                             <button type="submit" class="submit btn green-color">Log in</button>*/
/*                         </div>*/
/* */
/*                       */
/* */
/*                         <div class="clearfix"></div>*/
/* */
/*                     </form><!-- end .login -->*/
/*                 </div><!-- end .modal-body -->*/
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
/*                     <form action="" novalidate autocomplete="off" class="idealforms reg">*/
/* */
/*                         <div class="log-header">*/
/*                             <span class="log-in">Sign up</span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input name="username" type="text" placeholder="Username">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input name="email" type="email"  placeholder="E-Mail">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input type="password" name="password" placeholder="Password">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field">*/
/*                             <input name="confirmpass" type="password"  placeholder="Password">*/
/*                             <span class="error"></span>*/
/*                         </div>*/
/* */
/*                         <div class="field buttons">*/
/*                             <button type="submit" class="submit btn green-color">Sign up</button>*/
/*                         </div>*/
/* */
/*                         <div class="clearfix"></div>*/
/* */
/*                     </form><!-- end .reg -->*/
/*                 </div><!-- end .modal-body -->*/
/* */
/*             </div><!-- end .modal-content -->*/
/*         </div><!-- end .modal-dialog -->*/
/*     </div><!-- end .modal -->*/
/* {% endblock %}*/
/* */
