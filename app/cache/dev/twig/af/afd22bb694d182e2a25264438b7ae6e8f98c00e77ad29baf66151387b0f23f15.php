<?php

/* AcmeCovoiturageBundle:Utilisateur:new.html.twig */
class __TwigTemplate_a4ed56e5c420daf3312690a7091190e20a33a061753dd035109187a2435a3cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeCovoiturageBundle:Utilisateur:new.html.twig", 1);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "idealforms add-ride")));
        echo "
<div class=\"log-header\">
    <span class=\"log-in\">Sign up</span>

   ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 11
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
        // line 14
        echo "    </div>
    <div class=\"field\">

    
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => " Ferst name")));
        echo "
    <span class=\"error\"></span>
</div>
    <div class=\"field\">

    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => " Last name")));
        echo "
    <span class=\"error\"></span>
</div>
       <div class=\"field\">

    
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => "Phone number")));
        echo "
    <span class=\"error\"></span>
</div>
     
<div class=\"field\">

   
    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => "E-mail")));
        echo "
    <span class=\"error\"></span>
</div>
<div class=\"field\">
    
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => "User name")));
        echo "
      
</div>
<div class=\"field\">
    
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => "Password")));
        echo "
    <span class=\"error\"></span>   
</div>

    

<div class=\"field\">
       
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "field", "placeholder" => "Confirmed password")));
        echo "
    <span class=\"error\"></span>   
</div>
  

";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "AcmeCovoiturageBundle:Utilisateur:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 59,  114 => 54,  103 => 46,  95 => 41,  87 => 36,  77 => 29,  68 => 23,  60 => 18,  54 => 14,  42 => 11,  38 => 10,  31 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*  */
/* */
/*    {{ form_start(form , {'attr': {'class': 'idealforms add-ride'}}) }}*/
/* <div class="log-header">*/
/*     <span class="log-in">Sign up</span>*/
/* */
/*    {% for errorItem in form.plainPassword.first.vars.errors %}*/
/*       <label  class="log-in" for="{{ form.plainPassword.vars.id }}">{{ errorItem.message }}</label>*/
/*  */
/*     {% endfor %}*/
/*     </div>*/
/*     <div class="field">*/
/* */
/*     */
/*     {{ form_widget(form.nom ,{ 'attr' :{'class':'field','placeholder' : ' Ferst name'}})}}*/
/*     <span class="error"></span>*/
/* </div>*/
/*     <div class="field">*/
/* */
/*     {{ form_widget(form.prenom ,{ 'attr' :{'class':'field','placeholder' : ' Last name'}})}}*/
/*     <span class="error"></span>*/
/* </div>*/
/*        <div class="field">*/
/* */
/*     */
/*     {{ form_widget(form.tel ,{ 'attr' :{'class':'field','placeholder' : 'Phone number'}})}}*/
/*     <span class="error"></span>*/
/* </div>*/
/*      */
/* <div class="field">*/
/* */
/*    */
/*     {{ form_widget(form.email ,{ 'attr' :{'class':'field','placeholder' : 'E-mail'}})}}*/
/*     <span class="error"></span>*/
/* </div>*/
/* <div class="field">*/
/*     */
/*     {{ form_widget(form.username ,{ 'attr' :{'class':'field','placeholder' : 'User name'}})}}*/
/*       */
/* </div>*/
/* <div class="field">*/
/*     */
/*     {{ form_widget(form.plainPassword.first,{ 'attr' :{'class':'field','placeholder' : 'Password'}})}}*/
/*     <span class="error"></span>   */
/* </div>*/
/* */
/*     */
/* */
/* <div class="field">*/
/*        */
/*     {{ form_widget(form.plainPassword.second,{ 'attr' :{'class':'field','placeholder' : 'Confirmed password'}})}}*/
/*     <span class="error"></span>   */
/* </div>*/
/*   */
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
