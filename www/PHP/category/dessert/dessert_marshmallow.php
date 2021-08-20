<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_dessert';
        $number = 1; //Изменение по ID
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
                                            <li>1 кг сахара</li>
                                            <li>25 г (2.5 ст.л.) желатина</li>
                                            <li>15 г (1 ст.л.) лимонной кислоты</li>
                                            <li>6 г (1 ч.л.) ванильного сахара</li>
                                            <li>5 г (1 ч.л.) соды</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Желатин замочить в 100 мл холодной кипяченой воды.
                                            Оставить на то время, которое указано на упаковке.</li>
                                            <li>Сахар замочить в 200 мл холодной кипяченой воды.
                                            Оставить на 2 часа.</li>
                                            <li>Сахар поставить на огонь.
                                            Кипятить, при постоянном помешивании, в течение 7–8 минут.
                                            Снять с огня.</li>
                                            <li>В сахар добавить желатин.
                                            Взбивать в течение 10 минут (взбивать на небольшой скорости).</li>
                                            <li>Добавить лимонную кислоту.
                                            Взбивать в течение 5 минут.</li>
                                            <li>Добавить ванильный сахар.
                                            Взбивать в течение 3 минут.</li>
                                            <li>Добавить соду.
                                            Взбивать в течение 5 минут.</li>
                                            <li>Должна получиться воздушная плотная масса, должен оставаться четкий след от венчика.
                                            Массе дать постоять в течение 10 минут.</li>
                                            <li>При помощи кулинарного шприца (или ложкой) выложить массу на противень (я застелила противень бумагой для выпечки, смазывать противень не надо).
                                            Поставить в холодильник (НЕ в морозилку) на 3–4 часа.</li>
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