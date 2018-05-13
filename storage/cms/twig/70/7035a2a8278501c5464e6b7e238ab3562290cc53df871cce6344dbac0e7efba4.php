<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/pages/CarAccessories.htm */
class __TwigTemplate_b2748cb6621f50110daaca1e0de21094cffebef61d2550ade8a7913ee16c92a5 extends Twig_Template
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
\t<div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
      </div>
  </div>
    <div class=\"row\">
      <div class=\"col-md-10 col-sm-12\">
      <div id=\"slider\" class=\"flexslider\">
  \t\t<ul class=\"slides\">
      \t";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 13
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["carimage"]) {
                // line 14
                echo "\t        <li>
\t   \t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 16
                    echo "\t   \t\t\t<iframe style=\"width:100%;display: block;height:550px;border:none;\" src=\"https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carvideo", array()), "html", null, true);
                    echo "\"></iframe>
\t   \t\t\t";
                } else {
                    // line 18
                    echo "\t          <a href=\"";
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo "\" style=\"background-image: url(";
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo ");\" data-lity class=\"slider-content\">
\t          \t";
                }
                // line 20
                echo "\t          </a>
\t    </li>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t      ";
        }
        // line 24
        echo "\t     </ul>
      </div>
      </div>
      <div class=\"col-md-2 col-sm-12\">
      \t<div id=\"carousel\">
  \t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 30
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["carimage"]) {
                // line 31
                echo "\t   \t\t<a style=\"background-image: url(";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                echo ");\" class=\"slider-content con-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" slideno=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t   \t\t\t";
                // line 32
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 33
                    echo "\t   \t\t\t<span class=\"videobg\"></span>
\t   \t\t\t";
                }
                // line 35
                echo "\t          </a>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t      ";
        }
        // line 38
        echo "      </div>
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>SPECIFICATION</h2>
      \t<p>";
        // line 44
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "specification", array());
        echo "</p>
      </div>
      <div class=\"col-md-4 col-sm-12\">
      \t<h2>price</h2>
        <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "price", array()), "html", null, true);
        echo "</p>
      </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/CarAccessories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  122 => 44,  114 => 38,  111 => 37,  104 => 35,  100 => 33,  98 => 32,  89 => 31,  84 => 30,  82 => 29,  75 => 24,  72 => 23,  64 => 20,  56 => 18,  50 => 16,  48 => 15,  45 => 14,  40 => 13,  38 => 12,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'CarSelectPage' %}
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
\t   \t\t<a style=\"background-image: url({{ carimage.carimages|media }});\" class=\"slider-content con-{{ key }}\" slideno=\"{{ key }}\">
\t   \t\t\t{% if carimage.isvideo %}
\t   \t\t\t<span class=\"videobg\"></span>
\t   \t\t\t{% endif %}
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
      \t<h2>price</h2>
        <p>{{ carsdetail.price }}</p>
      </div>
  </div>
</div>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/CarAccessories.htm", "");
    }
}
