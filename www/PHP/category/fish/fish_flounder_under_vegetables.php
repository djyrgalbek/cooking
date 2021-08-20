<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_fish';
        $number = 5; //Изменение по ID
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
                                            <li>500 г камбалы</li>
                                            <li>150 г болгарского перца</li>
                                            <li>150 г баклажанов</li>
                                            <li>150 г помидоров</li>
                                            <li>150 г лука</li>
                                            <li>2 зубчика чеснока</li>
                                            <li>растительное масло</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>мука</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Муку смешать с солью и перцем.</li>
                                            <li>Обвалять рыбу.</li>
                                            <li>На растительном масле пожарить камбалу с одной стороны (жарить около 5 минут).</li>
                                            <li>Перевернуть.
                                            Пожарить с другой стороны (жарить около 5 минут).</li>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Баклажаны нарезать кубиками.
                                            Если баклажаны горькие, их надо посолить, оставить на 30 минут, затем промыть в холодной воде.</li>
                                            <li>Перец очистить от семян.
                                            Нарезать кубиками.</li>
                                            <li>Помидоры нарезать кубиками.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить баклажаны.
                                            Жарить в течение 5 минут.</li>
                                            <li>Добавить перец.</li>
                                            <li>Добавить помидоры.
                                            Посолить.
                                            Жарить до готовности (около 5–10 минут).</li>
                                            <li>В конце приготовления добавить выдавленный через чеснокодавку чеснок.</li>
                                            <li>Перемешать.</li>
                                            <li>Рыбу выложить на тарелку.</li>
                                            <li>На рыбу выложить овощи.</li>
                                            <li>Посыпать зеленью.</li>
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