
</div>
</div>
<div class="sb_sidebar">
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_vertical", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_vertical",
		"MENU_THEME" => "site"
	),
	false
);?><br>
<!--    <div class="sb_nav">-->
<!--        <ul>-->
<!--            <li class="close"><a href=""><span>Каталог</span></a></li>-->
<!--            <li class="close"><a href=""><span>Кухни</span></a></li>-->
<!--            <li class="close"><a href=""><span>Гарнитуры</span></a></li>-->
<!--            <li class="open current">-->
<!--                <span class="sb_showchild"></span>-->
<!--                <a href=""><span>Спальни</span></a>-->
<!--                <ul>-->
<!--                    <li><a href="">Одноместрые</a></li>-->
<!--                    <li><a href="">Двухместные</a></li>-->
<!--                    <li><a href="">Детские</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="close"><a href=""><span>Кухни</span></a></li>-->
<!--            <li class="close"><a href=""><span>Гарнитуры</span></a></li>-->
<!--            <li class="close">-->
<!--                <span class="sb_showchild"></span>-->
<!--                <a href=""><span>Спальни</span></a>-->
<!--                <ul>-->
<!--                    <li><a href="">Одноместрые</a></li>-->
<!--                    <li><a href="">Двухместные</a></li>-->
<!--                    <li><a href="">Детские</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
    <div class="sb_event">
<!--        <div class="sb_event_header"><h4>Ближайшие события</h4></div>-->
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"green_block", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => "green_block",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
    </div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sales", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "Sales",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "sales",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
    <?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews_rand", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "10",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "SORT",
			1 => "RAND",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "reviews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "POST",
			1 => "COMPANY",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews_rand"
	),
	false
);?><br>
</div>
</div>
<div class="clearboth"></div>



<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<?include_once($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php");?>

</div>
</body>
</html>