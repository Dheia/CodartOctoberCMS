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

/* W:\domains\codart/themes/codarttheme/pages/projects.htm */
class __TwigTemplate_cd8ee5faefe3b474d1f1563a0e035b4d244555b2c062271772901efb87188542 extends \Twig\Template
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
        $tags = array("partial" => 29);
        $filters = array("page" => 45, "theme" => 52);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<!--    Svg-->
<svg display=\"none\">
    <symbol id=\"instagram\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0ZM10.1418 6.10858C10.8813 6.07492 11.1176 6.06669 13.0006 6.06669H12.9985C14.8821 6.06669 15.1175 6.07492 15.8571 6.10858C16.5952 6.14238 17.0993 6.25924 17.5413 6.43069C17.9978 6.60764 18.3834 6.84453 18.7691 7.2302C19.1548 7.61558 19.3917 8.00241 19.5693 8.45843C19.7398 8.89927 19.8568 9.4031 19.8914 10.1412C19.9247 10.8808 19.9333 11.1171 19.9333 13.0001C19.9333 14.8831 19.9247 15.1188 19.8914 15.8584C19.8568 16.5962 19.7398 17.1002 19.5693 17.5412C19.3917 17.9971 19.1548 18.3839 18.7691 18.7693C18.3839 19.1549 17.9976 19.3924 17.5417 19.5695C17.1006 19.741 16.5962 19.8578 15.8581 19.8916C15.1185 19.9253 14.8829 19.9335 12.9998 19.9335C11.1169 19.9335 10.8808 19.9253 10.1412 19.8916C9.40322 19.8578 8.89924 19.741 8.45811 19.5695C8.00238 19.3924 7.61555 19.1549 7.23032 18.7693C6.84479 18.3839 6.6079 17.9971 6.43066 17.541C6.25935 17.1002 6.14249 16.5964 6.10855 15.8582C6.07504 15.1187 6.06666 14.8831 6.06666 13.0001C6.06666 11.1171 6.07533 10.8806 6.1084 10.1411C6.14163 9.40325 6.25863 8.89927 6.43052 8.45828C6.60819 8.00241 6.84508 7.61558 7.23075 7.2302C7.61613 6.84468 8.00296 6.60778 8.45897 6.43069C8.89982 6.25924 9.40365 6.14238 10.1418 6.10858Z\"/>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.3784 7.31619C12.4991 7.316 12.6291 7.31606 12.7693 7.31612L13.0004 7.31619C14.8516 7.31619 15.071 7.32283 15.802 7.35605C16.478 7.38697 16.8449 7.49992 17.0893 7.59482C17.4129 7.72049 17.6436 7.87071 17.8861 8.11338C18.1288 8.35605 18.279 8.58717 18.4049 8.91073C18.4998 9.15484 18.6129 9.52173 18.6437 10.1977C18.6769 10.9286 18.6842 11.1482 18.6842 12.9985C18.6842 14.8489 18.6769 15.0685 18.6437 15.7994C18.6128 16.4754 18.4998 16.8423 18.4049 17.0864C18.2793 17.4099 18.1288 17.6403 17.8861 17.8828C17.6434 18.1255 17.413 18.2757 17.0893 18.4014C16.8452 18.4967 16.478 18.6094 15.802 18.6403C15.0711 18.6735 14.8516 18.6808 13.0004 18.6808C11.149 18.6808 10.9296 18.6735 10.1987 18.6403C9.52267 18.6091 9.15578 18.4962 8.91123 18.4013C8.58767 18.2756 8.35656 18.1254 8.11389 17.8827C7.87122 17.64 7.721 17.4095 7.59504 17.0858C7.50014 16.8417 7.38704 16.4748 7.35627 15.7988C7.32305 15.0679 7.31641 14.8483 7.31641 12.9968C7.31641 11.1453 7.32305 10.9269 7.35627 10.196C7.38718 9.52 7.50014 9.15311 7.59504 8.9087C7.72071 8.58514 7.87122 8.35403 8.11389 8.11136C8.35656 7.86869 8.58767 7.71847 8.91123 7.59251C9.15564 7.49718 9.52267 7.38451 10.1987 7.35345C10.8383 7.32456 11.0862 7.3159 12.3784 7.31445V7.31619ZM16.7013 8.46742C16.242 8.46742 15.8693 8.83965 15.8693 9.29914C15.8693 9.75847 16.242 10.1311 16.7013 10.1311C17.1607 10.1311 17.5333 9.75847 17.5333 9.29914C17.5333 8.8398 17.1607 8.46713 16.7013 8.46713V8.46742ZM9.43978 13.0001C9.43978 11.0338 11.0339 9.43962 13.0002 9.43955C14.9666 9.43955 16.5604 11.0338 16.5604 13.0001C16.5604 14.9665 14.9667 16.56 13.0004 16.56C11.034 16.56 9.43978 14.9665 9.43978 13.0001Z\"/>
        <path d=\"M13.0006 10.689C14.2769 10.689 15.3117 11.7236 15.3117 13.0001C15.3117 14.2764 14.2769 15.3112 13.0006 15.3112C11.7241 15.3112 10.6895 14.2764 10.6895 13.0001C10.6895 11.7236 11.7241 10.689 13.0006 10.689Z\"/>
    </symbol>
    <symbol id=\"telegram\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13ZM8.70543 11.8092C7.40316 12.3778 6.0651 12.962 4.84157 13.6359L4.84148 13.636C4.20259 14.1038 5.05181 14.4346 5.84842 14.745C5.97507 14.7943 6.10039 14.8431 6.21818 14.8919C6.31621 14.922 6.41589 14.9538 6.51691 14.986C7.40289 15.2683 8.39083 15.583 9.25097 15.1095C10.6639 14.2979 11.9974 13.3595 13.3298 12.4218C13.7663 12.1146 14.2028 11.8074 14.6419 11.5048C14.6624 11.4917 14.6856 11.4766 14.711 11.4602C15.0851 11.2177 15.9263 10.6724 15.6151 11.4238C14.8793 12.2285 14.0912 12.9408 13.2987 13.657C12.7647 14.1397 12.2287 14.6242 11.7054 15.1398C11.2496 15.5101 10.7764 16.2548 11.2867 16.7733C12.4621 17.5961 13.6559 18.399 14.8489 19.2015C15.2372 19.4626 15.6253 19.7236 16.0127 19.9853C16.6693 20.5095 17.6955 20.0855 17.8398 19.2663C17.904 18.8894 17.9685 18.5126 18.0329 18.1358C18.3891 16.0532 18.7454 13.97 19.0602 11.8806C19.103 11.5529 19.1515 11.2252 19.2 10.8973C19.3176 10.1026 19.4353 9.30698 19.4721 8.50802C19.3773 7.71071 18.4106 7.88602 17.8726 8.0653C15.1072 9.11754 12.3695 10.2478 9.64268 11.398C9.33379 11.5348 9.02066 11.6715 8.70543 11.8092Z\"/>
    </symbol>
    <symbol id=\"viber\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13C0 5.8203 5.8203 0 13 0ZM16.4635 11.3525C16.4003 10.8388 16.2424 10.4355 15.962 10.0782C15.5979 9.6182 15.1327 9.34273 14.4438 9.17932C13.9949 9.0704 13.8136 9.0829 13.6512 9.23121C13.5 9.37015 13.4704 9.6487 13.586 9.82908C13.6673 9.96 13.761 10.0069 14.0218 10.0581C14.3691 10.122 14.6091 10.2049 14.8274 10.3297C15.2907 10.5973 15.5065 11.016 15.5296 11.6938C15.5404 12.012 15.5679 12.1099 15.6791 12.2227C15.8851 12.4291 16.2518 12.3889 16.4073 12.142C16.4644 12.049 16.4731 12.0085 16.4791 11.7923C16.4831 11.6586 16.4773 11.4594 16.4635 11.3525ZM16.4696 8.20094C17.5713 9.09178 18.1868 10.3579 18.2783 11.9317C18.3168 12.5515 18.2657 12.7534 18.047 12.8684C17.8497 12.9749 17.6261 12.9399 17.4727 12.7794C17.3711 12.6751 17.3321 12.5324 17.3335 12.2797C17.338 11.5811 17.1771 10.801 16.9154 10.2596C16.6125 9.62951 16.1443 9.09332 15.5553 8.7013C15.0394 8.35699 14.3567 8.12442 13.6947 8.0665C13.2653 8.02893 13.112 7.95621 13.0295 7.75036C12.9785 7.62722 12.992 7.41435 13.0518 7.319C13.1084 7.23108 13.2354 7.13385 13.3252 7.10815C13.4204 7.08039 13.975 7.12892 14.2763 7.18879C15.0987 7.35618 15.8489 7.70038 16.4696 8.20094ZM20.2866 17.9922C20.2558 17.9022 20.184 17.7635 20.1327 17.6838C19.8094 17.1956 18.0724 15.8363 17.2052 15.3917C16.7101 15.1373 16.3432 15.0526 16.0712 15.1322C15.7787 15.2145 15.6247 15.3506 15.1347 15.9596C14.9372 16.2037 14.7345 16.4324 14.6806 16.4684C14.5471 16.5609 14.2855 16.6354 14.1007 16.6354C13.6722 16.6328 12.8948 16.3553 12.297 15.9904C11.8326 15.7078 11.2374 15.2016 10.7807 14.7005C10.2419 14.1121 9.87503 13.593 9.58507 13.0072C9.2105 12.2543 9.11557 11.7943 9.27205 11.4577C9.31055 11.3729 9.36187 11.283 9.38493 11.2547C9.40804 11.229 9.64923 11.0311 9.91603 10.8153C10.4395 10.399 10.5241 10.304 10.6216 10.0187C10.7448 9.65639 10.7114 9.28637 10.5216 8.9138C10.3753 8.63113 9.99302 8.01443 9.71594 7.61616C9.34904 7.09198 8.43564 5.97164 8.25345 5.81999C7.92505 5.55278 7.50431 5.5065 7.03987 5.6864C6.54987 5.87656 5.63132 6.61659 5.23875 7.13309C4.88468 7.60074 4.74875 7.9322 4.7282 8.36904C4.71025 8.72877 4.74103 8.87781 4.9309 9.33778C6.41644 12.9455 8.63318 15.826 11.6787 18.1129C13.2694 19.3078 14.9192 20.2174 16.6305 20.8393C17.6285 21.2016 18.0622 21.2196 18.5727 20.9215C18.7882 20.793 19.3219 20.2457 19.6195 19.8474C20.1122 19.1844 20.2943 18.8787 20.3456 18.6346C20.3816 18.4675 20.3533 18.1772 20.2866 17.9922ZM19.6306 9.85862C19.9432 10.6727 20.093 11.4029 20.1259 12.2931C20.1311 12.4689 20.1287 12.7911 20.1173 13.0094C20.0936 13.4278 20.0709 13.5109 19.9504 13.6216C19.7568 13.8033 19.3794 13.76 19.2363 13.541C19.1616 13.4236 19.1511 13.3376 19.1656 12.8487C19.2071 11.4028 18.9146 10.2706 18.2101 9.13853C17.3683 7.78032 16.1091 6.86537 14.4716 6.41775C14.054 6.30381 13.7021 6.23437 13.1548 6.16069C12.7983 6.11403 12.7202 6.0943 12.6322 6.04014C12.3664 5.86989 12.3629 5.4388 12.6279 5.26596C12.7646 5.17472 12.8654 5.17064 13.3111 5.22772C14.6181 5.39105 15.7843 5.77939 16.7426 6.36623C17.4294 6.78742 17.8625 7.1658 18.4201 7.82849C19.0098 8.53527 19.3221 9.05783 19.6306 9.85862Z\"/>
    </symbol>
    <symbol id=\"whatsapp\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 13C0 20.1797 5.8203 26 13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13ZM21.1587 12.5025C21.157 16.7636 17.6906 20.2309 13.4285 20.2326H13.4253C12.1316 20.2322 10.8603 19.9076 9.73127 19.2917L5.63337 20.3667L6.73003 16.361C6.05356 15.1886 5.6976 13.8588 5.69818 12.4964C5.69987 8.23424 9.16764 4.76666 13.4285 4.76666C15.4964 4.76755 17.4373 5.57259 18.8967 7.03376C20.3562 8.49485 21.1595 10.437 21.1587 12.5025Z\"/>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.48946 18.5301L9.92121 17.8922L10.1558 18.0315C11.1423 18.6169 12.2731 18.9266 13.426 18.927H13.4286C16.9699 18.927 19.8522 16.0447 19.8536 12.502C19.8542 10.7852 19.1866 9.17095 17.9735 7.95648C16.7605 6.74201 15.1473 6.07286 13.4311 6.07227C9.88712 6.07227 7.00482 8.9543 7.00342 12.4968C7.00292 13.7108 7.34261 14.8931 7.98576 15.9161L8.13853 16.1592L7.48946 18.5301ZM17.0585 14.1667C17.1932 14.2318 17.2842 14.2758 17.323 14.3406C17.3713 14.4212 17.3713 14.8079 17.2104 15.2591C17.0494 15.7103 16.2777 16.1221 15.9066 16.1775C15.5738 16.2273 15.1527 16.248 14.69 16.101C14.4095 16.012 14.0498 15.8931 13.5889 15.6941C11.7782 14.9122 10.5545 13.1572 10.3232 12.8255C10.307 12.8023 10.2957 12.786 10.2893 12.7776L10.2878 12.7755C10.1856 12.6391 9.50065 11.7253 9.50065 10.7795C9.50065 9.88981 9.93769 9.42347 10.1389 9.20882C10.1526 9.19411 10.1653 9.18058 10.1767 9.16818C10.3537 8.97481 10.563 8.92647 10.6917 8.92647C10.8205 8.92647 10.9494 8.92766 11.0619 8.93331C11.0758 8.93401 11.0903 8.93392 11.1052 8.93383C11.2177 8.93317 11.3581 8.93235 11.4965 9.26487C11.5498 9.39284 11.6277 9.58257 11.7099 9.78266C11.8761 10.1873 12.0597 10.6344 12.092 10.699C12.1403 10.7957 12.1725 10.9085 12.1081 11.0375C12.0985 11.0568 12.0895 11.075 12.081 11.0925C12.0326 11.1912 11.9971 11.2638 11.915 11.3596C11.8827 11.3973 11.8494 11.4379 11.816 11.4786C11.7496 11.5595 11.6831 11.6404 11.6253 11.698C11.5286 11.7944 11.4279 11.8989 11.5406 12.0922C11.6532 12.2856 12.0409 12.9181 12.6151 13.4303C13.2323 13.9808 13.7688 14.2135 14.0407 14.3315C14.0938 14.3545 14.1368 14.3732 14.1684 14.389C14.3615 14.4857 14.4741 14.4695 14.5868 14.3406C14.6995 14.2117 15.0697 13.7766 15.1984 13.5833C15.3271 13.39 15.456 13.4222 15.633 13.4866C15.8101 13.5511 16.7597 14.0183 16.9528 14.115C16.9905 14.1339 17.0258 14.1509 17.0585 14.1667Z\"/>
    </symbol>
    <symbol id=\"arrow\" viewBox=\"0 0 25 22\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.5625 12.5715H20.1016L14.425 19.423C13.8719 20.0893 13.9625 21.0809 14.625 21.6356C15.2891 22.1919 16.2734 22.1007 16.8266 21.4344L24.6391 12.0058C24.7 11.9319 24.7297 11.8455 24.775 11.7638C24.8125 11.6978 24.8578 11.6412 24.8859 11.5689C24.9562 11.3882 24.9984 11.1981 24.9984 11.0064C24.9984 11.0048 25 11.0016 25 11.0001C25 10.9985 24.9984 10.9954 24.9984 10.9938C24.9984 10.8021 24.9562 10.6119 24.8859 10.4312C24.8578 10.3589 24.8125 10.3024 24.775 10.2364C24.7297 10.1546 24.7 10.0682 24.6391 9.99435L16.8266 0.565718C16.5156 0.193287 16.0719 0 15.625 0C15.2719 0 14.9172 0.119429 14.625 0.364574C13.9625 0.919292 13.8719 1.91087 14.425 2.57716L20.1016 9.42863H1.5625C0.7 9.42863 0 10.1326 0 11.0001C0 11.8675 0.7 12.5715 1.5625 12.5715Z\"/>
    </symbol>
    <symbol id=\"bottomarrow\" viewBox=\"0 0 28 14\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0001 14C13.5441 14 13.0901 13.846 12.7201 13.536L0.719832 3.53525C-0.128184 2.82919 -0.244186 1.5671 0.463827 0.719043C1.16984 -0.129018 2.42986 -0.243027 3.27988 0.463024L14.0221 9.41567L24.7463 0.785048C25.6063 0.0929976 26.8663 0.229007 27.5583 1.08907C28.2503 1.94913 28.1143 3.20722 27.2543 3.90127L15.2541 13.558C14.8881 13.852 14.4441 14 14.0001 14Z\"/>
    </symbol>
    <symbol id=\"facebook\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13ZM14.355 20.6437V13.571H16.3074L16.5661 11.1337H14.355L14.3583 9.91386C14.3583 9.27818 14.4187 8.93756 15.3317 8.93756H16.5523V6.5H14.5996C12.2542 6.5 11.4287 7.68235 11.4287 9.67068V11.134H9.96667V13.5713H11.4287V20.6437H14.355Z\"/>
    </symbol>
