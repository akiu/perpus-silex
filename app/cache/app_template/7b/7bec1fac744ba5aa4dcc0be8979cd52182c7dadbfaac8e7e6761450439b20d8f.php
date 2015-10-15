<?php

/* login.twig */
class __TwigTemplate_ca8e17d2429c3e42ca7ddfe459426e9ab0e2fa77515f0085932b7e1251fb19c0 extends Twig_Template
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
        $__internal_58b5811c948d0b799fcc2234704732e15684134593d68660f7b44302729c4688 = $this->env->getExtension("native_profiler");
        $__internal_58b5811c948d0b799fcc2234704732e15684134593d68660f7b44302729c4688->enter($__internal_58b5811c948d0b799fcc2234704732e15684134593d68660f7b44302729c4688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        // line 1
        $this->loadTemplate("layouts/main.html", "login.twig", 1)->display($context);
        // line 2
        echo "

\t<section id=\"form\"><!--form-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"login-form\"><!--login form-->
\t\t\t\t\t\t<h2>Login to your account</h2>
\t\t\t\t\t\t<form action=";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "userLogin"), "method"), "html", null, true);
        echo " method=\"post\" novalidate>


\t\t\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
  \t\t\t\t\t\t\t<div style=\"color: red;\">\t
  \t\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<div style=\"color: red;\">\t
\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "\t
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!--/login form-->
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section><!--/form-->

";
        // line 35
        $this->loadTemplate("layouts/footer.html", "login.twig", 35)->display($context);
        
        $__internal_58b5811c948d0b799fcc2234704732e15684134593d68660f7b44302729c4688->leave($__internal_58b5811c948d0b799fcc2234704732e15684134593d68660f7b44302729c4688_prof);

    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  74 => 26,  70 => 25,  65 => 23,  60 => 21,  56 => 20,  50 => 17,  45 => 15,  41 => 14,  35 => 11,  24 => 2,  22 => 1,);
    }
}
/* {% include "layouts/main.html" %}*/
/* */
/* */
/* 	<section id="form"><!--form-->*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				*/
/* 				<div class="col-sm-12">*/
/* 					<div class="login-form"><!--login form-->*/
/* 						<h2>Login to your account</h2>*/
/* 						<form action={{app.url_generator.generate('userLogin') }} method="post" novalidate>*/
/* */
/* */
/* 							{{ form_label(form.username) }}*/
/* 							{{ form_widget(form.username) }}*/
/*   							<div style="color: red;">	*/
/*   								{{ form_errors(form.username) }}*/
/* */
/* 							</div>*/
/* 							{{ form_label(form.password) }}*/
/* 							{{ form_widget(form.password) }}*/
/* 							<div style="color: red;">	*/
/* 								{{ form_errors(form.password) }}*/
/* 							</div>*/
/* 							{{ form_row(form._token) }}	*/
/* 							{{ form_widget(form.login) }}*/
/* 						</form>*/
/* 					</div><!--/login form-->*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</section><!--/form-->*/
/* */
/* {% include "layouts/footer.html" %}*/
/* */
