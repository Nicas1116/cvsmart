<?php

/* D:\xampp\htdocs\cars/themes/cvsmart/pages/Car.htm */
class __TwigTemplate_d995707cdb6501c83788173717a040432032c963bc4643f7b618f185f93c3c8c extends Twig_Template
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
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>Brand</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>All state</option>
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
\t<div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<h1>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
      </div>
  </div>
    <div class=\"row\">
      <div class=\"col-md-10 col-sm-12\">
      <div id=\"slider\" class=\"flexslider\">
  \t\t<ul class=\"slides\">

      \t";
        // line 40
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 41
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["carimage"]) {
                // line 42
                echo "\t        <li>
\t   \t\t\t";
                // line 43
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 44
                    echo "\t   \t\t\t<iframe style=\"width:100%;display: block;height:550px;border:none;\" src=\"https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carvideo", array()), "html", null, true);
                    echo "\"></iframe>
\t   \t\t\t";
                } else {
                    // line 46
                    echo "\t          <a href=\"";
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo "\" style=\"background-image: url(";
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo ");\" data-lity class=\"slider-content\">
\t          \t";
                }
                // line 48
                echo "\t          </a>
\t    </li>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t      ";
        }
        // line 52
        echo "\t     </ul>
      </div>
      </div>
      <div class=\"col-md-2 col-sm-12\">
      \t<div id=\"carousel\">
  \t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 58
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["carimage"]) {
                // line 59
                echo "\t       
\t   \t\t<a style=\"background-image: url(";
                // line 60
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                echo ");\" class=\"slider-content con-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" slideno=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t   \t\t\t";
                // line 61
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 62
                    echo "\t   \t\t\t<span class=\"videobg\"></span>
\t   \t\t\t";
                }
                // line 64
                echo "\t          \t
\t          </a>

\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t      ";
        }
        // line 69
        echo "      </div>
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>SPECIFICATION</h2>
      \t<p>";
        // line 75
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "specification", array());
        echo "</p>
      </div>
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>Seller/owner contact</h2>
      \t<p>";
        // line 79
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "sellercontact", array());
        echo "</p>
      \t<h2>disclaimer</h2>
      \t<p>";
        // line 81
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "disclaimer", array());
        echo "</p>
      </div>
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>price</h2>
      \t<p>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "price", array()), "html", null, true);
        echo "</p>
      \t<h2>Car loan monthly installment*</h2>
      \t<p>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carloaninstallment", array()), "html", null, true);
        echo "</p>
      </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/Car.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 87,  170 => 85,  163 => 81,  158 => 79,  151 => 75,  143 => 69,  140 => 68,  131 => 64,  127 => 62,  125 => 61,  117 => 60,  114 => 59,  109 => 58,  107 => 57,  100 => 52,  97 => 51,  89 => 48,  81 => 46,  75 => 44,  73 => 43,  70 => 42,  65 => 41,  63 => 40,  52 => 32,  19 => 1,);
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
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>Brand</option>
                </select>
            </div>
            <div class=\"col-md-4 col-sm-12\">
              <select class=\"form-control\">
                  <option>All state</option>
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
\t<div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<h1>{{ carsdetail.title }}</h1>
      </div>
  </div>
    <div class=\"row\">
      <div class=\"col-md-10 col-sm-12\">
      <div id=\"slider\" class=\"flexslider\">
  \t\t<ul class=\"slides\">

      \t{% if carsdetail.carimages %}
\t        {% for carimage in carsdetail.carimages %}
\t        <li>
\t   \t\t\t{% if carimage.isvideo %}
\t   \t\t\t<iframe style=\"width:100%;display: block;height:550px;border:none;\" src=\"https://www.youtube.com/embed/{{ carimage.carvideo }}\"></iframe>
\t   \t\t\t{% else %}
\t          <a href=\"{{ carimage.carimages|media }}\" style=\"background-image: url({{ carimage.carimages|media }});\" data-lity class=\"slider-content\">
\t          \t{% endif %}
\t          </a>
\t    </li>
\t        {% endfor %}
\t      {% endif %}
\t     </ul>
      </div>
      </div>
      <div class=\"col-md-2 col-sm-12\">
      \t<div id=\"carousel\">
  \t\t{% if carsdetail.carimages %}
\t        {% for key,carimage in carsdetail.carimages %}
\t       
\t   \t\t<a style=\"background-image: url({{ carimage.carimages|media }});\" class=\"slider-content con-{{ key }}\" slideno=\"{{ key }}\">
\t   \t\t\t{% if carimage.isvideo %}
\t   \t\t\t<span class=\"videobg\"></span>
\t   \t\t\t{% endif %}
\t          \t
\t          </a>

\t        {% endfor %}
\t      {% endif %}
      </div>
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>SPECIFICATION</h2>
      \t<p>{{ carsdetail.specification|raw }}</p>
      </div>
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>Seller/owner contact</h2>
      \t<p>{{ carsdetail.sellercontact|raw }}</p>
      \t<h2>disclaimer</h2>
      \t<p>{{ carsdetail.disclaimer|raw }}</p>
      </div>
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>price</h2>
      \t<p>{{ carsdetail.price }}</p>
      \t<h2>Car loan monthly installment*</h2>
      \t<p>{{ carsdetail.carloaninstallment }}</p>
      </div>
  </div>
</div>", "D:\\xampp\\htdocs\\cars/themes/cvsmart/pages/Car.htm", "");
    }
}