</svg>

";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
<div class=\"projects\">
    <div class=\"container\">
        <nav class=\"project__nav\">
            <a href=\"\" class=\"projects__links\" data-filter=\"internetshop\">Интернет магазин</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"web\">Web решения</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"mobile\">Mobile</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"seo\">SEO</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"smm\">SMM</a>
        </nav>

        <!--        Internetshop-->

        <div class=\"internetshop\" id=\"internetshop\" data-category=\"internetshop\">
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        Web-->

        <div class=\"internetshop\" id=\"web\" data-category=\"web\">
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 166
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        Mobile-->

        <div class=\"internetshop\" id=\"mobile\" data-category=\"mobile\">
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 237
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 252
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        SEO-->

        <div class=\"internetshop\" id=\"seo\" data-category=\"seo\">
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 277
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 292
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 323
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 327
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 334
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        SMM-->

        <div class=\"internetshop\" id=\"smm\" data-category=\"smm\">
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 352
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 356
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 363
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 367
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"";
        // line 380
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 387
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 391
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 398
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"";
        // line 402
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pizzaapp");
        echo "\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"";
        // line 409
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/works/pizza.png");
        echo "\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "W:\\domains\\codart/themes/codarttheme/pages/projects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 409,  644 => 402,  637 => 398,  627 => 391,  620 => 387,  610 => 380,  601 => 374,  591 => 367,  584 => 363,  574 => 356,  567 => 352,  557 => 345,  543 => 334,  533 => 327,  526 => 323,  516 => 316,  509 => 312,  499 => 305,  490 => 299,  480 => 292,  473 => 288,  463 => 281,  456 => 277,  446 => 270,  432 => 259,  422 => 252,  415 => 248,  405 => 241,  398 => 237,  388 => 230,  379 => 224,  369 => 217,  362 => 213,  352 => 206,  345 => 202,  335 => 195,  321 => 184,  311 => 177,  304 => 173,  294 => 166,  287 => 162,  277 => 155,  268 => 149,  258 => 142,  251 => 138,  241 => 131,  234 => 127,  224 => 120,  210 => 109,  200 => 102,  193 => 98,  183 => 91,  176 => 87,  166 => 80,  157 => 74,  147 => 67,  140 => 63,  130 => 56,  123 => 52,  113 => 45,  96 => 30,  92 => 29,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--    Svg-->
