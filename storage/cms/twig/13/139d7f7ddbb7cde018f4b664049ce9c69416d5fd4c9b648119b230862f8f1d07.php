<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* W:\domains\codart/themes/codarttheme/pages/pizzaapp.htm */
class __TwigTemplate_c536ff36ce7987f54f7121e974a7ceab584571fb9562d1459c66b0fa03321e54 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("component" => 10);
        $filters = array("theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<svg display=\"none\">
    <symbol id=\"arrow\" viewBox=\"0 0 25 22\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.5625 12.5715H20.1016L14.425 19.423C13.8719 20.0893 13.9625 21.0809 14.625 21.6356C15.2891 22.1919 16.2734 22.1007 16.8266 21.4344L24.6391 12.0058C24.7 11.9319 24.7297 11.8455 24.775 11.7638C24.8125 11.6978 24.8578 11.6412 24.8859 11.5689C24.9562 11.3882 24.9984 11.1981 24.9984 11.0064C24.9984 11.0048 25 11.0016 25 11.0001C25 10.9985 24.9984 10.9954 24.9984 10.9938C24.9984 10.8021 24.9562 10.6119 24.8859 10.4312C24.8578 10.3589 24.8125 10.3024 24.775 10.2364C24.7297 10.1546 24.7 10.0682 24.6391 9.99435L16.8266 0.565718C16.5156 0.193287 16.0719 0 15.625 0C15.2719 0 14.9172 0.119429 14.625 0.364574C13.9625 0.919292 13.8719 1.91087 14.425 2.57716L20.1016 9.42863H1.5625C0.7 9.42863 0 10.1326 0 11.0001C0 11.8675 0.7 12.5715 1.5625 12.5715Z\"/>
    </symbol>
</svg>
<section class=\"main\">
    <div class=\"container\">
        <div class=\"main__inner\">
            <div class=\"main__content\">
                ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "main/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "main__title"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "main/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "main__text"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "                <div class=\"main__buttons\">
                    <a href=\"#\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/appstore.png");
        echo "\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/googleplay.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"main__image\">
                <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone.png");
        echo "\" alt=\"\" class=\"main__img\">
            </div>
        </div>
    </div>
</section>
<section class=\"about-projects\">
    <div class=\"container\">
        <div class=\"about-projects__inner\">
            <div class=\"about-projects__image\">
                <div class=\"first__image\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/about1.png");
        echo "\" alt=\"\">
                    <div class=\"second__image\">
                        <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/about2.png");
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"main__content main__content--about\">
                ";
        // line 35
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about-projects/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "main__title"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about-projects/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "main__text main__text--about"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "            </div>
        </div>
    </div>
</section>
<section class=\"easy\">
    <div class=\"container\">
        <div class=\"easy__inner\">
            <div class=\"main__content\">
                ";
        // line 45
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "easy/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "main__title"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "easy/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "main__text"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 47
        echo "            </div>
            <div class=\"easy__image\">
                <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone.png");
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<div class=\"first__section\">
    <div class=\"container\">
        <div class=\"first__section__inner\">
            <div class=\"first__section--image\">
                <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone2.png");
        echo "\" alt=\"\">
            </div>
            ";
        // line 60
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "first-section/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "first__section--text"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 61
        echo "        </div>
    </div>
</div>
<div class=\"first__section first__section--second\">
    <div class=\"container\">
        <div class=\"first__section__inner first__section__inner--second\">
            ";
        // line 67
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "second-section/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "first__section--text first__section--text--second"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 68
        echo "            <div class=\"first__section--image\">
                <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone3.png");
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<div class=\"first__section first__section--third\">
    <div class=\"container\">
        <div class=\"first__section__inner first__section__inner--third\">
            <div class=\"first__section--image third\">
                <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone4.png");
        echo "\" alt=\"\">
            </div>
            ";
        // line 80
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "third-section/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "first__section--text first__section--text--third"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 81
        echo "        </div>
    </div>
