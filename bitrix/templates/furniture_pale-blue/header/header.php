<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<? $APPLICATION->ShowHead(); ?>
	<!-- <link href="<?= SITE_TEMPLATE_PATH ?>/common.css" type="text/css" rel="stylesheet" /> -->
	<link href="<?= SITE_TEMPLATE_PATH ?>/styles.css" type="text/css" rel="stylesheet" />
	<link href="<?= SITE_TEMPLATE_PATH ?>/main.css" type="text/css" rel="stylesheet" />
	<script src="<?= SITE_TEMPLATE_PATH ?>/main.js"></script>

	<!--[if lte IE 6]>
	<style type="text/css">
		
		#banner-overlay { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= SITE_TEMPLATE_PATH ?>images/overlay.png', sizingMethod = 'crop'); 
		}
		
		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= SITE_TEMPLATE_PATH ?>images/product-overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->

	<title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body>
	<div id="page-wrapper">
		<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
		<div class="header-wrapper header-wrapper--dark">
			<div class="osio-header">
				<div class="osio-header__content">
					<a href="<?= SITE_DIR ?>" title="<?= GetMessage('CFT_MAIN') ?>" class="osio-header__logo">
						<img src="/include/logo.svg" alt="" class="osio-header__logo-image">
					</a>
					<div class="osio-header__wrapper">
						<div class="osio-header__scroll-wrapper">
							<div class="osio-header__wrapper-inner">
								<div class="osio-header__top">
									<nav class="osio-header__nav">
										<? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header-top", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "header-top",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
); ?>
									</nav>
									<a href="tel:+78002011178" class="osio-header__phone">8 800 201 11 78</a>
									<a href="#" class="osio-header__lang">
										EN
									</a>
									<div class="osio-header__social">
										<ul class="osio-header__social-list">
											<li class="osio-header__social-list-item">
												<a href="#" class="osio-header__social-link">
													<svg width="14" height="14" aria-hidden="true">
														<use xlink:href="#youtube"></use>
													</svg>
												</a>
											</li>
											<li class="osio-header__social-list-item">
												<a href="#" class="osio-header__social-link">
													<svg width="14" height="14" aria-hidden="true">
														<use xlink:href="#vk"></use>
													</svg>
												</a>
											</li>
										</ul>
									</div>
									<a href="#" class="osio-header__buy">
										Купить
									</a>
								</div>
								<div class="osio-header__bottom">
									<div class="osio-header__categories">
										<ul class="osio-header__categories-list">
											<li class="osio-header__categories-list-item">
												<a href="#" class="osio-header__categories-link">
													Ноутбуки
												</a>
												<div class="osio-header__categories-dropdown">
													<div class="osio-header__categories-dropdown-inner">
														<button class="osio-header__categories-dropdown-back"
															type="button">
															<svg width="14" height="14" aria-hidden="true">
																<use xlink:href="#back"></use>
															</svg>
															<span class="osio-header__categories-dropdown-back-text">
																Ноутбуки
															</span>

														</button>
														<div class="osio-header__categories-subcategories-nav">
															<a href="#"
																class="osio-header__categories-subcategories-nav-link">
																Все Ноутбуки
															</a>
															<a href="#"
																class="osio-header__categories-subcategories-nav-link">
																baseline
															</a>
															<a href="#"
																class="osio-header__categories-subcategories-nav-link active">
																FocusLine
															</a>
														</div>
														<div class="osio-header__categories-subcategories">


															<div class="osio-header__categories-subcategory">
																<button class="osio-header__categories-subcategory-btn">
																	Все Ноутбуки
																	<svg width="14" height="14" aria-hidden="true">
																		<use xlink:href="#plus"></use>
																	</svg>
																</button>
																<div
																	class="osio-header__categories-subcategory-content">
																	<div
																		class="osio-header__categories-subcategory-content-inner">
																		<ul
																			class="osio-header__categories-subcategory-list">
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																		</ul>
																		<div
																			class="osio-header__categories-subcategory-links">
																			<a href="#"
																				class="osio-header__categories-subcategory-link">
																				Подробнее о серии
																			</a>

																		</div>
																	</div>
																</div>
															</div>
															<div class="osio-header__categories-subcategory">
																<button class="osio-header__categories-subcategory-btn">
																	baseline
																	<svg width="14" height="14" aria-hidden="true">
																		<use xlink:href="#plus"></use>
																	</svg>
																</button>
																<div
																	class="osio-header__categories-subcategory-content">
																	<div
																		class="osio-header__categories-subcategory-content-inner">
																		<ul
																			class="osio-header__categories-subcategory-list">
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																		</ul>
																		<div
																			class="osio-header__categories-subcategory-links">
																			<a href="#"
																				class="osio-header__categories-subcategory-link">
																				Подробнее о серии
																			</a>
																			<a href="#"
																				class="osio-header__categories-subcategory-link">
																				Все ноутбуки
																			</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="osio-header__categories-subcategory active">
																<button class="osio-header__categories-subcategory-btn">
																	focusline
																	<svg width="14" height="14" aria-hidden="true">
																		<use xlink:href="#plus"></use>
																	</svg>
																</button>
																<div
																	class="osio-header__categories-subcategory-content">
																	<div
																		class="osio-header__categories-subcategory-content-inner">
																		<ul
																			class="osio-header__categories-subcategory-list">
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																			<li
																				class="osio-header__categories-subcategory-list-item">
																				<a href="#"
																					class="osio-header__categories-subcategory-card">
																					<h3
																						class="osio-header__categories-subcategory-card-title">
																						FocusLine 140i-001
																					</h3>
																					<div
																						class="osio-header__categories-subcategory-card-image-container">
																						<img src="/bitrix/templates/furniture_pale-blue/images/subcategory.webp"
																							alt=""
																							class="osio-header__categories-subcategory-card-image">
																					</div>
																					<div
																						class="osio-header__categories-subcategory-card-specs">
																						15.6”<br>
																						AMD Ryzen 5 5560u<br>
																						16GB · SSD 512GB
																					</div>
																				</a>
																			</li>
																		</ul>
																		<div
																			class="osio-header__categories-subcategory-links">
																			<a href="#"
																				class="osio-header__categories-subcategory-link">
																				Подробнее о серии
																			</a>
																			<a href="#"
																				class="osio-header__categories-subcategory-link">
																				Все ноутбуки
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="osio-header__categories-list-item">
												<a href="#" class="osio-header__categories-link">
													Моноблоки
												</a>
											</li>
											<li class="osio-header__categories-list-item">
												<a href="#" class="osio-header__categories-link">
													Системные блоки
												</a>
											</li>
											<li class="osio-header__categories-list-item">
												<a href="#" class="osio-header__categories-link">
													Мониторы
												</a>
											</li>
										</ul>
									</div>
									<div class="osio-header__search-wrapper">
										<a href="#" class="osio-header__search">
											<svg width="14" height="14" aria-hidden="true">
												<use xlink:href="#search"></use>
											</svg>
										</a>
										<div class="osio-header__search-dropdown">
											<div class="osio-header__search-dropdown-inner">
												<h3 class="osio-header__search-title">
													Поиск
												</h3>
												<form action="/" method="GET" class="osio-header__search-form">
													<input type="search" name="q" class="osio-header__search-input"
														placeholder="Поиск по сайту">
													<button class="osio-header__search-submit" type="submit">
														Найти
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="osio-header__mobile-search">
						<button class="osio-header__mobile-search-btn" type="button">
							<svg width="14" height="14" aria-hidden="true">
								<use xlink:href="#search"></use>
							</svg>
						</button>
						<div class="osio-header__mobile-search-dropdown">
							<div class="osio-header__mobile-search-dropdown-inner">
								<form action="/" method="GET" class="osio-header__mobile-search-dropdown-form">
									<input type="search" class="osio-header__mobile-search-dropdown-form-input"
										placeholder="Поиск">
								</form>
							</div>
						</div>
					</div>
					<button class="osio-header__burger">

					</button>
				</div>
			</div>
		</div>

