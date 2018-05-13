<?php

/* D:\xampp\htdocs\cars\cvsmart/themes/cvsmart/pages/CarList.htm */
class __TwigTemplate_0a02b1dff4aa9c7b67218ae78126da5d1d60395a23f3bcc02b928891ecfad817 extends Twig_Template
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
      \t<h1>";
        // line 8
        echo twig_escape_filter($this->env, ($context["head_title"] ?? null), "html", null, true);
        echo "</h1>
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
            echo "</p><a ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "isaccessories", array())) {
                echo " href=\"/cvsmart/caraccessories/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "slug", array()), "html", null, true);
                echo "\" ";
            } else {
                echo "href=\"/cvsmart/car/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "slug", array()), "html", null, true);
                echo "\" ";
            }
            echo ">More Info</a></div></div>
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

</script>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/CarList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  79 => 25,  71 => 19,  51 => 17,  47 => 16,  43 => 14,  39 => 13,  31 => 8,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'CarSelectPage' %}
<div class=\"container carlistpage\">

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
      \t<div class=\"row\">
      \t\t<div class=\"col-md-12 col-sm-12\">
      \t<h1>{{head_title}}</h1>
      </div>
      \t</div>
      \t<?php \$m=0; ?>
      \t<div class=\"row carlist_all\">
  \t\t\t{% for car in carslist %}
  \t\t\t<?php \$m++; ?>
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" >
          <div class=\"carlist_img\"><img src=\"{{ car.carlist_image|media }}\"/></div>
        <h2>{{ car.title }}</h2><p class=\"shortdesc\">{{ car.shortdesc }}</p><a {% if car.isaccessories %} href=\"/cvsmart/caraccessories/{{ car.slug }}\" {% else %}href=\"/cvsmart/car/{{ car.slug }}\" {% endif %}>More Info</a></div></div>
\t\t\t {% endfor %}
      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = {{ currentpage}};
  var totalpages =  {{ sizeofcarlist }};

</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/CarList.htm", "");
    }
}
