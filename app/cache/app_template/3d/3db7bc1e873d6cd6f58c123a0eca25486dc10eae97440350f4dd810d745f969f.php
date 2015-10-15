<?php

/* layouts/main.html */
class __TwigTemplate_0f67516c4b15e131e8f7cbec59749ec32958c307a5f7b8f5a26986c82558be17 extends Twig_Template
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
        $__internal_2be23391d67d8b16d3bc1e79ba0082de5298d0611c41f1bbfc80c11864c14266 = $this->env->getExtension("native_profiler");
        $__internal_2be23391d67d8b16d3bc1e79ba0082de5298d0611c41f1bbfc80c11864c14266->enter($__internal_2be23391d67d8b16d3bc1e79ba0082de5298d0611c41f1bbfc80c11864c14266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/main.html"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Login | E-Shopper</title>
    <link href=\"http://localhost:8000/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"http://localhost:8000/assets/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"http://localhost:8000/assets/css/prettyPhoto.css\" rel=\"stylesheet\">
    <link href=\"http://localhost:8000/assets/css/price-range.css\" rel=\"stylesheet\">
    <link href=\"http://localhost:8000/assets/css/animate.css\" rel=\"stylesheet\">
\t<link href=\"http://localhost:8000/assets/css/main.css\" rel=\"stylesheet\">
\t<link href=\"http://localhost:8000/assets/css/responsive.css\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"assets/images/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"http://localhost:8000/assets/images/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"http://localhost:8000/assets/images/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"http://localhost:8000/assets/images/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"http://localhost:8000/assets/images/ico/apple-touch-icon-57-precomposed.png\">
</head><!--/head-->

<body>
\t<header id=\"header\"><!--header-->
\t\t
\t\t
\t\t<div class=\"header-middle\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"logo pull-left\">
\t\t\t\t\t\t\t<h3><span style=\"color: #FE980F\">E</span>-Perpus</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<div class=\"shop-menu pull-right\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-user\"></i> Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"cart.html\"><i class=\"fa fa-shopping-cart\"></i> Cart</a></li>
\t\t\t\t\t\t\t\t<li><a href=";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "userLogin"), "method"), "html", null, true);
        echo " ><i class=\"fa fa-lock\"></i> Login</a></li>
\t\t\t\t\t\t\t\t<li><a href=";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "userSignup"), "method"), "html", null, true);
        echo " ><i class=\"fa fa-lock\"></i> Sign Up</a></li>
\t\t\t\t\t\t\t\t<li><a href= ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "adminlogin"), "method"), "html", null, true);
        echo " ><i class=\"fa fa-lock\"></i> Admin</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-middle-->
\t
\t\t<div class=\"header-bottom\"><!--header-bottom-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mainmenu pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<li><a href=\"http://localhost:8000/home\">Home</a></li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"shop.html\">Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product-details.html\">Product Details</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\" class=\"active\">Login</a></li> 
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <li><a href=\"blog.html\">Blog List</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
                                    </ul>
                                </li> 
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact-us.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"search_box pull-right\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/header-bottom-->
\t</header><!--/header-->
\t

\t
\t
\t";
        
        $__internal_2be23391d67d8b16d3bc1e79ba0082de5298d0611c41f1bbfc80c11864c14266->leave($__internal_2be23391d67d8b16d3bc1e79ba0082de5298d0611c41f1bbfc80c11864c14266_prof);

    }

    public function getTemplateName()
    {
        return "layouts/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 50,  75 => 49,  71 => 48,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <title>Login | E-Shopper</title>*/
/*     <link href="http://localhost:8000/assets/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="http://localhost:8000/assets/css/font-awesome.min.css" rel="stylesheet">*/
/*     <link href="http://localhost:8000/assets/css/prettyPhoto.css" rel="stylesheet">*/
/*     <link href="http://localhost:8000/assets/css/price-range.css" rel="stylesheet">*/
/*     <link href="http://localhost:8000/assets/css/animate.css" rel="stylesheet">*/
/* 	<link href="http://localhost:8000/assets/css/main.css" rel="stylesheet">*/
/* 	<link href="http://localhost:8000/assets/css/responsive.css" rel="stylesheet">*/
/*     <!--[if lt IE 9]>*/
/*     <script src="js/html5shiv.js"></script>*/
/*     <script src="js/respond.min.js"></script>*/
/*     <![endif]-->       */
/*     <link rel="shortcut icon" href="assets/images/ico/favicon.ico">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost:8000/assets/images/ico/apple-touch-icon-144-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost:8000/assets/images/ico/apple-touch-icon-114-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost:8000/assets/images/ico/apple-touch-icon-72-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" href="http://localhost:8000/assets/images/ico/apple-touch-icon-57-precomposed.png">*/
/* </head><!--/head-->*/
/* */
/* <body>*/
/* 	<header id="header"><!--header-->*/
/* 		*/
/* 		*/
/* 		<div class="header-middle"><!--header-middle-->*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-4">*/
/* 						<div class="logo pull-left">*/
/* 							<h3><span style="color: #FE980F">E</span>-Perpus</h3>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					<div class="col-sm-8">*/
/* 						<div class="shop-menu pull-right">*/
/* 							<ul class="nav navbar-nav">*/
/* 								<li><a href=""><i class="fa fa-user"></i> Account</a></li>*/
/* 								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>*/
/* 								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>*/
/* 								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>*/
/* 								<li><a href={{app.url_generator.generate('userLogin') }} ><i class="fa fa-lock"></i> Login</a></li>*/
/* 								<li><a href={{app.url_generator.generate('userSignup') }} ><i class="fa fa-lock"></i> Sign Up</a></li>*/
/* 								<li><a href= {{app.url_generator.generate('adminlogin') }} ><i class="fa fa-lock"></i> Admin</a></li>*/
/* */
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!--/header-middle-->*/
/* 	*/
/* 		<div class="header-bottom"><!--header-bottom-->*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-sm-9">*/
/* 						<div class="navbar-header">*/
/* 							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 								<span class="sr-only">Toggle navigation</span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 								<span class="icon-bar"></span>*/
/* 							</button>*/
/* 						</div>*/
/* 						<div class="mainmenu pull-left">*/
/* 							<ul class="nav navbar-nav collapse navbar-collapse">*/
/* 								<li><a href="http://localhost:8000/home">Home</a></li>*/
/* 								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>*/
/*                                     <ul role="menu" class="sub-menu">*/
/*                                         <li><a href="shop.html">Products</a></li>*/
/* 										<li><a href="product-details.html">Product Details</a></li> */
/* 										<li><a href="checkout.html">Checkout</a></li> */
/* 										<li><a href="cart.html">Cart</a></li> */
/* 										<li><a href="login.html" class="active">Login</a></li> */
/*                                     </ul>*/
/*                                 </li> */
/* 								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>*/
/*                                     <ul role="menu" class="sub-menu">*/
/*                                         <li><a href="blog.html">Blog List</a></li>*/
/* 										<li><a href="blog-single.html">Blog Single</a></li>*/
/*                                     </ul>*/
/*                                 </li> */
/* 								<li><a href="404.html">404</a></li>*/
/* 								<li><a href="contact-us.html">Contact</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-sm-3">*/
/* 						<div class="search_box pull-right">*/
/* 							<input type="text" placeholder="Search"/>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div><!--/header-bottom-->*/
/* 	</header><!--/header-->*/
/* 	*/
/* */
/* 	*/
/* 	*/
/* 	*/
