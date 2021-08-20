<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_pancakes';
        $number = 4; //Изменение по ID
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
                                            <h2>Тесто:</h2>
                                            <li>2 яйца</li>
                                            <li>50 г сахара</li>
                                            <li>500 мл молока</li>
                                            <li>20 г какао порошка</li>
                                            <li>100–130 г муки</li>
                                            <li>¼ ч.л. соли</li>
                                            <li>3 ст.л. растительного масла</li>
                                            <h2>Также:</h2>
                                            <li>2–3 банана</li>
                                            <li>100 г грецких орехов (или любых, по вкусу)</li>
                                            <li>100 г шоколада</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Яйца с солью взбить в пышную пену.</li>
                                            <li>Добавить сахар.
                                            Хорошо взбить.</li>
                                            <li>Добавить какао.
                                            Аккуратно перемешать.</li>
                                            <li>Добавить молоко.
                                            Аккуратно перемешать (на самой низкой скорости миксера).</li>
                                            <li>Добавить муку.
                                            Аккуратно перемешать.</li>
                                            <li>Добавить растительное масло.
                                            Перемешать.</li>
                                            <li>Сковороду разогреть.
                                            Немного смазать маслом.
                                            В середину налить тесто, сковороду покрутить, чтобы тесто равномерно распределилось. 
                                            Когда низ блина поджарится, его надо перевернуть.</li>
                                            <li>Пожарить с другой стороны.</li>
                                            <li>Шоколад поломать на кусочки.
                                            Поставить на водяную баню.</li>
                                            <li>Растопить.</li>
                                            <li>Орехи измельчить.</li>
                                            <li>Бананы мелко нарезать.</li>
                                            <li>Смешать бананы и орехи.</li>
                                            <li>На середину блина выложить начинку.</li>
                                            <li>Завернуть края к центру.</li>
                                            <li>Свернуть конвертик.</li>
                                            <li>Полить растопленным шоколадом.</li>  
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