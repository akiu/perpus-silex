<?php

/* signup.html */
class __TwigTemplate_842ae288c95d3c52441336833b8ef8544bae70df8ed1da3b2502fdcc2a8f5174 extends Twig_Template
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
        $__internal_02ab23285c6e151e9d4b28bc081ecc399ecee51176b557a3206eb2e5696f22cc = $this->env->getExtension("native_profiler");
        $__internal_02ab23285c6e151e9d4b28bc081ecc399ecee51176b557a3206eb2e5696f22cc->enter($__internal_02ab23285c6e151e9d4b28bc081ecc399ecee51176b557a3206eb2e5696f22cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "signup.html"));

        // line 1
        $this->loadTemplate("layouts/main.html", "signup.html", 1)->display($context);
        // line 2
        echo "

\t<section id=\"form\"><!--form-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"signup-form\"><!--sign up form-->
\t\t\t\t\t\t<h2>New User Signup!</h2>
\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Name\"/>
\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Email Address\"/>
\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\"/>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Signup</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!--/sign up form-->
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section><!--/form-->

";
        // line 23
        $this->loadTemplate("layouts/footer.html", "signup.html", 23)->display($context);
        
        $__internal_02ab23285c6e151e9d4b28bc081ecc399ecee51176b557a3206eb2e5696f22cc->leave($__internal_02ab23285c6e151e9d4b28bc081ecc399ecee51176b557a3206eb2e5696f22cc_prof);

    }

    public function getTemplateName()
    {
        return "signup.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 23,  24 => 2,  22 => 1,);
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
/* 					<div class="signup-form"><!--sign up form-->*/
/* 						<h2>New User Signup!</h2>*/
/* 						<form action="#">*/
/* 							<input type="text" placeholder="Name"/>*/
/* 							<input type="email" placeholder="Email Address"/>*/
/* 							<input type="password" placeholder="Password"/>*/
/* 							<button type="submit" class="btn btn-default">Signup</button>*/
/* 						</form>*/
/* 					</div><!--/sign up form-->*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</section><!--/form-->*/
/* */
/* {% include "layouts/footer.html" %}*/
/* */
