<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?=$arItem["NAME"]?></h2></a><span class="ps_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span></div>
        <div class="ps_content">
            <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arItem["NAME"]?>"/>
            <?echo $arItem["PREVIEW_TEXT"];?>
            <div style="clear:both"></div>
            <?if($arResult['USERS'][$arItem['PROPERTIES']['AUTHOR']['VALUE']]):?>
                Автор: <?=$arResult['USERS'][$arItem['PROPERTIES']['AUTHOR']['VALUE']]['NAME']?>
            <?endif?>
        </div>
    </div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
