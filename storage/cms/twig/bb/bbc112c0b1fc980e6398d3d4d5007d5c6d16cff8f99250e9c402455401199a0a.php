<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/pages/Car.htm */
class __TwigTemplate_0dcf1313b795f02d8dd08f15a474e22206839fa3d50e9f529d8b0543f8da09a5 extends Twig_Template
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
        echo "
<div class=\"container carlistpage\">

\t<div class=\"row\">

      <div class=\"col-md-12 col-sm-12\">

      \t<h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

      </div>

  </div>

    <div class=\"row\">

      <div class=\"col-md-10 col-sm-12\">

      <div id=\"slider\" class=\"flexslider\">

  \t\t<ul class=\"slides\">



      \t";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 26
            echo "
\t        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["carimage"]) {
                // line 28
                echo "
\t        <li>

\t   \t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 32
                    echo "
\t   \t\t\t<iframe style=\"width:100%;display: block;height:550px;border:none;\" src=\"https://www.youtube.com/embed/";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carvideo", array()), "html", null, true);
                    echo "\"></iframe>

\t   \t\t\t";
                } else {
                    // line 36
                    echo "
\t          <a href=\"";
                    // line 37
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo "\" style=\"background-image: url(";
                    echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                    echo ");\" data-lity class=\"slider-content\">

\t          \t";
                }
                // line 40
                echo "
\t          </a>

\t    </li>

\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
\t      ";
        }
        // line 48
        echo "
\t     </ul>

      </div>

      </div>

      <div class=\"col-md-2 col-sm-12\">

      \t<div id=\"carousel\">

  \t\t";
        // line 59
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array())) {
            // line 60
            echo "
\t        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carimages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["carimage"]) {
                // line 62
                echo "
\t       

\t   \t\t<a style=\"background-image: url(";
                // line 65
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "carimages", array()));
                echo ");\" class=\"slider-content con-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" slideno=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">

\t   \t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["carimage"], "isvideo", array())) {
                    // line 68
                    echo "
\t   \t\t\t<span class=\"videobg\"></span>

\t   \t\t\t";
                }
                // line 72
                echo "
\t          \t

\t          </a>



\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['carimage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
\t      ";
        }
        // line 82
        echo "
      </div>

      </div>

  </div>

  <div class=\"row\">

      <div class=\"col-md-4 col-sm-12\">

      \t<h2>SPECIFICATION</h2>

      \t<p>";
        // line 95
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "specification", array());
        echo "</p>

      </div>

      <div class=\"col-md-4 col-sm-12\">

      \t<h2>Seller/owner contact</h2>

      \t<p>";
        // line 103
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "sellercontact", array());
        echo "</p>

      \t<h2>disclaimer</h2>

      \t<p>";
        // line 107
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "disclaimer", array());
        echo "</p>

      </div>

      <div class=\"col-md-4 col-sm-12\">

      \t<h2>price</h2>

      \t<p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "price", array()), "html", null, true);
        echo "</p>

      \t<h2>Car loan monthly installment*</h2>

      \t<p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["carsdetail"] ?? null), "carloaninstallment", array()), "html", null, true);
        echo "</p>

      </div>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Car.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 119,  207 => 115,  196 => 107,  189 => 103,  178 => 95,  163 => 82,  159 => 80,  146 => 72,  140 => 68,  138 => 67,  129 => 65,  124 => 62,  120 => 61,  117 => 60,  115 => 59,  102 => 48,  98 => 46,  87 => 40,  79 => 37,  76 => 36,  70 => 33,  67 => 32,  65 => 31,  60 => 28,  56 => 27,  53 => 26,  51 => 25,  32 => 9,  23 => 2,  19 => 1,);
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

</div>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/Car.htm", "");
    }
}
