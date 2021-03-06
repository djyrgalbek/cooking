<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_bakery';
        $number = 5; //Изменение по ID
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
                                            <li>2 яйца</li>
                                            <li>150 г сахара</li>
                                            <li>150 г манки</li>
                                            <li>250 г сметаны (или кефира)</li>
                                            <li>2 ч.л. ванильного сахара</li>
                                            <li>1 апельсин</li>
                                            <li>150–200 г муки</li>
                                            <li>2 ч.л. разрыхлителя</li>
                                            <h2>Также:</h2>
                                            <li>100 г шоколада</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Манку перемешать со сметаной.
                                            Оставить на 30 минут.</li>
                                            <li>Из апельсина выжать сок (всего необходимо 100 мл).</li>
                                            <li>Яйца перемешать с сахаром.</li>
                                            <li>Добавить сок.</li>
                                            <li>Добавить манку со сметаной.
                                            Перемешать.</li>
                                            <li>Добавить разрыхлитель и муку.
                                            Перемешать.</li>
                                            <li>Форму (я использовала форму размером 25×15 см) немного смазать маслом.
                                            Выложить тесто.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 30–35 минут.</li>
                                            <li>Шоколад растопить.</li>
                                            <li>Остывший манник покрыть шоколадом.</li>
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