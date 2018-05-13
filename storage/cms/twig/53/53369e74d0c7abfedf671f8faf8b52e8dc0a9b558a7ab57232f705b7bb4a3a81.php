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
       \t";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("HomeForm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "      </div>
      <div class=\"col-md-1 col-sm-12 \"></div>
      <div class=\"col-md-3 col-sm-12 \">
       \t\t<div class=\"home_sidebanner swiper-container\">
\t          <!-- Additional required wrapper -->
\t          <div class=\"swiper-wrapper\">

\t              ";
        // line 45
        if (($context["youtubelinklist"] ?? null)) {
            // line 46
            echo "\t                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubelinklist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 47
                echo "\t                <div class=\"swiper-slide col-md-12\">
\t                  <a href=\"https://www.youtube.com/watch?v=";
                // line 48
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
            // line 51
            echo "\t              ";
        }
        // line 52
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
        // line 67
        if (($context["homestaticbanner"] ?? null)) {
            // line 68
            echo "\t      \t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["homestaticbanner"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 69
                echo "\t      \t <div class=\"swiper-slide\">
\t      \t\t<a href=\"";
                // line 70
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
            // line 73
            echo "\t      \t\t ";
        }
        // line 74
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


<script type=\"text/javascript\">
\tvar carcategory = JSON.parse('";
        // line 91
        echo ($context["car_categorylist"] ?? null);
        echo "');
\tvar car_accesor = JSON.parse('";
        // line 92
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
        return array (  179 => 92,  175 => 91,  156 => 74,  153 => 73,  142 => 70,  139 => 69,  134 => 68,  132 => 67,  115 => 52,  112 => 51,  101 => 48,  98 => 47,  93 => 46,  91 => 45,  82 => 38,  78 => 37,  56 => 17,  53 => 16,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
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
       \t{% partial 'HomeForm' %}
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
\t})
</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Home.htm", "");
    }
}
