<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/partials/HomeForm.htm */
class __TwigTemplate_6fb12ff94ee8fb5704475c02f60895e6c2ebe0374f7aa4de30715c5449e7de09 extends Twig_Template
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
        echo "<div class=\"search_container\">
<form action=\"/cvsmart/car-list\" method=\"POST\">
\t<h2>Find used car for sale</h2>
\t<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\">
          <option  value=\"\">All Brands</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_models_select\" class=\"form-control custom-select car_model_select\">
          <option value=\"\">All Models</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_state_select\" class=\"form-control custom-select\">
          <option  value=\"\">All state</option>
          ";
        // line 18
        if (($context["car_statelist"] ?? null)) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_statelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 20
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          ";
        }
        // line 23
        echo "        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_prices_select\" class=\"form-control custom-select\">
          <option  value=\"\">All Prices</option>
          ";
        // line 28
        if (($context["car_pricelist"] ?? null)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["car_pricelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 30
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          ";
        }
        // line 33
        echo "        </select>
    </div>
    <div class=\"col-md-12 col-sm-12\">
    \t<input type=\"hidden\" name=\"car_category_select\" value=\"used-cars\">
    \t<button class=\"btn-search\">SEARCH</button>
    </div>
</div>
</form>
<form action=\"/cvsmart/car-list\" method=\"POST\">
\t<h2>Find modify car accessories</h2>
\t<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <select name=\"car_brand_select\" class=\"form-control custom-select car_accessories_brand\">
          <option  value=\"\">All Brand</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_prices_select\" class=\"form-control custom-select car_accessories_category\">
          <option value=\"\">All Prices</option>
          ";
        // line 52
        if (($context["car_pricelist"] ?? null)) {
            // line 53
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["caraccessories_pricelist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                // line 54
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["slider"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          ";
        }
        // line 57
        echo "        </select>
    </div>
    <div class=\"col-md-12 col-sm-12\">
    \t<input type=\"hidden\" name=\"car_category_select\" value=\"accessories\">
    \t<button class=\"btn-search\">SEARCH</button>
    </div>
</div>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/partials/HomeForm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  126 => 56,  115 => 54,  110 => 53,  108 => 52,  87 => 33,  84 => 32,  73 => 30,  68 => 29,  66 => 28,  59 => 23,  56 => 22,  45 => 20,  40 => 19,  38 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search_container\">
<form action=\"/cvsmart/car-list\" method=\"POST\">
\t<h2>Find used car for sale</h2>
\t<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\">
          <option  value=\"\">All Brands</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_models_select\" class=\"form-control custom-select car_model_select\">
          <option value=\"\">All Models</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_state_select\" class=\"form-control custom-select\">
          <option  value=\"\">All state</option>
          {% if car_statelist %}
            {% for slider in car_statelist %}
            <option value=\"{{slider }}\">{{ slider }}</option>
            {% endfor %}
          {% endif %}
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_prices_select\" class=\"form-control custom-select\">
          <option  value=\"\">All Prices</option>
          {% if car_pricelist %}
            {% for slider in car_pricelist %}
            <option value=\"{{slider }}\">{{ slider }}</option>
            {% endfor %}
          {% endif %}
        </select>
    </div>
    <div class=\"col-md-12 col-sm-12\">
    \t<input type=\"hidden\" name=\"car_category_select\" value=\"used-cars\">
    \t<button class=\"btn-search\">SEARCH</button>
    </div>
</div>
</form>
<form action=\"/cvsmart/car-list\" method=\"POST\">
\t<h2>Find modify car accessories</h2>
\t<div class=\"row\">
    <div class=\"col-md-6 col-sm-12\">
        <select name=\"car_brand_select\" class=\"form-control custom-select car_accessories_brand\">
          <option  value=\"\">All Brand</option>
        </select>
    </div>
    <div class=\"col-md-6 col-sm-12\">
      <select name=\"car_prices_select\" class=\"form-control custom-select car_accessories_category\">
          <option value=\"\">All Prices</option>
          {% if car_pricelist %}
            {% for slider in caraccessories_pricelist %}
            <option value=\"{{slider }}\">{{ slider }}</option>
            {% endfor %}
          {% endif %}
        </select>
    </div>
    <div class=\"col-md-12 col-sm-12\">
    \t<input type=\"hidden\" name=\"car_category_select\" value=\"accessories\">
    \t<button class=\"btn-search\">SEARCH</button>
    </div>
</div>
</form>
</div>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/partials/HomeForm.htm", "");
    }
}
