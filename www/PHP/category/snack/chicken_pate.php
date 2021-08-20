<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_snack';
        $number = 1; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для закусок';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../snack.php';
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

                                           <li>800 г курицы (я использовала грудку и окорочка)</li>
                                           <li>300 г лука (две луковицы по 150 г)</li>
                                           <li>300 г моркови (2 моркови по 150 г)</li>
                                           <li>50–100 мл сливок 10–15%</li>
                                           <li>3–4 лавровых листа</li>
                                           <li>10 горошин черного перца</li>
                                           <li>растительное масло</li>
                                           <li>соль</li>
                                           <li>перец</li>

                                           <h2>По желанию:</h2>
                                           <li>багет</li>
                                           <li>чеснок</li>
                                           <li>маринованные огурцы</li>
                                           <li>вяленые томаты</li>
                                           <li>перепелиные (или куриные) яйца</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Курицу залить водой. Добавить нарезанные морковь, лук. Добавить лавровый лист, перец горошком. Посолить. Варить до готовности (около 35–40 минут). Остудить.</li>
                                            <li>Оставшуюся луковицу мелко нарезать.</li>
                                            <li>Оставшуюся морковь натереть на средней терке.</li>
                                            <li>На растительном масле обжарить лук.</li>
                                            <li>Добавить морковь. Обжарить.</li>
                                            <li>Отделить мясо от костей.</li>
                                            <li>Мясо положить в блендер. Добавить сливки.</li>
                                            <li>Измельчить (если необходимо, можно еще добавить сливки).</li>
                                            <li>Добавить обжаренные лук и морковь.</li>
                                            <li>Измельчить. Если необходимо, посолить.</li>
                                            <li>Багет нарезать.</li>
                                            <li>Выложить в форму для запекания.</li>
                                            <li>Сбрызнуть растительным маслом. Поставить в духовку. Запекать при температуре 180 градусов до золотистого цвета.</li>
                                            <li>Готовые теплые кусочки багета натереть чесноком.</li>
                                            <li>На багет выложить паштет. На паштет выложить нарезанные огурцы, помидоры, яйца.</li>
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