<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CDatabase $DB */
$this->setFrameMode(true);?>
<div class="documents">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="documents__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="documents__item-body">
                <div class="documents__item-left">
                    <h4 class="documents__item-title"><?= $arItem['NAME'] ?></h4>
                    <? if($arItem['PREVIEW_TEXT']): ?><p class="documents__item-description"><?= $arItem['PREVIEW_TEXT'] ?></p><? endif; ?>
                    <div class="documents__item-info">Название документа: <span><?= $arItem['FILE']["NAME"] ?></span></div>
                </div>
                <div class="documents__item-right">
                    <div class="documents__item-size"><span><?= $arItem['FILE']['SIZE'] ?></span></div>
                    <a class="documents__item-download" href="<?= $arItem['FILE']['PATH'] ?>" download><span>Скачать</span></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>

