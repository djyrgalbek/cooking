<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_salad';
        $number = 4; //Изменение по ID
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
                                            <li>200 г белого батона</li>
                                            <li>250 г куриного филе</li>
                                            <li>150 г сыра</li>
                                            <li>300 г огурцов</li>
                                            <li>150 г лука</li>
                                            <li>1 пучок зеленого салата</li>

                                            <h2>Заправка:</h2><!--Подзаголовок. Использовать при необходимости!-->
                                            <li>4 ст.л. растительного масла</li>
                                            <li>3 зубчика чеснока</li>
                                            <li>1 ст.л. уксуса 6%</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                                                                    </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Филе отварить до готовности (варить около 20 минут после закипания). Остудить.</li>
                                            <li>Разобрать филе на волокна.</li>
                                            <li>Батон нарезать кубиками.</li>
                                            <li>Обжарить на растительном масле до золотистого цвета.</li>
                                            <li>Огурцы нарезать соломкой.</li>
                                            <li>Лук нарезать полукольцами. Если вы используете горький лук, его надо залить кипятком, оставить на 10 минут, затем воду слить, лук промыть в холодной воде.</li>
                                            <li>Сыр натереть на мелкой терке.</li>
                                            <li>Сделать заправку. Для этого смешать растительное масло, уксус, соль, перец, выдавленный через чеснокодавку чеснок.</li>
                                            <li>Салат порвать руками.</li>
                                            <li>Добавить огурцы, лук, филе, сыр, заправку и сухарики.</li>
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