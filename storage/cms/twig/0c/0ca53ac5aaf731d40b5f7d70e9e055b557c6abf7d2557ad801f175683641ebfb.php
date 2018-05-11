<?php

/* D:\xampp\htdocs\cars/themes/cvsmart/pages/Home.htm */
class __TwigTemplate_7d7f4e65bdad6b98d1e95375ef4b7e392d1a3a66f71e70f91504570dda695499 extends Twig_Template
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
        echo "<section id=\"home\">
      <!-- *** HOMEPAGE CAROUSEL ***
      _________________________________________________________ -->
      <!-- Slider main container -->
      <div class=\"swiper-container\">
          <!-- Additional required wrapper -->
          <div class=\"swiper-wrapper\">

              ";
        // line 9
        if (($context["carsforlisthome"] ?? null)) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["carsforlisthome"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 11
                echo "                <div class=\"swiper-slide col-md-12\">
                  <a href=\"/car/";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "slug", array()), "html", null, true);
                echo "\" style=\"background-image: url(";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "homepagebanner", array()));
                echo ");\" class=\"slider-content\"></a>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "              ";
        }
        // line 16
        echo "          </div>


          <div class=\"swiper-pagination\" style=\"background: transparent;\"></div>
          <div class=\"s-button-prev\">
            <span class=\"fa fa-angle-left\"></span>
          </div>
          <div class=\"s-button-next\">
             <span class=\"fa fa-angle-right\"></span>
          </div>
      </div>

      <!-- *** HOMEPAGE CAROUSEL END *** -->
  </section>
   <section id=\"homesearch\">
<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-sm-12\">
       \t<div class=\"search_container\">
       \t\t<script type=\"text/javascript\">
       \t\t</script>
       \t\t<form action=\"/car-list\" method=\"POST\">
       \t\t\t<h2>Find used car for sale</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"brand\" class=\"form-control\">
\t\t                  <option>All Brands</option>
\t\t                  ";
        // line 44
        if (($context["car_brandlist"] ?? null)) {
            // line 45
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_brandlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 46
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t              ";
        }
        // line 49
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"models\" class=\"form-control\">
\t\t                  <option>All Models</option>
\t\t                  ";
        // line 54
        if (($context["car_modellist"] ?? null)) {
            // line 55
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_modellist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 56
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t              ";
        }
        // line 59
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"states\" class=\"form-control\">
\t\t                  <option>All state</option>
\t\t                  ";
        // line 64
        if (($context["car_statelist"] ?? null)) {
            // line 65
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 66
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t              ";
        }
        // line 69
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"prices\" class=\"form-control\">
\t\t                  <option>All Prices</option>
\t\t                  ";
        // line 74
        if (($context["car_pricelist"] ?? null)) {
            // line 75
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_pricelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 76
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t              ";
        }
        // line 79
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t\t<form action=\"/car-list\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select class=\"form-control\">
\t\t                  <option>Brand</option>
\t\t                  ";
        // line 92
        if (($context["car_brandlist"] ?? null)) {
            // line 93
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_brandlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 94
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t              ";
        }
        // line 97
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select class=\"form-control\">
\t\t                  <option>Categories</option>
\t\t                  ";
        // line 102
        if (($context["car_categorieslist"] ?? null)) {
            // line 103
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_categorieslist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 104
                echo "\t\t\t                <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t              ";
        }
        // line 107
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t</div>
      </div>
      <div class=\"col-md-1 col-sm-12 \"></div>
      <div class=\"col-md-3 col-sm-12 \">
       \t\t<div class=\"home_sidebanner swiper-container\">
\t          <!-- Additional required wrapper -->
\t          <div class=\"swiper-wrapper\">

\t              ";
        // line 122
        if (($context["youtubelinklist"] ?? null)) {
            // line 123
            echo "\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubelinklist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 124
                echo "\t                <div class=\"swiper-slide col-md-12\">
\t                  <a href=\"https://www.youtube.com/watch?v=";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "video_id", array()), "html", null, true);
                echo "\" data-lity style=\"background-image: url(http://img.youtube.com/vi/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "video_id", array()), "html", null, true);
                echo "/mqdefault.jpg);\" class=\"slider-content youtubelink\"><span class=\"videobg\"></span></a>
\t                </div>
\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t              ";
        }
        // line 129
        echo "\t          </div>


