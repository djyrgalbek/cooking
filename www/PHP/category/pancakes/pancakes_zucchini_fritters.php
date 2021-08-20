<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_pancakes';
        $number = 5; //Изменение по ID
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
                                            <li>800 г кабачков (или цуккини)</li>
                                            <li>2 яйца</li>
                                            <li>10 ст.л. муки (с горкой)</li>
                                            <li>зелень по вкусу</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Зелень мелко нарезать.</li>
                                            <li>Кабачки натереть на мелкой терке.
                                            Если кабачки крупные, их надо почистить, удалить семена.
                                            Если они очень сочные, сок надо слить.</li>
                                            <li>Добавить яйца.
                                            Перемешать.</li>
                                            <li>Добавить зелень.</li>
                                            <li>Добавить муку.
                                            Посолить, поперчить.
                                            Хорошо перемешать. 
                                            Масса должна быть не густой и не жидкой.</li>
                                            <li>Масло разогреть.
                                            Выложить оладьи.
                                            Жарить в течение 5–7 минут с одной стороны.</li>
                                            <li>Перевернуть.
                                            Жарить в течение 5–7 минут.</li>
                                            <li>Подавать со сметаной.  </li>
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