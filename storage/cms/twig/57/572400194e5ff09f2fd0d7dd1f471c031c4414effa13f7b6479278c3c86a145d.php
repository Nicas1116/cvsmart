<?php

/* /Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/pages/CarList.htm */
class __TwigTemplate_8399405ab21cdcaa45a94c64de789634ee6bc6580302c64d954ecd854e018de7 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("CarSelectPage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"container carlistpage\">

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<div class=\"row\">
      \t\t<div class=\"col-md-12 col-sm-12\">
      \t<h1>recommended for you</h1>
      </div>
      \t</div>
      \t<?php \$m=0; ?>
      \t<div class=\"row carlist_all\">
  \t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carslist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 14
            echo "  \t\t\t<?php \$m++; ?>
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" >
          <div class=\"carlist_img\"><img src=\"";
            // line 16
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "carlist_image", array()));
            echo "\"/></div>
        <h2>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "title", array()), "html", null, true);
            echo "</h2><p class=\"shortdesc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "shortdesc", array()), "html", null, true);
            echo "</p><a href=\"/cvsmart/car/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "slug", array()), "html", null, true);
            echo "\">More Info</a></div></div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = ";
        // line 25
        echo twig_escape_filter($this->env, ($context["currentpage"] ?? null), "html", null, true);
        echo ";
  var totalpages =  ";
        // line 26
        echo twig_escape_filter($this->env, ($context["sizeofcarlist"] ?? null), "html", null, true);
        echo ";
