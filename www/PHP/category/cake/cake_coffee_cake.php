<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_cake';
        $number = 4; //Изменение по ID
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
                                            <li>3 ч.л. растворимого кофе</li>
                                            <li>100–150 г муки</li>
                                            <h2>Суфле:</h2>
                                            <li>500 мл сливок 33–35%</li>
                                            <li>5 ч.л. растворимого кофе</li>
                                            <li>150 г сахара</li>
                                            <li>20 г желатина</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Готовим бисквит.
                                            Кофе растворить в минимальном количестве горячей воды (2–3 ст.л.).
                                            Остудить.</li>
                                            <li>Яйца взбить с сахаром.</li>
                                            <li>Добавить кофе.
                                            Перемешать.</li>
                                            <li>Добавить муку.
                                            Аккуратно перемешать.</li>
                                            <li>Форму (я использовала форму размером 20×30 см) смазать маслом или застелить бумагой для выпечки.
                                            Выложить тесто.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 10–15 минут.
                                            Остудить.</li>
                                            <li>Готовим суфле.
                                            Желатин замочить в 100 мл холодной кипяченой воды.
                                            Оставить на то время, которое указано на упаковке.</li>
                                            <li>Желатин довести до кипения, но не кипятить.</li>
                                            <li>Кофе растворить в 200 мл горячей воды.
                                            Остудить.</li>
                                            <li>Сливки взбить с сахаром.</li>
                                            <li>Добавить кофе.
                                            Перемешать.</li>
                                            <li>Добавить желатин.
                                            Перемешать.</li>
                                            <li>На остывший корж выложить суфле.
                                            Поставить в холодильник на 6–8 часов.</li>
                                            <li>Готовый корж нарезать на прямоугольники, при помощи широкой лопатки достать из формы.</li>
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