<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_fish';
        $number = 4; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для рыб и морепродуктов';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../fish.php';
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
                                            <li>400 г филе рыбы (камбала, судак, форель и т.д.)</li>
                                            <li>350 г помидоров</li>
                                            <li>200 г болгарского перца</li>
                                            <li>300 г кабачков</li>
                                            <li>лук порей (или 150 г репчатого лука)</li>
                                            <li>1 веточка розмарина (по желанию)</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Порей нарезать кольцами (репчатый лук мелко нарезать).</li>
                                            <li>Кабачки нарезать кубиками.</li>
                                            <li>Перец очистить от семян.
                                            Нарезать кубиками.</li>
                                            <li>Помидоры нарезать кубиками.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить кабачки.</li>
                                            <li>Перец.</li>
                                            <li>Помидоры.</li>
                                            <li>
                                            Посолить, поперчить.</li>
                                            <li>Добавить розмарин.
                                            Тушить под крышкой в течение 10 минут.</li>
                                            <li>Добавить рыбу.</li>
                                            <li>Немного посолить, поперчить.
                                            Накрыть крышкой.
                                            Тушить около 20–25 минут.</li>
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