<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="all-materials">
    <div class="all-materials__content">
        <div class="all-materials__top-row">
            <h2 class="all-materials__heading">
                все материалы <span>(<?= $arResult["COUNT"] ?>)</span>
            </h2>
            <div class="search-form">
                <form action="/" method="POST" class="search-form__form">
                    <div class="search-form__form-wrapper">
                        <input type="search" name="q" class="search-form__form-input" placeholder="поиск по названию">
                        <button class="search-form__form-submit" type="submit">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#search"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <ul class="all-materials__list">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <li class="all-materials__list-item">
                    <a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="material-card">
                        <div class="material-card__image-container">
                            <img src="<?= $item["PREVIEW_PICTURE"]["SAFE_SRC"] ?>" alt="<?= $item["NAME"] ?>" class="material-card__image">
                        </div>
                        <div class="material-card__content">
                            <div class="material-card__category">
                                <?= $item["IBLOCK_SECTION.NAME"] ?>
                            </div>
                            <h3 class="material-card__title">
                                <?= $item["NAME"] ?>
                            </h3>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="#" class="all-materials__show-more">показать еще</a>
    </div>
</section>
