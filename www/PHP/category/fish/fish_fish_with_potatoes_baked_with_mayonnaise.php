<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_fish';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для рыб и морепродуктов';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../fish.php';
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
                                            <li>500 г филе рыбы (тилапия, судак, палтус, пангасиус и т.д.)</li>
                                            <li>1 кг картофеля</li>
                                            <li>350 г помидоров</li>
                                            <li>100 г сыра</li>
                                            <li>майонез</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Рыбу нарезать небольшими кусочками.</li>
                                            <li>Помидоры нарезать кружочками.</li>
                                            <li>Картофель почистить.
                                            Нарезать кружочками.</li>
                                            <li>Сыр натереть на мелкой терке.</li>
                                            <li>В форму для запекания выложить рыбу.</li>
                                            <li>Посолить, поперчить.</li>
                                            <li>На рыбу выложить помидоры.</li>
                                            <li>На помидоры выложить картофель
                                            Немного посолить.</li>
                                            <li>Картофель смазать майонезом.</li>
                                            <li>Посыпать сыром.
                                            Поставить в духовку. 
                                            Запекать при температуре 180 градусов до готовности (около 40 минут).</li>
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