</div>
<div class=\"last__section\">
    <div class=\"container\">
        <div class=\"last__section--inner\">
            <div class=\"last__section--image\">
                <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pizzaapp/iphone5.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"last__section--text\">Спасибо за внимание!)</div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\codart/themes/codarttheme/pages/pizzaapp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 88,  238 => 81,  231 => 80,  226 => 78,  214 => 69,  211 => 68,  204 => 67,  196 => 61,  189 => 60,  184 => 58,  172 => 49,  168 => 47,  160 => 46,  153 => 45,  143 => 37,  135 => 36,  128 => 35,  120 => 30,  115 => 28,  102 => 18,  95 => 14,  91 => 13,  88 => 12,  80 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg display=\"none\">
    <symbol id=\"arrow\" viewBox=\"0 0 25 22\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.5625 12.5715H20.1016L14.425 19.423C13.8719 20.0893 13.9625 21.0809 14.625 21.6356C15.2891 22.1919 16.2734 22.1007 16.8266 21.4344L24.6391 12.0058C24.7 11.9319 24.7297 11.8455 24.775 11.7638C24.8125 11.6978 24.8578 11.6412 24.8859 11.5689C24.9562 11.3882 24.9984 11.1981 24.9984 11.0064C24.9984 11.0048 25 11.0016 25 11.0001C25 10.9985 24.9984 10.9954 24.9984 10.9938C24.9984 10.8021 24.9562 10.6119 24.8859 10.4312C24.8578 10.3589 24.8125 10.3024 24.775 10.2364C24.7297 10.1546 24.7 10.0682 24.6391 9.99435L16.8266 0.565718C16.5156 0.193287 16.0719 0 15.625 0C15.2719 0 14.9172 0.119429 14.625 0.364574C13.9625 0.919292 13.8719 1.91087 14.425 2.57716L20.1016 9.42863H1.5625C0.7 9.42863 0 10.1326 0 11.0001C0 11.8675 0.7 12.5715 1.5625 12.5715Z\"/>
    </symbol>
</svg>
<section class=\"main\">
    <div class=\"container\">
        <div class=\"main__inner\">
            <div class=\"main__content\">
                {% component 'contenteditor' file=\"main/title.htm\" fixture=\"h1\"  class=\"main__title\" %}
                {% component 'contenteditor' file=\"main/text.htm\" fixture=\"div\"  class=\"main__text\" %}
                <div class=\"main__buttons\">
                    <a href=\"#\"><img src=\"{{ 'assets/images/pizzaapp/appstore.png'|theme }}\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"{{ 'assets/images/pizzaapp/googleplay.png'|theme }}\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"main__image\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone.png'|theme }}\" alt=\"\" class=\"main__img\">
            </div>
        </div>
    </div>
</section>
<section class=\"about-projects\">
    <div class=\"container\">
        <div class=\"about-projects__inner\">
            <div class=\"about-projects__image\">
                <div class=\"first__image\">
                    <img src=\"{{ 'assets/images/pizzaapp/about1.png'|theme }}\" alt=\"\">
                    <div class=\"second__image\">
                        <img src=\"{{ 'assets/images/pizzaapp/about2.png'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"main__content main__content--about\">
                {% component 'contenteditor' file=\"about-projects/title.htm\" fixture=\"h1\"  class=\"main__title\" %}
                {% component 'contenteditor' file=\"about-projects/text.htm\" fixture=\"div\"  class=\"main__text main__text--about\" %}
            </div>
        </div>
    </div>
</section>
<section class=\"easy\">
    <div class=\"container\">
        <div class=\"easy__inner\">
            <div class=\"main__content\">
                {% component 'contenteditor' file=\"easy/title.htm\" fixture=\"h1\"  class=\"main__title\" %}
                {% component 'contenteditor' file=\"easy/text.htm\" fixture=\"div\"  class=\"main__text\" %}
            </div>
            <div class=\"easy__image\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone.png'|theme }}\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<div class=\"first__section\">
    <div class=\"container\">
        <div class=\"first__section__inner\">
            <div class=\"first__section--image\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone2.png'|theme }}\" alt=\"\">
            </div>
            {% component 'contenteditor' file=\"first-section/text.htm\" fixture=\"div\"  class=\"first__section--text\" %}
        </div>
    </div>
</div>
<div class=\"first__section first__section--second\">
    <div class=\"container\">
        <div class=\"first__section__inner first__section__inner--second\">
            {% component 'contenteditor' file=\"second-section/text.htm\" fixture=\"div\"  class=\"first__section--text first__section--text--second\" %}
            <div class=\"first__section--image\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone3.png'|theme }}\" alt=\"\">
            </div>
        </div>
    </div>
</div>
<div class=\"first__section first__section--third\">
    <div class=\"container\">
        <div class=\"first__section__inner first__section__inner--third\">
            <div class=\"first__section--image third\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone4.png'|theme }}\" alt=\"\">
            </div>
            {% component 'contenteditor' file=\"third-section/text.htm\" fixture=\"div\"  class=\"first__section--text first__section--text--third\" %}
        </div>
    </div>
</div>
<div class=\"last__section\">
    <div class=\"container\">
        <div class=\"last__section--inner\">
            <div class=\"last__section--image\">
                <img src=\"{{ 'assets/images/pizzaapp/iphone5.png'|theme }}\" alt=\"\">
            </div>
            <div class=\"last__section--text\">Спасибо за внимание!)</div>
        </div>
    </div>
</div>", "W:\\domains\\codart/themes/codarttheme/pages/pizzaapp.htm", "");
    }
}
