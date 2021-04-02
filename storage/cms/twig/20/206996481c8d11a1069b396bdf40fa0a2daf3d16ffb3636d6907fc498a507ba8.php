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

/* W:\domains\codart/themes/codarttheme/partials/intro.htm */
class __TwigTemplate_a9068d597f2419dbdc3f320610176fe455bedcec1a876057e4e76563d888980d extends \Twig\Template
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
        $tags = array("component" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
        echo "<section class=\"intro\" id=\"intro\">
    <div class=\"container\">
        <div class=\"intro__inner\">
            ";
        // line 4
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "intro__title"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "            ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/suptitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "intro__text"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "            <div class=\"intro__socials\">
                <a target=\"_blank\" href=\"https://www.instagram.com/codart.pro/\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#instagram\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"tg://resolve?domain=pro_codart\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#telegram\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"viber://add?number=+380636924438\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#viber\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"tel:+380636924438\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#whatsapp\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"https://www.facebook.com/pro.codart/?modal=admin_todo_tour\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#facebook\"></use>
                    </svg>
                </a>
            </div>
            <button class=\"intro__btn\" data-scroll=\"#contact\">Сделать заказ</button>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\codart/themes/codarttheme/partials/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 6,  74 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"intro\" id=\"intro\">
    <div class=\"container\">
        <div class=\"intro__inner\">
            {% component 'contenteditor' file=\"intro/title.htm\" fixture=\"h1\"  class=\"intro__title\" %}
            {% component 'contenteditor' file=\"intro/suptitle.htm\" fixture=\"h2\"  class=\"intro__text\" %}
            <div class=\"intro__socials\">
                <a target=\"_blank\" href=\"https://www.instagram.com/codart.pro/\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#instagram\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"tg://resolve?domain=pro_codart\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#telegram\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"viber://add?number=+380636924438\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#viber\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"tel:+380636924438\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#whatsapp\"></use>
                    </svg>
                </a>
                <a target=\"_blank\" href=\"https://www.facebook.com/pro.codart/?modal=admin_todo_tour\" class=\"social__link\">
                    <svg>
                        <use xlink:href=\"#facebook\"></use>
                    </svg>
                </a>
            </div>
            <button class=\"intro__btn\" data-scroll=\"#contact\">Сделать заказ</button>
        </div>
    </div>
</section>", "W:\\domains\\codart/themes/codarttheme/partials/intro.htm", "");
    }
}
