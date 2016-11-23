<?php

/* BabySitterBundle::layout.html.twig */
class __TwigTemplate_3b48fd9f20f95552d4418a7b32f875178da3d757613ada199864f311e646a348 extends Twig_Template
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
<title>Baby Sitter</title>
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

<body class=\"homepage\">
<header id=\"header\">
  <nav class=\"navbar navbar-inverse\" role=\"banner\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
        <a class=\"navbar-brand\" href=\"#\"><i class=\"fa fa-bolt\"></i> Baby Sitter</a></a> </div>
      <div class=\"collapse navbar-collapse navbar-right\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"index.html\">Home</a></li>
          <li><a href=\"about-us.html\">About</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li><a href=\"pricing.html\">Contact</a></li>
        </ul>
      </div>
    </div>
    <!--/.container--> 
  </nav>
  <!--/nav--> 
  
</header>
<!--/header-->

<section id=\"main-slider\" class=\"no-margin\">
  <div class=\"carousel slide\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
      <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"item active\" style=\"background-image: url(";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/slider/im.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
          <div class=\"row slide-margin\">
            <div class=\"col-sm-12\">
              <div class=\"carousel-content\">
                <h1>Welcome to <span class=\"logo\"><i class=\"fa fa-bolt\"></i> BabySitter</span></h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class=\"btn-slide\" href=\"about-us.html\">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item-->
      
      <div class=\"item\" style=\"background-image: url(";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/slider/bg2.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
          <div class=\"row slide-margin\">
            <div class=\"col-sm-12\">
              <div class=\"carousel-content\">
                <h1>Typi non habent claritatem insitam</h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class=\"btn-slide\" href=\"about-us.html\">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item-->
      
      <div class=\"item\" style=\"background-image: url(";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/slider/bg3.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container\">
          <div class=\"row slide-margin\">
            <div class=\"col-sm-12\">
              <div class=\"carousel-content\">
                <h1>Mirum est notare quam littera gothica</h1>
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt laoreet</h2>
                <a class=\"btn-slide\" href=\"about-us.html\">Read More</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.item--> 
    </div>
    <!--/.carousel-inner--> 
  </div>
  <!--/.carousel--> 
  <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\"> <i class=\"fa fa-chevron-left\"></i> </a> <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\"> <i class=\"fa fa-chevron-right\"></i> </a> </section>
<!--/#main-slider-->
<div class=\"color-border\"> </div>
<section id=\"feature\" >
  <div class=\"container\">
    <div class=\"center\">
      <h2>Featured Services</h2>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class=\"row\">
      <div class=\"features\">
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"feature-wrap\"> <i class=\"fa fa-desktop\"></i>
            <h2>Web Development</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"feature-wrap\"> <i class=\"fa fa-cogs\"></i>
            <h2>App Development</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4-->
        
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"feature-wrap\"> <i class=\"fa fa-rocket\"></i>
            <h2>Brand & Identity</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique.</h3>
          </div>
        </div>
        <!--/.col-md-4--> 
      </div>
      <!--/.services--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#feature-->

<section id=\"recent-works\">
  <div class=\"container\">
    <div class=\"center\">
      <h2>Recent Works</h2>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class=\"row\">
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item1.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a> </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item1.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\" title=\"\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item2.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item2.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item3.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item3.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item3.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item4.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item5.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item5.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-12 col-sm-4 col-md-4\">
        <div class=\"recent-work-wrap\"> <img class=\"img-responsive\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/recent/item6.jpg"), "html", null, true);
        echo "\" alt=\"\">
          <div class=\"overlay\">
            <div class=\"recent-work-inner\">
              <h3><a href=\"#\">Lorem Ipsum</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum.</p>
              <a class=\"preview\" href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/portfolio/full/item6.jpg"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-search\"></i> View</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#recent-works-->

<section id=\"testimonials\" class=\"service-item\">
  <div class=\"container\">
    <div class=\"center\">
      <h2>What Our Clients Says</h2>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class=\"row\">
      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row testimonials\">
          <div class=\"col-sm-4\">
            <blockquote>
              <p class=\"clients-words\">Morbi eget enim nisi. In venenatis porta est ut molestie nulla facilisi. Aliquam vehicula efficitur lorem eget eleifend.</p>
              <span class=\"clients-name\">- John Doe, Company</span> <img class=\"img-circle img-thumbnail\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/testimonials/man1.jpg"), "html", null, true);
        echo "\"> </blockquote>
          </div>
          <div class=\"col-sm-4\">
            <blockquote>
              <p class=\"clients-words\">Maecenas tincidunt venenatis tempus. Nulla tristique euismod urna at ullamcorper.</p>
              <span class=\"clients-name\">- Jane Doe, Company</span> <img class=\"img-circle img-thumbnail\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/testimonials/woman1.jpg"), "html", null, true);
        echo "\"> </blockquote>
          </div>
          <div class=\"col-sm-4\">
            <blockquote>
              <p  class=\"clients-words\">Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum.</p>
              <span class=\"clients-name\">- Brian Smith, Company</span> <img class=\"img-circle img-thumbnail\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/testimonials/man1.jpg"), "html", null, true);
        echo "\"> </blockquote>
          </div>
        </div>
        <!--/.row--> 
      </div>
      <!--/.col--> 
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#testimonials-->

