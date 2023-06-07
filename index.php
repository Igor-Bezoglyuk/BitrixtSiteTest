<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?> <!--Подключает header.php  главное не забудте шаблон с шапкой подключить к сайту через админ панель битрикс-->

<?$APPLICATION->IncludeComponent("bitrix:news.list", "Title_block", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "5",	// Код информационного блока
		"IBLOCK_TYPE" => "TitleBlock",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "Effect",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "About_block", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "CODE",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DETAIL_TEXT",
			5 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "6",	// Код информационного блока
		"IBLOCK_TYPE" => "Aboutblock",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
   
   <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"gallery_block", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "Galleryblock",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "gallery_block"
	),
	false
);?>

   <!--<section id="Gallery">
      <div class="container-fluid p-0">
         <div class="Gallery-block row justify-content-center m-0 pt-1 pb-1">

              <div class="Gallery-blocks col-3">
                 <div class="Galllery-blocks-img G-img-1">
                  <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343956_y.webp" type="image/webp"><img class="Gallery-img-1" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343956_y.jpg" alt="Gallery_img"></picture>
                 </div>
              </div>

              <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-2">
                <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343957_y.webp" type="image/webp"><img class="Gallery-img-2" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343957_y.jpg" alt="Gallery_img"></picture>
               </div>
            </div>

            <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-3">
                <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343958_y.webp" type="image/webp"><img class="Gallery-img-3" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343958_y.jpg" alt="Gallery_img"></picture>
               </div>
            </div>

            <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-4">
                <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343959_y.webp" type="image/webp"><img class="Gallery-img-4" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343959_y.jpg" alt="Gallery_img"></picture>
               </div>
            </div>

            <div class="Gallery-blocks col-3">
             <div class="Galllery-blocks-img G-img-5">
              <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343963_y.webp" type="image/webp"><img class="Gallery-img-5" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343963_y.jpg" alt="Gallery_img"></picture>
             </div>
          </div>

          <div class="Gallery-blocks col-3">
             <div class="Galllery-blocks-img G-img-6">
              <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343974_y.webp" type="image/webp"><img class="Gallery-img-6" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343974_y.jpg" alt="Gallery_img"></picture>
             </div>
          </div>

          <div class="Gallery-blocks col-3">
            <div class="Galllery-blocks-img G-img-7">
             <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343960_y.webp" type="image/webp"><img class="Gallery-img-7" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343960_y.jpg" alt="Gallery_img"></picture>
            </div>
         </div>

         <div class="Gallery-blocks col-3">
          <div class="Galllery-blocks-img G-img-8">
           <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343972_y.webp" type="image/webp"><img class="Gallery-img-8" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343972_y.jpg" alt="Gallery_img"></picture>
          </div>
       </div>

       <div class="Gallery-blocks col-3">
          <div class="Galllery-blocks-img G-img-9">
           <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343964_y.webp" type="image/webp"><img class="Gallery-img-9" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343964_y.jpg" alt="Gallery_img"></picture>
          </div>
       </div>

       <div class="Gallery-blocks col-3">
         <div class="Galllery-blocks-img G-img-10">
          <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343965_y.webp" type="image/webp"><img class="Gallery-img-10" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343965_y.jpg" alt="Gallery_img"></picture>
         </div>
      </div>

      <div class="Gallery-blocks col-3">
       <div class="Galllery-blocks-img G-img-11">
        <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343981_y.webp" type="image/webp"><img class="Gallery-img-11" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343981_y.jpg" alt="Gallery_img"></picture>
       </div>
    </div>

    <div class="Gallery-blocks col-3">
       <div class="Galllery-blocks-img G-img-12">
        <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5190773697739343961_y.webp" type="image/webp"><img class="Gallery-img-12" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343961_y.jpg" alt="Gallery_img"></picture>
       </div>
    </div>
         </div>
      </div>

      <div class="Gallery-modal">
         <div class="Gallery-modal-window ">
            <span class="Gallery-close">⛌</span>
            <div class="Galleery-modal-img">
                
            </div>
         </div>
      </div>

      <div class="Gallery-link-block row pt-4 pb-4">
          <div class="Gallery-blocks-link">
              <a class="Gallery-link" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><button class="Gallery-btn btn"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Gallery-link-icon-white.webp" type="image/webp"><img class="Gallery-img-link-white" src="<?=SITE_TEMPLATE_PATH?>/img/Gallery-link-icon-white.png" alt="gallery_link_icon"></picture> Подробнее..</button></a>
          </div>
      </div>
   </section>-->

   <section id="Prise">
       <div class="container-fluid pt-5 pb-5">
          <h3 class="Prise-title">Прайс</h3>
         <div class="Prise-block row justify-content-center flex-wrap pt-5 pb-5">

            <div class="Prise-blocks col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
               <ul class="Prise-blocks-list">
                   <li class="Prise-li-1">Разбор гардероба (офлайн)<span class="Prise-serves">3 500 ₽ /час</span></li>
                   <li class="Prise-li-1">Разбор гардероба (онлайн)<span class="Prise-serves">2 500 ₽ /час</span></li>
                   <li class="Prise-li-2">Сбор капсул<span class="Prise-serves">5 500 ₽</span></li>
                   <li class="Prise-li-3">Консультация <span class="Prise-serves">2 000 ₽ /час</span></li>
                   <li class="Prise-li-4">Шопинг (онлайн) <span class="Prise-serves">15 000 ₽</span></li>
                   <li class="Prise-li-5">Шопинг (офлайн) <span class="Prise-serves">3 500 ₽ <i>/час</i></span></li>
                   <li class="Prise-li-6">Style Book <span class="Prise-serves">25 000 ₽</span></li>
               </ul>
            </div>

            <div class="Prise-blocks p-0 col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8" style="background: #ffebd5; border-radius:15px">
               <div class="Prise-blocks-img">
                  <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/photo_5193210185441723243_y.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/photo_5193210185441723243_y.jpg" alt="About_img"></picture> 
               </div>
            </div>

         </div>
   </section>

   <section id="Serveses">
       <div class="container-fluid pt-5 pb-5">
            <h3 class="Serveses-title mt-3 mb-5">Услуги</h3>
           <div class="Serveses-block row justify-content-center">

              <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
                <div class="Serveses-blocks-img">
                <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Razbor_garderoba.webp" type="image/webp"><img class="Serveses-img-1" src="<?=SITE_TEMPLATE_PATH?>/img/Razbor_garderoba.jpg" alt="Гардероб"></picture>
                </div>
                <div class="Serveses-blocks-info">
                <h6 class="Serveses-blocks-title">Разбор гардероба</h6>
                <p class="Serveses-blocks-text">В каком случае вам нужна услуга Разбор гардероба со стилистом?</p>
                 <button class="Serveses-btn btn Open-Serveses-1" type="button">Подробнее..</button>
                </div>
              </div>

              <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Sbor_vesey.webp" type="image/webp"><img class="Serveses-img-2" src="<?=SITE_TEMPLATE_PATH?>/img/Sbor_vesey.jpg" alt="Сбор вещей"></picture>
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Сбор капсул</h6>
               <p class="Serveses-blocks-text">Что такое капсула и для чего она нужна?</p>
                <button class="Serveses-btn btn Open-Serveses-2" type="button">Подробнее..</button>
              </div>
              </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/konultasia_styly.webp" type="image/webp"><img class="Serveses-img-3" src="<?=SITE_TEMPLATE_PATH?>/img/konultasia_styly.jpg" alt="Консультация"></picture>
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Консультация по стилю</h6>
               <p class="Serveses-blocks-text">Зачем нужна консультация по стилю?</p>
                <button class="Serveses-btn btn Open-Serveses-3" type="button">Подробнее..</button>
             </div>
             </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/online-shopping.webp" type="image/webp"><img class="Serveses-img-4" src="<?=SITE_TEMPLATE_PATH?>/img/online-shopping.jpg" alt="Шоппинг онлайн"></picture>
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Шопинг онлайн</h6>
               <p class="Serveses-blocks-text">Что это за услуга?</p>
                <button class="Serveses-btn btn Open-Serveses-4" type="button">Подробнее..</button>
               </div>
             </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
              <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/shopping.webp" type="image/webp"><img class="Serveses-img-5" src="<?=SITE_TEMPLATE_PATH?>/img/shopping.jpg" alt="Шоппинг"></picture>
              </div>
              <div class="Serveses-blocks-info">
              <h6 class="Serveses-blocks-title">Шопинг офлайн </h6>
              <p class="Serveses-blocks-text">Что это за услуга?</p>
               <button class="Serveses-btn btn Open-Serveses-5" type="button">Подробнее..</button>
             </div>
            </div>

            <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
              <div class="Serveses-blocks-img">
              <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Style_book.webp" type="image/webp"><img class="Serveses-img-6" src="<?=SITE_TEMPLATE_PATH?>/img/Style_book.jpg" alt="Style Book"></picture>
              </div>
              <div class="Serveses-blocks-info">
              <h6 class="Serveses-blocks-title">Составление Style Book’а</h6>
              <p class="Serveses-blocks-text">Что такое Style Book?</p>
               <button class="Serveses-btn btn Open-Serveses-6" type="button">Подробнее..</button>
              </div>
            </div>

           </div>

           <div class="Serveses-modal row">
               <div class="Serveses-window col-xxl-5 col-xl-6 col-lg-7 col-md-9 col-sm-10">
                   <div class="Serveses-window-block pt-3 pb-3 row justify-content-between align-items-center">
                     <div class="Serveses-modal-blocks col-2">
                        <div class="Serveses-modal-blocks-img">
                           <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/L.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/L.png" alt="Serrveses_modal_img"></picture>
                        </div>
                      </div>
                      
                      <div class="Serveses-modal-blocks-close ">
                        <span class="Close-Modal">⛌</span>
                      </div>
                   </div>

                   <div class="Serveses-modal-info row">
                     
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section id="Contacts">
        <div class="conteiner pt-5 pb-5">
           <div class="Contacts-block row justify-content-center pt-5 pb-5">
               <div class="Contacts-blocks-form col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                  <form class="Contacts-form" name="form" method="POST" action="ph/Mail.php">
                      <input class="Contacts-input" type="text" name="text" required placeholder="Ф.И.О">
                      <input class="Contacts-input" type="email" name="email"  placeholder="Ваше почта:">
                      <input class="Contacts-input" type="number" name="phone"required placeholder="Ваш телефон:">
                      <textarea class="Contacts-textarea" name="message" placeholder="Сообщение:"></textarea>
                      <button class="Contacts-btn btn" name="Knopka" type="submit">Отправить</button>
                  </form>
               </div>
               <div class="Contacts-blocks-information col-xxl-3 col-xl-4 col-lg-5 col-md-5 col-sm-8 ">
                  <div class="Contacts-blocks-info">
                     <h3 class="Contacts-blocks-info-title">Контакты</h3>
                     <p class="Contacts-blocks-info-text">Связь со мной</p>
                  </div>
                  <div class="Contacts-blocks-info-flex">
                     <div class="Contacts-infos">
                        <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Phone-icon.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/Phone-icon.png" alt="Adres"></picture>
                        <a href="tel:+79147253940">8-914-725-39-40</a>
                     </div>
                     <div class="Contacts-infos">
                        <a class="Contants-link-soc" href="https://t.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/icon-top-telegram.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-telegram.png" alt="Телеграм"></picture></a>
                        <a class="Contants-link-soc" href="https://wa.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/icon-top-whatsapp.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-whatsapp.png" alt="Ватсап"></picture></a>
                        <a class="Contants-link-soc" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Icon-instagram-white.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/Icon-instagram-white.png" alt="Ватсап"></picture></a>
                     </div>
                  </div>
               </div>
           </div>
        </div>
   </section>

   <script>   //php функции не работают вне php файла. Поэтому следует добавлять скрипты с php в главный файл php.
