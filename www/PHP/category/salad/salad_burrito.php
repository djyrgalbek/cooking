<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_salad';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для салата';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../salad.php';
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
                                            <li>6–8 лепешек тортильяс</li>
                                            <li>300 г фарша (любого, по вкусу)</li>
                                            <li>250 г фасоли (консервированной)</li>
                                            <li>350 г помидоров</li>
                                            <li>150 г лука</li>
                                            <li>3 зубчика чеснока</li>
                                            <li>150 г сыра</li>
                                            <li>перчик чили</li>
                                            <li>соус сальса (около 6–8 ст.л.)</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Чеснок мелко нарезать.</li>
                                            <li>Помидоры нарезать небольшими кусочками.</li>
                                            <li>Чили освободить от семян. Мелко нарезать.</li>
                                            <li>На растительном масле обжарить лук и чеснок.</li>
                                            <li>Добавить чили.</li>
                                            <li>Добавить фарш. Немного обжарить.</li>
                                            <li>Добавить помидоры.</li>
                                            <li>Перемешать. Посолить, поперчить. Жарить до готовности (около 20 минут).</li>
                                            <li>Добавить фасоль.</li>
                                            <li>Перемешать. Убрать с огня.</li>
                                            <li>Сыр натереть на крупной терке.</li>
                                            <li>Тортильяс смазать сальсой.</li>
                                            <li>Выложить начинку.</li>
                                            <li>Посыпать сыром.</li>
                                            <li>Свернуть.</li>
                                            <li>Выложить в форму для запекания. Поставить в разогретую до 180 градусов духовку. Запекать в течение 10–15 минут.</li>
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