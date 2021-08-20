<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">
    <?php
        include 'PHP/functions.php';
        $content_text = "Об авторе";
        $GLOBALS['sections'] = $content_text;
    ?>
    <title><? get_name_site(); echo " | об авторе"; ?></title>
</head>
<body>
    <div class="background">
        <div class="index_main_block">
            <div>
                <?php include 'PHP/header.php'; ?>
            </div>
                
            <div>
                <?php include 'PHP/bg.php'; ?>
            </div>

            <div>
                <? include 'PHP/sections.php' ?>
            </div>

            <div>
                <div class="index_sidebar">
                    <?php include 'PHP/sidebar.php'; ?>
                </div>
                <div class="index_content">
                    <div class="content_block">
                        <h1><?php echo $content_text; ?></h1>
                        
                        <div class="content_author_block">
                            <div>
                                <h2>Здравствуйте!</h2>
                                <p> Меня зовут, Жанара! Я выпускник Международного Университета Кыргызстана,
                                    специальности - инженер - програмист. Вы спросите что общего между
                                    программистом и поваром? А я отвечу. В детстве, как и все девушки, любила
                                    готовить. И всегда мечтала завести собственный блог в интернете.
                                    Собственно говоря, благодаря навыкам программирования и кулинарного хобби, я открыла этот замечательный сайт.
                                </p>

                                <p>
                                    Вы можете меня найти в:<br />
                                    <span class="orange_color">instagram: </span><a href="https://www.instagram.com/kojomkulova.j/?hl=ru">@kojomkulova.j</a><br />
                                    <span class="orange_color">WhatSapp: </span><a href="https://wa.me/996708223398?text=Я%20заинтересован%20в%20ваших%20рецептах!">+996(708) 223 398</a><br />
                                    <span class="orange_color">Mail: </span><a href="mailto: esenkulovajann@gmail.com">esenkulovajann@gmail.com</a><br />
                                </p>
                            </div>
                            <div>
                                <img src="/images/author.png" alt="Автор" class="content_author_pic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <?php include 'PHP/footer.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>