<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ce2d5b3621543a646be617cb552648877f56ce6cdefcc95606a5643e00d3df2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "



        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        </div><!-- end .modal-header -->
        <div class=\"modal-body\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" novalidate autocomplete=\"off\" class=\"idealforms login\">
                <div class=\"log-header\">
                    <span class=\"log-in\">Log in</span>
                </div>


                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <div class=\"field\">
                    <input type=\"text\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    <span class=\"error\"></span>


                </div>


                <div class=\"field\">
                    
                    <input type=\"password\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\" />
                    <span class=\"error\"></span>

                </div>
                <div class=\"field\">

                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <span class=\"error\"></span>
                </div>

                <div class=\"field buttons green-color submit btn \">

                    <button  class=\"green-color\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"log\" >";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>


                </div>
                                    <div class=\"field buttons green-color submit btn \">

                                        <a style=\" color: #FFF\" class=\"button\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Create Account<br>100% Free</a></div>
                                     </div>
            </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 53,  98 => 47,  89 => 41,  79 => 34,  65 => 25,  59 => 22,  50 => 16,  40 => 8,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/*         <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*         </div><!-- end .modal-header -->*/
/*         <div class="modal-body">*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post" novalidate autocomplete="off" class="idealforms login">*/
/*                 <div class="log-header">*/
/*                     <span class="log-in">Log in</span>*/
/*                 </div>*/
/* */
/* */
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <div class="field">*/
/*                     <input type="text" placeholder="{{ 'security.login.username'|trans }}"id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                     <span class="error"></span>*/
/* */
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="field">*/
/*                     */
/*                     <input type="password" placeholder="{{ 'security.login.password'|trans }}" id="password" name="_password" required="required" />*/
/*                     <span class="error"></span>*/
/* */
/*                 </div>*/
/*                 <div class="field">*/
/* */
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     <span class="error"></span>*/
/*                 </div>*/
/* */
/*                 <div class="field buttons green-color submit btn ">*/
/* */
/*                     <button  class="green-color" type="submit" id="_submit" name="_submit" value="log" >{{ 'security.login.submit'|trans }}</button>*/
/* */
/* */
/*                 </div>*/
/*                                     <div class="field buttons green-color submit btn ">*/
/* */
/*                                         <a style=" color: #FFF" class="button" href="{{ path('fos_user_registration_register')}}">Create Account<br>100% Free</a></div>*/
/*                                      </div>*/
/*             </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
