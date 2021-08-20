<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_pancakes';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для блинов, оладьев и сырников';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../pancakes.php';
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
                                            <li>500 мл молока</li>
                                            <li>2 яйца</li>
                                            <li>2 ст.л. растительного масла</li>
                                            <li>1 ст.л. сахара</li>
                                            <li>200 г муки</li>
                                            <li>2 ч.л. разрыхлителя (или 1 ч.л. гашеной соды)</li>
                                            <li>соль</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Яйца взбить с сахаром и солью.</li>
                                            <li>Добавить растительное масло.
                                            Перемешать.</li>
                                            <li>Добавить молоко.
                                            Хорошо перемешать.</li>
                                            <li>Добавить соду и муку.
                                            Перемешать венчиком или миксером.</li>
                                            <li>Сковороду разогреть.
                                            Немного смазать маслом. 
                                            В середину налить тесто, сковороду покрутить, чтобы тесто равномерно распределилось. 
                                            Когда низ блина зазолотится, его надо перевернуть.</li>
                                            <li>Пожарить с другой стороны.</li>                                 
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