<?php

/* D:\xampp\htdocs\cars\cvsmart\cvsmart/themes/cvsmart/layouts/Default.htm */
class __TwigTemplate_8ec836e3b28af0b3c37605b90161074762f55f29146c2ac84425dee12ff0ff51 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">



<head>

    <meta charset=\"utf-8\">

    <meta name=\"robots\" content=\"all,follow\">

    <meta name=\"googlebot\" content=\"index,follow,snippet,archive\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">



    <title>cvSmart - ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>



    <meta name=\"keywords\" content=\"Organising,Promoting,Live,Music,Concerts,Showcases\">

    <meta name=\"description\" content=\"We provide services relating to organising and promoting live music concerts and showcases.\">



    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>



    <!-- Bootstrap and Font Awesome css -->

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">



    <!-- Css animations  -->

    <link href=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\">



    <!-- Theme stylesheet, if possible do not edit this stylesheet -->

    <link href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.default.css");
        echo "\" rel=\"stylesheet\" id=\"theme-stylesheet\">



    <!-- Custom stylesheet - for your changes -->

    <link href=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" rel=\"stylesheet\">

    <!-- <link href=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\"> -->

    <link href=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap-social.css");
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/lity.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Responsivity for older IE -->

    <!--[if lt IE 9]>

        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>

        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

    <![endif]-->



    <!-- Favicon and apple touch icons-->

    <!-- <link rel=\"shortcut icon\" href=\"/themes/cvsmart/assets/img/favicon.ico\" type=\"image/x-icon\" />-->

    <link rel=\"apple-touch-icon\" href=\"/themes/cvsmart/assets/img/apple-touch-icon.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-57x57.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-72x72.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-76x76.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-114x114.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-120x120.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-144x144.png\" />

    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-152x152.png\" />

    <!-- owl carousel css -->



    <link href=\"";
        // line 99
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.carousel.css");
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 101
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/owl.theme.css");
        echo "\" rel=\"stylesheet\">

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css\" rel=\"stylesheet\">

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.9/css/lightgallery.min.css\" rel=\"stylesheet\" type=\"text/css\">



    <link href=\"";
        // line 109
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/cvsmart.css?v=2");
        echo "\" rel=\"stylesheet\">









    <!-- <link href=\"";
        // line 119
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/scrolling-nav.css");
        echo "\" rel=\"stylesheet\"> -->

</head>



<body>



    <div id=\"all\">



      <header id=\"layout-header\">

          ";
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 136
        echo "
      </header>

      <!-- Content -->

      <div id=\"layout-content\">

          ";
        // line 143
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 144
        echo "
      </div>



      <footer id=\"layout-footer\">

          ";
        // line 151
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 152
        echo "
      </footer>



    </div>



    <!-- /#all -->



    <!-- #### JAVASCRIPT FILES ### -->



    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>



    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>



    <script src=\"";
        // line 179
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.cookie.js");
        echo "\"></script>

    <script src=\"";
        // line 181
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/waypoints.min.js");
        echo "\"></script>

    <script src=\"";
        // line 183
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.counterup.min.js");
        echo "\"></script>

    <script src=\"";
        // line 185
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.parallax-1.1.3.js");
        echo "\"></script>

    <script src=\"";
        // line 187
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.validate.min.js");
        echo "\"></script>



    <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js\"></script>



    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.9/js/lightgallery.min.js\"></script>



<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-fullscreen.js\"></script>

<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-thumbnail.js\"></script>

<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-video.js\"></script>

