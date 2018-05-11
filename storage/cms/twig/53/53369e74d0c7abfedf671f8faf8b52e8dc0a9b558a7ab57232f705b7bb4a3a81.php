<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/pages/Home.htm */
class __TwigTemplate_94eb9d144d0610f59eb42f2a39f911ffe5b00d76243550f2a902d3900a3fd053 extends Twig_Template
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
  \t<div class=\"container\">
      <!-- *** HOMEPAGE CAROUSEL ***
      _________________________________________________________ -->
      <!-- Slider main container -->
      <div class=\"swiper-container\">
          <!-- Additional required wrapper -->
          <div class=\"swiper-wrapper\">

              ";
        // line 10
        if (($context["homerotatebanner"] ?? null)) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["homerotatebanner"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 12
                echo "                <div class=\"swiper-slide col-md-12\">
                  <a href=\"/cvsmart/car/";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "imagelink", array()), "html", null, true);
                echo "\" style=\"background-image: url(";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "imagebanner", array()));
                echo ");\" class=\"slider-content\"></a>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "              ";
        }
        // line 17
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
  </div>
  </section>
   <section id=\"homesearch\">
<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-sm-12\">
       \t<div class=\"search_container\">
       \t\t<script type=\"text/javascript\">
       \t\t</script>
       \t\t<form action=\"/cvsmart/car-list\" method=\"POST\">
       \t\t\t<h2>Find used car for sale</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"brand\" class=\"form-control custom-select car_brand_select\">
\t\t                  <option>All Brands</option>
\t\t                  ";
        // line 46
        if (($context["car_brandlist"] ?? null)) {
            // line 47
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_brandlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 48
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
            // line 50
            echo "\t\t\t              ";
        }
        // line 51
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"models\" class=\"form-control custom-select car_model_select\" disabled>
\t\t                  <option>All Models</option>
\t\t                  ";
        // line 56
        if (($context["car_modellist"] ?? null)) {
            // line 57
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_modellist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 58
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
            // line 60
            echo "\t\t\t              ";
        }
        // line 61
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"states\" class=\"form-control custom-select\">
\t\t                  <option>All state</option>
\t\t                  ";
        // line 66
        if (($context["car_statelist"] ?? null)) {
            // line 67
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 68
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
            // line 70
            echo "\t\t\t              ";
        }
        // line 71
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"prices\" class=\"form-control custom-select\">
\t\t                  <option>All Prices</option>
\t\t                  ";
        // line 76
        if (($context["car_pricelist"] ?? null)) {
            // line 77
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_pricelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 78
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
            // line 80
            echo "\t\t\t              ";
        }
        // line 81
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t\t<form action=\"/cvsmart/car-list\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select class=\"form-control custom-select car_accessories_brand\">
\t\t                  <option>All Brand</option>
\t\t                  ";
        // line 94
        if (($context["car_brandlist"] ?? null)) {
            // line 95
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_brandlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 96
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
            // line 98
            echo "\t\t\t              ";
        }
        // line 99
        echo "\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select class=\"form-control custom-select car_accessories_category\" disabled>
