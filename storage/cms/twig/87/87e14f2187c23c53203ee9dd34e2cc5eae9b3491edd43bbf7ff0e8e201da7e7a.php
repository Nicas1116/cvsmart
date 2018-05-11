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
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select class=\"form-control custom-select\">
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
              <select class=\"form-control custom-select\">
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
              <select class=\"form-control custom-select\">
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
</div>";
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
        return array (  106 => 34,  103 => 33,  92 => 31,  87 => 30,  85 => 29,  78 => 24,  75 => 23,  64 => 21,  59 => 20,  57 => 19,  50 => 14,  47 => 13,  36 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"carselectpage\">
<div class=\"container \">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select class=\"form-control custom-select\">
                  <option>Categories</option>
                  {% if car_categorieslist %}
                      {% for slider in car_categorieslist %}
                      <option value=\"{{slider }}\">{{ slider }}</option>
                      {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control custom-select\">
                  <option>Brand</option>
                  {% if car_brandlist %}
                      {% for slider in car_brandlist %}
                      <option value=\"{{slider }}\">{{ slider }}</option>
                      {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control custom-select\">
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
</div>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/partials/CarSelectPage.htm", "");
    }
}
