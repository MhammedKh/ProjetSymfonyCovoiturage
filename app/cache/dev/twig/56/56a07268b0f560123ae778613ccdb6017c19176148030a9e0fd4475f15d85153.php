<?php

/* AcmeCovoiturageBundle:Annonce:new.html.twig */
class __TwigTemplate_4e488c7f51c59a58520d36a90c49a3dfb3bc6dbe7c5eadd937891f922ebf6657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Annonce:new.html.twig", 1);
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

                                       <div class=\"col-md-8 col-sm-8 col-xs-12\"   style=\"padding-left:20px;\">

                                        <nav id=\"nav\" class=\"main-navigation\" style=\"padding-left:60px;\">

                                            <ul class=\"navigation\">
                                                <li>
                                                    <a href=";
        // line 81
        echo $this->env->getExtension('routing')->getPath("index");
        echo ">Home</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\">Your Reservation</a>
                                                </li>

                                                <li>
                                                    <a>Announcement</a>
                                                    <ul class=\"sub-menu\">
                                                        <li>
                                                            <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("annonce_new");
        echo "\">New Announcement</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
        // line 94
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

                    <div class=\"col-sm-12 col-md-12 col-xs-12\">

                        <div class=\"page-sub-title textcenter\">
                            <h2>Add new Annoncment</h2>
                            <div class=\"line\"></div>
                        </div><!-- end .page-sub-title -->

                    </div><!-- end .col-lg-12 -->

                    <div class=\"col-sm-12 col-md-12 col-xs-12\">

                        <div class=\"page-content add-new-ride\">
                            
                            ";
        // line 140
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "idealforms add-ride")));
        echo "
                            
                            
                            
                             <div class=\"field\">
                            ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeDep", array()), 'widget', array("attr" => array("id" => "destination")));
        echo "
                             </div>
                              <div class=\"field\">
                                  ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeArr", array()), 'widget', array("attr" => array("id" => "destination")));
        echo "
                             </div>
                             
                              <div class=\"field\">
                                    ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDep", array()), 'widget', array("attr" => array("class" => "datepicker", "value" => "Date")));
        echo "
                                </div>
                                 
                                <div class=\"field\" style=\"display: inline-block; width:120px;\">
                                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "heureDep", array()), 'widget', array("attr" => array("pattern" => "0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]", "placeholder" => "Time")));
        echo "
                                </div>
                                
                                <div class=\"field\">
                                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePlace", array()), 'widget');
        echo "
                                </div>
                                
                                 <div class=\"field\">
                                    ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marqueVoiture", array()), 'widget', array("attr" => array("placeholder" => "Car s Brand")));
        echo "
                                </div>
                                
                                 <div class=\"field\">
                                    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixPlace", array()), 'widget', array("attr" => array("placeholder" => "Price", "step" => "0.5")));
        echo "
                                </div>
                                
                                 <div class=\"field\">
                                    ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuDep", array()), 'widget', array("attr" => array("placeholder" => "Place")));
        echo "
                                </div>
                                
                              
                                
                                <div class=\"field\">
                                    ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fumeur", array()), 'widget');
        echo "
                                </div>
                                
                                <div class=\"field\">
                                    ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "musique", array()), 'widget');
        echo "
                                </div>
                                <div class=\"field\">
                                    ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discussion", array()), 'widget');
        echo "
                                </div>
                                   <div class=\"field\">
                                    ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("placeholder" => "Comment")));
        echo "
                                </div>
                                 <div class=\"field buttons\">
                                ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn btn-lg green-color")));
        echo "
                                 </div>
                                
                               

 

                            
                            
                            
                            
                             ";
        // line 202
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                           

             

                        </div><!-- end .page-content -->

                    </div><!-- end .col-sm-12 -->

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
        return "AcmeCovoiturageBundle:Annonce:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 202,  272 => 191,  266 => 188,  260 => 185,  254 => 182,  247 => 178,  238 => 172,  231 => 168,  224 => 164,  217 => 160,  210 => 156,  203 => 152,  196 => 148,  190 => 145,  182 => 140,  133 => 94,  127 => 91,  117 => 84,  111 => 81,  82 => 55,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/*     */
