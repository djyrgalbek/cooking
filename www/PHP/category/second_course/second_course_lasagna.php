<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">

    <?php
        $category = 'c_second_course';
        $number = 2; //Изменение по ID
        include '../bd_one_recipe.php';
        $content_text = $name[0];
        $GLOBALS['sections'] = 'Рецепты для вторых блюд';
        $GLOBALS['sections_child'] = $content_text;
        $GLOBALS['path'] = '../second_course.php';
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
                                            <li>200–250 г листов лазаньи</li>
                                            <li>1 кг фарша</li>
                                            <li>500 г помидоров</li>
                                            <li>200 г лука</li>
                                            <li>150 г моркови</li>
                                            <li>3–4 зубчика чеснока</li>
                                            <li>1 литр молока</li>
                                            <li>100 г сливочного масла</li>
                                            <li>100 г муки</li>
                                            <li>300 г твердого сыра</li>
                                            <li>50 г пармезана</li>
                                            <li>соль</li>
                                            <li>перец</li>
                                            <li>растительное масло</li>
                                        </ul>
                                    </div>
                                    <div class="content_singleAgent_block">
                                        <h1>Способ приготовления</h1>
                                        <ol>
                                            <li>Лук мелко нарезать.</li>
                                            <li>Чеснок мелко нарезать.</li>
                                            <li>Морковь натереть на средней терке.</li>
                                            <li>С помидоров снять кожицу, мякоть измельчить в блендере или натереть на терке.</li>
                                            <li>Лук и чеснок обжарить на растительном масле.</li>
                                            <li>Добавить морковь.
                                            Обжарить.</li>
                                            <li>Добавить фарш.
                                            Посолить, поперчить.
                                            Тушить до готовности (примерно 20–25 минут).</li>
                                            <li>Добавить помидоры.
                                            Тушить в течение 5 минут.</li>
                                            <li>Готовим соус бешамель.
                                            Масло растопить.</li>
                                            <li>Добавить муку.
                                            Перемешать. 
                                            Слегка обжарить.</li>
                                            <li>Тонкой струйкой влить молоко.
                                            Перемешать.
                                            Довести до кипения. 
                                            Нагревать до тех пор, пока соус не станет по консистенции напоминать жидкую сметану. 
                                            Главное, следить, чтобы не образовались комочки. 
                                            Соус немного посолить, по вкусу можно добавить мускатный орех или чеснок.</li>
                                            <li>Сыр натереть на средней терке.</li>
                                            <li>Пармезан натереть на мелкой терке.</li>
                                            <li>В форму для запекания (у меня форма 25×35 см и высотой 5 см) выложить листы лазаньи (внимательно прочтите инструкцию на упаковке, некоторые фирмы предлагают листы лазаньи отварить, некоторые — использовать сухие листы).</li>
                                            <li>На листы лазаньи выложить половину мясного соуса.</li>
                                            <li>Выложить 1/3 соуса бешамель.</li>
                                            <li>Посыпать половиной натертого сыра.</li>
                                            <li>Накрыть листами лазаньи.</li>
                                            <li>Выложить оставшийся мясной соус.</li>
                                            <li>Смазать соусом бешамель.</li>
                                            <li>Посыпать оставшимся сыром.</li>
                                            <li>Снова выложить листы.</li>
                                            <li>Смазать оставшимся соусом бешамель.
                                            Поставить в духовку. 
                                            Запекать при температуре 180 градусов в течение 40–45 минут.</li>
                                            <li>Готовую лазанью вынуть, посыпать пармезаном (можно немного пармезана отложить, чтобы посыпать им готовую лазанью).
                                            Поставить в духовку еще на 5–10 минут.</li>
                                            <li>К лазанье можно подать томатный соус: обжарить 100 г мелко нарезанного лука и 2 зубчика мелко нарезанного чеснока. 
                                            Добавить 300 г помидоров (очищенных от кожицы и мелко нарезанных).
                                            Посолить, поперчить.
                                            Тушить в течение 5–10 минут.</li>
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