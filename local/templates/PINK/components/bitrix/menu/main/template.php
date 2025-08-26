<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)){?>
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href="<?=SITE_DIR?>">Главная</a></li>
                        <? $previousLevel = 0;
                        foreach($arResult as $arItem){
                        if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel){
                            echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
                           }
                         if ($arItem["IS_PARENT"]){?>
                        <li>
                            <a href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"]?></a>
                                <ul>
                                    <?}else{?>
                                        <li><a href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"]?></a></li>
                                    <?}
                                        $previousLevel = $arItem["DEPTH_LEVEL"];
                        }
                            if ($previousLevel > 1){
                                echo str_repeat("</ul></li>", ($previousLevel-1) );
                            } ?>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <? } ?>