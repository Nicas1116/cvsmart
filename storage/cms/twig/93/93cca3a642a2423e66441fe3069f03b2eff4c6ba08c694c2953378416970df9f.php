<?php

/* D:\xampp\htdocs\cars\cvsmart\cvsmart/themes/cvsmart/partials/site/header.htm */
class __TwigTemplate_e68e4a8b81cfc64ceb3b6998b1f29846ae3373e29d93030cac4c76b63bfc3483 extends Twig_Template
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
        echo "<header>


    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            // line 10
            echo "    <div class=\"navbar-affixed-top\" data-spy=\"affix\" data-offset-top=\"200\">
    ";
        } else {
            // line 12
            echo "    <div >
    ";
        }
        // line 14
        echo "          <!-- *** TOP ***
      _________________________________________________________ -->
        <div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">

            <div class=\"container\">
                <div class=\"navbar-header\">

                    <a class=\"navbar-brand home\" href=\"/cvsmart/\">
                        <img src=\"/cvsmart/themes/cvsmart/assets/img/sp_logo.png\">
                       
                    </a>
                    <div class=\"navbar-buttons\">
                        <button type=\"button\" class=\"navbar-toggle btn-template-main\" data-toggle=\"collapse\" data-target=\"#navigation\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <i class=\"fa fa-align-justify\"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->
                <div class=\"navbar-collapse collapse\" id=\"navigation\">

                    <ul class=\"nav navbar-nav navbar-right\">
                    
                        <li class=\"page-scroll use-yamm yamm-fw\">
                            <a class=\"normalbutton  ";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "CarList")) {
            echo " active ";
        }
        echo " \" href=\"/cvsmart/car-list\">CAR LIST</a>

                        </li>
                        <li class=\"page-scroll use-yamm yamm-fw\">
                            <a class=\"normalbutton mbutton  ";
        // line 42
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "ContactUs")) {
            echo " active ";
        }
        echo " \" href=\"/cvsmart/contact-us\">CONTACT US</a>
                        </li>

                        <li>
                            <a class=\"socialbutton\" href=\"http://www.facebook.com/\"><img src=\"/cvsmart/themes/cvsmart/assets/img/header_facebook.png\"/></i></a>

                        </li>

                        <li>
                            <a class=\"socialbutton\" href=\"http://www.facebook.com/\"><img src=\"/cvsmart/themes/cvsmart/assets/img/header_instagram.png\"/></i></a>

                        </li>
                        <!-- <li class=\"page-scroll
                        ";
        // line 55
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "package")) {
            echo " active
                        ";
        }
        // line 57
        echo "                        dropdown use-yamm yamm-fw\">
                            <a href=\"/package\">Package</a>

                        </li> -->

                        <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                        <!-- <li class=\"dropdown\">
                            <a href=\"javascript: void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contact <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"contact.html\">Contact option 1</a>
                                </li>
                                <li><a href=\"contact2.html\">Contact option 2</a>
                                </li>
                                <li><a href=\"contact3.html\">Contact option 3</a>
                                </li>

                            </ul>
                        </li> -->
                    </ul>

                </div>
                <!--/.nav-collapse -->



                <div class=\"collapse clearfix\" id=\"search\">

                    <form class=\"navbar-form\" role=\"search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            <span class=\"input-group-btn\">

                                <button type=\"submit\" class=\"btn btn-template-main\"><i class=\"fa fa-search\"></i></button>

                            </span>
                        </div>
                    </form>

                </div>
                <!--/.nav-collapse -->

            </div>


        </div>
        <!-- /#navbar -->

    </div>

    <!-- *** NAVBAR END *** -->

</header>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\cars\\cvsmart\\cvsmart/themes/cvsmart/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 57,  92 => 55,  74 => 42,  65 => 38,  39 => 14,  35 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>


    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    {% if this.page.id == 'home' %}
    <div class=\"navbar-affixed-top\" data-spy=\"affix\" data-offset-top=\"200\">
    {% else %}
    <div >
    {% endif %}
          <!-- *** TOP ***
      _________________________________________________________ -->
        <div class=\"navbar navbar-default yamm\" role=\"navigation\" id=\"navbar\">

            <div class=\"container\">
                <div class=\"navbar-header\">

                    <a class=\"navbar-brand home\" href=\"/cvsmart/\">
                        <img src=\"/cvsmart/themes/cvsmart/assets/img/sp_logo.png\">
                       
                    </a>
                    <div class=\"navbar-buttons\">
                        <button type=\"button\" class=\"navbar-toggle btn-template-main\" data-toggle=\"collapse\" data-target=\"#navigation\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <i class=\"fa fa-align-justify\"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->
                <div class=\"navbar-collapse collapse\" id=\"navigation\">

                    <ul class=\"nav navbar-nav navbar-right\">
                    
                        <li class=\"page-scroll use-yamm yamm-fw\">
                            <a class=\"normalbutton  {% if this.page.id == 'CarList' %} active {% endif %} \" href=\"/cvsmart/car-list\">CAR LIST</a>

                        </li>
                        <li class=\"page-scroll use-yamm yamm-fw\">
                            <a class=\"normalbutton mbutton  {% if this.page.id == 'ContactUs' %} active {% endif %} \" href=\"/cvsmart/contact-us\">CONTACT US</a>
                        </li>

                        <li>
                            <a class=\"socialbutton\" href=\"http://www.facebook.com/\"><img src=\"/cvsmart/themes/cvsmart/assets/img/header_facebook.png\"/></i></a>

                        </li>

                        <li>
                            <a class=\"socialbutton\" href=\"http://www.facebook.com/\"><img src=\"/cvsmart/themes/cvsmart/assets/img/header_instagram.png\"/></i></a>

                        </li>
                        <!-- <li class=\"page-scroll
                        {% if this.page.id == 'package' %} active
                        {% endif %}
                        dropdown use-yamm yamm-fw\">
                            <a href=\"/package\">Package</a>

                        </li> -->

                        <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                        <!-- <li class=\"dropdown\">
                            <a href=\"javascript: void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contact <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"contact.html\">Contact option 1</a>
                                </li>
                                <li><a href=\"contact2.html\">Contact option 2</a>
                                </li>
                                <li><a href=\"contact3.html\">Contact option 3</a>
                                </li>

                            </ul>
                        </li> -->
                    </ul>

                </div>
                <!--/.nav-collapse -->



                <div class=\"collapse clearfix\" id=\"search\">

                    <form class=\"navbar-form\" role=\"search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            <span class=\"input-group-btn\">

                                <button type=\"submit\" class=\"btn btn-template-main\"><i class=\"fa fa-search\"></i></button>

                            </span>
                        </div>
                    </form>

                </div>
                <!--/.nav-collapse -->

            </div>


        </div>
        <!-- /#navbar -->

    </div>

    <!-- *** NAVBAR END *** -->

</header>", "D:\\xampp\\htdocs\\cars\\cvsmart\\cvsmart/themes/cvsmart/partials/site/header.htm", "");
    }
}
