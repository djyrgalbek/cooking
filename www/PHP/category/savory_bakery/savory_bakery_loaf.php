<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_savory_bakery';
        $number = 1; //Изменение по ID
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
                                            <li>300 мл воды</li>
                                            <li>10 г сухих дрожжей (или 30–35 г сырых)</li>
                                            <li>1 ч.л. сахара</li>
                                            <li>2 ст.л. растительного масла</li>
                                            <li>1 ч.л. соли</li>
                                            <li>400–450 г муки</li>
                                            <h2>По желанию:</h2>
                                            <li>желток</li>
                                            <li>кунжут</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Воду подогреть (она должна быть теплая, не горячая).
                                            Добавить сахар.</li>
                                            <li>Добавить дрожжи.</li>
                                            <li>Добавить 150 г муки.
                                            Перемешать.
                                            Накрыть салфеткой.
                                            Поставить в теплое место.</li>
                                            <li>Опара должна увеличиться вдвое (у меня на это ушло 20 минут).</li>
                                            <li>Добавить растительное масло.</li>
                                            <li>Добавить соль.</li>
                                            <li>Добавить оставшуюся муку.
                                            Замесить тесто.
                                            Накрыть салфеткой.
                                            Поставить в теплое место.</li>
                                            <li>Тесто должно подняться (у меня на это ушло 30 минут).</li>
                                            <li>Тесто разделить на три равные части.
                                            Сформировать жгуты.</li>
                                            <li>Верхушки слепить.</li>
                                            <li>Сплести косичку.</li>
                                            <li>Накрыть салфеткой.
                                            Дать подняться.</li>
                                            <li>Смазать желтком.</li>
                                            <li>Посыпать кунжутом.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 35–40 минут.</li>
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