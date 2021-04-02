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

/* W:\domains\codart/themes/codarttheme/partials/header.htm */
class __TwigTemplate_41b0a6acad66287adb3caf60bb33a8fe0d18587b70dd880c6a157d1996e8a486 extends \Twig\Template
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
        $tags = array();
        $filters = array("page" => 4, "theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
        echo "<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"header__logo\" id=\"logo\" data-scroll=\"#intro\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\">
            </a>
            <nav class=\"nav\" id=\"nav\">
                <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav__link\" data-scroll=\"#services\">Услуги</a>
                <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav__link\" data-scroll=\"#works\">Проекты</a>
                <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav__link\" data-scroll=\"#brands\">Клиенты</a>
                <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav__link\" data-scroll=\"#aboutus\">О нас</a>
                <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"nav__link\" data-scroll=\"#contact\">Контакты</a>
            </nav>
            <a href=\"tel:+380995582290\" class=\"header__tel\" id=\"header__tel\">+38 (099) 55 822 90</a>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\codart/themes/codarttheme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <a href=\"{{ 'home'| page }}\" class=\"header__logo\" id=\"logo\" data-scroll=\"#intro\">
                <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\">
            </a>
            <nav class=\"nav\" id=\"nav\">
                <a href=\"{{ 'home'| page }}\" class=\"nav__link\" data-scroll=\"#services\">Услуги</a>
                <a href=\"{{ 'home'| page }}\" class=\"nav__link\" data-scroll=\"#works\">Проекты</a>
                <a href=\"{{ 'home'| page }}\" class=\"nav__link\" data-scroll=\"#brands\">Клиенты</a>
                <a href=\"{{ 'home'| page }}\" class=\"nav__link\" data-scroll=\"#aboutus\">О нас</a>
                <a href=\"{{ 'home'| page }}\" class=\"nav__link\" data-scroll=\"#contact\">Контакты</a>
            </nav>
            <a href=\"tel:+380995582290\" class=\"header__tel\" id=\"header__tel\">+38 (099) 55 822 90</a>
        </div>
    </div>
</header>", "W:\\domains\\codart/themes/codarttheme/partials/header.htm", "");
    }
}
