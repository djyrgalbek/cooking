<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_second_course';
        $number = 5; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для вторых блюд';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../second_course.php';
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
                                            <li>500 г баклажанов</li>
                                            <li>300 г фарша (любого, по вкусу)</li>
                                            <li>250 г помидоров</li>
                                            <li>150 г лука</li>
                                            <li>100 г сыра</li>
                                            <li>3 зубчика чеснока</li>
                                            <li>растительное масло</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Баклажаны разрезать вдоль на две части.</li>
                                            <li>Из каждой половинки вынуть мякоть.</li>
                                            <li>Посолить, оставить на 30 минут. 
                                            Затем промыть в холодной воде (это делается для того, чтобы они не горчили).</li>
                                            <li>Мякоть положить в холодную воду на 30 минут (для того, чтобы баклажаны не горчили и во время жарки впитывали меньше масла).</li>
                                            <li>Мякоть отжать.
                                            Мелко нарезать.</li>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Чеснок мелко нарезать.</li>
                                            <li>Помидоры нарезать небольшими кубиками.</li>
                                            <li>Лук и чеснок обжарить на растительном масле.</li>
                                            <li>Добавить фарш.
                                            Жарить в течение 10 минут.</li>
                                            <li>Добавить мякоть баклажанов.
                                            Жарить в течение 5 минут.</li>
                                            <li>Добавить помидоры.
                                            Посолить, поперчить.
                                            Жарить в течение 5–7 минут.</li>
                                            <li>Сыр натереть на мелкой терке.</li>
                                            <li>Половинки баклажанов наполнить фаршем.
                                            Выложить в форму для запекания.</li>
                                            <li>Посыпать сыром.
                                            Поставить в духовку.
                                            Запекать при температуре 180 градусов в течение 30–35 минут.</li>
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