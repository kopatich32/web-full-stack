
<form class="filter" action="#" method="post">
    <label class="filter__select-label">
        Сортировать по:
        <select name="orderBy" class="filter__select">
            <option value="year_desc">Дате добавления</option>
            <option value="views_desc">Просмотрам</option>
            <option value="raiting_desc">Оценкам</option>
        </select>
    </label>
    <label class="filter__select-label">
        Жанр:
        <select name="genre" class="filter__select">
            <option value="" selected>Все жанры</option>
                <option value=""></option>
        </select>
    </label>
    <label class="filter__select-label">
        Год выпуска:
        <select name="year" class="filter__select">
            <option value="" selected>Все года</option>
                <option value=""></option>
        </select>
    </label>
    <label class="filter__select-label">
        Страна:
        <select name="country" class="filter__select">
            <option value="">Все страны</option>
                <option value=""></option>
        </select>
    </label>
    <button class="button filter__button">Применить</button>
</form>

        "<h1 style='text-align: center'>Клипов по вашим запросам не найдено</h1>";
    }
  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/collections.php';
?> <section class="collections">
    <div class="collections__item">
        <h2 class="collections__item-title h1"> Все клипы </h2>
        <div class="collections__item-body.grid">


            <form class="collections__item-link" action="video.php" method="post">
                <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                        value="" name="filmFakeLink">
                    <img src="" class="collections__item-link-img" alt="<?= $fr['title'] ?>">
                </button>
            </form>

        </div>
    </div>
    </section>

<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';

?>
