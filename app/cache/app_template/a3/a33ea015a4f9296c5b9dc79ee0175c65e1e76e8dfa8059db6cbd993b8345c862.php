<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46b83123bb8dcb2fa955c02de26f9ddd55694780083f99d5c0890fd087060152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3c96a58096d00c16e470d9f767ab59ff69422f93cad3293e3ca96c65f00e4e2 = $this->env->getExtension("native_profiler");
        $__internal_f3c96a58096d00c16e470d9f767ab59ff69422f93cad3293e3ca96c65f00e4e2->enter($__internal_f3c96a58096d00c16e470d9f767ab59ff69422f93cad3293e3ca96c65f00e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c96a58096d00c16e470d9f767ab59ff69422f93cad3293e3ca96c65f00e4e2->leave($__internal_f3c96a58096d00c16e470d9f767ab59ff69422f93cad3293e3ca96c65f00e4e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d1da9941d2d4820a88d1b3a285016f183b41073f64609ac300594150e45e4fb = $this->env->getExtension("native_profiler");
        $__internal_2d1da9941d2d4820a88d1b3a285016f183b41073f64609ac300594150e45e4fb->enter($__internal_2d1da9941d2d4820a88d1b3a285016f183b41073f64609ac300594150e45e4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d1da9941d2d4820a88d1b3a285016f183b41073f64609ac300594150e45e4fb->leave($__internal_2d1da9941d2d4820a88d1b3a285016f183b41073f64609ac300594150e45e4fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0bbd6d8b6cec9eb5b07d502ad6a25a48d8aea6bd39c77aad032d52f1b82d2a1 = $this->env->getExtension("native_profiler");
        $__internal_c0bbd6d8b6cec9eb5b07d502ad6a25a48d8aea6bd39c77aad032d52f1b82d2a1->enter($__internal_c0bbd6d8b6cec9eb5b07d502ad6a25a48d8aea6bd39c77aad032d52f1b82d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0bbd6d8b6cec9eb5b07d502ad6a25a48d8aea6bd39c77aad032d52f1b82d2a1->leave($__internal_c0bbd6d8b6cec9eb5b07d502ad6a25a48d8aea6bd39c77aad032d52f1b82d2a1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16217040e6b9d5ac13fad0c1ee194a90833688d9bb45ab5f43e7143c01b8f695 = $this->env->getExtension("native_profiler");
        $__internal_16217040e6b9d5ac13fad0c1ee194a90833688d9bb45ab5f43e7143c01b8f695->enter($__internal_16217040e6b9d5ac13fad0c1ee194a90833688d9bb45ab5f43e7143c01b8f695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16217040e6b9d5ac13fad0c1ee194a90833688d9bb45ab5f43e7143c01b8f695->leave($__internal_16217040e6b9d5ac13fad0c1ee194a90833688d9bb45ab5f43e7143c01b8f695_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
