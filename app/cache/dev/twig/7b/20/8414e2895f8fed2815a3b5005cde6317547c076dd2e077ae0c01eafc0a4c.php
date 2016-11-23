<?php

/* BabySitterBundle:Default:contactUs.html.twig */
class __TwigTemplate_7b208414e2895f8fed2815a3b5005cde6317547c076dd2e077ae0c01eafc0a4c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>Influx | Contact Us</title>
<meta name=\"description\" content=\"\">

<!-- core CSS -->
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>
<!--/head-->

<body>
<header id=\"header\">
  <nav class=\"navbar navbar-inverse\" role=\"banner\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
        <a class=\"navbar-brand\" href=\"index.html\"><i class=\"fa fa-bolt\"></i> Influx</a></a> </div>
      <div class=\"collapse navbar-collapse navbar-right\">
        <ul class=\"nav navbar-nav\">
          <li><a href=\"index.html\">Home</a></li>
          <li><a href=\"about-us.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"active\"><a href=\"contact-us.html\">Contact</a></li>
        </ul>
      </div>
    </div>
    <!--/.container--> 
  </nav>
  <!--/nav--> 
  
</header>
<!--/header-->
<div class=\"color-border\"> </div>
<section id=\"inner-page\">
  <div class=\"container\">
    <div class=\"center\">
      <h2>Contact Us</h2>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
    </div>
    <div class=\"row contact_top\">
      <div class=\"col-md-4 contact_details\"> <i class=\"fa fa-map-marker fa-2x\"></i>
        <p>321 Awesome Street,<br>
          New York, NY 17022</p>
      </div>
      <div class=\"col-md-4 contact_details\"> <i class=\"fa fa-envelope-o fa-2x\"></i>
        <p>info@companyname.com</p>
      </div>
      <div class=\"col-md-4 contact_details\"> <i class=\"fa fa-phone fa-2x\"></i>
        <p>+1 800 123 1234<br>
          +1 322 123 8795</p>
      </div>
    </div>
    <!--/.row-->
    <div class=\"center\">
      <h3>Send us a message</h3>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class=\"row\">
      <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\" \">
        <div class=\"col-sm-5 col-sm-offset-1\">
          <div class=\"form-group\">
            <label>Name *</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\">
          </div>
          <div class=\"form-group\">
            <label>Email *</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\">
          </div>
          <div class=\"form-group\">
            <label>Phone</label>
            <input type=\"number\" class=\"form-control\">
          </div>
          <div class=\"form-group\">
            <label>Company Name</label>
            <input type=\"text\" class=\"form-control\">
          </div>
        </div>
        <div class=\"col-sm-5\">
          <div class=\"form-group\">
            <label>Subject *</label>
            <input type=\"text\" name=\"subject\" class=\"form-control\" required=\"required\">
          </div>
          <div class=\"form-group\">
            <label>Message *</label>
            <textarea name=\"message\" id=\"message\" required class=\"form-control\" rows=\"8\"></textarea>
          </div>
          <div class=\"form-group\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Send Message</button>
          </div>
        </div>
      </form>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
  <br>
  <br>
</section>
<!--/#inner-page-->

<div class=\"color-border\"> </div>
<footer id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">Copyright &copy; 2015 Company Name. Design by <a href=\"http://www.templategarden.com\" rel=\"nofollow\">TemplateGarden</a></div>
      <div class=\"col-sm-6\">
        <div class=\"follow-us\"> <a class=\"fa fa-facebook social-icon\" href=\"#\"></a> <a class=\"fa fa-twitter social-icon\" href=\"#\"></a> <a class=\"fa fa-linkedin social-icon\" href=\"#\"></a> <a class=\"fa fa-google-plus social-icon\" href=\"#\"></a> </div>
      </div>
    </div>
  </div>
</footer>
<!--/#footer--> 

<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle:Default:contactUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 133,  175 => 132,  171 => 131,  167 => 130,  163 => 129,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  30 => 11,  19 => 2,);
    }
}
