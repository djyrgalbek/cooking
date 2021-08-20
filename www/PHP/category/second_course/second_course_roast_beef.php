<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_second_course';
        $number = 3; //Изменение по ID
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
                                                <li>1 кг говядины (мраморной)</li>
                                                <li>5–7 горошин черного перца</li>
                                                <li>1 ч.л. сушеного розмарина</li>
                                                <li>1 ч.л. сушеных трав (я использовала прованские)</li>
                                                <li>1 ст. л. соли</li>
                                                <li>3 ст.л. растительного масла</li>
                                                <h2>Соус:</h2>
                                                <li>5 ч.л. горчицы (я использовала в зернах)</li>
                                                <li>3 ч.л. каперсов</li>
                                                <li>2 ст.л. растительного масла</li>
                                                <li>5 ст.л. лимонного сока</li>
                                                <li>перец</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Горошины перца растолочь в ступке.</li>       
                                            <li>Добавить травы, растолочь.</li>
                                            <li>Добавить соль, перемешать.</li>
                                            <li>Добавить масло, перемешать.</li>
                                            <li>Полученной смесью натереть мясо.</li>
                                            <li>Стянуть кулинарной нитью.</li>
                                            <li>Выложить в форму для запекания.</li>
                                            <li>Запекать при температуре 250 градусов в течение 10 минут.
                                            Затем температуру снизить до 180 градусов, запекать в течение 30 минут.
                                            Готовый ростбиф вынуть из духовки, накрыть фольгой, оставить на 20–30 минут. 
                                            Затем снять нитки, нарезать на порции.</li>
                                            <li>Готовим соус.
                                            Смешать горчицу и каперсы.</li>
                                            <li>Добавить лимонный сок.</li>
                                            <li>Добавить масло.</li>
                                            <li>Поперчить.</li>
                                            <li>Перемешать.
                                            Подать к мясу.</li>
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