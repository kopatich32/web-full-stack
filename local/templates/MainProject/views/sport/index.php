
    <form class="filter" action="#" method="post">
        <label class="filter__select-label">
            Сортировать по:
            <select name="orderBy" class="filter__select">
                <option value="year_desc">Дате добавления</option>
                <option value="views_desc">Просмотрам</option>
                <option value="rating_desc">Оценкам</option>
            </select>
        </label>
        <label class="filter__select-label">
            Вид спорта:
            <select name="sportType" class="filter__select">
                <option value="" selected>Все виды</option>
                    <option value=""></option>
            </select>
        </label>
        <label class="filter__select-label">
            Год:
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


    <section class="collections">
    <div class="collections__item">
        <h2 class="collections__item-title h1"> Все клипы </h2>
        <div class="collections__item-body.grid">


            <form class="collections__item-link" action="index.php" method="post">
                <button style="background-color: transparent; width: fit-content; height: fit-content; border: none;"
                        value="" name="filmFakeLink">
                    <img src="" class="collections__item-link-img" alt="">
                </button>
            </form>



        </div>
    </div>
</section>


