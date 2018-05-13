<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/partials/CarSelectPage.htm */
class __TwigTemplate_cc40b168bd0785c5d79ae97b3a6b3507d5fe57de03ea751595d2774ade235da7 extends Twig_Template
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
        echo "<div class=\"carselectpage\">
<div class=\"container \">
  <form action=\"/cvsmart/car-list\" method=\"POST\">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select name=\"car_category_select\" class=\"form-control custom-select car_category_select\">
                  <option value=\"\">All</option>
                  <option value=\"used-cars\">Used Cars</option>
                  <option value=\"accessories\">Accessories</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\" disabled>
                  <option value=\"\">All Brands</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_state_select\" class=\"form-control custom-select car_state_select\" disabled>
                  <option value=\"\">All states</option>
                  ";
        // line 22
        if (($context["car_statelist"] ?? null)) {
            // line 23
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 24
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    ";
        }
        // line 27
        echo "                </select>
            </div>
          </div>
      </div>
      <div class=\"col-md-1 col-sm-12\">
          <button class=\"submitbutton form-control\"><i class=\"fa fa-search\"></i></button>
      </div>
    </div>
  </form>
</div>
</div>
<script type=\"text/javascript\">
  var carcategory = JSON.parse('";
        // line 39
        echo ($context["car_categorylist"] ?? null);
        echo "');
  var car_accesor = JSON.parse('";
        // line 40
        echo ($context["car_accesortlist"] ?? null);
        echo "');
  var params = JSON.parse('";
        // line 41
        echo ($context["params"] ?? null);
        echo "');
  console.log(params);
  \$(document).ready(function(){

    \$(\".car_category_select\").change(function(){
      var car_brand_select_val = \$(this).val();
      if(car_brand_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_brand_select_val==\"used-cars\"){
          thearray = carcategory;
        }
      switch(car_brand_select_val){
        case \"used-cars\":
        case \"accessories\":
            var dmodel = new Array();
            \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
            \$.each(thearray,function(i,a){
                if(\$.inArray(a.brand, dmodel) < 0 ){
                  dmodel.push(a.brand)
                  if(params.car_brand_select==a.brand){
                  \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                  }else{
                  \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                  }
                }
            })
            \$(\".car_brand_select\").removeAttr(\"disabled\");
            \$(\".car_brand_select\").select2();

            var dmodel = new Array();
            \$(\".car_state_select\").html(\"<option value=''>All States</option>\");
            \$.each(thearray,function(i,a){
                if(\$.inArray(a.states, dmodel) < 0 ){
                  dmodel.push(a.states)
                  if(params.car_state_select==a.states){
                  \$(\".car_state_select\").append(\"<option selected value='\"+a.states+\"'>\"+a.states+\"</option>\");
                  }else{
                  \$(\".car_state_select\").append(\"<option value='\"+a.states+\"'>\"+a.states+\"</option>\");
                  }
                }
            })
            \$(\".car_state_select\").removeAttr(\"disabled\");
            \$(\".car_state_select\").select2();
        break;
        default:
        \$(\".car_state_select\").attr(\"disabled\",\"disabled\");
        \$(\".car_brand_select\").attr(\"disabled\",\"disabled\");
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$(\".car_state_select\").html(\"<option value=''>All States</option>\")
        break;
      }
    });
    \$(\".car_brand_select\").change(function(){
       var car_brand_select_val = \$(this).val();
        var car_category_select_val = \$(\".car_category_select\").val();
        var car_states_select_val = \$(\".car_state_select\").val();
       
        var  thearray=false;
        if(car_category_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_category_select_val==\"used-cars\"){
          thearray = carcategory;
        }
       var dmodel = new Array();
       \$(\".car_state_select\").html(\"<option value=''>All States</option>\");
       \$.each(thearray,function(i,a){
          var dsstate = true;
           if(car_brand_select_val!=\"\"){dsstate = a.brand == car_brand_select_val;}
          if(dsstate){
            if(\$.inArray(a.states, dmodel) < 0 ){
              dmodel.push(a.states)
              if(params.car_state_select==a.states){
                \$(\".car_state_select\").append(\"<option selected value='\"+a.states+\"'>\"+a.states+\"</option>\");
              }else{
                \$(\".car_state_select\").append(\"<option value='\"+a.states+\"'>\"+a.states+\"</option>\");
              }
            }
          }
      })
    })
    /*\$(\".car_state_select\").change(function(){
       var car_brand_select_val = \$(this).val();
        var car_category_select_val = \$(\".car_category_select\").val();
        var car_state_select_val = \$(\".car_brand_select\").val();
        console.log(car_state_select_val);
        if(car_state_select_val!=\"\"){
          return true;
        }
        var  thearray=false;
        if(car_category_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_category_select_val==\"used-cars\"){
          thearray = carcategory;
        }
       var dmodel = new Array();
       \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\");
       \$.each(thearray,function(i,a){
          var dsstate = true;
           if(car_brand_select_val!=\"\"){dsstate = a.states == car_brand_select_val;}
          if(dsstate){
            if(\$.inArray(a.brand, dmodel) < 0 ){
              dmodel.push(a.brand)
              if(params.car_state_select==a.states){
                \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                params.car_state_select=\"\";
              }else{
                \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              }
            }
          }
      })
    })*/
    if(params){
      if(params.car_category_select){
        \$(\".car_category_select\").val(params.car_category_select);
      }
    }
    \$(\".car_category_select\").select2();
     \$(\".car_category_select\").trigger(\"change\");
     console.log(params);
     if(params){
      if(params.car_brand_select){
        \$(\".car_brand_select\").trigger(\"change\");
        params.car_brand_select=\"\";
        params.car_state_select=\"\";
      }
    }
  })
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/partials/CarSelectPage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  81 => 40,  77 => 39,  63 => 27,  60 => 26,  49 => 24,  44 => 23,  42 => 22,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"carselectpage\">
<div class=\"container \">
  <form action=\"/cvsmart/car-list\" method=\"POST\">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select name=\"car_category_select\" class=\"form-control custom-select car_category_select\">
                  <option value=\"\">All</option>
                  <option value=\"used-cars\">Used Cars</option>
                  <option value=\"accessories\">Accessories</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\" disabled>
                  <option value=\"\">All Brands</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_state_select\" class=\"form-control custom-select car_state_select\" disabled>
                  <option value=\"\">All states</option>
                  {% if car_statelist %}
                      {% for slider in car_statelist %}
                      <option value=\"{{slider }}\">{{ slider }}</option>
                      {% endfor %}
                    {% endif %}
                </select>
            </div>
          </div>
      </div>
      <div class=\"col-md-1 col-sm-12\">
          <button class=\"submitbutton form-control\"><i class=\"fa fa-search\"></i></button>
      </div>
    </div>
  </form>
</div>
</div>
<script type=\"text/javascript\">
  var carcategory = JSON.parse('{{ car_categorylist|raw }}');
  var car_accesor = JSON.parse('{{ car_accesortlist|raw }}');
  var params = JSON.parse('{{ params|raw }}');
  console.log(params);
  \$(document).ready(function(){

    \$(\".car_category_select\").change(function(){
      var car_brand_select_val = \$(this).val();
      if(car_brand_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_brand_select_val==\"used-cars\"){
          thearray = carcategory;
        }
      switch(car_brand_select_val){
        case \"used-cars\":
        case \"accessories\":
            var dmodel = new Array();
            \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
            \$.each(thearray,function(i,a){
                if(\$.inArray(a.brand, dmodel) < 0 ){
                  dmodel.push(a.brand)
                  if(params.car_brand_select==a.brand){
                  \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                  }else{
                  \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                  }
                }
            })
            \$(\".car_brand_select\").removeAttr(\"disabled\");
            \$(\".car_brand_select\").select2();

            var dmodel = new Array();
            \$(\".car_state_select\").html(\"<option value=''>All States</option>\");
            \$.each(thearray,function(i,a){
                if(\$.inArray(a.states, dmodel) < 0 ){
                  dmodel.push(a.states)
                  if(params.car_state_select==a.states){
                  \$(\".car_state_select\").append(\"<option selected value='\"+a.states+\"'>\"+a.states+\"</option>\");
                  }else{
                  \$(\".car_state_select\").append(\"<option value='\"+a.states+\"'>\"+a.states+\"</option>\");
                  }
                }
            })
            \$(\".car_state_select\").removeAttr(\"disabled\");
            \$(\".car_state_select\").select2();
        break;
        default:
        \$(\".car_state_select\").attr(\"disabled\",\"disabled\");
        \$(\".car_brand_select\").attr(\"disabled\",\"disabled\");
        \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\")
        \$(\".car_state_select\").html(\"<option value=''>All States</option>\")
        break;
      }
    });
    \$(\".car_brand_select\").change(function(){
       var car_brand_select_val = \$(this).val();
        var car_category_select_val = \$(\".car_category_select\").val();
        var car_states_select_val = \$(\".car_state_select\").val();
       
        var  thearray=false;
        if(car_category_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_category_select_val==\"used-cars\"){
          thearray = carcategory;
        }
       var dmodel = new Array();
       \$(\".car_state_select\").html(\"<option value=''>All States</option>\");
       \$.each(thearray,function(i,a){
          var dsstate = true;
           if(car_brand_select_val!=\"\"){dsstate = a.brand == car_brand_select_val;}
          if(dsstate){
            if(\$.inArray(a.states, dmodel) < 0 ){
              dmodel.push(a.states)
              if(params.car_state_select==a.states){
                \$(\".car_state_select\").append(\"<option selected value='\"+a.states+\"'>\"+a.states+\"</option>\");
              }else{
                \$(\".car_state_select\").append(\"<option value='\"+a.states+\"'>\"+a.states+\"</option>\");
              }
            }
          }
      })
    })
    /*\$(\".car_state_select\").change(function(){
       var car_brand_select_val = \$(this).val();
        var car_category_select_val = \$(\".car_category_select\").val();
        var car_state_select_val = \$(\".car_brand_select\").val();
        console.log(car_state_select_val);
        if(car_state_select_val!=\"\"){
          return true;
        }
        var  thearray=false;
        if(car_category_select_val==\"accessories\"){
          thearray = car_accesor;
        }else if(car_category_select_val==\"used-cars\"){
          thearray = carcategory;
        }
       var dmodel = new Array();
       \$(\".car_brand_select\").html(\"<option value=''>All Brands</option>\");
       \$.each(thearray,function(i,a){
          var dsstate = true;
           if(car_brand_select_val!=\"\"){dsstate = a.states == car_brand_select_val;}
          if(dsstate){
            if(\$.inArray(a.brand, dmodel) < 0 ){
              dmodel.push(a.brand)
              if(params.car_state_select==a.states){
                \$(\".car_brand_select\").append(\"<option selected value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
                params.car_state_select=\"\";
              }else{
                \$(\".car_brand_select\").append(\"<option value='\"+a.brand+\"'>\"+a.brand+\"</option>\");
              }
            }
          }
      })
    })*/
    if(params){
      if(params.car_category_select){
        \$(\".car_category_select\").val(params.car_category_select);
      }
    }
    \$(\".car_category_select\").select2();
     \$(\".car_category_select\").trigger(\"change\");
     console.log(params);
     if(params){
      if(params.car_brand_select){
        \$(\".car_brand_select\").trigger(\"change\");
        params.car_brand_select=\"\";
        params.car_state_select=\"\";
      }
    }
  })
</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/partials/CarSelectPage.htm", "");
    }
}
