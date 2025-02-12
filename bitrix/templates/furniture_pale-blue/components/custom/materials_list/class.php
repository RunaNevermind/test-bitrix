<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\ElementTable;

class MaterialsListComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule("iblock")) {
            ShowError("Модуль инфоблоков не установлен");
            return;
        }

        $this->arResult["ITEMS"] = $this->getMaterials();
        $this->arResult["COUNT"] = count($this->arResult["ITEMS"]);
        
        $this->includeComponentTemplate();
    }

    private function getMaterials()
    {
        $materials = [];
        $iblockId = $this->arParams["IBLOCK_ID"];
        $limit = $this->arParams["LIMIT"] ?? 8;

        $res = ElementTable::getList([
            "filter" => ["IBLOCK_ID" => $iblockId, "ACTIVE" => "Y"],
            "select" => ["ID", "NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "IBLOCK_SECTION.NAME"],
            "limit" => $limit,
            "order" => ["SORT" => "ASC"],
        ]);

        while ($item = $res->fetch()) {
            $item["PREVIEW_PICTURE"] = [
                "SAFE_SRC" => CFile::GetPath($item["PREVIEW_PICTURE"])
            ];
            $materials[] = $item;
        }

        return $materials;
    }
}
?>
