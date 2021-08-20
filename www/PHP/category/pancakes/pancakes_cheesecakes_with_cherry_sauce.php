<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_pancakes';
        $number = 3; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для блинов, оладьев и сырников';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../pancakes.php';
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
                                            <li>400 г творога (любой жирности)</li>
                                            <li>2 яйца</li>
                                            <li>50 г сахара</li>
                                            <li>2 ч.л. ванильного сахара</li>
                                            <li>100 г муки (плюс 2–3 ст.л. для панировки)</li>
                                            <li>растительное масло</li>
                                            <h2>Соус:</h2>
                                            <li>300 г вишни</li>
                                            <li>50 г сахара</li>
                                            <li>1 ст.л. крахмала (без верха)</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Творог растереть с сахаром и ванильным сахаром.</li>
                                            <li>Добавить яйца.
                                            Перемешать.</li>
                                            <li>Добавить муку.
                                            Хорошо перемешать. 
                                            Так как творог бывает сухой, бывает влажный, муки может понадобиться чуть больше или меньше.
                                            Тесто не должно быть густым, оно должно прилипать к рукам.</li>
                                            <li>Из теста сформировать небольшие лепешечки.
                                            Обвалять их в муке.</li>
                                            <li>В сковороду налить немного масла.
                                            Разогреть.
                                            Выложить сырники.
                                            Жарить на среднем огне до золотистого цвета (я жарила около 10 минут).</li>
                                            <li>Перевернуть.
                                            Пожарить с другой стороны.</li>
                                            <li>Готовим соус.
                                            Крахмал развести в 150 мл холодной воды.</li>
                                            <li>В вишню добавить сахар, 200 мл воды.
                                            Довести до кипения.
                                            Варить в течение 1–2 минут.</li>
                                            <li>
                                            Влить крахмал.
                                            Перемешать.
                                            Убрать с огня.</li>
                                            <li>Сырники полить соусом.</li>     
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