\tvar params = JSON.parse('";
        // line 27
        echo ($context["params"] ?? null);
        echo "');
  console.log(params);
</script>
<script type=\"text/javascript\">
  var carcategory = JSON.parse('";
        // line 31
        echo ($context["car_categorylist"] ?? null);
        echo "');
  var car_accesor = JSON.parse('";
        // line 32
        echo ($context["car_accesortlist"] ?? null);
        echo "');
  \$(document).ready(function(){
    var dbrand = new Array();
    \$.each(carcategory,function(i,a){
      if(\$.inArray(a.category, dbrand) < 0 ){
        dbrand.push(a.category)
        if(params.car_category_select==a.category){
          \$(\".car_category_select\").append(\"<option selected value='\"+a.category+\"'>\"+a.category+\"</option>\");
          params.car_category_select=\"\";
        }else{
          \$(\".car_category_select\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
        }
      }
    })
    \$(\".car_category_select\").select2();
    
    \$(\".car_category_select\").change(function(){
      var car_brand_select_val = \$(this).val();
      if(car_brand_select_val!=\"\"){
        var dmodel = new Array();
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$.each(carcategory,function(i,a){
          if(a.category == car_brand_select_val){
            if(\$.inArray(a.brand, dmodel) < 0 ){
              dmodel.push(a.brand)
              if(params.car_brand_select==a.brand){
              \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              params.car_brand_select=\"\";
              }else{
              \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              }
            }
          }
        })
        \$(\".car_brand_select\").removeAttr(\"disabled\");
        \$(\".car_brand_select\").select2();
      }else{
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$(\".car_brand_select\").attr(\"disabled\",\"\");
        \$(\".car_brand_select\").select2();
      }
    })
    \$(\".car_category_select\").trigger(\"change\");

    var abrand = new Array();
    \$.each(car_accesor,function(i,a){
      if(\$.inArray(a.brand, abrand) < 0 ){
        abrand.push(a.brand)
        \$(\".car_accessories_brand\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
      }
    })
    \$(\".car_accessories_brand\").select2();
    \$(\".car_accessories_brand\").change(function(){
      var car_brand_select_val = \$(this).val();
      var dmodel = new Array();
      \$(\".car_accessories_category\").html(\"<option>All Categories</option>\")
      \$.each(carcategory,function(i,a){
        if(a.brand == car_brand_select_val){
          if(\$.inArray(a.model, dmodel) < 0 ){
            dmodel.push(a.model)
            \$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
          }
        }
      })
      \$(\".car_accessories_category\").removeAttr(\"disabled\");
      \$(\".car_accessories_category\").select2(\"destroy\").select2();
    })
  })
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/pages/CarList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  83 => 31,  76 => 27,  72 => 26,  68 => 25,  60 => 19,  48 => 17,  44 => 16,  40 => 14,  36 => 13,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'CarSelectPage' %}
<div class=\"container carlistpage\">

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<div class=\"row\">
      \t\t<div class=\"col-md-12 col-sm-12\">
      \t<h1>recommended for you</h1>
      </div>
      \t</div>
      \t<?php \$m=0; ?>
      \t<div class=\"row carlist_all\">
  \t\t\t{% for car in carslist %}
  \t\t\t<?php \$m++; ?>
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" >
          <div class=\"carlist_img\"><img src=\"{{ car.carlist_image|media }}\"/></div>
        <h2>{{ car.title }}</h2><p class=\"shortdesc\">{{ car.shortdesc }}</p><a href=\"/cvsmart/car/{{ car.slug }}\">More Info</a></div></div>
\t\t\t {% endfor %}
      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = {{ currentpage}};
  var totalpages =  {{ sizeofcarlist }};
\tvar params = JSON.parse('{{ params|raw }}');
  console.log(params);
</script>
<script type=\"text/javascript\">
  var carcategory = JSON.parse('{{ car_categorylist|raw }}');
  var car_accesor = JSON.parse('{{ car_accesortlist|raw }}');
  \$(document).ready(function(){
    var dbrand = new Array();
    \$.each(carcategory,function(i,a){
      if(\$.inArray(a.category, dbrand) < 0 ){
        dbrand.push(a.category)
        if(params.car_category_select==a.category){
          \$(\".car_category_select\").append(\"<option selected value='\"+a.category+\"'>\"+a.category+\"</option>\");
          params.car_category_select=\"\";
        }else{
          \$(\".car_category_select\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
        }
      }
    })
    \$(\".car_category_select\").select2();
    
    \$(\".car_category_select\").change(function(){
      var car_brand_select_val = \$(this).val();
      if(car_brand_select_val!=\"\"){
        var dmodel = new Array();
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$.each(carcategory,function(i,a){
          if(a.category == car_brand_select_val){
            if(\$.inArray(a.brand, dmodel) < 0 ){
              dmodel.push(a.brand)
              if(params.car_brand_select==a.brand){
              \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              params.car_brand_select=\"\";
              }else{
              \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              }
            }
          }
        })
        \$(\".car_brand_select\").removeAttr(\"disabled\");
        \$(\".car_brand_select\").select2();
      }else{
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$(\".car_brand_select\").attr(\"disabled\",\"\");
        \$(\".car_brand_select\").select2();
      }
    })
    \$(\".car_category_select\").trigger(\"change\");

    var abrand = new Array();
    \$.each(car_accesor,function(i,a){
      if(\$.inArray(a.brand, abrand) < 0 ){
        abrand.push(a.brand)
        \$(\".car_accessories_brand\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
      }
    })
    \$(\".car_accessories_brand\").select2();
    \$(\".car_accessories_brand\").change(function(){
      var car_brand_select_val = \$(this).val();
      var dmodel = new Array();
      \$(\".car_accessories_category\").html(\"<option>All Categories</option>\")
      \$.each(carcategory,function(i,a){
        if(a.brand == car_brand_select_val){
          if(\$.inArray(a.model, dmodel) < 0 ){
            dmodel.push(a.model)
            \$(\".car_accessories_category\").append(\"<option value='\"+a.category+\"'>\"+a.category+\"</option>\");
          }
        }
      })
      \$(\".car_accessories_category\").removeAttr(\"disabled\");
      \$(\".car_accessories_category\").select2(\"destroy\").select2();
    })
  })
</script>", "/Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/pages/CarList.htm", "");
    }
}
