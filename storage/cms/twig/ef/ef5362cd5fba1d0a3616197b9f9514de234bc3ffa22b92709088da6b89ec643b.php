<?php

/* /Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/partials/CarSelectPage.htm */
class __TwigTemplate_8f1bc514e3538c29e42fb7951166d45ce879eb7febbcd92ed9dba3adcea2aaed extends Twig_Template
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
  <form method=\"POST\">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select name=\"car_category_select\" class=\"form-control custom-select car_category_select\">
                  <option value=\"\">All</option>
                  <option value=\"used-cars\">Used Cars</option>
                  <option value=\"used-cars\">Accecercious</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\" disabled>
                  <option value=\"\">All Brands</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_state_select\" class=\"form-control custom-select\" disabled>
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
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/partials/CarSelectPage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  60 => 26,  49 => 24,  44 => 23,  42 => 22,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"carselectpage\">
<div class=\"container \">
  <form method=\"POST\">
   <div class=\"row\">
      <div class=\"col-md-11 col-sm-12\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-12\">
                <select name=\"car_category_select\" class=\"form-control custom-select car_category_select\">
                  <option value=\"\">All</option>
                  <option value=\"used-cars\">Used Cars</option>
                  <option value=\"used-cars\">Accecercious</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_brand_select\" class=\"form-control custom-select car_brand_select\" disabled>
                  <option value=\"\">All Brands</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select name=\"car_state_select\" class=\"form-control custom-select\" disabled>
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
</div>", "/Applications/MAMP/activesg_public_web/cvsmart/themes/cvsmart/partials/CarSelectPage.htm", "");
    }
}
