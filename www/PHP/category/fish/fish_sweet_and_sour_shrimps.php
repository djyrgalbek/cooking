<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_fish';
        $number = 2; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для рыб и морепродуктов';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../fish.php';
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
                                            <li>350 г креветок (не очищенных)</li>
                                            <li>250 г ананасов (кусочками)</li>
                                            <li>50 мл соевого соуса</li>
                                            <li>100 г томатного соуса (кетчупа, пасты)</li>
                                            <li>2–3 зубчика чеснока</li>
                                            <li>1 ст.л. сливочного масла</li>
                                            <li>1 ч.л. молотого имбиря</li>
                                            <li>1 ч.л. крахмала</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>Приготовление</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Креветки почистить.</li>
                                            <li>Чеснок мелко нарезать.</li>
                                            <li>На сливочном масле потушить ананасы в течение 2–3 минут.</li>
                                            <li>Добавить соевый соус.</li>
                                            <li>Добавить томатный соус.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить чеснок.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить имбирь.</li>
                                            <li>Крахмал развести в 50 мл холодной воды.</li>
                                            <li>Вылить в соус.</li>
                                            <li>Перемешать.
                                            Немного посолить, поперчить.
                                            Тушить в течение 1–2 минут.</li>
                                            <li>Добавить креветки.
                                            Тушить в течение 2–3 минут.</li>
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