<section id=\"middle\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h3>Some Facts About Us</h3>
        <br>
        <div class=\"media\"> <i class=\"fa fa-smile-o pull-left fa-3x\"></i>
          <div class=\"media-body\">
            <h3 class=\"media-heading\"> 120+ Happy Clients </h3>
            Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.</div>
        </div>
        <br>
        <div class=\"media\"> <i class=\"fa fa-check-square-o pull-left fa-3x\"></i>
          <div class=\"media-body\">
            <h3 class=\"media-heading\"> 600+ Projects Completed </h3>
            Sed scelerisque nunc quis est efficitur dictum vivamus commodo.</div>
        </div>
        <br>
        <div class=\"media\"> <i class=\"fa fa-trophy pull-left fa-3x\"></i>
          <div class=\"media-body\">
            <h3 class=\"media-heading\"> 25 Awards Won </h3>
            Pellentesque hendrerit arcu luctus facilisis erat consectetur.</div>
        </div>
      </div>
      <!--/.col-sm-6-->
      
      <div class=\"col-sm-6\">
        <div class=\"accordion\">
          <h3>Questions & Answers</h3>
          <br>
          <div class=\"panel-group\" id=\"accordion1\">
            <div class=\"panel panel-default\">
              <div class=\"panel-heading active\">
                <h3 class=\"panel-title\"> <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\"> Vivamus commodo nisi risus? <i class=\"fa fa-angle-right pull-right\"></i> </a> </h3>
              </div>
              <div id=\"collapseOne1\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                  <div class=\"media accordion-inner\">
                    <div class=\"media-body\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\"> Etiam eget vel justo suscipit ullamcorpe? <i class=\"fa fa-angle-right pull-right\"></i> </a> </h3>
              </div>
              <div id=\"collapseTwo1\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\"> Integer eget sem nec nulla dictum dictum? <i class=\"fa fa-angle-right pull-right\"></i> </a> </h3>
              </div>
              <div id=\"collapseThree1\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseFour1\"> Maecenas tincidunt venenatis tempus? <i class=\"fa fa-angle-right pull-right\"></i> </a> </h3>
              </div>
              <div id=\"collapseFour1\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus. Aliquam euismod nunc id eros sollicitudin interdum. Integer eget sem nec nulla dictum dictum. </div>
              </div>
            </div>
          </div>
          <!--/#accordion1--> 
        </div>
      </div>
    </div>
    <!--/.row--> 
  </div>
  <!--/.container--> 
</section>
<!--/#middle-->

<section id=\"partner\">
  <div class=\"container\">
    <div class=\"center\">
      <h2>Our Awesome Clients</h2>
      <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non odio sed eros tristique bibendum. Nunc quis semper sem.<br>
        Morbi libero elit elementum quis faucibus ac, condimentum quis nibh.</p>
    </div>
    <div class=\"partners\">
      <ul>
        <li> <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/partners/partner1.png"), "html", null, true);
        echo "\"></a></li>
        <li> <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/partners/partner2.png"), "html", null, true);
        echo "\"></a></li>
        <li> <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/partners/partner3.png"), "html", null, true);
        echo "\"></a></li>
        <li> <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/partners/partner4.png"), "html", null, true);
        echo "\"></a></li>
        <li> <a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/images/partners/partner5.png"), "html", null, true);
        echo "\"></a></li>
      </ul>
    </div>
  </div>
  <!--/.container--> 
</section>
<!--/#partner-->

<section id=\"get-started\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <h2>Want to discuss a project?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl vel justo suscipit ullamcorper sed at lacus.<br>
          Aliquam euismod nunc id eros sollicitudin interdum.</p>
        <a href=\"pricing.html\" class=\"btn btn-primary\">Contact us</a> </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<!--/#get-started-->

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
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/BabySitter/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BabySitterBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 386,  497 => 385,  493 => 384,  489 => 383,  485 => 382,  447 => 347,  443 => 346,  439 => 345,  435 => 344,  431 => 343,  328 => 243,  320 => 238,  312 => 233,  285 => 209,  277 => 204,  269 => 199,  261 => 194,  253 => 189,  245 => 184,  237 => 179,  229 => 174,  221 => 169,  213 => 164,  205 => 159,  197 => 154,  124 => 84,  107 => 70,  90 => 56,  46 => 15,  42 => 14,  38 => 13,  34 => 12,  30 => 11,  19 => 2,);
    }
}
