<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_savory_bakery';
        $number = 5; //Изменение по ID
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
                                            <li>500 г слоеного теста (дрожжевого или бездрожжевого)</li>
                                            <li>кетчуп или томатная паста</li>
                                            <li>сосиски (или колбаса, ветчина, мясо и т.д.)</li>
                                            <li>помидоры</li>
                                            <li>маринованные грибы</li>
                                            <li>болгарский перец</li>
                                            <li>маслины</li>
                                            <li>сыр (твердый)</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Помидоры нарезать кружочками.</li>
                                            <li>Сосиски нарезать кружочками.</li>
                                            <li>Болгарский перец очистить от семян.
                                            Нарезать соломкой.</li>
                                            <li>Маслины нарезать колечками.</li>
                                            <li>Грибы тонко нарезать.</li>
                                            <li>Сыр натереть на мелкой терке.</li>
                                            <li>Тесто раскатать толщиной 2–3 мм. 
                                            Вырезать квадратики.
                                            Противень смазать маслом или застелить бумагой для выпечки.
                                            Выложить квадратики.</li>
                                            <li>Тесто смазать кетчупом.</li>
                                            <li>Выложить помидоры, сосиски, грибы, перец, маслины.</li>
                                            <li>Посыпать сыром.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 20–25 минут.</li>
                                            <li>Я использую готовое покупное тесто, но если вы хотите приготовить его самостоятельно, это можно сделать по рецептам с форума: «Рецепты слоеного теста».</li>
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