<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-autoplay.js\"></script>



    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js\"></script> -->

    ";
        // line 213
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 214
        echo "
    ";
        // line 215
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 216
        echo "


    <!-- owl carousel -->

    <script src=\"";
        // line 221
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>

    ";
        // line 223
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            // line 224
            echo "
    <script>

    \$(function() {

        console.log(\"here\");

        \$(\"#light-thumb\").lightGallery({

          thumbnail:true,

          selector: '.portfolio-thumb'

        });



        \$(document).on(\"scroll\", onScroll);



        \$(document).on('click', '.page-scroll a', function(event) {

            \$(document).off(\"scroll\");

            \$(\".page-scroll\").removeClass(\"active\");

            \$(this).parent( \".page-scroll\" ).addClass(\"active\");



            var target = this.hash,

                menu = target;

            \$target = \$(target);



            var \$anchor = \$(this);

            var anchorstr = \$anchor.attr('href');

            var res = anchorstr.replace(\"/\", \" \");



            \$('html, body').stop().animate({

                'scrollTop': \$(res).offset().top - 100

            }, 1500, 'easeInOutExpo', function () {

                window.location.hash = target;

                \$(document).on(\"scroll\", onScroll);

            });



            event.preventDefault();

        });

    });



    function onScroll(event){

        \$(document).on(\"scroll\");

        var scrollPos = \$(document).scrollTop() + 100;



        \$('.page-scroll a').each(function () {

            var currLink = \$(this);

            var anchorstr = currLink.attr(\"href\");

            var res = anchorstr.replace(\"/\", \" \");

            var refElement = \$(res);



            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {

                \$('.page-scroll').removeClass(\"active\");

                currLink.parent( \".page-scroll\" ).addClass(\"active\");

            }

            else{

                currLink.removeClass(\"active\");

            }

        });

    }

    </script>

    ";
        }
        // line 334
        echo "


    <script src=\"";
        // line 337
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.twbsPagination.min.js");
        echo "\"></script>

    <script src=\"";
        // line 339
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/lity.min.js");
        echo "\"></script>

    <script src=\"";
        // line 341
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/front.js?v=102");
        echo "\"></script>



</body>



</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart\\cvsmart/themes/cvsmart/layouts/Default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 341,  443 => 339,  438 => 337,  433 => 334,  321 => 224,  319 => 223,  314 => 221,  307 => 216,  304 => 215,  301 => 214,  294 => 213,  265 => 187,  260 => 185,  255 => 183,  250 => 181,  245 => 179,  216 => 152,  212 => 151,  203 => 144,  201 => 143,  192 => 136,  188 => 135,  169 => 119,  156 => 109,  145 => 101,  140 => 99,  99 => 61,  94 => 59,  89 => 57,  84 => 55,  75 => 49,  66 => 43,  39 => 19,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"all,follow\">
    <meta name=\"googlebot\" content=\"index,follow,snippet,archive\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>cvSmart - {{ this.page.title }}</title>

    <meta name=\"keywords\" content=\"Organising,Promoting,Live,Music,Concerts,Showcases\">
    <meta name=\"description\" content=\"We provide services relating to organising and promoting live music concerts and showcases.\">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">

    <!-- Css animations  -->
    <link href=\"{{ 'assets/css/animate.css'|theme }}\" rel=\"stylesheet\">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href=\"{{ 'assets/css/style.default.css'|theme }}\" rel=\"stylesheet\" id=\"theme-stylesheet\">

    <!-- Custom stylesheet - for your changes -->
    <link href=\"{{ 'assets/css/custom.css'|theme }}\" rel=\"stylesheet\">
    <!-- <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\"> -->
    <link href=\"{{ 'assets/css/bootstrap-social.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/lity.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Favicon and apple touch icons-->
    <!-- <link rel=\"shortcut icon\" href=\"/themes/cvsmart/assets/img/favicon.ico\" type=\"image/x-icon\" />-->
    <link rel=\"apple-touch-icon\" href=\"/themes/cvsmart/assets/img/apple-touch-icon.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-57x57.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-72x72.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-76x76.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-114x114.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-120x120.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-144x144.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/themes/cvsmart/assets/img/apple-touch-icon-152x152.png\" />
    <!-- owl carousel css -->

    <link href=\"{{ 'assets/css/owl.carousel.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/owl.theme.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.9/css/lightgallery.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"{{ 'assets/css/cvsmart.css?v=2'|theme }}\" rel=\"stylesheet\">




    <!-- <link href=\"{{ 'assets/css/scrolling-nav.css'|theme }}\" rel=\"stylesheet\"> -->
</head>

<body>

    <div id=\"all\">

      <header id=\"layout-header\">
          {% partial 'site/header' %}
      </header>
      <!-- Content -->
      <div id=\"layout-content\">
          {% page %}
      </div>

      <footer id=\"layout-footer\">
          {% partial 'site/footer' %}
      </footer>

    </div>

    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>

    <script src=\"{{ 'assets/js/jquery.cookie.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/waypoints.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.counterup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.parallax-1.1.3.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.validate.min.js'|theme }}\"></script>

    <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js\"></script>

    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.9/js/lightgallery.min.js\"></script>

<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-fullscreen.js\"></script>
<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-thumbnail.js\"></script>
<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-video.js\"></script>
<script src=\"https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-autoplay.js\"></script>

    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js\"></script> -->
    {% framework extras %}
    {% scripts %}

    <!-- owl carousel -->
    <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    {% if this.page.id == 'home' %}
    <script>
    \$(function() {
        console.log(\"here\");
        \$(\"#light-thumb\").lightGallery({
          thumbnail:true,
          selector: '.portfolio-thumb'
        });

        \$(document).on(\"scroll\", onScroll);

        \$(document).on('click', '.page-scroll a', function(event) {
            \$(document).off(\"scroll\");
            \$(\".page-scroll\").removeClass(\"active\");
            \$(this).parent( \".page-scroll\" ).addClass(\"active\");

            var target = this.hash,
                menu = target;
            \$target = \$(target);

            var \$anchor = \$(this);
            var anchorstr = \$anchor.attr('href');
            var res = anchorstr.replace(\"/\", \" \");

            \$('html, body').stop().animate({
                'scrollTop': \$(res).offset().top - 100
            }, 1500, 'easeInOutExpo', function () {
                window.location.hash = target;
                \$(document).on(\"scroll\", onScroll);
            });

            event.preventDefault();
        });
    });

    function onScroll(event){
        \$(document).on(\"scroll\");
        var scrollPos = \$(document).scrollTop() + 100;

        \$('.page-scroll a').each(function () {
            var currLink = \$(this);
            var anchorstr = currLink.attr(\"href\");
            var res = anchorstr.replace(\"/\", \" \");
            var refElement = \$(res);

            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                \$('.page-scroll').removeClass(\"active\");
                currLink.parent( \".page-scroll\" ).addClass(\"active\");
            }
            else{
                currLink.removeClass(\"active\");
            }
        });
    }
    </script>
    {% endif %}

    <script src=\"{{ 'assets/js/jquery.twbsPagination.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/lity.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/front.js?v=102'|theme }}\"></script>

</body>

</html>", "D:\\xampp\\htdocs\\cars\\cvsmart\\cvsmart/themes/cvsmart/layouts/Default.htm", "");
    }
}
