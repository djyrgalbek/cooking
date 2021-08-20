<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_salad';
        $number = 2; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для салата';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../salad.php';
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
                                            <li>200 г салата Ромэн</li>
                                            <li>50–70 г пармезана</li>

                                            <h2>Гренки:</h2><!-- Подзаголовок. Использовать при необходимости!-->
                                            <li>100 г батона</li>
                                            <li>3 ст.л. растительного масла</li>
                                            <li>2 зубчика чеснока</li>

                                            <h2>Cоус:</h2>
                                            <li>1 яйцо</li>
                                            <li>1 ч.л. горчицы (пасты)</li>
                                            <li>1 ст.л. лимонного сока</li>
                                            <li>3 ст.л. растительного масла</li>
                                            <li>1 ч.л. вустерского соуса</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Готовим гренки. В масло добавить выдавленный через чеснокодавку чеснок. Оставить на 20 минут.</li>
                                            <li>С батона срезать корки. Нарезать кубиками.</li>
                                            <li>На сковороду вылить чесночное масло.</li>
                                            <li>Добавить нарезанный батон.</li>
                                            <li>На небольшом огне пожарить до золотистого цвета.</li>
                                            <li>Готовим соус. В небольшой кастрюльке или ковшике вскипятить воду.</li>
                                            <li>В кипящую воду положить яйцо и сразу убрать с огня.</li>
                                            <li>Подержать яйцо в воде в течение 1 минуты. Вынуть яйцо. Остудить в течение 15 минут.</li>
                                            <li>Яйцо разбить в миску.</li>
                                            <li>Добавить горчицу и лимонный сок.</li>
                                            <li>Взбить погружным блендером.</li>
                                            <li>Добавить масло.</li>
                                            <li>Взбить.</li>
                                            <li>Добавить вустерский соус. Перемешать. Должна получиться однородная масса. Посолить, поперчить.</li>
                                            <li>Пармезан натереть на терке.</li>
                                            <li>Листья салата порвать руками.</li>
                                            <li>Добавить соус.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить сухарики. Перемешать.</li>
                                            <li>Салат выложить на тарелки.</li>
                                            <li>Посыпать пармезаном.</li>
                                            <li>Подавать сразу.</li>
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