<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_bakery';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для выпечек';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../bakery.php';
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
                                            <li>150 г сливочного масла</li>
                                            <li>100 г сахара</li>
                                            <li>2 ч.л. ванильного сахара</li>
                                            <li>2 яйца</li>
                                            <li>2 ч.л. разрыхлителя</li>
                                            <li>300–350 г муки</li>
                                            <li>300 г шоколада (горького или молочного, по вкусу)</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Масло растереть с сахаром и ванильным сахаром.</li>
                                            <li>Добавить яйца.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить разрыхлитель и муку.
                                            Замесить тесто.</li>
                                            <li>Форму (я использовала форму размером 20×30 см) смазать маслом или застелить бумагой для выпечки.
                                            Выложить тесто.
                                            Разровнять.</li>
                                            <li>На тесто положить бумагу для выпечки.</li>
                                            <li>Насыпать горох или фасоль.
                                            Разровнять (это делается для того, чтобы тесто равномерно пропеклось и корж не деформировался). 
                                            После приготовления я фасоль выбросила.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 20 минут.</li>
                                            <li>Шоколад растопить на водяной бане.</li>
                                            <li>На теплый корж выложить горячий шоколад.
                                            Разровнять.</li>
                                            <li>Дать шоколаду полностью застыть (можно поставить в холодильник на 2–3 часа), после этого разрезать на квадратики.
                                            При желании, можно украсить растопленным белым шоколадом.</li>
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