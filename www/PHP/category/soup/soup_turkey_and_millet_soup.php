<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_soup';
        $number = 3; //Изменение по ID
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
                                            <li>700 г филе индейки</li>
                                            <li>200 г пшена</li>
                                            <li>800 г картофеля</li>
                                            <li>200 г лука</li>
                                            <li>200 г моркови</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Морковь натереть на средней терке.</li>
                                            <li>Мясо нарезать небольшими кусочками.</li>
                                            <li>В кастрюле, на растительном масле, обжарить лук.</li>
                                            <li>Добавить морковь.
                                            Обжарить.</li>
                                            <li>Добавить мясо.
                                            Слегка обжарить.</li>
                                            <li>Залить водой.
                                            Посолить, поперчить.
                                            Варить в течение 20–25 минут.</li>
                                            <li>Пшено промыть в горячей воде (для того, чтобы оно не горчило).</li>
                                            <li>Картофель почистить.
                                            Нарезать кубиками или брусочками.</li>
                                            <li>В кастрюлю с мясом добавить пшено.</li>
                                            <li>Добавить картофель.
                                            Если необходимо, посолить.
                                            Варить в течение 20–25 минут.</li>
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