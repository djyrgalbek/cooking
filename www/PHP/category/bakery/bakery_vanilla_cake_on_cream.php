<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_bakery';
        $number = 4; //Изменение по ID
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
                                            <li>350 мл сливок 22%</li>
                                            <li>200 г сливочного масла</li>
                                            <li>250 г сахара</li>
                                            <li>6 яиц</li>
                                            <li>11 г сухих дрожжей (или 50–60 г сырых дрожжей)</li>
                                            <li>350 г изюма</li>
                                            <li>палочка ванили (или 2 ч.л. ванильного сахара)</li>
                                            <li>500–600 г муки</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Сливки подогреть (они должны быть теплыми, не горячими).</li>
                                            <li>Добавить 2 ч.л. сахара.
                                            Перемешать.</li>
                                            <li>Добавить дрожжи.
                                            Перемешать.</li>
                                            <li>Добавить 200 г муки.
                                            Перемешать.</li>
                                            <li>Накрыть салфеткой или полотенцем.
                                            Поставить в теплое место.</li>
                                            <li>Опара должна увеличиться вдвое (у меня на это ушло около 30 минут).</li>
                                            <li>Палочку ванили разрезать.
                                            Вынуть семена.</li>
                                            <li>Отделить белки от желтков.
                                            Желтки растереть с сахаром.</li>
                                            <li>Добавить семена ванили.
                                            Перемешать.</li>
                                            <li>Белки взбить с 0.5 ч.л. соли в пышную пену.</li>
                                            <li>В опару добавить желтки.
                                            Перемешать.</li>
                                            <li>Добавить размягченное (не топленое) масло.
                                            Перемешать.</li>
                                            <li>Добавить белки.
                                            Аккуратно перемешать.</li>
                                            <li>Добавить оставшуюся муку (муки может понадобиться чуть больше или меньше, это зависит от качества муки).
                                            Замесить тесто.
                                            Тесто необходимо хорошо вымесить, оно не должно быть крутым и не должно прилипать к рукам.</li>
                                            <li>Накрыть тесто салфеткой или полотенцем.
                                            Поставить в теплое место.</li>
                                            <li>Тесто должно хорошо подняться (у меня на это ушло около 30 минут).</li>
                                            <li>Изюм помыть и высушить.</li>
                                            <li>Добавить в тесто изюм.</li>
                                            <li>Накрыть салфеткой или полотенцем.
                                            Поставить в теплое место.</li>
                                            <li>Дать тесту еще раз хорошо подняться (у меня на это ушло около 30 минут).</li>
                                            <li>Формочки немного смазать маслом.
                                            Выложить тесто, заполняя формочки на 1/3 высоты формы.</li>
                                            <li>Накрыть салфеткой или полотенцем.
                                            Поставить в теплое место.</li>
                                            <li>Дать тесту подняться.
                                            Поставить в разогретую до 100 градусов духовку.
                                            Выпекать в течение 10 минут.
                                            Затем температуру увеличить до 180 градусов, выпекать до готовности (около 30 минут).
                                            Как только кулич зарумянится, проверить его на готовность, для этого его надо проткнуть деревянной шпажкой (или зубочисткой), если она сухая — кулич готов.</li>
                                            <li>Украсить по вкусу.
                                            Я готовые куличи смазала белковым кремом и украсила кондитерской посыпкой.</li>
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