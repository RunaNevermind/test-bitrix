<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

		<main class="page-main">
			<section class="support-intro">
				<div class="support-intro__content">
                <?php
$APPLICATION->IncludeComponent("bitrix:main.include", "breadcrumbs", Array(
	"AREA_FILE_SHOW" => "html",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "custom_block",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);
?>
                <?php
$APPLICATION->IncludeComponent("bitrix:main.include", "banner", Array(
	"AREA_FILE_SHOW" => "html",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "custom_block",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);
?>
                <?php
$APPLICATION->IncludeComponent("bitrix:main.include", "support", Array(
	"AREA_FILE_SHOW" => "html",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "custom_block",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);
?>

            </div>
        </section>
        <section class="actual-materials">
            <div class="actual-materials__content">
                <div class="actual-materials__top-row">
                    <div class="actual-materials__tabs-nav">
                        <ul class="actual-materials__tabs-nav-list">
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link active">
                                    все
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    первый запуск
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    установка драйверов
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    настройка по
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    wi-fi
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    подключение принтера
                                </a>
                            </li>
                            <li class="actual-materials__tabs-nav-list-item">
                                <a href="#" class="actual-materials__tabs-nav-link">
                                    сброс настроек
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-form">
                        <form action="/" method="POST" class="search-form__form">
                            <div class="search-form__form-wrapper">
                                <input type="search" name="q" class="search-form__form-input"
                                    placeholder="поиск по названию">
                                <button class="search-form__form-submit" type="submit">
                                    <svg width="14" height="14" aria-hidden="true">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <h2 class="actual-materials__heading">
                    актуальное
                </h2>
                <div class="actual-materials__tabs">
                    
                    <div class="actual-materials__tabs-item">
                                            <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "slider_materials",
                            array(
                                "IBLOCK_TYPE" => "articles",
                                "IBLOCK_ID" => "5", // Укажи ID инфоблока
                                "NEWS_COUNT" => "6",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "PROPERTY_CODE" => array("CATEGORY"),
                                "SET_TITLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "3600",
                            ),
                            false
                        );
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <?php
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"template1", 
	array(
        "IBLOCK_TYPE" => "articles",
        "IBLOCK_ID" => "5", // Укажи ID инфоблока
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "PROPERTY_CODE" => array("CATEGORY"),
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
	),
	false
);
?><?php
$APPLICATION->IncludeComponent("bitrix:main.include", "feedback", Array(
	"AREA_FILE_SHOW" => "html",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "custom_block",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);
?>
    </main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>