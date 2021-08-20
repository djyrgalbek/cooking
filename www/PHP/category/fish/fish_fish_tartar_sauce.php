<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_fish';
        $number = 1; //Изменение по ID
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
                                            <li>500 г филе рыбы (тилапия, судак, горбуша и т.д.)</li>
                                            <li>1 яйцо</li>
                                            <li>панировочные сухари</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                            <h2>Соус:</h2>
                                            <li>7 ст.л. майонеза</li>
                                            <li>100 г маринованных или соленых огурцов</li>
                                            <li>2 зубчика чеснока</li>
                                            <li>зелень</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Рыбу нарезать небольшими кусочками.</li>
                                            <li>Яйцо взбить.</li>
                                            <li>Посолить, поперчить.</li>
                                            <li>Рыбу обвалять в яйце.</li>
                                            <li>Обвалять в панировочных сухарях.</li>
                                            <li>Пожарить рыбу на растительном масле с одной стороны (около 5–7 минут).</li>
                                            <li>Перевернуть.
                                            Поджарить с другой стороны (около 5–7 минут).</li>
                                            <li>Готовим соус.
                                            Огурцы мелко нарезать.</li>
                                            <li>Зелень мелко нарезать.</li>
                                            <li>В майонез добавить выдавленный через чеснокодавку чеснок.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить огурцы.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить зелень.</li>
                                            <li>Перемешать.</li>
                                            <li>Выложить соус на рыбу.</li>
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