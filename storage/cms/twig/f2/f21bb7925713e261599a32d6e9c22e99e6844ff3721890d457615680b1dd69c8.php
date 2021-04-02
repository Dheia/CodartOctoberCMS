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

/* W:\domains\codart/themes/codarttheme/partials/footer.htm */
class __TwigTemplate_ad4b31af4e6e90eb632f009a11a68c04f71fd4eb7fbeab68b54ee3d66741d993 extends \Twig\Template
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
        $tags = array("component" => 7);
        $filters = array("theme" => 73);
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
        echo "<footer class=\"footer\" id=\"contact\">
    <div class=\"container\">
        <div class=\"footer__inner\">
            <div class=\"works__item works__item--footer\">
                <div class=\"about__toptext about__toptext--works\"><p>Контакты и заявка</p></div>
                <h2 class=\"about__title\">Есть проект который хочешь реализовать? Оставь заявку и мы поможем</h2>
                ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer/text.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about__text about__text--answer"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                <div class=\"intro__socials intro__socials--answer\">
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
                <a href=\"tel:+380995582290\" class=\"about__tel about__tel--works\">+38 (099) 55 822 90</a>
                <a href=\"mailto:example@mail.com\" class=\"about__mail about__mail--works\">example@mail.com
                    <svg>
                        <use xlink:href=\"#arrow\"></use>
                    </svg>
                </a>
            </div>
            <div class=\"footer__item\">
                <form action=\"\" method=\"post\" class=\"form\">
                    <!-- Hidden Required Fields -->
                    <input type=\"hidden\" name=\"project_name\" value=\"Codart\">
                    <input type=\"hidden\" name=\"admin_email\" value=\"guk2001y@gmail.com\">
                    <input type=\"hidden\" name=\"form_subject\" value=\"Заявка с сайта Codart\">
                    <!-- END Hidden Required Fields -->

                    <label for=\"name\">Ваше имя</label>
                    <input  id=\"name\" type=\"text\" placeholder=\"Ваше имя\" class=\"footer__input\" required autocomplete=\"on\">

                    <label for=\"email\">Ваш email</label>
                    <input id=\"email\" type=\"email\" placeholder=\"Ваш email\" class=\"footer__input\" required autocomplete=\"on\">

                    <label for=\"textarea\">Какая задача вас интересует?</label>
                    <input id=\"textarea\" type=\"text\" placeholder=\"Какая задача вас интересует?\" class=\"footer__input\">

                    <button type=\"submit\" class=\"form__btn\"><span>Отправить</span>
                        <svg>
                            <use xlink:href=\"#arrow\"></use>
                        </svg>
                    </button>
                </form>
                ";
        // line 65
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "footer/brieftext.htm"        ;
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "footer__brief--text"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 66
        echo "                <a target=\"_blank\" href=\"#\" class=\"brief__btn\"><span>Бриф для заполнения</span>
                    <svg>
                        <use xlink:href=\"#arrow\"></use>
                    </svg>
                </a>
            </div>
        </div>
        <a href=\"#\" class=\"footer__logo\" data-scroll=\"#intro\"><img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footerlogo.png");
        echo "\" alt=\"\"></a>
        <div class=\"intro__socials intro__socials--footer\">
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
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\codart/themes/codarttheme/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 73,  143 => 66,  136 => 65,  77 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\" id=\"contact\">
    <div class=\"container\">
        <div class=\"footer__inner\">
            <div class=\"works__item works__item--footer\">
                <div class=\"about__toptext about__toptext--works\"><p>Контакты и заявка</p></div>
                <h2 class=\"about__title\">Есть проект который хочешь реализовать? Оставь заявку и мы поможем</h2>
                {% component 'contenteditor' file=\"footer/text.htm\" fixture=\"div\"  class=\"about__text about__text--answer\" %}
                <div class=\"intro__socials intro__socials--answer\">
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
                <a href=\"tel:+380995582290\" class=\"about__tel about__tel--works\">+38 (099) 55 822 90</a>
                <a href=\"mailto:example@mail.com\" class=\"about__mail about__mail--works\">example@mail.com
                    <svg>
                        <use xlink:href=\"#arrow\"></use>
                    </svg>
                </a>
            </div>
            <div class=\"footer__item\">
                <form action=\"\" method=\"post\" class=\"form\">
                    <!-- Hidden Required Fields -->
                    <input type=\"hidden\" name=\"project_name\" value=\"Codart\">
                    <input type=\"hidden\" name=\"admin_email\" value=\"guk2001y@gmail.com\">
                    <input type=\"hidden\" name=\"form_subject\" value=\"Заявка с сайта Codart\">
                    <!-- END Hidden Required Fields -->

                    <label for=\"name\">Ваше имя</label>
                    <input  id=\"name\" type=\"text\" placeholder=\"Ваше имя\" class=\"footer__input\" required autocomplete=\"on\">

                    <label for=\"email\">Ваш email</label>
                    <input id=\"email\" type=\"email\" placeholder=\"Ваш email\" class=\"footer__input\" required autocomplete=\"on\">

                    <label for=\"textarea\">Какая задача вас интересует?</label>
                    <input id=\"textarea\" type=\"text\" placeholder=\"Какая задача вас интересует?\" class=\"footer__input\">

                    <button type=\"submit\" class=\"form__btn\"><span>Отправить</span>
                        <svg>
                            <use xlink:href=\"#arrow\"></use>
                        </svg>
                    </button>
                </form>
                {% component 'contenteditor' file=\"footer/brieftext.htm\" fixture=\"div\"  class=\"footer__brief--text\" %}
                <a target=\"_blank\" href=\"#\" class=\"brief__btn\"><span>Бриф для заполнения</span>
                    <svg>
                        <use xlink:href=\"#arrow\"></use>
                    </svg>
                </a>
            </div>
        </div>
        <a href=\"#\" class=\"footer__logo\" data-scroll=\"#intro\"><img src=\"{{ 'assets/images/footerlogo.png'|theme }}\" alt=\"\"></a>
        <div class=\"intro__socials intro__socials--footer\">
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
    </div>
</footer>", "W:\\domains\\codart/themes/codarttheme/partials/footer.htm", "");
    }
}
