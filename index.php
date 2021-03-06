<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Welcome to Firebase Hosting</title>




    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Yusei+Magic&display=swap" rel="stylesheet">

</head>

<body class="body">
<?php
$link = mysqli_connect("sql7.freesqldatabase.com", "sql7386311", "3rW9W2gPv1", "sql7386311");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>


    <header class="header">Панель гейммастера</header>
    <div class="all_b">
        <div class="left">


            <button class="button" id="d20" onclick="d20()">Бросок d20</button>
            <textarea class="tb" name="Результат" id="output" cols="30" rows="2"></textarea>

            <button class="button" id="d6" onclick="d6()">Бросок d6</button>
            <textarea class="tb" name="Результат" id="output2" cols="30" rows="2"></textarea>

            <button class="button" id="d4" onclick="d4()">Бросок d4</button>
            <textarea class="tb" name="Результат" id="output6" cols="30" rows="2"></textarea>

        </div>
        <div class='right'>
            <button class="button" id="lvl1" onclick="lvl1()">Выбрать артефакт первого уровня</button>
            <textarea class="textbox" name="Результат" id="output3" cols="30" rows="2"></textarea>

            <button class="button" id="lvl2" onclick="lvl2()">Выбрать артефакт второго уровня</button>
            <textarea class="textbox" name="Результат" id="output4" cols="20" rows="2"></textarea>

            <button class="button" id="lvl3" onclick="lvl3()">Выбрать артефакт третьего уровня</button>
            <textarea class="textbox" name="Результат" id="output5" cols="30" rows="2"></textarea>


        </div>
    </div>

    <div class="info">
        <div class="left_3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <a href="../game/side_htmls/human.html">
                <p class="large">ЧЕЛОВЕК</p>
            </a>
        </div>
        <div class="right">
            <div class="art">
                <p class="p_main_art">Артефакт 1</p>
                <textarea class="art_desc" name="art_1" id="h_a1" cols="30" rows="5"></textarea>
            </div>
            <div class="art">
                <p class="p_main_art">Артефакт 2</p><textarea class="art_desc" name="art_2" id="h_a2" cols="30" rows="5"></textarea></div>
            <div class="art">
                <p class="p_main_art">Артефакт 3</p><textarea class="art_desc" name="art_3" id="h_a3" cols="30" rows="5"></textarea></div>
            <button class="button_2" onclick="h_upd()">Обновить</button>
            <button class="button_2" onclick="h_save()">Сохранить</button>
        </div>
    </div>
    <div class="info">
        <div class="left_3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <a href="../game/side_htmls/goblin.html">
                <p class="large">ГОБЛИН</p>
            </a>
        </div>
        <div class="right">
            <div class="art">
                <p class="p_main_art">Артефакт 1</p>
                <textarea class="art_desc" name="art_1" id="g_a1" cols="30" rows="5"></textarea>
            </div>
            <div class="art">
                <p class="p_main_art">Артефакт 2</p><textarea class="art_desc" name="art_2" id="g_a2" cols="30" rows="5"></textarea></div>
            <div class="art">
                <p class="p_main_art">Артефакт 3</p><textarea class="art_desc" name="art_3" id="g_a3" cols="30" rows="5"></textarea></div>
            <button class="button_2" onclick="g_upd()">Обновить</button>
        </div>
    </div>
    <div class="info">
        <div class="left_3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <a href="../game/side_htmls/satir.html">
                <p class="large">САТИР</p>
            </a>
        </div>
        <div class="right">
            <div class="art">
                <p class="p_main_art">Артефакт 1</p>
                <textarea class="art_desc" name="art_1" id="s_a1" cols="30" rows="5"></textarea>
            </div>
            <div class="art">
                <p class="p_main_art">Артефакт 2</p><textarea class="art_desc" name="art_2" id="s_a2" cols="30" rows="5"></textarea></div>
            <div class="art">
                <p class="p_main_art">Артефакт 3</p><textarea class="art_desc" name="art_3" id="s_a3" cols="30" rows="5"></textarea></div>
            <button class="button_2" onclick="s_upd()">Обновить</button>
        </div>
    </div>
    <div class="info">
        <div class="left_3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <a href="../game/side_htmls/dwarf.html">
                <p class="large">ДВОРФ</p>
            </a>
        </div>
        <div class="right">
            <div class="art">
                <p class="p_main_art">Артефакт 1</p>
                <textarea class="art_desc" name="art_1" id="d_a1" cols="30" rows="5"></textarea>
            </div>
            <div class="art">
                <p class="p_main_art">Артефакт 2</p><textarea class="art_desc" name="art_2" id="d_a2" cols="30" rows="5"></textarea></div>
            <div class="art">
                <p class="p_main_art">Артефакт 3</p><textarea class="art_desc" name="art_3" id="d_a3" cols="30" rows="5"></textarea></div>
            <button class="button_2" onclick="d_upd()">Обновить</button>
        </div>
    </div>

    <script src="../game/scripts/lvl1art.js"></script>
    <script src="../game/scripts/random.js"></script>
    <!--<script src="../game/scripts/test.js"></script>--
            <script src="../game/connection.php"></script>-->

</body>

</html>