/*      <header class="header">*/
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
/*                                        <div class="col-md-8 col-sm-8 col-xs-12"   style="padding-left:20px;">*/
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
/* */
/*                                 </div><!-- end .row -->*/
/* */
/*                             </section><!-- end .container -->*/
/* */
/*                         </div><!-- end .second-parallax-content -->*/
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
/*                     <div class="col-sm-12 col-md-12 col-xs-12">*/
/* */
/*                         <div class="page-sub-title textcenter">*/
/*                             <h2>Add new Annoncment</h2>*/
/*                             <div class="line"></div>*/
/*                         </div><!-- end .page-sub-title -->*/
/* */
/*                     </div><!-- end .col-lg-12 -->*/
/* */
/*                     <div class="col-sm-12 col-md-12 col-xs-12">*/
/* */
/*                         <div class="page-content add-new-ride">*/
/*                             */
/*                             {{ form_start(form , {'attr': {'class': 'idealforms add-ride'}}) }}*/
/*                             */
/*                             */
/*                             */
/*                              <div class="field">*/
/*                             {{ form_widget( form.villeDep , {'attr': { 'id': 'destination'}}) }}*/
/*                              </div>*/
/*                               <div class="field">*/
/*                                   {{ form_widget(form.villeArr , {'attr': { 'id': 'destination'}}) }}*/
/*                              </div>*/
/*                              */
/*                               <div class="field">*/
/*                                     {{ form_widget(form.dateDep , {'attr': {'class': 'datepicker','value' : 'Date'}}) }}*/
/*                                 </div>*/
/*                                  */
/*                                 <div class="field" style="display: inline-block; width:120px;">*/
/*                                     {{ form_widget(form.heureDep , {'attr': {'pattern' : '0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]','placeholder':'Time'}}) }}*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="field">*/
/*                                     {{ form_widget(form.nombrePlace)}}*/
/*                                 </div>*/
/*                                 */
/*                                  <div class="field">*/
/*                                     {{ form_widget(form.marqueVoiture, {'attr': {'placeholder' : 'Car s Brand'}}) }}*/
/*                                 </div>*/
/*                                 */
/*                                  <div class="field">*/
/*                                     {{ form_widget(form.prixPlace, {'attr': {'placeholder' : 'Price','step':'0.5'}}) }}*/
/*                                 </div>*/
/*                                 */
/*                                  <div class="field">*/
/*                                     {{ form_widget(form.lieuDep, {'attr': {'placeholder' : 'Place'}}) }}*/
/*                                 </div>*/
/*                                 */
/*                               */
/*                                 */
/*                                 <div class="field">*/
/*                                     {{ form_widget(form.fumeur) }}*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="field">*/
/*                                     {{ form_widget(form.musique) }}*/
/*                                 </div>*/
/*                                 <div class="field">*/
/*                                     {{ form_widget(form.discussion) }}*/
/*                                 </div>*/
/*                                    <div class="field">*/
/*                                     {{ form_widget(form.commentaire, {'attr': {'placeholder' : 'Comment'}}) }}*/
/*                                 </div>*/
/*                                  <div class="field buttons">*/
/*                                 {{ form_row(form.submit, {'attr': {'class':'btn btn-lg green-color' }}) }}*/
/*                                  </div>*/
/*                                 */
/*                                */
/* */
/*  */
/* */
/*                             */
/*                             */
/*                             */
/*                             */
/*                              {{ form_end(form) }}*/
/* */
/*                            */
/* */
/*              */
/* */
/*                         </div><!-- end .page-content -->*/
/* */
/*                     </div><!-- end .col-sm-12 -->*/
/* */
/*                 </div><!-- end .row -->*/
/*             </div><!-- end .container -->*/
/* */
/*         </section><!-- end .main-content -->*/
/* */
/*         <footer id="footer">*/
/* */
/*             <div class="footer-copyright">*/
/* */
/*                 <div class="container">*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                             Copyright by My ride*/
/*                         </div>*/
/* */
/*                     </div><!-- end .row -->*/
/*                 </div><!-- end .container -->*/
/* */
/*             </div><!-- end .footer-copyright -->*/
/* */
/*         </footer><!-- end #footer -->*/
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
/*     */
/*     */
/* {% endblock %}*/
/* */
