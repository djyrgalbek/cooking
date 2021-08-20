<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_cake';
        $number = 2; //Изменение по ID
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
                                            <li>300 г сливочного масла</li>
                                            <li>2 яйца</li>
                                            <li>150 мл воды</li>
                                            <li>1 ст.л. уксуса 6% или 2 ст.л. лимонного сока</li>
                                            <li>1/8 ч.л. соли</li>
                                            <li>600–650 г муки</li>
                                            <h2>Крем:</h2>
                                            <li>1 л молока</li>
                                            <li>400 г сахара</li>
                                            <li>2 ч.л. ванильного сахара</li>
                                            <li>8 желтков</li>
                                            <li>100 г муки</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>В холодную воду добавить уксус.
                                            Перемешать.</li>
                                            <li>Яйца взбить.</li>
                                            <li>Добавить воду с уксусом, соль.
                                            Перемешать.</li>
                                            <li>Холодное масло натереть на крупной терке или нарезать кубиками.</li>
                                            <li>Муку высыпать на разделочную поверхность.</li>
                                            <li>Добавить масло.</li>
                                            <li>Муку с маслом порубить ножом.</li>
                                            <li>В полученной массе сделать углубление.
                                            Вылить яйца с уксусом.</li>
                                            <li>Замесить тесто.</li>
                                            <li>Разделить тесто на 10–12 частей.
                                            Сформировать шарики.</li>
                                            <li>Накрыть их пищевой пленкой.
                                            Убрать в холодильник на 1 час.</li>
                                            <li>Затем каждый шарик тонко раскатать на бумаге для выпечки.</li>
                                            <li>Вырезать круг, диаметром около 24–26 см.</li>
                                            <li>Круг наколоть вилкой.
                                            Перенести бумагу на противень (обрезки не убирать).
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 7–10 минут.</li>
                                            <li>Готовим крем.
                                            Молоко довести до кипения.</li>
                                            <li>Желтки растереть с сахаром и ванильным сахаром.</li>
                                            <li>Добавить муку.
                                            Перемешать.</li>
                                            <li>Добавить горячее молоко.
                                            Перемешать.</li>
                                            <li>Поставить массу на небольшой огонь.
                                            Варить, при постоянном помешивании, до загустения.</li>
                                            <li>Выпеченный охлажденный корж выложить в форму.</li>
                                            <li>Смазать остывшим кремом.</li>
                                            <li>Накрыть вторым коржом.
                                            Смазать кремом.
                                            Собрать, таким образом, весть торт.
                                            Бока и верх обмазать кремом.</li>
                                            <li>Обрезки измельчить в блендере.
                                            Посыпать ими бока и верх торта.</li>
                                            <li>Торт поставить в холодильник на 6–8 часов.</li>
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