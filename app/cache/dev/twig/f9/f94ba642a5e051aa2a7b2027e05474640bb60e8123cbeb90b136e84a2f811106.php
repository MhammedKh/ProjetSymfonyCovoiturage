<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a59a095bedb9d913d3c8adfc145617549ea9b60eae611a8f7a48bd3ee9b08070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register idealforms reg")));
        echo "
<div class=\"log-header\">
    <span class=\"log-in\">Sign up</span>

   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 8
            echo "      <label  class=\"log-in\" for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</label>
 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
<div class=\"field\">

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email : "));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "field")));
        echo "
    <span class=\"error\"></span>
</div>
<div class=\"field\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "User Name : "));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
      
</div>
<div class=\"field\">
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Password : "));
        echo "
    <span class=\"error\">This field is required</span> 
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
    <span class=\"error\"></span>   
</div>

    

<div class=\"field\">
       ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmed Password : "));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
    <span class=\"error\"></span>   
</div>
<div class=\"green-color\">

    <button  class=\"green-color\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"log\" >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</div>
";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  99 => 39,  91 => 34,  87 => 33,  77 => 26,  72 => 24,  65 => 20,  61 => 19,  54 => 15,  50 => 14,  45 => 11,  33 => 8,  29 => 7,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register idealforms reg'}}) }}*/
/* <div class="log-header">*/
/*     <span class="log-in">Sign up</span>*/
/* */
/*    {% for errorItem in form.plainPassword.first.vars.errors %}*/
/*       <label  class="log-in" for="{{ form.plainPassword.vars.id }}">{{ errorItem.message }}</label>*/
/*  */
/*     {% endfor %}*/
/*     </div>*/
/* <div class="field">*/
/* */
/*     {{ form_label(form.email,"Email : ") }}*/
/*     {{ form_widget(form.email ,{ 'attr' :{'class':'field'}})}}*/
/*     <span class="error"></span>*/
/* </div>*/
/* <div class="field">*/
/*     {{ form_label(form.username,"User Name : ") }}*/
/*     {{ form_widget(form.username )}}*/
/*       */
/* </div>*/
/* <div class="field">*/
/*     {{ form_label(form.plainPassword.first,"Password : ") }}*/
/*     <span class="error">This field is required</span> */
/*     {{ form_widget(form.plainPassword.first) }}*/
/*     <span class="error"></span>   */
/* </div>*/
/* */
/*     */
/* */
/* <div class="field">*/
/*        {{ form_label(form.plainPassword.second,"Confirmed Password : ") }}*/
/*     {{ form_widget(form.plainPassword.second) }}*/
/*     <span class="error"></span>   */
/* </div>*/
/* <div class="green-color">*/
/* */
/*     <button  class="green-color" type="submit" id="_submit" name="_submit" value="log" >{{ 'security.login.submit'|trans }}</button>*/
/* </div>*/
/* {{ form_end(form) }}*/
/* */
