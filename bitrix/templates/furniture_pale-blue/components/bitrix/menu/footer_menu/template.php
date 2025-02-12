<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<ul class="page-footer__nav-submenu-list">
    <?php foreach ($arResult as $arItem): ?>
        <li class="page-footer__nav-submenu-list-item <?php if ($arItem["SELECTED"]): ?>active<?php endif; ?>">
            <a href="<?= $arItem["LINK"] ?>" class="page-footer__nav-submenu-link">
                <?= $arItem["TEXT"] ?>
            </a>
            <?php if ($arItem["IS_PARENT"]): ?>
                <ul class="page-footer__nav-submenu-list">
                    <?php foreach ($arResult as $subItem): ?>
                        <?php if ($subItem["DEPTH_LEVEL"] == 2): ?>
                            <li class="page-footer__nav-submenu-list-item <?php if ($subItem["SELECTED"]): ?>active<?php endif; ?>">
                                <a href="<?= $subItem["LINK"] ?>" class="page-footer__nav-submenu-link">
                                    <?= $subItem["TEXT"] ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
