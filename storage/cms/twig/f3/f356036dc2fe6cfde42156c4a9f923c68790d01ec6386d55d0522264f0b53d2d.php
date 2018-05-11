<?php

/* D:\xampp\htdocs\cars/themes/cvsmart/pages/CarList.htm */
class __TwigTemplate_4c607923dd768ac847603f78c5860e940ad6120fc52fee5f1e8039f70f8549c9 extends Twig_Template
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
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select class=\"form-control\">
                  <option>Categories</option>
                  ";
        // line 9
        if (($context["car_categorieslist"] ?? null)) {
            // line 10
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_categorieslist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 11
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
            // line 13
            echo "                    ";
        }
        // line 14
        echo "                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>Brand</option>
                  ";
        // line 19
        if (($context["car_brandlist"] ?? null)) {
            // line 20
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_brandlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 21
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
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>All state</option>
                  ";
        // line 29
        if (($context["car_statelist"] ?? null)) {
            // line 30
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 31
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
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                </select>
            </div>
          </div>
      </div>
      <div class=\"col-md-1 col-sm-12\">
          <button class=\"submitbutton form-control\"><i class=\"fa fa-search\"></i></button>
      </div>
    </div>
</div>
</div>
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
  \t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carslist"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 56
            echo "  \t\t\t<?php \$m++; ?>
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" ><img src=\"";
            // line 57
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "carlist_image", array()));
            echo "\"/><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "title", array()), "html", null, true);
            echo "</h2><p class=\"shortdesc\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "shortdesc", array()), "html", null, true);
            echo "</p><a href=\"car/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "slug", array()), "html", null, true);
            echo "\">More Info</a></div></div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = ";
        // line 65
        echo twig_escape_filter($this->env, ($context["currentpage"] ?? null), "html", null, true);
        echo ";
  var totalpages =  ";
        // line 66
        echo twig_escape_filter($this->env, ($context["sizeofcarlist"] ?? null), "html", null, true);
        echo ";
\t
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/CarList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  158 => 65,  150 => 59,  136 => 57,  133 => 56,  129 => 55,  106 => 34,  103 => 33,  92 => 31,  87 => 30,  85 => 29,  78 => 24,  75 => 23,  64 => 21,  59 => 20,  57 => 19,  50 => 14,  47 => 13,  36 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"carselectpage\">
<div class=\"container \">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select class=\"form-control\">
                  <option>Categories</option>
                  {% if car_categorieslist %}
                      {% for slider in car_categorieslist %}
                      <option value=\"{{slider }}\">{{ slider }}</option>
                      {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>Brand</option>
                  {% if car_brandlist %}
                      {% for slider in car_brandlist %}
                      <option value=\"{{slider }}\">{{ slider }}</option>
                      {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>All state</option>
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
</div>
</div>
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
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" ><img src=\"{{ car.carlist_image|media }}\"/><h2>{{ car.title }}</h2><p class=\"shortdesc\">{{ car.shortdesc }}</p><a href=\"car/{{ car.slug }}\">More Info</a></div></div>
\t\t\t {% endfor %}
      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = {{ currentpage}};
  var totalpages =  {{ sizeofcarlist }};
\t
</script>", "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/CarList.htm", "");
    }
}
