<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_second_course';
        $number = 4; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для вторых блюд';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../second_course.php';
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
                                            <li>1.5 кг мяса (баранины, свинины или говядины)</li>
                                            <li>1 кг риса (в идеале сорта девзира)</li>
                                            <li>600 г моркови</li>
                                            <li>500 г лука</li>
                                            <li>1 ст.л. зиры</li>
                                            <li>1 ст.л. барбариса</li>
                                            <li>½ ст.л. куркумы</li>
                                            <li>1 головка чеснока</li>
                                            <li>красный молотый перец</li>
                                            <li>черный молотый перец</li>
                                            <li>соль</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук нарезать соломкой.</li>
                                            <li>Мясо нарезать небольшими кусочками.</li>
                                            <li>Морковь нарезать брусочками.</li>
                                            <li>В большом количестве растительного масла (около 150 мл) обжарить лук до золотистого цвета.</li>
                                            <li>Добавить мясо.
                                            Обжарить.</li>
                                            <li>Добавить морковь.
                                            Тушить в течение 5–7 минут (крышкой не накрывать).</li>
                                            <li>Добавить зиру, барбарис, куркуму.
                                            Посолить, поперчить.
                                            Перемешать.</li>
                                            <li>Налить воду так, чтобы она покрывала мясо. 
                                            Накрыть крышкой.
                                            Тушить в течение 35–40 минут (на среднем огне).</li>
                                            <li>В холодной воде 5–6 раз промыть рис.</li>
                                            <li>Всыпать рис (с мясом НЕ перемешивать!).
                                            Разровнять.</li>
                                            <li>Аккуратно влить горячую или теплую воду так, чтобы она покрывала рис на 2 см. 
                                            Немного посолить. 
                                            Накрыть крышкой.
                                            Варить до тех пор, пока рис не впитает воду.</li>
                                            <li>В серединку положить чеснок, вдавить его в рис. 
                                            Деревянной палочкой сделать отверстия (рис и мясо не перемешивать) для выхода пара.
                                            Готовить под крышкой до готовности (около 20–25 минут).</li>
                                            <li>При подаче все перемешать.</li>
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