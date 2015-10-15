<?php

/* home.html */
class __TwigTemplate_0bc68a3876e0dc4d796e12e51ca4fc0fdd97dafe20aec4dad8530e22e0b1c767 extends Twig_Template
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
        $__internal_1e56dc70bc4683d2f0be22b0989ccc02b5f8424b1165dbb80e9f64a1886923e3 = $this->env->getExtension("native_profiler");
        $__internal_1e56dc70bc4683d2f0be22b0989ccc02b5f8424b1165dbb80e9f64a1886923e3->enter($__internal_1e56dc70bc4683d2f0be22b0989ccc02b5f8424b1165dbb80e9f64a1886923e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html"));

        // line 1
        $this->loadTemplate("layouts/main.html", "home.html", 1)->display($context);
        // line 2
        echo "

<section id=\"slider\"><!--slider-->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t<li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free E-Commerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"images/home/girl1.jpg\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>100% Responsive Design</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"images/home/girl2.jpg\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1><span>E</span>-SHOPPER</h1>
\t\t\t\t\t\t\t\t\t<h2>Free Ecommerce Template</h2>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default get\">Get it now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<img src=\"images/home/girl3.jpg\" class=\"girl img-responsive\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<img src=\"images/home/pricing.png\" class=\"pricing\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section><!--/slider-->
\t
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"left-sidebar\">
\t\t\t\t\t\t<h2>Category</h2>
\t\t\t\t\t\t<div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tSportswear
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"sportswear\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nike </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Under Armour </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Adidas </a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Puma</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">ASICS </a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tMens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"mens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Armani</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Prada</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dolce and Gabbana</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Chanel</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Gucci</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\tWomens
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"womens\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fendi</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Guess</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Valentino</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dior</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Versace</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Kids</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Fashion</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Households</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Interiors</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Clothing</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Bags</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#\">Shoes</a></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/category-products-->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"brands_products\"><!--brands_products-->
\t\t\t\t\t\t\t<h2>Brands</h2>
\t\t\t\t\t\t\t<div class=\"brands-name\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/brands_products-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"price-range\"><!--price-range-->
\t\t\t\t\t\t\t<h2>Price Range</h2>
\t\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t\t <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"sl2\" ><br />
\t\t\t\t\t\t\t\t <b class=\"pull-left\">\$ 0</b> <b class=\"pull-right\">\$ 600</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!--/price-range-->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"shipping text-center\"><!--shipping-->
\t\t\t\t\t\t\t<img src=\"images/home/shipping.jpg\" alt=\"\" />
\t\t\t\t\t\t</div><!--/shipping-->
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-sm-9 padding-right\">
\t\t\t\t\t<div class=\"features_items\"><!--features_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">Features Items</h2>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"images/home/new.png\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product5.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"images/home/sale.png\" class=\"new\" alt=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/product6.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-overlay\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"choose\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to compare</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><!--features_items-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"category-tab\"><!--category-tab-->
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tshirt\" data-toggle=\"tab\">T-Shirt</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#blazers\" data-toggle=\"tab\">Blazers</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#sunglass\" data-toggle=\"tab\">Sunglass</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#kids\" data-toggle=\"tab\">Kids</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#poloshirt\" data-toggle=\"tab\">Polo shirt</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade active in\" id=\"tshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"blazers\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"sunglass\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"kids\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"poloshirt\" >
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery4.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/gallery1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/category-tab-->
\t\t\t\t\t
\t\t\t\t\t<div class=\"recommended_items\"><!--recommended_items-->
\t\t\t\t\t\t<h2 class=\"title text-center\">recommended items</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"recommended-item-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"item active\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">\t
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend1.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend2.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-products\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"productinfo text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/home/recommend3.jpg\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>\$56</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Easy Polo Black Edition</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default add-to-cart\"><i class=\"fa fa-shopping-cart\"></i>Add to cart</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t <a class=\"left recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t  <a class=\"right recommended-item-control\" href=\"#recommended-item-carousel\" data-slide=\"next\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t  </a>\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/recommended_items-->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 760
        $this->loadTemplate("layouts/footer.html", "home.html", 760)->display($context);
        
        $__internal_1e56dc70bc4683d2f0be22b0989ccc02b5f8424b1165dbb80e9f64a1886923e3->leave($__internal_1e56dc70bc4683d2f0be22b0989ccc02b5f8424b1165dbb80e9f64a1886923e3_prof);

    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 760,  24 => 2,  22 => 1,);
    }
}
/* {% include "layouts/main.html" %}*/
/* */
/* */
/* <section id="slider"><!--slider-->*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<div id="slider-carousel" class="carousel slide" data-ride="carousel">*/
/* 						<ol class="carousel-indicators">*/
/* 							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>*/
/* 							<li data-target="#slider-carousel" data-slide-to="1"></li>*/
/* 							<li data-target="#slider-carousel" data-slide-to="2"></li>*/
/* 						</ol>*/
/* 						*/
/* 						<div class="carousel-inner">*/
/* 							<div class="item active">*/
/* 								<div class="col-sm-6">*/
/* 									<h1><span>E</span>-SHOPPER</h1>*/
/* 									<h2>Free E-Commerce Template</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>*/
/* 									<button type="button" class="btn btn-default get">Get it now</button>*/
/* 								</div>*/
/* 								<div class="col-sm-6">*/
/* 									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />*/
/* 									<img src="images/home/pricing.png"  class="pricing" alt="" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="item">*/
/* 								<div class="col-sm-6">*/
/* 									<h1><span>E</span>-SHOPPER</h1>*/
/* 									<h2>100% Responsive Design</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>*/
/* 									<button type="button" class="btn btn-default get">Get it now</button>*/
/* 								</div>*/
/* 								<div class="col-sm-6">*/
/* 									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />*/
/* 									<img src="images/home/pricing.png"  class="pricing" alt="" />*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="item">*/
/* 								<div class="col-sm-6">*/
/* 									<h1><span>E</span>-SHOPPER</h1>*/
/* 									<h2>Free Ecommerce Template</h2>*/
/* 									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>*/
/* 									<button type="button" class="btn btn-default get">Get it now</button>*/
/* 								</div>*/
/* 								<div class="col-sm-6">*/
/* 									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />*/
/* 									<img src="images/home/pricing.png" class="pricing" alt="" />*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">*/
/* 							<i class="fa fa-angle-left"></i>*/
/* 						</a>*/
/* 						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">*/
/* 							<i class="fa fa-angle-right"></i>*/
/* 						</a>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section><!--/slider-->*/
/* 	*/
/* 	<section>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-3">*/
/* 					<div class="left-sidebar">*/
/* 						<h2>Category</h2>*/
/* 						<div class="panel-group category-products" id="accordian"><!--category-productsr-->*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title">*/
/* 										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">*/
/* 											<span class="badge pull-right"><i class="fa fa-plus"></i></span>*/
/* 											Sportswear*/
/* 										</a>*/
/* 									</h4>*/
/* 								</div>*/
/* 								<div id="sportswear" class="panel-collapse collapse">*/
/* 									<div class="panel-body">*/
/* 										<ul>*/
/* 											<li><a href="#">Nike </a></li>*/
/* 											<li><a href="#">Under Armour </a></li>*/
/* 											<li><a href="#">Adidas </a></li>*/
/* 											<li><a href="#">Puma</a></li>*/
/* 											<li><a href="#">ASICS </a></li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title">*/
/* 										<a data-toggle="collapse" data-parent="#accordian" href="#mens">*/
/* 											<span class="badge pull-right"><i class="fa fa-plus"></i></span>*/
/* 											Mens*/
/* 										</a>*/
/* 									</h4>*/
/* 								</div>*/
/* 								<div id="mens" class="panel-collapse collapse">*/
/* 									<div class="panel-body">*/
/* 										<ul>*/
/* 											<li><a href="#">Fendi</a></li>*/
/* 											<li><a href="#">Guess</a></li>*/
/* 											<li><a href="#">Valentino</a></li>*/
/* 											<li><a href="#">Dior</a></li>*/
/* 											<li><a href="#">Versace</a></li>*/
/* 											<li><a href="#">Armani</a></li>*/
/* 											<li><a href="#">Prada</a></li>*/
/* 											<li><a href="#">Dolce and Gabbana</a></li>*/
/* 											<li><a href="#">Chanel</a></li>*/
/* 											<li><a href="#">Gucci</a></li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title">*/
/* 										<a data-toggle="collapse" data-parent="#accordian" href="#womens">*/
/* 											<span class="badge pull-right"><i class="fa fa-plus"></i></span>*/
/* 											Womens*/
/* 										</a>*/
/* 									</h4>*/
/* 								</div>*/
/* 								<div id="womens" class="panel-collapse collapse">*/
/* 									<div class="panel-body">*/
/* 										<ul>*/
/* 											<li><a href="#">Fendi</a></li>*/
/* 											<li><a href="#">Guess</a></li>*/
/* 											<li><a href="#">Valentino</a></li>*/
/* 											<li><a href="#">Dior</a></li>*/
/* 											<li><a href="#">Versace</a></li>*/
/* 										</ul>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Kids</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Fashion</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Households</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Interiors</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Clothing</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Bags</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="panel panel-default">*/
/* 								<div class="panel-heading">*/
/* 									<h4 class="panel-title"><a href="#">Shoes</a></h4>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div><!--/category-products-->*/
/* 					*/
/* 						<div class="brands_products"><!--brands_products-->*/
/* 							<h2>Brands</h2>*/
/* 							<div class="brands-name">*/
/* 								<ul class="nav nav-pills nav-stacked">*/
/* 									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>*/
/* 									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div><!--/brands_products-->*/
/* 						*/
/* 						<div class="price-range"><!--price-range-->*/
/* 							<h2>Price Range</h2>*/
/* 							<div class="well text-center">*/
/* 								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />*/
/* 								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>*/
/* 							</div>*/
/* 						</div><!--/price-range-->*/
/* 						*/
/* 						<div class="shipping text-center"><!--shipping-->*/
/* 							<img src="images/home/shipping.jpg" alt="" />*/
/* 						</div><!--/shipping-->*/
/* 					*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="col-sm-9 padding-right">*/
/* 					<div class="features_items"><!--features_items-->*/
/* 						<h2 class="title text-center">Features Items</h2>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 										<div class="productinfo text-center">*/
/* 											<img src="images/home/product1.jpg" alt="" />*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 										<div class="product-overlay">*/
/* 											<div class="overlay-content">*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 										</div>*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 									<div class="productinfo text-center">*/
/* 										<img src="images/home/product2.jpg" alt="" />*/
/* 										<h2>$56</h2>*/
/* 										<p>Easy Polo Black Edition</p>*/
/* 										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 									</div>*/
/* 									<div class="product-overlay">*/
/* 										<div class="overlay-content">*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 									<div class="productinfo text-center">*/
/* 										<img src="images/home/product3.jpg" alt="" />*/
/* 										<h2>$56</h2>*/
/* 										<p>Easy Polo Black Edition</p>*/
/* 										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 									</div>*/
/* 									<div class="product-overlay">*/
/* 										<div class="overlay-content">*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 									<div class="productinfo text-center">*/
/* 										<img src="images/home/product4.jpg" alt="" />*/
/* 										<h2>$56</h2>*/
/* 										<p>Easy Polo Black Edition</p>*/
/* 										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 									</div>*/
/* 									<div class="product-overlay">*/
/* 										<div class="overlay-content">*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									<img src="images/home/new.png" class="new" alt="" />*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 									<div class="productinfo text-center">*/
/* 										<img src="images/home/product5.jpg" alt="" />*/
/* 										<h2>$56</h2>*/
/* 										<p>Easy Polo Black Edition</p>*/
/* 										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 									</div>*/
/* 									<div class="product-overlay">*/
/* 										<div class="overlay-content">*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 									</div>*/
/* 									<img src="images/home/sale.png" class="new" alt="" />*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-4">*/
/* 							<div class="product-image-wrapper">*/
/* 								<div class="single-products">*/
/* 									<div class="productinfo text-center">*/
/* 										<img src="images/home/product6.jpg" alt="" />*/
/* 										<h2>$56</h2>*/
/* 										<p>Easy Polo Black Edition</p>*/
/* 										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 									</div>*/
/* 									<div class="product-overlay">*/
/* 										<div class="overlay-content">*/
/* 											<h2>$56</h2>*/
/* 											<p>Easy Polo Black Edition</p>*/
/* 											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="choose">*/
/* 									<ul class="nav nav-pills nav-justified">*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>*/
/* 										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div><!--features_items-->*/
/* 					*/
/* 					<div class="category-tab"><!--category-tab-->*/
/* 						<div class="col-sm-12">*/
/* 							<ul class="nav nav-tabs">*/
/* 								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>*/
/* 								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>*/
/* 								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>*/
/* 								<li><a href="#kids" data-toggle="tab">Kids</a></li>*/
/* 								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="tab-content">*/
/* 							<div class="tab-pane fade active in" id="tshirt" >*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery1.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery2.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery3.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery4.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="tab-pane fade" id="blazers" >*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery4.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery3.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery2.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery1.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="tab-pane fade" id="sunglass" >*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery3.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery4.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery1.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery2.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="tab-pane fade" id="kids" >*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery1.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery2.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery3.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery4.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							<div class="tab-pane fade" id="poloshirt" >*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery2.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery4.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery3.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="product-image-wrapper">*/
/* 										<div class="single-products">*/
/* 											<div class="productinfo text-center">*/
/* 												<img src="images/home/gallery1.jpg" alt="" />*/
/* 												<h2>$56</h2>*/
/* 												<p>Easy Polo Black Edition</p>*/
/* 												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div><!--/category-tab-->*/
/* 					*/
/* 					<div class="recommended_items"><!--recommended_items-->*/
/* 						<h2 class="title text-center">recommended items</h2>*/
/* 						*/
/* 						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">*/
/* 							<div class="carousel-inner">*/
/* 								<div class="item active">	*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend1.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend2.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend3.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="item">	*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend1.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend2.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="col-sm-4">*/
/* 										<div class="product-image-wrapper">*/
/* 											<div class="single-products">*/
/* 												<div class="productinfo text-center">*/
/* 													<img src="images/home/recommend3.jpg" alt="" />*/
/* 													<h2>$56</h2>*/
/* 													<p>Easy Polo Black Edition</p>*/
/* 													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>*/
/* 												</div>*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">*/
/* 								<i class="fa fa-angle-left"></i>*/
/* 							  </a>*/
/* 							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">*/
/* 								<i class="fa fa-angle-right"></i>*/
/* 							  </a>			*/
/* 						</div>*/
/* 					</div><!--/recommended_items-->*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	{% include "layouts/footer.html" %}*/
/* */
