<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_cake';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для тортов и пирожнов';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../cake.php';
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
                                            <h2>Тесто:</h2>
                                            <li>3 яйца</li>
                                            <li>150 г сахара</li>
                                            <li>150 г муки</li>
                                            <h2>Крем:</h2>
                                            <li>250 г сливок 33–35%</li>
                                            <li>250 г сыра маскарпоне</li>
                                            <li>150 г сахара</li>
                                            <h2>Также:</h2>
                                            <li>компот из вишни или черешни</li>
                                            <li>100 г шоколада</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Яйца взбить с сахаром (взбивать в течение 5–7 минут).</li>
                                            <li>Добавить муку.
                                            Замесить не густое тесто.</li>
                                            <li>Тесто выложить в смазанную маслом форму (у меня форма диаметром 26 см).
                                            Поставить в разогретую до 180 градусов духовку. 
                                            Выпекать в течение 20–25 минут.</li>
                                            <li>Выпеченный корж немного пропитать вишневым компотом.</li>
                                            <li>Выложить на корж вишню (косточки удалить).</li>
                                            <li>Приготовить крем. 
                                            Сливки взбить с сахаром.</li>
                                            <li>Добавить маскарпоне.
                                            Перемешать.</li>
                                            <li>Выложить крем на вишню.</li>
                                            <li>Шоколад натереть на мелкой терке.</li>
                                            <li>Посыпать пирог шоколадом.
                                            Поставить в холодильник на 3–4 часа.</li>
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