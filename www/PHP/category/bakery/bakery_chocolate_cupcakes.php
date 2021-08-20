<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_bakery';
        $number = 1; //Изменение по ID
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
                                            <li>150 г сливочного масла</li>
                                            <li>150 г сахара</li>
                                            <li>100 мл молока</li>
                                            <li>40 г какао</li>
                                            <li>2 яйца</li>
                                            <li>2 ч.л. разрыхлителя</li>
                                            <li>200–250 г муки</li>
                                            <h2>Крем:</h2>
                                            <li>150 г густой сметаны (не менее 20%)</li>
                                            <li>30 г какао</li>
                                            <li>50 г сахара</li>
                                            <li>1 ст.л. сливочного масла</li>
                                            <h2>По желанию:</h2>
                                            <li>по желанию:</li>
                                            <li>орехи</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Готовим тесто.
                                            В кастрюле смешать масло, какао, сахар, молоко.</li>
                                            <li>Довести до кипения.
                                            Убрать с огня.</li>
                                            <li>Остудить.</li>
                                            <li>В остывшую массу добавить яйца.</li>
                                            <li>Перемешать.</li>
                                            <li>Добавить разрыхлитель и муку.
                                            Замесить не очень густое тесто.</li>
                                            <li>Формочки (любые, я использовала силиконовые) немного смазать маслом, наполнить тестом на 2/3.
                                            Поставить в разогретую до 180 градусов духовку.
                                            Выпекать в течение 20–25 минут.</li>
                                            <li>Готовим крем.
                                            В кастрюле смешать сметану, какао, сахар, масло.</li>
                                            <li>Довести до кипения (как только появятся первые пузырьки — убрать с огня).
                                            Остудить.</li>
                                            <li>На остывшие кексы выложить остывший крем.
                                            При желании украсить кондитерской посыпкой или молотыми орехами.</li>
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