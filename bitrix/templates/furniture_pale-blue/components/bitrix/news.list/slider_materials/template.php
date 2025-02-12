<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="actual-materials__slider">
    <div class="actual-materials__slider-wrapper">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <div class="swiper-slide">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="material-card">
                            <div class="material-card__image-container">
                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SAFE_SRC"] ?>" alt="<?= $arItem["NAME"] ?>" class="material-card__image">
                            </div>
                            <div class="material-card__content">
                                <div class="material-card__category">
                                    <?= $arItem["PROPERTIES"]["CATEGORY"]["VALUE"] ?>
                                </div>
                                <h3 class="material-card__title">
                                    <?= $arItem["NAME"] ?>
                                </h3>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="actual-materials__arrows">
        <button class="actual-materials__arrow actual-materials__arrow--prev">
            <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#slider-arrow-left"></use>
            </svg>
        </button>
        <button class="actual-materials__arrow actual-materials__arrow--next">
            <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#slider-arrow-right"></use>
            </svg>
        </button>
    </div>
</div>
