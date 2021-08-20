<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_soup';
        $number = 5; //Изменение по ID
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
                                            <li>500 г картофеля</li>                                   
                                            <li>200 г опят</li>
                                            <li>150 г моркови</li>
                                            <li>150 г лука</li>
                                            <li>200 г плавленого сыра (я использовала сыр с грибами)</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Грибы залить водой.
                                            Варить в течение 25–35 минут.</li>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Морковь натереть на мелкой терке.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить морковь.
                                            Обжарить.</li>
                                            <li>Картофель нарезать кубиками или брусочками.</li>
                                            <li>В бульон добавить картофель.
                                            Посолить, поперчить.
                                            Варить в течение 5–10 минут.</li>
                                            <li>Добавить лук и морковь.
                                            Варить в течение 3–5 минут.</li>
                                            <li>В конце приготовления добавить сыр.
                                            Перемешать.
                                            Убрать с огня.</li>
                                            <li>При подаче посыпать зеленью.</li>
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