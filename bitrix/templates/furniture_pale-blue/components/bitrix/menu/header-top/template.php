<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<? if (!empty($arResult)): ?>
	<ul class="osio-header__nav-list">

		<? $previousLevel = 0; ?>
		<? foreach ($arResult as $arItem): ?>

			<? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
				<?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
			<? endif ?>

			<li class="osio-header__nav-list-item<? if ($arItem["SELECTED"]): ?> item-selected<? endif ?>">
				<a href="<? if ($arItem["PERMISSION"] > "D"): ?><?= $arItem["LINK"] ?><? else: ?>#<? endif ?>"
					class="osio-header__nav-link<? if ($arItem["IS_PARENT"]): ?> parent<? endif ?><? if ($arItem["PERMISSION"] <= "D"): ?> denied<? endif ?>"
					title="<? if ($arItem["PERMISSION"] <= "D"): ?><?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?><? endif ?>">
					<?= $arItem["TEXT"] ?>
				</a>

				<? if ($arItem["IS_PARENT"]): ?>
					<ul class="osio-header__nav-list">
					<? endif ?>
			</li>

			<? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
		<? endforeach ?>

		<? if ($previousLevel > 1): ?>
			<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
		<? endif ?>

	</ul>
<? endif ?>