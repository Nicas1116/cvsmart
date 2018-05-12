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
  \t<div class=\"containerd\">
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
                echo ");\" class=\"slider-content\"><img src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["slider"], "imagebanner", array()));
                echo "\"/></a>
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
\t\t                <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\">
\t\t                  <option  value=\"\">All Brands</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_models_select\" class=\"form-control custom-select car_model_select\">
\t\t                  <option value=\"\">All Models</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_state_select\" class=\"form-control custom-select\">
\t\t                  <option  value=\"\">All state</option>
\t\t                  ";
        // line 56
        if (($context["car_statelist"] ?? null)) {
            // line 57
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
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
\t\t              <select name=\"car_prices_select\" class=\"form-control custom-select\">
\t\t                  <option  value=\"\">All Prices</option>
\t\t                  ";
        // line 66
        if (($context["car_pricelist"] ?? null)) {
            // line 67
            echo "\t\t\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_pricelist"] ?? null));
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
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<input type=\"hidden\" name=\"isfromhome\" value=\"1\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t\t<form action=\"/cvsmart/car-list\" method=\"POST\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"car_accessories_brand\" class=\"form-control custom-select car_accessories_brand\">
\t\t                  <option  value=\"\">All Brand</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_accessories_category\" class=\"form-control custom-select car_accessories_category\">
\t\t                  <option value=\"\">All Categories</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<input type=\"hidden\" name=\"isfromhome\" value=\"1\">
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
        // line 106
        if (($context["youtubelinklist"] ?? null)) {
            // line 107
            echo "\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubelinklist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 108
                echo "\t                <div class=\"swiper-slide col-md-12\">
\t                  <a href=\"https://www.youtube.com/watch?v=";
                // line 109
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
            // line 112
            echo "\t              ";
        }
        // line 113
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
        // line 128
        if (($context["homestaticbanner"] ?? null)) {
            // line 129
            echo "\t      \t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["homestaticbanner"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 130
                echo "\t      \t <div class=\"swiper-slide\">
\t      \t\t<a href=\"";
                // line 131
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
            // line 134
            echo "\t      \t\t ";
        }
        // line 135
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
        // line 168
        echo ($context["car_categorylist"] ?? null);
        echo "');
