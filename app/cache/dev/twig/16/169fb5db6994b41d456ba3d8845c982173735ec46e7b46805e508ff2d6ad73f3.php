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
                                            <h1>My ride</h1>
                                        </div><!-- end .logo -->

                                    </div><!-- end .col-sm-4 -->

                                    <div class=\"col-md-8 col-sm-8 col-xs-12\">

                                        <nav id=\"nav\" class=\"main-navigation\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=\"index.html\">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"rides.html\">rides</a>
                                                </li>
                                                <li>
                                                    <a href=\"add-ride.html\">Submit</a>
                                                </li>
                                                <li>
                                                    <a href=\"#\">Pages</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"events.html\">Events</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"single-post.html\">Single post</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"single-article.html\">Single article</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href=\"blog.html\">Blog</a>
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
                                                <select id=\"destination\" name=\"destination\">
                                                    <option value=\"default\">From</option>
                                                    <option>Sofia</option>
                                                    <option>Plovdiv</option>
                                                    <option>Hamburg</option>
                                                    <option>Milano</option>
                                                    <option>Paris</option>
                                                    <option>Madrid</option>
                                                    <option>Berlin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field\">
                                                <select id=\"destination\" name=\"destination\">
                                                    <option value=\"default\">To</option>
                                                    <option>Sofia</option>
                                                    <option>Plovdiv</option>
                                                    <option>Hamburg</option>
                                                    <option>Milano</option>
                                                    <option>Paris</option>
                                                    <option>Madrid</option>
                                                    <option>Berlin</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field\">
                                                <input name=\"event\" type=\"text\" placeholder=\"Date\" class=\"datepicker\">
                                            </div>


                                        </div>

                                        <div class=\"col-md-3 col-sm-3 col-xs-12\">

                                            <div class=\"field\">
                                                <select id=\"destination\" name=\"destination\">
                                                    <option value=\"default\">Number of seats</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
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
                        <h2>All rides</h2>
                        <div class=\"line\"></div>
                    </div><!-- end .page-sub-title -->

                </div><!-- end .col-md-12 col-sm-12 col-xs-12 -->

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"page-content\">

                        <div class=\"rides-list\">
                            
                            ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 228
            echo "
                            <article class=\"ride-box clearfix\">
                                
                      
                                <div class=\"ride-content\">
                                    <h3><a href=\"#\">From ";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "villeDep", array()), "html", null, true);
            echo " to <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "villeArr", array()), "html", null, true);
            echo " at <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "heureDep", array()), "html", null, true);
            echo "</td> </td></a></h3> ride by <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idUtilisateur", array()), "html", null, true);
            echo "</a>
                                </div>

                                <ul class=\"ride-meta\">

                                    <li class=\"ride-date\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-calendar\"></i>
                                            July 20, 2014 at 19:00 PM
                                        </a>
                                    </li><!-- end .ride-date -->

                                    <li class=\"ride-people\">
                                        <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                            <i class=\"fa fa-user\"></i>
                                            1
                                        </a>
                                    </li><!-- end .ride-people -->

                                    <li>
                                        <a href=\"#\">
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
        // line 263
        echo "                           

                            <div class=\"clearfix\"></div>

                            <div class=\"post-pagination pagination-margin clearfix\">

                                <div class=\"next pull-right\">
                                    <a href=\"#\">
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
        return "AcmeCovoiturageBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 263,  270 => 233,  263 => 228,  259 => 227,  82 => 53,  31 => 4,  28 => 3,  11 => 1,);
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
/*                                             <h1>My ride</h1>*/
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
/*                                                     <a href="rides.html">rides</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="add-ride.html">Submit</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="#">Pages</a>*/
/*                                                     <ul class="sub-menu">*/
/*                                                         <li>*/
/*                                                             <a href="events.html">Events</a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="single-post.html">Single post</a>*/
/*                                                         </li>*/
/*                                                         <li>*/
/*                                                             <a href="single-article.html">Single article</a>*/
/*                                                         </li>*/
/*                                                     </ul>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="blog.html">Blog</a>*/
/*                                                 </li>*/
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
/*                                                 <select id="destination" name="destination">*/
/*                                                     <option value="default">From</option>*/
/*                                                     <option>Sofia</option>*/
/*                                                     <option>Plovdiv</option>*/
/*                                                     <option>Hamburg</option>*/
/*                                                     <option>Milano</option>*/
/*                                                     <option>Paris</option>*/
/*                                                     <option>Madrid</option>*/
/*                                                     <option>Berlin</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field">*/
/*                                                 <select id="destination" name="destination">*/
/*                                                     <option value="default">To</option>*/
/*                                                     <option>Sofia</option>*/
/*                                                     <option>Plovdiv</option>*/
/*                                                     <option>Hamburg</option>*/
/*                                                     <option>Milano</option>*/
/*                                                     <option>Paris</option>*/
/*                                                     <option>Madrid</option>*/
/*                                                     <option>Berlin</option>*/
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
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field">*/
/*                                                 <select id="destination" name="destination">*/
/*                                                     <option value="default">Number of seats</option>*/
/*                                                     <option>1</option>*/
/*                                                     <option>2</option>*/
/*                                                     <option>3</option>*/
/*                                                 </select>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3 col-sm-3 col-xs-12">*/
/* */
/*                                             <div class="field buttons">*/
/*                                                 <button type="submit" class="btn btn-lg green-color">Search</button>*/
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
/*                         <h2>All rides</h2>*/
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
/* */
/*                             <article class="ride-box clearfix">*/
/*                                 */
/*                       */
/*                                 <div class="ride-content">*/
/*                                     <h3><a href="#">From {{ entity.villeDep }} to <td>{{ entity.villeArr }} at <td>{{ entity.heureDep }}</td> </td></a></h3> ride by <a href="#">{{ entity.idUtilisateur }}</a>*/
/*                                 </div>*/
/* */
/*                                 <ul class="ride-meta">*/
/* */
/*                                     <li class="ride-date">*/
/*                                         <a href="#" class="tooltip-link" data-original-title="Date" data-toggle="tooltip">*/
/*                                             <i class="fa fa-calendar"></i>*/
/*                                             July 20, 2014 at 19:00 PM*/
/*                                         </a>*/
/*                                     </li><!-- end .ride-date -->*/
/* */
/*                                     <li class="ride-people">*/
/*                                         <a href="#" class="tooltip-link" data-original-title="Number of seats" data-toggle="tooltip">*/
/*                                             <i class="fa fa-user"></i>*/
/*                                             1*/
/*                                         </a>*/
/*                                     </li><!-- end .ride-people -->*/
/* */
/*                                     <li>*/
/*                                         <a href="#">*/
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
/*                                     <a href="#">*/
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
/*                         <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>*/
/*                         <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>*/
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
