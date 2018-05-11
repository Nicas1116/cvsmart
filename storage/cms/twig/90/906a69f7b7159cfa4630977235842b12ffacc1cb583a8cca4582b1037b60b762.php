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
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" ><img src=\"";
            // line 15
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["car"], "carlist_image", array()));
            echo "\"/><h2>";
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
        // line 17
        echo "      \t</div>
      \t<ul id=\"pagination\" class=\"pagination-sm\"></ul>
      </div>
  </div>
</div>
<script type=\"text/javascript\">
  var currentpage = ";
        // line 23
        echo twig_escape_filter($this->env, ($context["currentpage"] ?? null), "html", null, true);
        echo ";
  var totalpages =  ";
        // line 24
        echo twig_escape_filter($this->env, ($context["sizeofcarlist"] ?? null), "html", null, true);
        echo ";
\t
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
        return array (  69 => 24,  65 => 23,  57 => 17,  43 => 15,  40 => 14,  36 => 13,  23 => 2,  19 => 1,);
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
\t\t\t\t<div class=\"col-md-4 col-sm-12 carlist_one\"><div class=\"carlist_content\" ><img src=\"{{ car.carlist_image|media }}\"/><h2>{{ car.title }}</h2><p class=\"shortdesc\">{{ car.shortdesc }}</p><a href=\"/cvsmart/car/{{ car.slug }}\">More Info</a></div></div>
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
</script>", "D:\\xampp\\htdocs\\cars\\cvsmart/themes/cvsmart/pages/CarList.htm", "");
    }
}
