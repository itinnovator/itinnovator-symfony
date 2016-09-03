<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a906721eb37a539f1a6f1f18296f6b4a9fc68756e46a10226814ae673a161571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d72724b69374e1d74fe2e046e46f5e9b9d784a7ef9c74e64bed4ea578f0735 = $this->env->getExtension("native_profiler");
        $__internal_f9d72724b69374e1d74fe2e046e46f5e9b9d784a7ef9c74e64bed4ea578f0735->enter($__internal_f9d72724b69374e1d74fe2e046e46f5e9b9d784a7ef9c74e64bed4ea578f0735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d72724b69374e1d74fe2e046e46f5e9b9d784a7ef9c74e64bed4ea578f0735->leave($__internal_f9d72724b69374e1d74fe2e046e46f5e9b9d784a7ef9c74e64bed4ea578f0735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27920f2a068dc4a0edd8cc6ab8c6876b4604f55bf8c77d2a772178b4bcf84d3e = $this->env->getExtension("native_profiler");
        $__internal_27920f2a068dc4a0edd8cc6ab8c6876b4604f55bf8c77d2a772178b4bcf84d3e->enter($__internal_27920f2a068dc4a0edd8cc6ab8c6876b4604f55bf8c77d2a772178b4bcf84d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_27920f2a068dc4a0edd8cc6ab8c6876b4604f55bf8c77d2a772178b4bcf84d3e->leave($__internal_27920f2a068dc4a0edd8cc6ab8c6876b4604f55bf8c77d2a772178b4bcf84d3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce9aa52ac52e213963277d086089db706473d8ad18c2369bb000793f918612d0 = $this->env->getExtension("native_profiler");
        $__internal_ce9aa52ac52e213963277d086089db706473d8ad18c2369bb000793f918612d0->enter($__internal_ce9aa52ac52e213963277d086089db706473d8ad18c2369bb000793f918612d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce9aa52ac52e213963277d086089db706473d8ad18c2369bb000793f918612d0->leave($__internal_ce9aa52ac52e213963277d086089db706473d8ad18c2369bb000793f918612d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d188ebd5a28e1ebc89b911b3861cfdeb63f82dda105de85b44614bf2a411cb2e = $this->env->getExtension("native_profiler");
        $__internal_d188ebd5a28e1ebc89b911b3861cfdeb63f82dda105de85b44614bf2a411cb2e->enter($__internal_d188ebd5a28e1ebc89b911b3861cfdeb63f82dda105de85b44614bf2a411cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d188ebd5a28e1ebc89b911b3861cfdeb63f82dda105de85b44614bf2a411cb2e->leave($__internal_d188ebd5a28e1ebc89b911b3861cfdeb63f82dda105de85b44614bf2a411cb2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
