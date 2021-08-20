<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_different';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Разные рецепты';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../different.php';
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
                                            <li>2 авокадо (около 350 г)</li>
                                            <li>200 г помидоров</li>
                                            <li>100 г лука</li>
                                            <li>3 ст.л. сока лайма (или лимона)</li>
                                            <li>половина перчика чили (по желанию)</li>
                                            <li>2–3 зубчика чеснока</li>
                                            <li>соль</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук и чеснок мелко порубить.</li>
                                            <li>Чили очистить от семян.
                                            Мелко нарезать.</li>
                                            <li>Помидоры очистить от кожицы.
                                            Мелко нарезать.</li>
                                            <li>Авокадо почистить, удалить косточку.
                                            Размять мякоть авокадо.
                                            Добавить сок лайма.
                                            Перемешать.</li>
                                            <li>Добавить помидоры.
                                            Перемешать.</li>
                                            <li>Добавить лук и чеснок.
                                            Перемешать.</li>
                                            <li>Добавить чили.
                                            Перемешать.</li>
                                            <li>По желанию, соус можно измельчить в блендере.</li>
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