\tvar car_accesor = JSON.parse('";
        // line 169
        echo ($context["car_accesortlist"] ?? null);
        echo "');
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
\t\t\tif(car_brand_select_val!=\"\"){
\t\t\t\tvar dmodel = new Array();
\t\t\t\t\$(\".car_model_select\").html(\"<option value=''>All Models</option>\")
\t\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\t\$(\".car_model_select\").append(\"<option value='\"+a.model+\"'>\"+a.model+\"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$(\".car_model_select\").removeAttr(\"disabled\");
\t\t\t\t\$(\".car_model_select\").select2();
\t\t\t}else{
\t\t\t\t\$(\".car_model_select\").html(\"<option value=''>All Models</option>\")
\t\t\t\t\$(\".car_model_select\").attr(\"disabled\",\"\");
\t\t\t\t\$(\".car_model_select\").select2();
\t\t\t}
\t\t})
\t\t\$(\".car_brand_select\").trigger(\"change\")
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
\t\t\tif(car_brand_select_val!=\"\"){
\t\t\t\tvar dmodel = new Array();
\t\t\t\t\$(\".car_accessories_category\").html(\"<option value=''>All Categories</option>\")
\t\t\t\t\$.each(car_accesor,function(i,a){
\t\t\t\t\tconsole.log(a.brand,car_brand_select_val);
\t\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\t\tdmodel.push(a.category)
\t\t\t\t\t\t\t\$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$(\".car_accessories_category\").removeAttr(\"disabled\");
\t\t\t\t\$(\".car_accessories_category\").select2();
\t\t\t}else{
\t\t\t\t\$(\".car_accessories_category\").html(\"<option value=''>All Categories</option>\")
\t\t\t\t\$(\".car_accessories_category\").attr(\"disabled\",\"\");
\t\t\t\t\$(\".car_accessories_category\").select2();
\t\t\t}
\t\t\t
\t\t});
\t\t\$(\".car_accessories_brand\").trigger(\"change\")
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
        return array (  287 => 169,  283 => 168,  248 => 135,  245 => 134,  234 => 131,  231 => 130,  226 => 129,  224 => 128,  207 => 113,  204 => 112,  193 => 109,  190 => 108,  185 => 107,  183 => 106,  146 => 71,  143 => 70,  132 => 68,  127 => 67,  125 => 66,  118 => 61,  115 => 60,  104 => 58,  99 => 57,  97 => 56,  56 => 17,  53 => 16,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"home\">
  \t<div class=\"containerd\">
      <!-- *** HOMEPAGE CAROUSEL ***
      _________________________________________________________ -->
      <!-- Slider main container -->
      <div class=\"swiper-container\">
          <!-- Additional required wrapper -->
          <div class=\"swiper-wrapper\">

              {% if homerotatebanner %}
                {% for slider in homerotatebanner %}
                <div class=\"swiper-slide col-md-12\">
                  <a href=\"/cvsmart/car/{{ slider.imagelink }}\" style=\"background-image: url({{ slider.imagebanner|media }});\" class=\"slider-content\"><img src=\"{{ slider.imagebanner|media }}\"/></a>
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
\t\t                <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\">
\t\t                  <option  value=\"\">All Brands</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_models_select\" class=\"form-control custom-select car_model_select\">
\t\t                  <option value=\"\">All Models</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_state_select\" class=\"form-control custom-select\">
\t\t                  <option  value=\"\">All state</option>
\t\t                  {% if car_statelist %}
\t\t\t                {% for slider in car_statelist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_prices_select\" class=\"form-control custom-select\">
\t\t                  <option  value=\"\">All Prices</option>
\t\t                  {% if car_pricelist %}
\t\t\t                {% for slider in car_pricelist %}
\t\t\t                <option value=\"{{slider }}\">{{ slider }}</option>
\t\t\t                {% endfor %}
\t\t\t              {% endif %}
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<input type=\"hidden\" name=\"isfromhome\" value=\"1\">
\t\t            \t<button class=\"btn-search\">SEARCH</button>
\t\t            </div>
\t\t        </div>
       \t\t</form>
       \t\t<form action=\"/cvsmart/car-list\" method=\"POST\">
       \t\t\t<h2>Find modify car accessories</h2>
       \t\t\t<div class=\"row\">
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t                <select name=\"car_accessories_brand\" class=\"form-control custom-select car_accessories_brand\">
\t\t                  <option  value=\"\">All Brand</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-6 col-sm-12\">
\t\t              <select name=\"car_accessories_category\" class=\"form-control custom-select car_accessories_category\">
\t\t                  <option value=\"\">All Categories</option>
\t\t                </select>
\t\t            </div>
\t\t            <div class=\"col-md-12 col-sm-12\">
\t\t            \t<input type=\"hidden\" name=\"isfromhome\" value=\"1\">
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
\t\t\tif(car_brand_select_val!=\"\"){
\t\t\t\tvar dmodel = new Array();
\t\t\t\t\$(\".car_model_select\").html(\"<option value=''>All Models</option>\")
\t\t\t\t\$.each(carcategory,function(i,a){
\t\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\t\tdmodel.push(a.model)
\t\t\t\t\t\t\t\$(\".car_model_select\").append(\"<option value='\"+a.model+\"'>\"+a.model+\"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$(\".car_model_select\").removeAttr(\"disabled\");
\t\t\t\t\$(\".car_model_select\").select2();
\t\t\t}else{
\t\t\t\t\$(\".car_model_select\").html(\"<option value=''>All Models</option>\")
\t\t\t\t\$(\".car_model_select\").attr(\"disabled\",\"\");
\t\t\t\t\$(\".car_model_select\").select2();
\t\t\t}
\t\t})
\t\t\$(\".car_brand_select\").trigger(\"change\")
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
\t\t\tif(car_brand_select_val!=\"\"){
\t\t\t\tvar dmodel = new Array();
\t\t\t\t\$(\".car_accessories_category\").html(\"<option value=''>All Categories</option>\")
\t\t\t\t\$.each(car_accesor,function(i,a){
\t\t\t\t\tconsole.log(a.brand,car_brand_select_val);
\t\t\t\t\tif(a.brand == car_brand_select_val){
\t\t\t\t\t\tif(\$.inArray(a.model, dmodel) < 0 ){
\t\t\t\t\t\t\tdmodel.push(a.category)
\t\t\t\t\t\t\t\$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\$(\".car_accessories_category\").removeAttr(\"disabled\");
\t\t\t\t\$(\".car_accessories_category\").select2();
\t\t\t}else{
\t\t\t\t\$(\".car_accessories_category\").html(\"<option value=''>All Categories</option>\")
\t\t\t\t\$(\".car_accessories_category\").attr(\"disabled\",\"\");
\t\t\t\t\$(\".car_accessories_category\").select2();
\t\t\t}
\t\t\t
\t\t});
\t\t\$(\".car_accessories_brand\").trigger(\"change\")
\t})
</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Home.htm", "");
    }
}