\t          <div class=\"swiper-pagination\"></div>
\t          <div class=\"hidden s-button-prev\">
\t            <span class=\"fa fa-angle-left\"></span>
\t          </div>
\t          <div class=\"hidden s-button-next\">
\t             <span class=\"fa fa-angle-right\"></span>
\t          </div>
\t      </div>
\t      <div class=\"static_sidebanner\">
\t      \t<div class=\"home_sidebanner swiper-container\">
\t          <!-- Additional required wrapper -->
\t          <div class=\"swiper-wrapper\">
\t          \t";
        // line 144
        if (($context["homestaticbanner"] ?? null)) {
            // line 145
            echo "\t      \t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["homestaticbanner"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 146
                echo "\t      \t <div class=\"swiper-slide\">
\t      \t\t<a href=\"";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["banner"], "link", array()), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["banner"], "staticimage", array()));
                echo "\"></a>
\t      \t</div>
\t      \t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t      \t\t ";
        }
        // line 151
        echo "\t      \t\t <div class=\"swiper-pagination\"></div>
\t          <div class=\"hidden s-button-prev\">
\t            <span class=\"fa fa-angle-left\"></span>
\t          </div>
\t          <div class=\"hidden s-button-next\">
\t             <span class=\"fa fa-angle-right\"></span>
\t          </div>
\t      </div>
\t      </div>
      </div>
    </div>
    <!-- /.col-md-3 -->
  </div>
</section>

<section id=\"homeaboutus\">
\t<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<h2>About us</h2>
\t<p>It’s time to know a little bit about us! CV Smart Auto Trading is a brainchild of 2 passionate car enthusiasts. We might be small in size but both of us have a big heart and share the same vision. Finally, we decided that it was the right time to do something different in life. We gave up on what we use to do and pursue what we have always dream of.<br/>
<br/>
There is a saying '<span>Love the car that you owned and treat it as one of a kind</span>'. By keeping this saying in mind, we wanted to share our passion and knowledge for cars to the public. Although a car is just a vehicle for transportation, getting us from one destination to another. That might sound uninspiring at all but let us change your mind about that because we are able to spark things up and make it more than just an ordinary vehicle. We modify cars with hand-picked accessories that we sell in our shops. We are also experts in fine tuning and make them AWESOME again.<br/>
<br/>
In CV Smart Auto Trading, we sell genuine second-hand luxury cars too. Drop by to our show room and you will be spoilt with lots of exceptional and exclusive choices there.<br/>
<br/>
There are lots of cool pictures showcasing what CV Smart Auto Trading has to offer in the official fan page, feel free to <a href=\"http://www.facebook.com/\">check it out</a>. We update all the upcoming promotions from time to time as well, so make sure you don’t miss out by staying with us and you will find yourself lost in the wondrous world of CV Smart Auto Trading. </p>
</div>
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/Home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 151,  331 => 150,  320 => 147,  317 => 146,  312 => 145,  310 => 144,  293 => 129,  290 => 128,  279 => 125,  276 => 124,  271 => 123,  269 => 122,  252 => 107,  249 => 106,  238 => 104,  233 => 103,  231 => 102,  224 => 97,  221 => 96,  210 => 94,  205 => 93,  203 => 92,  188 => 79,  185 => 78,  174 => 76,  169 => 75,  167 => 74,  160 => 69,  157 => 68,  146 => 66,  141 => 65,  139 => 64,  132 => 59,  129 => 58,  118 => 56,  113 => 55,  111 => 54,  104 => 49,  101 => 48,  90 => 46,  85 => 45,  83 => 44,  53 => 16,  50 => 15,  39 => 12,  36 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"home\">
      <!-- *** HOMEPAGE CAROUSEL ***
      _________________________________________________________ -->
      <!-- Slider main container -->
      <div class=\"swiper-container\">
          <!-- Additional required wrapper -->
          <div class=\"swiper-wrapper\">

              {% if carsforlisthome %}
                {% for slider in carsforlisthome %}
                <div class=\"swiper-slide col-md-12\">
                  <a href=\"/car/{{ slider.slug }}\" style=\"background-image: url({{ slider.homepagebanner|media }});\" class=\"slider-content\"></a>
                </div>
                {% endfor %}
              {% endif %}
          </div>


          <div class=\"swiper-pagination\" style=\"background: transparent;\"></div>
          <div class=\"s-button-prev\">
            <span class=\"fa fa-angle-left\"></span>
          </div>
          <div class=\"s-button-next\">
             <span class=\"fa fa-angle-right\"></span>
          </div>
      </div>

      <!-- *** HOMEPAGE CAROUSEL END *** -->
  </section>
   <section id=\"homesearch\">
<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-sm-12\">
       \t<div class=\"search_container\">
       \t\t<script type=\"text/javascript\">
       \t\t</script>
       \t\t<form action=\"/car-list\" method=\"POST\">
       \t\t\t<h2>Find used car for sale</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"brand\" class=\"form-control\">
