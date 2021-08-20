<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_cake';
        $number = 5; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для тортов и пирожнов';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../cake.php';
        include '../../functions.php';
    ?>
    <title><? get_name_site(); echo " | ".$name[0]; ?></title>
</head>
<body>
    <div class="background">
        <div class="index_main_block">
            <div>
                <?php include '../../header.php'; ?>
            </div>
                
            <div>
                <?php include '../../bg.php'; ?>
            </div>

            <div>
                <? include '../../sections.php' ?>
            </div>

            <div>
                <div class="index_sidebar">
                    <?php include '../../sidebar.php'; ?>
                </div>
                <div class="index_content">

                    <div class="content_block">
                        <h1><?php echo $content_text; ?></h1>
                            <div class="content_one_recipe">
                                <div>
                                    <img class="category_pic" src="../../../images/category<?php echo $pic[0]; ?>" alt="<?php echo $name[0] ?>">
                                </div>

                                <div>
                                    <p><?php echo $description[0]; ?></p>
                                </div>
                                <div >
                                    <div class="content_singleAgent_block">
                                        <h1>Индегриенты</h1>
                                        <ul>
                                            <!--<h2>Гренки:</h2>--><!--Подзаголовок. Использовать при необходимости!-->
                                            <li>250 мл воды</li>
                                            <li>100 г сливочного масла</li>
                                            <li>4 яйца (некрупных)</li>
                                            <li>180 г муки</li>
                                            <li>½ ч.л. соли</li>
                                            <li>заварной, масляный или белковый крем</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Воду довести до кипения.</li>
                                            <li>Добавить масло и соль.</li>
                                            <li>Довести до кипения.</li>
                                            <li>В кипящую воду всыпать муку.
                                            Хорошо перемешать.
                                            Проварить в течение 2 минут.</li>
                                            <li>Массу немного остудить.
                                            Добавить одно яйцо.
                                            Хорошо перемешать.
                                            Добавить второе.
                                            Перемешать.</li>
                                            <li>Добавить таким образом все яйца.</li>
                                            <li>Противень застелить бумагой для выпечки (или смазать маслом).
                                            Ложкой или при помощи кондитерского шприца выложить тесто в виде трубочек длиной 10–11 см.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать до золотистой корочки, примерно 35–40 минут.
                                            Во время выпечки дверцу духовки не открывать.</li>
                                            <li>Готовые пирожные наполнить кремом при помощи кондитерского шприца.</li>
                                            <li>Украсить по вкусу (я полила растопленным белым и темным шоколадом).</li>
                                    </ol>
                                    </div>
                                </div>
                                <div class="content_one_recipe_author">
                                    <span >Автор: </span>
                                    <a href="https://www.say7.info/Anastasia">Анастасия Скрипкина</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div>
                <?php include '../../footer.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>