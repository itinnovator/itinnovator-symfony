<?php

/* base.html.twig */
class __TwigTemplate_f1c51bd1fc387ea87fefdedd676103f8bfd5be3af7686c4983a05196384697da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8662788924c15449ed8916a99fc6665b32263742e4c1e8b8a73521928d9b11f1 = $this->env->getExtension("native_profiler");
        $__internal_8662788924c15449ed8916a99fc6665b32263742e4c1e8b8a73521928d9b11f1->enter($__internal_8662788924c15449ed8916a99fc6665b32263742e4c1e8b8a73521928d9b11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8662788924c15449ed8916a99fc6665b32263742e4c1e8b8a73521928d9b11f1->leave($__internal_8662788924c15449ed8916a99fc6665b32263742e4c1e8b8a73521928d9b11f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b3ac5435f2e093cea4a18aa4c98cc9c7f6c17e9ff6c9588960e99e892644ca2 = $this->env->getExtension("native_profiler");
        $__internal_2b3ac5435f2e093cea4a18aa4c98cc9c7f6c17e9ff6c9588960e99e892644ca2->enter($__internal_2b3ac5435f2e093cea4a18aa4c98cc9c7f6c17e9ff6c9588960e99e892644ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b3ac5435f2e093cea4a18aa4c98cc9c7f6c17e9ff6c9588960e99e892644ca2->leave($__internal_2b3ac5435f2e093cea4a18aa4c98cc9c7f6c17e9ff6c9588960e99e892644ca2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b852545540053e97c4318c84f13c76208d4430bba0167bf06979c5091270332e = $this->env->getExtension("native_profiler");
        $__internal_b852545540053e97c4318c84f13c76208d4430bba0167bf06979c5091270332e->enter($__internal_b852545540053e97c4318c84f13c76208d4430bba0167bf06979c5091270332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b852545540053e97c4318c84f13c76208d4430bba0167bf06979c5091270332e->leave($__internal_b852545540053e97c4318c84f13c76208d4430bba0167bf06979c5091270332e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_43bc8a1ed8e588d35a7d359e07fe7598c39e1fb3aaed967cd292d9a3ce64ff13 = $this->env->getExtension("native_profiler");
        $__internal_43bc8a1ed8e588d35a7d359e07fe7598c39e1fb3aaed967cd292d9a3ce64ff13->enter($__internal_43bc8a1ed8e588d35a7d359e07fe7598c39e1fb3aaed967cd292d9a3ce64ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43bc8a1ed8e588d35a7d359e07fe7598c39e1fb3aaed967cd292d9a3ce64ff13->leave($__internal_43bc8a1ed8e588d35a7d359e07fe7598c39e1fb3aaed967cd292d9a3ce64ff13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd36ed2a9dc2680bc06c1deda218d7d9748df0f1f3aec0e5c15fae0ec22bf973 = $this->env->getExtension("native_profiler");
        $__internal_bd36ed2a9dc2680bc06c1deda218d7d9748df0f1f3aec0e5c15fae0ec22bf973->enter($__internal_bd36ed2a9dc2680bc06c1deda218d7d9748df0f1f3aec0e5c15fae0ec22bf973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd36ed2a9dc2680bc06c1deda218d7d9748df0f1f3aec0e5c15fae0ec22bf973->leave($__internal_bd36ed2a9dc2680bc06c1deda218d7d9748df0f1f3aec0e5c15fae0ec22bf973_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