\t\t                  <option>All Categories</option>
\t\t                  ";
        // line 104
        if (($context["car_categorieslist"] ?? null)) {
            // line 105
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_categorieslist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 106
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
            // line 108
            echo "\t\t\t              ";
        }
        // line 109
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
        // line 124
        if (($context["youtubelinklist"] ?? null)) {
            // line 125
            echo "\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubelinklist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 126
                echo "\t                <div class=\"swiper-slide col-md-12\">
\t                  <a href=\"https://www.youtube.com/watch?v=";
                // line 127
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
            // line 130
            echo "\t              ";
        }
        // line 131
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
        // line 146
        if (($context["homestaticbanner"] ?? null)) {
            // line 147
            echo "\t      \t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["homestaticbanner"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 148
                echo "\t      \t <div class=\"swiper-slide\">
\t      \t\t<a href=\"";
                // line 149
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
            // line 152
            echo "\t      \t\t ";
        }
        // line 153
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
</section>
<script type=\"text/javascript\">
\tvar carcategory = JSON.parse('";
        // line 186
        echo ($context["car_categorylist"] ?? null);
        echo "');
\tvar car_accesor = JSON.parse('";
        // line 187
        echo ($context["car_accesortlist"] ?? null);
        echo "');
\tconsole.log(carcategory)
\t\$(document).ready(function(){
\t\tvar dbrand = new Array();
\t\t\$.each(carcategory,function(i,a){
\t\t\tif(\$.inArray(a.brand, dbrand) < 0 ){
\t\t\t\tdbrand.push(a.brand)
\t\t\t\t\$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
\t\t\t}
\t\t})
\t\t\$(\".car_brand_select\").select2();
\t\t\$(\".car_brand_select\").change(function(){
\t\t\tvar car_brand_select_val = \$(this).val();
\t\t\tvar dmodel = new Array();
\t\t\t\$(\".car_model_select\").html(\"<option>All Models</option>\")
\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\$(\".car_model_select\").append(\"<option value='\"+a.model+\"'>\"+a.model+\"</option>\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t\$(\".car_model_select\").removeAttr(\"disabled\");
\t\t\t\$(\".car_model_select\").select2(\"destroy\").select2();
\t\t})
\t\tvar abrand = new Array();
\t\t\$.each(car_accesor,function(i,a){
\t\t\tif(\$.inArray(a.brand, abrand) < 0 ){
\t\t\t\tabrand.push(a.brand)
\t\t\t\t\$(\".car_accessories_brand\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
\t\t\t}
\t\t})
\t\t\$(\".car_accessories_brand\").select2();
\t\t\$(\".car_accessories_brand\").change(function(){
\t\t\tvar car_brand_select_val = \$(this).val();
\t\t\tvar dmodel = new Array();
\t\t\t\$(\".car_accessories_category\").html(\"<option>All Categories</option>\")
\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t\$(\".car_accessories_category\").removeAttr(\"disabled\");
\t\t\t\$(\".car_accessories_category\").select2(\"destroy\").select2();
\t\t})
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 187,  371 => 186,  336 => 153,  333 => 152,  322 => 149,  319 => 148,  314 => 147,  312 => 146,  295 => 131,  292 => 130,  281 => 127,  278 => 126,  273 => 125,  271 => 124,  254 => 109,  251 => 108,  240 => 106,  235 => 105,  233 => 104,  226 => 99,  223 => 98,  212 => 96,  207 => 95,  205 => 94,  190 => 81,  187 => 80,  176 => 78,  171 => 77,  169 => 76,  162 => 71,  159 => 70,  148 => 68,  143 => 67,  141 => 66,  134 => 61,  131 => 60,  120 => 58,  115 => 57,  113 => 56,  106 => 51,  103 => 50,  92 => 48,  87 => 47,  85 => 46,  54 => 17,  51 => 16,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"home\">
  \t<div class=\"container\">
      <!-- *** HOMEPAGE CAROUSEL ***
      _________________________________________________________ -->
      <!-- Slider main container -->
      <div class=\"swiper-container\">
          <!-- Additional required wrapper -->
          <div class=\"swiper-wrapper\">

              {% if homerotatebanner %}
                {% for slider in homerotatebanner %}
                <div class=\"swiper-slide col-md-12\">
                  <a href=\"/cvsmart/car/{{ slider.imagelink }}\" style=\"background-image: url({{ slider.imagebanner|media }});\" class=\"slider-content\"></a>
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
  </div>
  </section>
   <section id=\"homesearch\">
<div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-sm-12\">
       \t<div class=\"search_container\">
       \t\t<script type=\"text/javascript\">
       \t\t</script>
       \t\t<form action=\"/cvsmart/car-list\" method=\"POST\">
       \t\t\t<h2>Find used car for sale</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"brand\" class=\"form-control custom-select car_brand_select\">
\t\t                  <option>All Brands</option>
\t\t                  {% if car_brandlist %}
\t\t\t                {% for slider in car_brandlist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"models\" class=\"form-control custom-select car_model_select\" disabled>
\t\t                  <option>All Models</option>
\t\t                  {% if car_modellist %}
\t\t\t                {% for slider in car_modellist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"states\" class=\"form-control custom-select\">
\t\t                  <option>All state</option>
\t\t                  {% if car_statelist %}
\t\t\t                {% for slider in car_statelist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"prices\" class=\"form-control custom-select\">
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
       \t\t<form action=\"/cvsmart/car-list\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select class=\"form-control custom-select car_accessories_brand\">
\t\t                  <option>All Brand</option>
\t\t                  {% if car_brandlist %}
\t\t\t                {% for slider in car_brandlist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select class=\"form-control custom-select car_accessories_category\" disabled>
\t\t                  <option>All Categories</option>
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
</section>
<script type=\"text/javascript\">
\tvar carcategory = JSON.parse('{{ car_categorylist|raw }}');
\tvar car_accesor = JSON.parse('{{ car_accesortlist|raw }}');
\tconsole.log(carcategory)
\t\$(document).ready(function(){
\t\tvar dbrand = new Array();
\t\t\$.each(carcategory,function(i,a){
\t\t\tif(\$.inArray(a.brand, dbrand) < 0 ){
\t\t\t\tdbrand.push(a.brand)
\t\t\t\t\$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
\t\t\t}
\t\t})
\t\t\$(\".car_brand_select\").select2();
\t\t\$(\".car_brand_select\").change(function(){
\t\t\tvar car_brand_select_val = \$(this).val();
\t\t\tvar dmodel = new Array();
\t\t\t\$(\".car_model_select\").html(\"<option>All Models</option>\")
\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\$(\".car_model_select\").append(\"<option value='\"+a.model+\"'>\"+a.model+\"</option>\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t\$(\".car_model_select\").removeAttr(\"disabled\");
\t\t\t\$(\".car_model_select\").select2(\"destroy\").select2();
\t\t})
\t\tvar abrand = new Array();
\t\t\$.each(car_accesor,function(i,a){
\t\t\tif(\$.inArray(a.brand, abrand) < 0 ){
\t\t\t\tabrand.push(a.brand)
\t\t\t\t\$(\".car_accessories_brand\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
\t\t\t}
\t\t})
\t\t\$(\".car_accessories_brand\").select2();
\t\t\$(\".car_accessories_brand\").change(function(){
\t\t\tvar car_brand_select_val = \$(this).val();
\t\t\tvar dmodel = new Array();
\t\t\t\$(\".car_accessories_category\").html(\"<option>All Categories</option>\")
\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t\$(\".car_accessories_category\").removeAttr(\"disabled\");
\t\t\t\$(\".car_accessories_category\").select2(\"destroy\").select2();
\t\t})
\t})
</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Home.htm", "");
    }
}
