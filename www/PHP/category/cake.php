<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">
    <?php
        $category = 'c_cake';
        $content_text = 'Рецепты для тортов и пирожнов';
        $GLOBALS['sections'] = $content_text;
        include 'category_bd.php';
        include '../functions.php';
    ?>
    <title><? get_name_site(); echo " | Рецепты для тортов и пирожнов"; ?></title>
</head>
<body>
<div class="background">
        <div class="index_main_block">
            <div>
                <?php include '../header.php'; ?>
            </div>
                
            <div>
                <?php include '../bg.php'; ?>
            </div>

            <div>
                <? include '../sections.php' ?>
            </div>

            <div>
                <div class="index_sidebar">
                    <?php include '../sidebar.php'; ?>
                </div>
                <div class="index_content">
                    <?php include '../content.php'; 
                    ?>
                </div>
            </div>

            <div>
                <?php include '../footer.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>