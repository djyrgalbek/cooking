<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_dessert';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для десертов и напитков';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../dessert.php';
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
                                            <li>400 г ягоды (у меня черника)</li>
                                            <li>150 г сахара</li>
                                            <li>6 г (3 ч.л.) агар-агара</li>
                                            <li>1 апельсин</li>
                                            <li>150 мл воды</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Из апельсина выжать сок (нам понадобится 100 мл).</li>
                                            <li>Добавить агар-агар.</li>
                                            <li>Перемешать.
                                            Оставить на 30 минут.</li>
                                            <li>Ягоду положить в блендер.</li>
                                            <li>Измельчить (должно получиться однородное пюре).</li>
                                            <li>В кастрюльку положить ягодное пюре.
                                            Добавить сахар.</li>
                                            <li>Влить воду.
                                            Довести до кипения.
                                            Кипятить на слабом огне в течение 5 минут.</li>
                                            <li>Добавить агар-агар.
                                            Кипятить в течение 5 минут.</li>
                                            <li>Горячую массу разлить по формочкам.
                                            Оставить на 1–2 часа (можно при комнатной температуре).</li>
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