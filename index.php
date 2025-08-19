<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

    <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
    </p>
    <!-- index column -->
    <div class="cnt-section index-column">
        <div class="col-wrap">

            <!-- main actions box -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "furniture-news",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
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
                    "COMPONENT_TEMPLATE" => "furniture-news",
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
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "news",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
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
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                ),
                false
            );?>
            <!-- /main actions box -->
            <!-- main news box -->
            <div class="column main-news-box">
                <div class="title-block">
                    <h2>Новости</h2>
                </div>
                <hr>
                <div class="items-wrap">
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012</a>
                            </div>
                            <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012</a>
                            </div>
                            <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012</a>
                            </div>
                            <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012</a>
                            </div>
                            <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn-next">Все новости</a>
            </div>
            <!-- /main news box -->

        </div>
    </div>
    <!-- /index column -->

    <!-- afisha box -->
    <div class="cnt-section afisha-box">
        <div class="section-title-block">
            <h2 class="second-ttile">Ближайшие мероприятия</h2>
            <a href="" class="btn-next">все мероприятия</a>
        </div>
        <hr>
        <div class="items-wrap">
            <div class="item-wrap">
                <div class="item">
                    <div class="title"><a href="">29 августа 2012, Москва</a>
                    </div>
                    <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                    </div>
                </div>
            </div>
            <div class="item-wrap">
                <div class="item">
                    <div class="title"><a href="">29 августа 2012, Москва</a>
                    </div>
                    <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                    </div>
                </div>
            </div>
            <div class="item-wrap">
                <div class="item">
                    <div class="title"><a href="">29 августа 2012, Москва</a>
                    </div>
                    <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /afisha box -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>