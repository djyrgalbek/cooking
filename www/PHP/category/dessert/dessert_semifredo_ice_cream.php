<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_dessert';
        $number = 4; //Изменение по ID
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
                                            <li>500 мл сливок 33–35%</li>
                                            <li>5 яиц</li>
                                            <li>150 г сахара</li>
                                            <li>200 г клубники</li>
                                            <li>3 ч.л. какао</li>
                                            <li>2 ч.л. ванильного сахара</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Сливки взбить.</li>
                                            <li>Отделить белки от желтков.
                                            Желтки взбить с сахаром.</li>
                                            <li>Смешать сливки и желтки.</li>
                                            <li>Белки взбить со щепоткой соли в пену.</li>
                                            <li>Белки добавить в сливочную массу.</li>
                                            <li>Аккуратно перемешать.</li>
                                            <li>Ягоду измельчить.</li>
                                            <li>Далее массу разделить на столько частей, сколько вы будете использовать наполнителей.
                                            Я разделила на 3 части.
                                            В одну добавила ванильный сахар.
                                            Во вторую какао.
                                            В третью клубнику.
                                            Массу выложить в формы, в которых можно замораживать.
                                            Поставить в морозилку на 6–8 часов.</li>
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