<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_salad';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для салата';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../salad.php';
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
                                            <li>3 спелых авокадо</li>
                                            <li>100 г креветок (отваренных и почищенных)</li>
                                            <li>10–12 помидорок черри (или 2–3 обычных помидора)</li>
                                            <li>сок половины лимона</li>
                                            <li>растительное масло</li>
                                            <li>соль</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Авокадо разрезать вдоль на две части. Косточку вынуть.</li>
                                            <li>При помощи чайной ложки вынуть мякоть, не повредив шкурку.</li>
                                            <li>Мякоть нарезать кубиками.</li>
                                            <li>Добавить лимонный сок. Перемешать.</li>
                                            <li>Помидоры черри разрезать на две или четыре части (обычные помидоры нарезать кубиками).</li>
                                            <li>Креветки нарезать небольшими кусочками.</li>
                                            <li>Смешать мякоть авокадо, креветки, помидоры. Немного посолить. Заправить растительным маслом.</li>
                                            <li>Наполнить шкурки авокадо салатом.</li>
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