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
?>
<?php if ($arResult["ITEMS"]): ?>
<?php foreach ($arResult["ITEMS"] as $arItem): ?>

<section id="Prise" style=" background: url('<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>') no-repeat 50% 50%/cover;">

       <div class="container-fluid pt-5 pb-5">
	   	
          <h3 class="Prise-title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></h3>
         <div class="Prise-block row justify-content-center flex-wrap pt-5 pb-5">

            <div class="Prise-blocks col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
               <ul class="Prise-blocks-list">
			   <?php if (!empty($arItem["DISPLAY_PROPERTIES"]['PriseSpisok']['VALUE'])): ?>
                   <li class="Prise-li-1"><?= $arItem["DISPLAY_PROPERTIES"]['PriseSpisok']['VALUE'] ?><span class="Prise-serves"><?= $arResult['PROPERTIES']['PriseSpisok']['DESCRIPTION'] ?? ''; ?></span></li>
				<?php endif; ?>
               </ul>
			 
            </div>

            <div class="Prise-blocks p-0 col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8" style="background: #ffebd5; border-radius:15px">
               <div class="Prise-blocks-img">
			   <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                  <picture><source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/photo_5193210185441723243_y.jpg" alt="About_img"></picture> 
				<?php endif; ?> 
               </div>
            </div>
		  
         </div>
   </section>
<?php endforeach; ?> 
<?php endif; ?>