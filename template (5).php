<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
/**  $this->addExternalJS("/bitrix/templates/.default/components/bitrix/news.list/123/script.js" ); */
?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
 $this->addExternalJS("/bitrix/templates/.default/components/bitrix/news.list/template2/script.js" );
 $this->addExternalCss("//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
 $this->addExternalJS("//code.jquery.com/jquery-1.11.0.min.js" ); 
 $this->addExternalJS("//code.jquery.com/jquery-migrate-1.2.1.min.js" ); 
 $this->addExternalJS("//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" ); 

?>

<div class="slider-container">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
		<a href="<?=$arItem["PROPERTIES"]["url"]["VALUE"]?>">Go</a> 
		</div>
	<?endforeach;?>


</div>

<!-- <script src="/bitrix/templates/.default/components/bitrix/news.list/template2/script.js" defer> </script> -->