jQuery(document).ready(function(){
    $(function (){
        $(".Open-Serveses-1").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/Razbor_garderoba.jpg" alt="Гардероб"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Разбор гардероба онлайн и офлайн</h3> <p>Отличный шанс дать своим вещам новую жизнь.</p> <ul class="Serveses-modal-spisok"> <li>У вас большое количество вещей, но вы не знаете, с чем их носить и как сочетать.</li> <li>Носить нечего, а вешать некуда.</li> <li>Ваша одежда плохо работает на ваш имидж.</li> <li>Вы хотите поменять стиль и дать вашему гардеробу второй шанс</li> </ul> </div>');
     }); 
     $(".Open-Serveses-2").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/Sbor_vesey.jpg" alt="Сбор вещей"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Сбор капсул</h3> <p>Для определенных случаев.</p> <ul class="Serveses-modal-spisok"> <li>Капсула – это набор из сочетаемых друг с другом взаимозаменяемых вещей, которые предназначены для определенной ситуации (времени года, сферы жизни, мероприятия)</li> </ul> </div>');
     });
     $(".Open-Serveses-3").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/konultasia_styly.jpg" alt="Консультация"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Консультация по стилю</h3> <p>В ходе консультации по стилю мы определим Ваши индивидуальные природные параметры, зная которые Вы можете:</p> <ul class="Serveses-modal-spisok"> <li>Безошибочно подбирать одежду</li> <li>Избавиться от ненужных вещей в гардеробе</li> <li>Начать работу над созданием собственного современного стиля</li></ul> <p>Какие цвета, стиль, фасон одежды, прическа, стрижка аксессуары подойдут именно вам? Пройдите консультацию и узнайте все раз и навсегда.</p> </div>');
     });
     $(".Open-Serveses-4").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/online-shopping.jpg" alt="Шопинг онлайн"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Шопинг сопровождение онлайн</h3> <ul class="Serveses-modal-spisok"> <li>Поиск необходимой одежды в интернете.</li> <li>Выбор подходящих фасонов одежды с учетом особенностей вашей фигуры.</li> <li>Совершение необходимых покупок в рамках вашего бюджета</li><li>Создание нескольких интересных образов, не выходя из дома.</li><li>Экономия времени и физических, а главное моральных сил.</li> </ul> <p>Как проходит шопинг-сопровождение онлайн:</p> <ol class="Serveses-modal-spisok-nombers"><li>Первая наша встреча происходит по видео  или по телефону.</li><li>Мы обсуждаем организационные вопросы и заполняем анкету с информацией о вас, которая понадобится мне для работы.</li><li>Вы присылаете свои фотографии, я анализирую вашу внешность.</li><li>Подробно обговариваем, что нужно купить и как бы хотелось выглядеть.</li><li>Согласовываем бюджет - минимум и максимум.</li><li>Далее я составляю для вас список ссылок на одежду, обувь и аксессуары в онлайн магазинах. Это занимает 4-5 дней, в зависимости от вашего заказа. Вы самостоятельно делаете заказ по моим ссылкам.</li><li>Все поступающие к вам вещи, вы фотографируете на себе и присылаете мне фотографии или видео для обсуждения и одобрения.  Далее отбираем понравившиеся вещи, я нахожусь с вами на связи до тех пор, пока вы не получите все заказы, и мы не соберем готовые комплекты.</li><li> Если какие-то вещи вам не подошли или не понравились, я нахожу новые альтернативные варианты и делаем заказ вновь.</li></ol> </div>');
     });
     $(".Open-Serveses-5").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/shopping.jpg" alt="Шопинг"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Шопинг офлайн</h3>  <ul class="Serveses-modal-spisok"> <li>Индивидуальная консультация.</li> <li>Поиск необходимой одежды в магазинах</li> <li>Выбор подходящих фасонов одежды с учетом особенностей вашей фигуры.</li> <li>Совершение совместных покупок в рамках вашего бюджета</li> <li>Создание нескольких интересных образов</li> <li>Экономия времени для вас.</li> </ul> <p>Как проходит шопинг офлайн:</p> <ol class="Serveses-modal-spisok-nombers"><li>Первая наша встреча происходит по видео или по телефону.</li><li>Мы обсуждаем организационные вопросы и заполняем анкету с информацией о вас, которая понадобится мне для работы.</li><li>Вы присылаете свои фотографии, я анализирую вашу внешность.</li><li>Подробно обговариваем, что нужно купить и как бы хотелось выглядеть.</li><li>Согласовываем бюджет - минимум и максимум.</li><li>Далее я составляю для вас список подходящих магазинов. Это занимает 4-5 дней, в зависимости от вашего запроса.</li><li>Мы встречаемся в торговом центре и вместе ходим по магазинам из составленного списка. Далее отбираем и покупаем понравившиеся вещи.</li></ol> </div>');
     });
     $(".Open-Serveses-6").click(function(){
        $(".Serveses-modal:hidden").show()
        $(".Serveses-modal-info").html('<div class="Serveses-modal-info-img"> <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/Style_book.jpg" alt="Style Book"></div> <div class="Serveses-modal-info-block"> <h3 class="Serveses-modal-info-title">Составление Style Book’а</h3> <p>Стайлбук- это ваша персональная книга стиля. Книга, в которой вы найдете все ответы на свои вопросы относительно подходящих именно вам цветов одежды, кроя и фасонов, а так же индивидуального стиля.</p> <p>Какую информацию содержит стайлбук?</p> <ul class="Serveses-modal-spisok"> <li>Цветотип внешности с указанием особенностей ваших цветовых характеристик по основным показателям: теплый-холодный, яркий-приглушенный, темный-светлый, включая, при необходимости, серединные величины.</li> <li>Палитра ваших оттенков, состоящая из базовых и акцентных цветов. Сочетания цветов с учетом вашего образа жизни и решаемых задач.</li> <li>Рекомендуемое решение для прически, оттенков цвета волос, включая техники окрашивания. А также рекомендуемые оттенки и акценты в макияже и маникюре.</li> <li>Подходящие вам фактуры, типы тканей, принты (рисунки), металлы, камни и другие материалы.</li> <li>Тип фигуры, зоны преимуществ и коррекции, особенности, рекомендации по подходящим фасонам одежды.</li><li>Подходящие вам обувь и сумки в разной стилистике , включая разделение по сезонам.</li><li>Аксессуары (платки, очки, головные уборы, шарфы, ремни, перчатки и т.д.). А также подходящие вам украшения с учетом формы типа внешности.</li><li>Ваш индивидуальный стилевой типаж, особенности внешности. Впечатление, производимое на окружающих.</li><li>Рекомендации по стилевым направлениям и модным течениям, подходящим для вашего стилевого типажа. Подбор образов для разных случаев с учетом индивидуальной стилистики.</li> </ul> </div>');
     });
        $(".Close-Modal").click(function(){
        $(".Serveses-modal").hide();
     });
    });
    });

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><!--Подключает footer.php  главное не забудте шаблон с подвалом сайта, подключить к сайту через админ панель битрикс-->