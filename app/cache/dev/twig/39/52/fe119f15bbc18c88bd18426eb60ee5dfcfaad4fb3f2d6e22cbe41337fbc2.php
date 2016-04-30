<?php

/* AcmeCovoiturageBundle:Index:index.html.twig */
class __TwigTemplate_3952fe119f15bbc18c88bd18426eb60ee5dfcfaad4fb3f2d6e22cbe41337fbc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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

                <div class=\"background parallax clearfix\" style=\"background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');\" data-img-width=\"1600\" data-img-height=\"1064\">

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

                                <article class=\"ride-box clearfix\">

                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">From Plovdiv to Sofia</a></h3>ride by <a href=\"#\">Stefan Valkov</a>
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

                                <article class=\"ride-box clearfix\">

                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">From Milano to Rome</a></h3>ride by <a href=\"#\">Carlo Corti</a>
                                    </div>

                                    <ul class=\"ride-meta\">

                                        <li class=\"ride-date\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-calendar\"></i>
                                                July 18, 2014 at 06:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class=\"ride-people\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-user\"></i>
                                                4
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

                                <article class=\"ride-box clearfix\">

                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">From Lyon to Paris</a></h3>ride by <a href=\"#\">Antoine Bonnet</a>
                                    </div>

                                    <ul class=\"ride-meta\">

                                        <li class=\"ride-date\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-calendar\"></i>
                                                July 15, 2014 at 20:00 PM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class=\"ride-people\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-user\"></i>
                                                3
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

                                <article class=\"ride-box clearfix\">

                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">From Barcelona to Madrid</a></h3>ride by <a href=\"#\">Adriana Bello</a>
                                    </div>

                                    <ul class=\"ride-meta\">

                                        <li class=\"ride-date\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-calendar\"></i>
                                                July 10, 2014 at 09:00 AM
                                            </a>
                                        </li><!-- end .ride-date -->

                                        <li class=\"ride-people\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Number of seats\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-user\"></i>
                                                2
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

                                <article class=\"ride-box clearfix\">

                                    <div class=\"ride-content\">
                                        <h3><a href=\"#\">From Munich to Berlin</a></h3>ride by <a href=\"#\">Albert Becker</a>
                                    </div>

                                    <ul class=\"ride-meta\">

                                        <li class=\"ride-date\">
                                            <a href=\"#\" class=\"tooltip-link\" data-original-title=\"Date\" data-toggle=\"tooltip\">
                                                <i class=\"fa fa-calendar\"></i>
                                                July 08, 2014 at 22:00 PM
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
        return array (  31 => 4,  28 => 3,);
    }
}
