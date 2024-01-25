<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="contacts">
    <div class="contacts__list">
        <div class="contacts__item address">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "address",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/address.php"
                )
            );?>
        </div>
        <div class="contacts__item phone">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "phone",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/phone.php"
                )
            );?>
        </div>
        <div class="contacts__item email">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "email",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/email.php"
                )
            );?>
        </div>
    </div>
</div>
<div>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:48.47847987655889;s:10:\"yandex_lon\";d:135.06420335292722;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:135.0640236449232;s:3:\"LAT\";d:48.47881101730731;s:4:\"TEXT\";s:74:\"г. Хабаровск, ул. Дзержинского д.65, офис 814\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>