<svg display=\"none\">
    <symbol id=\"instagram\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0ZM10.1418 6.10858C10.8813 6.07492 11.1176 6.06669 13.0006 6.06669H12.9985C14.8821 6.06669 15.1175 6.07492 15.8571 6.10858C16.5952 6.14238 17.0993 6.25924 17.5413 6.43069C17.9978 6.60764 18.3834 6.84453 18.7691 7.2302C19.1548 7.61558 19.3917 8.00241 19.5693 8.45843C19.7398 8.89927 19.8568 9.4031 19.8914 10.1412C19.9247 10.8808 19.9333 11.1171 19.9333 13.0001C19.9333 14.8831 19.9247 15.1188 19.8914 15.8584C19.8568 16.5962 19.7398 17.1002 19.5693 17.5412C19.3917 17.9971 19.1548 18.3839 18.7691 18.7693C18.3839 19.1549 17.9976 19.3924 17.5417 19.5695C17.1006 19.741 16.5962 19.8578 15.8581 19.8916C15.1185 19.9253 14.8829 19.9335 12.9998 19.9335C11.1169 19.9335 10.8808 19.9253 10.1412 19.8916C9.40322 19.8578 8.89924 19.741 8.45811 19.5695C8.00238 19.3924 7.61555 19.1549 7.23032 18.7693C6.84479 18.3839 6.6079 17.9971 6.43066 17.541C6.25935 17.1002 6.14249 16.5964 6.10855 15.8582C6.07504 15.1187 6.06666 14.8831 6.06666 13.0001C6.06666 11.1171 6.07533 10.8806 6.1084 10.1411C6.14163 9.40325 6.25863 8.89927 6.43052 8.45828C6.60819 8.00241 6.84508 7.61558 7.23075 7.2302C7.61613 6.84468 8.00296 6.60778 8.45897 6.43069C8.89982 6.25924 9.40365 6.14238 10.1418 6.10858Z\"/>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M12.3784 7.31619C12.4991 7.316 12.6291 7.31606 12.7693 7.31612L13.0004 7.31619C14.8516 7.31619 15.071 7.32283 15.802 7.35605C16.478 7.38697 16.8449 7.49992 17.0893 7.59482C17.4129 7.72049 17.6436 7.87071 17.8861 8.11338C18.1288 8.35605 18.279 8.58717 18.4049 8.91073C18.4998 9.15484 18.6129 9.52173 18.6437 10.1977C18.6769 10.9286 18.6842 11.1482 18.6842 12.9985C18.6842 14.8489 18.6769 15.0685 18.6437 15.7994C18.6128 16.4754 18.4998 16.8423 18.4049 17.0864C18.2793 17.4099 18.1288 17.6403 17.8861 17.8828C17.6434 18.1255 17.413 18.2757 17.0893 18.4014C16.8452 18.4967 16.478 18.6094 15.802 18.6403C15.0711 18.6735 14.8516 18.6808 13.0004 18.6808C11.149 18.6808 10.9296 18.6735 10.1987 18.6403C9.52267 18.6091 9.15578 18.4962 8.91123 18.4013C8.58767 18.2756 8.35656 18.1254 8.11389 17.8827C7.87122 17.64 7.721 17.4095 7.59504 17.0858C7.50014 16.8417 7.38704 16.4748 7.35627 15.7988C7.32305 15.0679 7.31641 14.8483 7.31641 12.9968C7.31641 11.1453 7.32305 10.9269 7.35627 10.196C7.38718 9.52 7.50014 9.15311 7.59504 8.9087C7.72071 8.58514 7.87122 8.35403 8.11389 8.11136C8.35656 7.86869 8.58767 7.71847 8.91123 7.59251C9.15564 7.49718 9.52267 7.38451 10.1987 7.35345C10.8383 7.32456 11.0862 7.3159 12.3784 7.31445V7.31619ZM16.7013 8.46742C16.242 8.46742 15.8693 8.83965 15.8693 9.29914C15.8693 9.75847 16.242 10.1311 16.7013 10.1311C17.1607 10.1311 17.5333 9.75847 17.5333 9.29914C17.5333 8.8398 17.1607 8.46713 16.7013 8.46713V8.46742ZM9.43978 13.0001C9.43978 11.0338 11.0339 9.43962 13.0002 9.43955C14.9666 9.43955 16.5604 11.0338 16.5604 13.0001C16.5604 14.9665 14.9667 16.56 13.0004 16.56C11.034 16.56 9.43978 14.9665 9.43978 13.0001Z\"/>
        <path d=\"M13.0006 10.689C14.2769 10.689 15.3117 11.7236 15.3117 13.0001C15.3117 14.2764 14.2769 15.3112 13.0006 15.3112C11.7241 15.3112 10.6895 14.2764 10.6895 13.0001C10.6895 11.7236 11.7241 10.689 13.0006 10.689Z\"/>
    </symbol>
    <symbol id=\"telegram\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13ZM8.70543 11.8092C7.40316 12.3778 6.0651 12.962 4.84157 13.6359L4.84148 13.636C4.20259 14.1038 5.05181 14.4346 5.84842 14.745C5.97507 14.7943 6.10039 14.8431 6.21818 14.8919C6.31621 14.922 6.41589 14.9538 6.51691 14.986C7.40289 15.2683 8.39083 15.583 9.25097 15.1095C10.6639 14.2979 11.9974 13.3595 13.3298 12.4218C13.7663 12.1146 14.2028 11.8074 14.6419 11.5048C14.6624 11.4917 14.6856 11.4766 14.711 11.4602C15.0851 11.2177 15.9263 10.6724 15.6151 11.4238C14.8793 12.2285 14.0912 12.9408 13.2987 13.657C12.7647 14.1397 12.2287 14.6242 11.7054 15.1398C11.2496 15.5101 10.7764 16.2548 11.2867 16.7733C12.4621 17.5961 13.6559 18.399 14.8489 19.2015C15.2372 19.4626 15.6253 19.7236 16.0127 19.9853C16.6693 20.5095 17.6955 20.0855 17.8398 19.2663C17.904 18.8894 17.9685 18.5126 18.0329 18.1358C18.3891 16.0532 18.7454 13.97 19.0602 11.8806C19.103 11.5529 19.1515 11.2252 19.2 10.8973C19.3176 10.1026 19.4353 9.30698 19.4721 8.50802C19.3773 7.71071 18.4106 7.88602 17.8726 8.0653C15.1072 9.11754 12.3695 10.2478 9.64268 11.398C9.33379 11.5348 9.02066 11.6715 8.70543 11.8092Z\"/>
    </symbol>
    <symbol id=\"viber\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13C0 5.8203 5.8203 0 13 0ZM16.4635 11.3525C16.4003 10.8388 16.2424 10.4355 15.962 10.0782C15.5979 9.6182 15.1327 9.34273 14.4438 9.17932C13.9949 9.0704 13.8136 9.0829 13.6512 9.23121C13.5 9.37015 13.4704 9.6487 13.586 9.82908C13.6673 9.96 13.761 10.0069 14.0218 10.0581C14.3691 10.122 14.6091 10.2049 14.8274 10.3297C15.2907 10.5973 15.5065 11.016 15.5296 11.6938C15.5404 12.012 15.5679 12.1099 15.6791 12.2227C15.8851 12.4291 16.2518 12.3889 16.4073 12.142C16.4644 12.049 16.4731 12.0085 16.4791 11.7923C16.4831 11.6586 16.4773 11.4594 16.4635 11.3525ZM16.4696 8.20094C17.5713 9.09178 18.1868 10.3579 18.2783 11.9317C18.3168 12.5515 18.2657 12.7534 18.047 12.8684C17.8497 12.9749 17.6261 12.9399 17.4727 12.7794C17.3711 12.6751 17.3321 12.5324 17.3335 12.2797C17.338 11.5811 17.1771 10.801 16.9154 10.2596C16.6125 9.62951 16.1443 9.09332 15.5553 8.7013C15.0394 8.35699 14.3567 8.12442 13.6947 8.0665C13.2653 8.02893 13.112 7.95621 13.0295 7.75036C12.9785 7.62722 12.992 7.41435 13.0518 7.319C13.1084 7.23108 13.2354 7.13385 13.3252 7.10815C13.4204 7.08039 13.975 7.12892 14.2763 7.18879C15.0987 7.35618 15.8489 7.70038 16.4696 8.20094ZM20.2866 17.9922C20.2558 17.9022 20.184 17.7635 20.1327 17.6838C19.8094 17.1956 18.0724 15.8363 17.2052 15.3917C16.7101 15.1373 16.3432 15.0526 16.0712 15.1322C15.7787 15.2145 15.6247 15.3506 15.1347 15.9596C14.9372 16.2037 14.7345 16.4324 14.6806 16.4684C14.5471 16.5609 14.2855 16.6354 14.1007 16.6354C13.6722 16.6328 12.8948 16.3553 12.297 15.9904C11.8326 15.7078 11.2374 15.2016 10.7807 14.7005C10.2419 14.1121 9.87503 13.593 9.58507 13.0072C9.2105 12.2543 9.11557 11.7943 9.27205 11.4577C9.31055 11.3729 9.36187 11.283 9.38493 11.2547C9.40804 11.229 9.64923 11.0311 9.91603 10.8153C10.4395 10.399 10.5241 10.304 10.6216 10.0187C10.7448 9.65639 10.7114 9.28637 10.5216 8.9138C10.3753 8.63113 9.99302 8.01443 9.71594 7.61616C9.34904 7.09198 8.43564 5.97164 8.25345 5.81999C7.92505 5.55278 7.50431 5.5065 7.03987 5.6864C6.54987 5.87656 5.63132 6.61659 5.23875 7.13309C4.88468 7.60074 4.74875 7.9322 4.7282 8.36904C4.71025 8.72877 4.74103 8.87781 4.9309 9.33778C6.41644 12.9455 8.63318 15.826 11.6787 18.1129C13.2694 19.3078 14.9192 20.2174 16.6305 20.8393C17.6285 21.2016 18.0622 21.2196 18.5727 20.9215C18.7882 20.793 19.3219 20.2457 19.6195 19.8474C20.1122 19.1844 20.2943 18.8787 20.3456 18.6346C20.3816 18.4675 20.3533 18.1772 20.2866 17.9922ZM19.6306 9.85862C19.9432 10.6727 20.093 11.4029 20.1259 12.2931C20.1311 12.4689 20.1287 12.7911 20.1173 13.0094C20.0936 13.4278 20.0709 13.5109 19.9504 13.6216C19.7568 13.8033 19.3794 13.76 19.2363 13.541C19.1616 13.4236 19.1511 13.3376 19.1656 12.8487C19.2071 11.4028 18.9146 10.2706 18.2101 9.13853C17.3683 7.78032 16.1091 6.86537 14.4716 6.41775C14.054 6.30381 13.7021 6.23437 13.1548 6.16069C12.7983 6.11403 12.7202 6.0943 12.6322 6.04014C12.3664 5.86989 12.3629 5.4388 12.6279 5.26596C12.7646 5.17472 12.8654 5.17064 13.3111 5.22772C14.6181 5.39105 15.7843 5.77939 16.7426 6.36623C17.4294 6.78742 17.8625 7.1658 18.4201 7.82849C19.0098 8.53527 19.3221 9.05783 19.6306 9.85862Z\"/>
    </symbol>
    <symbol id=\"whatsapp\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 13C0 20.1797 5.8203 26 13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13ZM21.1587 12.5025C21.157 16.7636 17.6906 20.2309 13.4285 20.2326H13.4253C12.1316 20.2322 10.8603 19.9076 9.73127 19.2917L5.63337 20.3667L6.73003 16.361C6.05356 15.1886 5.6976 13.8588 5.69818 12.4964C5.69987 8.23424 9.16764 4.76666 13.4285 4.76666C15.4964 4.76755 17.4373 5.57259 18.8967 7.03376C20.3562 8.49485 21.1595 10.437 21.1587 12.5025Z\"/>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.48946 18.5301L9.92121 17.8922L10.1558 18.0315C11.1423 18.6169 12.2731 18.9266 13.426 18.927H13.4286C16.9699 18.927 19.8522 16.0447 19.8536 12.502C19.8542 10.7852 19.1866 9.17095 17.9735 7.95648C16.7605 6.74201 15.1473 6.07286 13.4311 6.07227C9.88712 6.07227 7.00482 8.9543 7.00342 12.4968C7.00292 13.7108 7.34261 14.8931 7.98576 15.9161L8.13853 16.1592L7.48946 18.5301ZM17.0585 14.1667C17.1932 14.2318 17.2842 14.2758 17.323 14.3406C17.3713 14.4212 17.3713 14.8079 17.2104 15.2591C17.0494 15.7103 16.2777 16.1221 15.9066 16.1775C15.5738 16.2273 15.1527 16.248 14.69 16.101C14.4095 16.012 14.0498 15.8931 13.5889 15.6941C11.7782 14.9122 10.5545 13.1572 10.3232 12.8255C10.307 12.8023 10.2957 12.786 10.2893 12.7776L10.2878 12.7755C10.1856 12.6391 9.50065 11.7253 9.50065 10.7795C9.50065 9.88981 9.93769 9.42347 10.1389 9.20882C10.1526 9.19411 10.1653 9.18058 10.1767 9.16818C10.3537 8.97481 10.563 8.92647 10.6917 8.92647C10.8205 8.92647 10.9494 8.92766 11.0619 8.93331C11.0758 8.93401 11.0903 8.93392 11.1052 8.93383C11.2177 8.93317 11.3581 8.93235 11.4965 9.26487C11.5498 9.39284 11.6277 9.58257 11.7099 9.78266C11.8761 10.1873 12.0597 10.6344 12.092 10.699C12.1403 10.7957 12.1725 10.9085 12.1081 11.0375C12.0985 11.0568 12.0895 11.075 12.081 11.0925C12.0326 11.1912 11.9971 11.2638 11.915 11.3596C11.8827 11.3973 11.8494 11.4379 11.816 11.4786C11.7496 11.5595 11.6831 11.6404 11.6253 11.698C11.5286 11.7944 11.4279 11.8989 11.5406 12.0922C11.6532 12.2856 12.0409 12.9181 12.6151 13.4303C13.2323 13.9808 13.7688 14.2135 14.0407 14.3315C14.0938 14.3545 14.1368 14.3732 14.1684 14.389C14.3615 14.4857 14.4741 14.4695 14.5868 14.3406C14.6995 14.2117 15.0697 13.7766 15.1984 13.5833C15.3271 13.39 15.456 13.4222 15.633 13.4866C15.8101 13.5511 16.7597 14.0183 16.9528 14.115C16.9905 14.1339 17.0258 14.1509 17.0585 14.1667Z\"/>
    </symbol>
    <symbol id=\"arrow\" viewBox=\"0 0 25 22\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M1.5625 12.5715H20.1016L14.425 19.423C13.8719 20.0893 13.9625 21.0809 14.625 21.6356C15.2891 22.1919 16.2734 22.1007 16.8266 21.4344L24.6391 12.0058C24.7 11.9319 24.7297 11.8455 24.775 11.7638C24.8125 11.6978 24.8578 11.6412 24.8859 11.5689C24.9562 11.3882 24.9984 11.1981 24.9984 11.0064C24.9984 11.0048 25 11.0016 25 11.0001C25 10.9985 24.9984 10.9954 24.9984 10.9938C24.9984 10.8021 24.9562 10.6119 24.8859 10.4312C24.8578 10.3589 24.8125 10.3024 24.775 10.2364C24.7297 10.1546 24.7 10.0682 24.6391 9.99435L16.8266 0.565718C16.5156 0.193287 16.0719 0 15.625 0C15.2719 0 14.9172 0.119429 14.625 0.364574C13.9625 0.919292 13.8719 1.91087 14.425 2.57716L20.1016 9.42863H1.5625C0.7 9.42863 0 10.1326 0 11.0001C0 11.8675 0.7 12.5715 1.5625 12.5715Z\"/>
    </symbol>
    <symbol id=\"bottomarrow\" viewBox=\"0 0 28 14\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.0001 14C13.5441 14 13.0901 13.846 12.7201 13.536L0.719832 3.53525C-0.128184 2.82919 -0.244186 1.5671 0.463827 0.719043C1.16984 -0.129018 2.42986 -0.243027 3.27988 0.463024L14.0221 9.41567L24.7463 0.785048C25.6063 0.0929976 26.8663 0.229007 27.5583 1.08907C28.2503 1.94913 28.1143 3.20722 27.2543 3.90127L15.2541 13.558C14.8881 13.852 14.4441 14 14.0001 14Z\"/>
    </symbol>
    <symbol id=\"facebook\" viewBox=\"0 0 26 26\">
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 13C0 5.8203 5.8203 0 13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C5.8203 26 0 20.1797 0 13ZM14.355 20.6437V13.571H16.3074L16.5661 11.1337H14.355L14.3583 9.91386C14.3583 9.27818 14.4187 8.93756 15.3317 8.93756H16.5523V6.5H14.5996C12.2542 6.5 11.4287 7.68235 11.4287 9.67068V11.134H9.96667V13.5713H11.4287V20.6437H14.355Z\"/>
    </symbol>
