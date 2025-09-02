<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"Top_Stories",
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "Top_Stories",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
    <section class="foryou">
<div class="foryouh2">
	<h2 id="fy">For You</h2>
	<p>
		 Recommended based on your interests
	</p>
</div>
 </section>
<div class="foryouall">
 <section class="foryouin">
	<div class="row">
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 20.png" class="bigrecimg" alt="">
			<div class="bigrecttxt">
				<h2>Sed fringilla mauris sit amet nibh.</h2>
				<p>
					 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
				</p>
			</div>
			<p class="bigrectp">
				 15 hours ago / by dawfw
			</p>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 24.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 25.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/image 4.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 27.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 26.png" class="bigrecimg" alt="">
			<div class="bigrecttxt">
				<h2>Sed fringilla mauris sit amet nibh.</h2>
				<p>
					 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
				</p>
			</div>
			<p class="bigrectp">
				 15 hours ago / by dawfw
			</p>
		</div>
	</div>
	<div class="row">
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/image 4.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 27.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 26.png" class="bigrecimg" alt="">
			<div class="bigrecttxt">
				<h2>Sed fringilla mauris sit amet nibh.</h2>
				<p>
					 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
				</p>
			</div>
			<p class="bigrectp">
				 15 hours ago / by dawfw
			</p>
		</div>
	</div>
	<div class="row">
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/image 4.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 27.png" class="smrectimg" alt="">
			<div>
				<div class="smrecttxt">
					<h2>Sed fringilla mauris sit amet nibh.</h2>
					<p>
						 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
					</p>
				</div>
				<p class="smrectp">
					 15 hours ago / by dawfw
				</p>
			</div>
		</div>
		<div class="rect">
 <img src="/local/templates/furniture_pink/assets/resources/Rectangle 26.png" class="bigrecimg" alt="">
			<div class="bigrecttxt">
				<h2>Sed fringilla mauris sit amet nibh.</h2>
				<p>
					 Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
				</p>
			</div>
			<p class="bigrectp">
				 15 hours ago / by dawfw
			</p>
		</div>
	</div>
 </section>
</div>
 <section class="back">
<h1 id="back"><a href="">Back</a></h1>
 </section>
<div class="modal-window hidden">
 <button class="btn--close-modal-window">×</button>
	<h2 class="modal__header">
	Login </h2>
	<form class="modal__form">
 <label>Email</label> <input type="email"> <label>Номер телефона</label> <input type="text" class="phone"> <label for="Password">Пароль:</label> <input type="password" id="Password" placeholder="Пароль"> <button class="btn">Далее →</button>
	</form>
</div>
<div class="overlay hidden">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>