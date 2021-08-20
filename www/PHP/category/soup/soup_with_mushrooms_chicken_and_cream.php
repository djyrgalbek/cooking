<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_soup';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для первых блюд';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../soup.php';
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
                                            <li>500 г куриного филе (или филе индейки)</li>
                                            <li>300 г грибов (я использовала шампиньоны)</li>
                                            <li>700 г картофеля</li>
                                            <li>100 г макаронных изделий (я использовала ракушки)</li>
                                            <li>лук порей (или 150 г репчатого лука)</li>
                                            <li>250 мл сливок 10–20%</li>
                                            <li>сыр (по желанию)</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук порей нарезать полукольцами (репчатый мелко нарезать).</li>
                                            <li>Филе нарезать небольшими кусочками.</li>
                                            <li>Грибы нарезать небольшими кусочками.</li>
                                            <li>Картофель нарезать кубиками или брусочками.</li>
                                            <li>В кастрюле, на растительном масле, обжарить лук.</li>
                                            <li>Добавить филе.
                                            Слегка обжарить.</li>
                                            <li>Добавить грибы.</li>
                                            <li>Посолить, поперчить.</li>
                                            <li>Залить водой.
                                            Варить в течение 20 минут.</li>
                                            <li>Добавить картофель.
                                            Варить в течение 10 минут.</li>
                                            <li>Добавить макароны.
                                            Варить до готовности макарон.</li>
                                            <li>Добавить сливки.
                                            Перемешать.
                                            Убрать с огня.</li>
                                            <li>Сыр натереть на мелкой терке.
                                            При подаче суп посыпать сыром.</li>
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