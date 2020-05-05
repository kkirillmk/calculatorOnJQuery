<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Computer shop</title>
    <link rel="stylesheet" href="styles/normalize.css?<?= time(); ?>">
    <link rel="stylesheet" href="styles/style.css?<?= time(); ?>">
</head>
<body>
    <div class="wrapper">
        <div class="info">
            <img src="images/system_unit_yellow.png" alt="system_unit_yellow" id="system_unit_img">
            <div id="result">
                <h3>Системный блок</h3>
                <p>8 ОЗУ, GTX 1080, SSD 1024ГБ...</p>
                <p>80 000 руб</p>
                <p>$ 1 200</p>
                <button>Заказать</button>
            </div>
        </div>
        <div class="options">
            <h3>Выбери комплектующие для системного блока:</h3>
            <div id="processor">
                <h4>Процессор</h4>
                <label for="processor1"><input name="processor" type="radio" id="processor1" value="9000"> AMD Ryzen 5 2600</label>
                <label for="processor2"><input name="processor" type="radio" id="processor2" value="14000"> AMD Ryzen 5 3600</label>
                <label for="processor3"><input name="processor" type="radio" id="processor3" value="16000"> AMD Ryzen 5 3600X</label>
            </div>
            <div id="videocard">
                <h4>Видеокарта</h4>
                <label for="videocard1"><input name="videocard" type="radio" id="videocard1" value="27000"> Palit GeForce RTX 2060</label>
                <label for="videocard2"><input name="videocard" type="radio" id="videocard2" value="36000"> GIGABYTE GeForce RTX 2060</label>
                <label for="videocard3"><input name="videocard" type="radio" id="videocard3" value="43000"> GIGABYTE GeForce RTX 2070</label>
            </div>
            <div id="ram">
                <h4>ОЗУ</h4>
                <label for="ram1"><input name="ram" type="radio" id="ram1" value="4000"> Kingston HyperX FURY Black 8 ГБ</label>
                <label for="ram2"><input name="ram" type="radio" id="ram2" value="7000"> Kingston HyperX FURY Black 16 ГБ</label>
                <label for="ram3"><input name="ram" type="radio" id="ram3" value="16000"> Kingston HyperX FURY Black 32 ГБ</label>
            </div>
            <div id="ssd">
                <h4>SSD</h4>
                <label for="ssd1"><input name="ssd" type="radio" id="ssd1" value="4000"> 250 ГБ Samsung 860 EVO</label>
                <label for="ssd2"><input name="ssd" type="radio" id="ssd2" value="7000"> 500 ГБ Samsung 860 EVO</label>
                <label for="ssd3"><input name="ssd" type="radio" id="ssd3" value="9000"> 1024 ГБ Samsung 860 QVO</label>
            </div>
            <div id="colors">
                <h4>Цвет</h4>
                <div id="color_black" class="picker"></div>
                <div id="color_grey" class="picker"></div>
                <div id="color_red" class="picker"></div>
                <div id="color_orange" class="picker"></div>
                <div id="color_yellow" class="picker"></div>
                <div id="color_green" class="picker"></div>
                <div id="color_mint" class="picker"></div>
                <div id="color_blue" class="picker"></div>
                <div id="color_pink" class="picker"></div>
                <div id="color_purple" class="picker"></div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery-3.5.0.min.js?<?= time(); ?>"></script>
    <script src="scripts/script.js?<?= time(); ?>"></script>
</body>
</html> 