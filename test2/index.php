<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test2");
?>
    <style>
        .elems {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .elems > div {
            border: 1px solid red;
            padding: 10px;
        }
    </style>

    <div class="sort">
        <select name="SORT" id="sort-form">
            <option id="sort-asc" value="ASC" name="ASC">По убыванию</option>
            <option id="sort-desk" value="DESK" name="DESK">По возврастанию</option>
        </select>
    </div>
<div class="elems">
        <div>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, temporibus?</div>
        <div>2 Amet asperiores deserunt dolorem eius maxime mollitia necessitatibus rem sunt?</div>
        <div>3 Accusamus cupiditate error facere fuga minima obcaecati porro sint ut.</div>
        <div>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, temporibus?</div>
        <div>5 Amet asperiores deserunt dolorem eius maxime mollitia necessitatibus rem sunt?</div>
        <div>6 Accusamus cupiditate error facere fuga minima obcaecati porro sint ut.</div>

</div>

    <script>
        let ascSort = document.querySelector('#sort-asc');
        let ascDesk = document.querySelector('#sort-desk');
        let sortForm =   document.querySelector('#sort-form');

        sortForm.addEventListener('click', e => {
            let resSort = e.target.value
            console.log(resSort)
        })

    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>