<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_bakery';
        $number = 2; //Изменение по ID
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
                                            <h2>Тесто:</h2>
                                            <li>100 г сливочного масла</li>
                                            <li>100 г сахара</li>
                                            <li>2 желтка</li>
                                            <li>2 ч.л. разрыхлителя</li>
                                            <li>250–300 г муки</li>
                                            <h2>Безе:</h2>
                                            <li>2 белка</li>
                                            <li>100 г сахара</li>
                                            <h2>Также:</h2>
                                            <li>2–3 груши</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Груши нарезать ломтиками толщиной 2–3 мм.</li>
                                            <li>Готовим тесто.
                                            Масло растереть с сахаром.</li>
                                            <li>Добавить желтки.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить разрыхлитель и муку.
                                            Замесить не крутое тесто.</li>
                                            <li>Форму (у меня форма диаметром 27 см, и высотой 3 см) смазать маслом или застелить бумагой для выпечки.
                                            Выложить тесто.
                                            Разровнять.
                                            Сделать бортики.</li>
                                            <li>Выложить груши.
                                            Разровнять.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 25–30 минут.
                                            Затем пирог достать из духовки, немного остудить. 
                                            Духовку переключить на 150 градусов.</li>
                                            <li>Белки с сахаром взбить.</li>
                                            <li>С помощью кулинарного шприца выложить белки на пирог, можно выложить сеточкой.
                                            Если шприца нет, белки можно выложить в полиэтиленовый пакет, сделать отверстие, и выдавить белки.
                                            Поставить пирог в разогретую до 150 градусов духовку.
                                            Выпекать еще около 15–20 минут (белки должны немного зазолотиться).
                                            Готовый пирог надо аккуратно разрезать, так как безе сильно крошится.</li>
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