</svg>

{% partial 'intro' %}

<div class=\"projects\">
    <div class=\"container\">
        <nav class=\"project__nav\">
            <a href=\"\" class=\"projects__links\" data-filter=\"internetshop\">Интернет магазин</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"web\">Web решения</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"mobile\">Mobile</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"seo\">SEO</a>
            <a href=\"\" class=\"projects__links\" data-filter=\"smm\">SMM</a>
        </nav>

        <!--        Internetshop-->

        <div class=\"internetshop\" id=\"internetshop\" data-category=\"internetshop\">
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">InetShop</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        Web-->

        <div class=\"internetshop\" id=\"web\" data-category=\"web\">
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Web</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        Mobile-->

        <div class=\"internetshop\" id=\"mobile\" data-category=\"mobile\">
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Mobile</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        SEO-->

        <div class=\"internetshop\" id=\"seo\" data-category=\"seo\">
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Seo</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--        SMM-->

        <div class=\"internetshop\" id=\"smm\" data-category=\"smm\">
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"internetshop__col\">
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
                <a href=\"{{ 'pizzaapp'|page }}\" class=\"works__link\">
                    <div class=\"internetshop__item\">
                        <div class=\"internetshop__item--content\">
                            <div class=\"internetshop__item--title\">Smm</div>
                            <div class=\"internetshop__item--mail\">pizzafamiglia.com.ua</div>
                        </div>
                        <div class=\"internetshop__item--image\">
                            <img src=\"{{ 'assets/images/works/pizza.png'|theme }}\" alt=\"\">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>", "W:\\domains\\codart/themes/codarttheme/pages/projects.htm", "");
    }
}