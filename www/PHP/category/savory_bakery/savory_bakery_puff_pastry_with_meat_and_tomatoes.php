<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_savory_bakery';
        $number = 2; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для несладких выпечек';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../savory_bakery.php';
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
                                            <li>500 г слоеного теста</li>
                                            <li>300 г филе свинины</li>
                                            <li>350 г помидоров</li>
                                            <li>200 г лука</li>
                                            <li>1 яйцо</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук нарезать кольцами.</li>
                                            <li>Помидоры нарезать кружочками.</li>
                                            <li>Мясо нарезать кусочками диаметром 5–6 см.</li>
                                            <li>Слегка отбить.</li>
                                            <li>Тесто раскатать толщиной 3–4 мм.
                                            Нарезать прямоугольники.</li>
                                            <li>На тесто выложить мясо.</li>
                                            <li>Посолить, поперчить.</li>
                                            <li>На мясо выложить лук.</li>
                                            <li>На лук выложить кружок помидорки.</li>
                                            <li>Слепить пирожок.</li>
                                            <li>Противень смазать растительным маслом или застелить бумагой для выпечки.
                                            Выложить пирожки. 
                                            Поставить в разогретую до 180 градусов духовку. 
                                            Выпекать в течение 35–40 минут.</li>
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