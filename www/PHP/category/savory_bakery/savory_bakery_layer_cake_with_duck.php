<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_savory_bakery';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для несладких выпечек';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../savory_bakery.php';
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
                                            <li>500 г слоеного теста (я использовала дрожжевое)</li>
                                            <li>300 г утиного филе</li>
                                            <li>300 г грибов</li>
                                            <li>200 г лука</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                            <h2>Маринад:</h2>
                                            <li>20 мл растительного масла</li>
                                            <li>1 ст.л. сушеных трав (я использовала прованские)</li>
                                            <li>1–2 зубчика чеснока</li>
                                            <li>веточка розмарина (по желанию)</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Готовим маринад.
                                            В масло добавить выдавленный через чеснокодавку чеснок.</li>
                                            <li>Добавить травы.</li>
                                            <li>Посолить, поперчить.
                                            Перемешать.</li>
                                            <li>Обвалять филе утки в маринаде.
                                            Оставить на 20–25 минут.</li>
                                            <li>Выложить филе в фольгу.</li>
                                            <li>На филе выложить веточку розмарина.</li>
                                            <li>Фольгу завернуть.</li>
                                            <li>Выложить в форму для запекания.
                                            Поставить в духовку.
                                            Запекать при температуре 180 градусов в течение 45–50 минут.
                                            Остудить.</li>
                                            <li>Лук нарезать соломкой.</li>
                                            <li>Грибы тонко нарезать.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить грибы.</li>
                                            <li>Посолить, поперчить.</li>
                                            <li>Жарить в течение 10 минут.</li>
                                            <li>Филе разобрать на волокна.</li>
                                            <li>Добавить филе к грибам с луком.
                                            Перемешать.
                                            Остудить.</li>
                                            <li>Половину теста раскатать в пласт толщиной 3 мм.</li>
                                            <li>Вырезать круг (диаметром больше, чем диаметр формы для выпечки).</li>
                                            <li>Выложить в форму для запекания (я использовала форму диаметром 26 см), сделав бортики.</li>
                                            <li>Выложить начинку.</li>
                                            <li>Из второй части теста вырезать круг толщиной около 3 мм, диаметром, равным диаметру формы для выпечки.</li>
                                            <li>Выложить на начинку.
                                            Края защипнуть.</li>
                                            <li>Из обрезков теста можно вырезать фигурки.</li>
                                            <li>Приклеить их на желток.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 20–25 минут.</li>
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