\t\t                  <option>All Brands</option>
\t\t                  {% if car_brandlist %}
\t\t\t                {% for slider in car_brandlist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"models\" class=\"form-control\">
\t\t                  <option>All Models</option>
\t\t                  {% if car_modellist %}
\t\t\t                {% for slider in car_modellist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"states\" class=\"form-control\">
\t\t                  <option>All state</option>
\t\t                  {% if car_statelist %}
\t\t\t                {% for slider in car_statelist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"prices\" class=\"form-control\">
\t\t                  <option>All Prices</option>
\t\t                  {% if car_pricelist %}
\t\t\t                {% for slider in car_pricelist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t\t<form action=\"/car-list\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select class=\"form-control\">
\t\t                  <option>Brand</option>
\t\t                  {% if car_brandlist %}
\t\t\t                {% for slider in car_brandlist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select class=\"form-control\">
\t\t                  <option>Categories</option>
\t\t                  {% if car_categorieslist %}
\t\t\t                {% for slider in car_categorieslist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t</div>
      </div>
      <div class=\"col-md-1 col-sm-12 \"></div>
      <div class=\"col-md-3 col-sm-12 \">
       \t\t<div class=\"home_sidebanner swiper-container\">
\t          <!-- Additional required wrapper -->
\t          <div class=\"swiper-wrapper\">

\t              {% if youtubelinklist %}
\t                {% for slider in youtubelinklist %}
\t                <div class=\"swiper-slide col-md-12\">
\t                  <a href=\"https://www.youtube.com/watch?v={{ slider.video_id }}\" data-lity style=\"background-image: url(http://img.youtube.com/vi/{{ slider.video_id }}/mqdefault.jpg);\" class=\"slider-content youtubelink\"><span class=\"videobg\"></span></a>
\t                </div>
\t                {% endfor %}
\t              {% endif %}
\t          </div>


\t          <div class=\"swiper-pagination\"></div>
\t          <div class=\"hidden s-button-prev\">
\t            <span class=\"fa fa-angle-left\"></span>
\t          </div>
\t          <div class=\"hidden s-button-next\">
\t             <span class=\"fa fa-angle-right\"></span>
\t          </div>
\t      </div>
\t      <div class=\"static_sidebanner\">
\t      \t<div class=\"home_sidebanner swiper-container\">
\t          <!-- Additional required wrapper -->
\t          <div class=\"swiper-wrapper\">
\t          \t{% if homestaticbanner %}
\t      \t {% for banner in homestaticbanner %}
\t      \t <div class=\"swiper-slide\">
\t      \t\t<a href=\"{{ banner.link }}\"><img src=\"{{ banner.staticimage|media }}\"></a>
\t      \t</div>
\t      \t\t {% endfor %}
\t      \t\t {% endif %}
\t      \t\t <div class=\"swiper-pagination\"></div>
\t          <div class=\"hidden s-button-prev\">
\t            <span class=\"fa fa-angle-left\"></span>
\t          </div>
\t          <div class=\"hidden s-button-next\">
\t             <span class=\"fa fa-angle-right\"></span>
\t          </div>
\t      </div>
\t      </div>
      </div>
    </div>
    <!-- /.col-md-3 -->
  </div>
</section>

<section id=\"homeaboutus\">
\t<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<h2>About us</h2>
\t<p>It’s time to know a little bit about us! CV Smart Auto Trading is a brainchild of 2 passionate car enthusiasts. We might be small in size but both of us have a big heart and share the same vision. Finally, we decided that it was the right time to do something different in life. We gave up on what we use to do and pursue what we have always dream of.<br/>
<br/>
There is a saying '<span>Love the car that you owned and treat it as one of a kind</span>'. By keeping this saying in mind, we wanted to share our passion and knowledge for cars to the public. Although a car is just a vehicle for transportation, getting us from one destination to another. That might sound uninspiring at all but let us change your mind about that because we are able to spark things up and make it more than just an ordinary vehicle. We modify cars with hand-picked accessories that we sell in our shops. We are also experts in fine tuning and make them AWESOME again.<br/>
<br/>
In CV Smart Auto Trading, we sell genuine second-hand luxury cars too. Drop by to our show room and you will be spoilt with lots of exceptional and exclusive choices there.<br/>
<br/>
There are lots of cool pictures showcasing what CV Smart Auto Trading has to offer in the official fan page, feel free to <a href=\"http://www.facebook.com/\">check it out</a>. We update all the upcoming promotions from time to time as well, so make sure you don’t miss out by staying with us and you will find yourself lost in the wondrous world of CV Smart Auto Trading. </p>
</div>
</div>
</div>
</section>", "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/Home.htm", "");
    }
}
