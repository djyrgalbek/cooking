<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_cake';
        $number = 3; //Изменение по ID
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
                                            <h2>Основа:</h2>
                                            <li>400 г шоколадного печенья (типа юбилейного)</li>
                                            <li>180 г сливочного масла</li>
                                            <h2>Начинка:</h2>
                                            <li>500 г творожного сыра (альметте, хохланд, филадельфия)</li>
                                            <li>150 г сливок 33–35%</li>
                                            <li>3 яйца</li>
                                            <li>100 г сахара</li>
                                            <li>100 г шоколада</li>
                                            <h2>Ганаш:</h2>
                                            <li>150 г шоколада</li>
                                            <li>100 мл сливок 33–35%</li>
                                            <li>20 г сливочного масла</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Готовим основу.
                                            Масло растопить.</li>
                                            <li>Печенье измельчить.</li>
                                            <li>Смешать масло и печенье.</li>
                                            <li>Печенье с маслом выложить в форму (диаметром 24–26 см).
                                            Хорошо утрамбовать.
                                            Сделать бортики.
                                            Поставить в холодильник (на то время, пока готовим начинку).</li>
                                            <li>Готовим начинку.
                                            Шоколад растопить.</li>
                                            <li>Сыр перемешать с сахаром.</li>
                                            <li>Добавить сливки.
                                            Перемешать.</li>
                                            <li>Добавить яйца.
                                            Перемешать.</li>
                                            <li>Добавить шоколад.
                                            Перемешать.</li>
                                            <li>Начинку вылить на основу.</li>
                                            <li>Форму обернуть фольгой так, чтобы бока были плотно закрыты (это делается для того, чтобы не просочилась вода).</li>
                                            <li>Форму с чизкейком поставить в глубокий противень или в форму большего размера.
                                            В противень налить горячую воду так, чтобы она доходила до середины формы с чизкейком.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение часа.
                                            Остудить.</li>
                                            <li>Готовим ганаш.
                                            Шоколад растопить.</li>
                                            <li>Остудить.</li>
                                            <li>Добавить сливки.
                                            Перемешать.</li>
                                            <li>Добавить масло.</li>
                                            <li>Перемешать.</li>
                                            <li>Вылить ганаш на остывший чизкейк.</li>
                                            <li>Украсить по вкусу.</li>
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