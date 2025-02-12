<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="page-footer">
    <div class="page-footer__content">
        <div class="page-footer__top">
            <h3 class="page-footer__top-heading">
                Вокруг тебя. <br>О тебе
            </h3>
            <ul class="page-footer__social-list">
                <li class="page-footer__social-list-item">
                    <a href="#" class="page-footer__social-link">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#youtube"></use>
                        </svg>
                    </a>
                </li>
                <li class="page-footer__social-list-item">
                    <a href="#" class="page-footer__social-link">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#vk"></use>
                        </svg>
                    </a>
                </li>
            </ul>
            <?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
                die(); ?>

            <nav class="page-footer__nav">
                <ul class="page-footer__nav-list">
                    <li class="page-footer__nav-list-item">
                        <a href="#" class="page-footer__nav-link">
                            Продукция
                        </a>
                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu",
                            array(
                                "ROOT_MENU_TYPE" => "footer_products",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "footer_submenu",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );
                        ?>
                    </li>
                    <li class="page-footer__nav-list-item">
                        <a href="#" class="page-footer__nav-link">
                            Бренд
                        </a>
                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu",
                            array(
                                "ROOT_MENU_TYPE" => "footer_brand",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "footer_submenu",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );
                        ?>
                    </li>
                    <li class="page-footer__nav-list-item">
                        <a href="#" class="page-footer__nav-link">
                            Сервисы
                        </a>
                        <?php
                        $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu", 
	array(
		"ROOT_MENU_TYPE" => "footer_services",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "footer_submenu",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footer_menu"
	),
	false
);
                        ?>
                    </li>
                </ul>
            </nav>

        </div>
        <a href="#" class="page-footer__logo">
            <img src="/bitrix/templates/furniture_pale-blue/images/footer-logo.svg" alt=""
                class="page-footer__logo-image">
        </a>
        <div class="page-footer__bottom">
            <div class="page-footer__bottom-left">
                <div class="page-footer__copyright">
                    © 2025 ООО «OSIO»
                </div>
                <a href="#" class="page-footer__policy">
                    Политика конфиденциальности
                </a>
            </div>

            <div class="page-footer__bottom-right">
                <a href="#" class="page-footer__made-by">
                    <span class="page-footer__made-by-text">
                        Создание сайта<br> Mark Weber
                    </span>

                    <img src="/bitrix/templates/furniture_pale-blue/images/mw-logo.svg" alt=""
                        class="page-footer__made-by-logo">
                </a>
            </div>
            <picture>
                <source srcset="/bitrix/templates/furniture_pale-blue/images/footer-decor-mobile.svg"
                    media="(max-width: 640px)" />
                <img src="/bitrix/templates/furniture_pale-blue/images/footer-decor.svg" alt="MDN"
                    class="page-footer__decor" />
            </picture>
        </div>
    </div>
</footer>
</body>

</html>