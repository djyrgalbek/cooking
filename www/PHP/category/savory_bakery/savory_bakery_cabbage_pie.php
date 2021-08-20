<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_savory_bakery';
        $number = 4; //Изменение по ID
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
                                            <h2>Тесто:</h2>
                                            <li>200 мл молока</li>
                                            <li>7 г сухих дрожжей (или 50 г сырых)</li>
                                            <li>100 г сливочного масла</li>
                                            <li>2 яйца</li>
                                            <li>500–550 г муки</li>
                                            <li>соль</li>
                                            <h2>Начинка:</h2>
                                            <li>начинка:</li>
                                            <li>150 г лука</li>
                                            <li>2 яйца</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>В теплое молоко добавить дрожжи.</li>
                                            <li>Добавить 100 г муки.
                                            Перемешать.
                                            Поставить в теплое место (я в чашку наливаю теплую воду, ставлю в нее посуду с тестом).
                                            Накрыть полотенцем.</li>
                                            <li>Через 15–20 минут опара должна подняться.</li>
                                            <li>Добавить в нее масло.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить яйца.
                                            Немного посолить.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить муку.
                                            Замесить тесто.
                                            Поставить в теплое место.</li>
                                            <li>Примерно через 30 минут тесто должно подняться.</li>
                                            <li>Его надо обмять.</li>
                                            <li>Еще раз дать подняться.</li>
                                            <li>Готовим начинку.
                                            Лук мелко нарезать.</li>
                                            <li>Капусту нашинковать соломкой.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить капусту.</li>
                                            <li>Тушить до тех пор, пока капуста не станет мягкой (около 20–30 минут).</li>
                                            <li>Добавить яйца.</li>
                                            <li>Перемешать.
                                            Посолить, поперчить. 
                                            Тушить в течение 5 минут.
                                            Остудить.</li>
                                            <li>Тесто разделить на две части.
                                            Форму для запекания (я использовала форму размером 20×30 см) смазать маслом или застелить бумагой для выпечки.
                                            Раскатать одну часть теста, выложить в форму.</li>
                                            <li>На тесто выложить начинку.</li>
                                            <li>Раскатать вторую часть теста.
                                            Выложить на начинку, края защипнуть.</li>
                                            <li>В серединке сделать надрез для выхода пара.
                                            Поставить пирог в разогретую до 180 градусов духовку.
                                            Выпекать в течение 30–35 минут.</li>
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