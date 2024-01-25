<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "2",
        "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
        "CACHE_TIME" => "3600"
    )
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>