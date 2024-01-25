<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?><?$APPLICATION->IncludeComponent(
	"liteplus:documents",
	"",
	Array(
		"IBLOCK_ID" => "5"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>