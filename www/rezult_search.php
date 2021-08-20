<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">
   
    <?php
        include 'PHP/functions.php';
        include 'PHP/BD_rezult_search.php';
        $content_text = "Результаты поиска";
    ?>
    <title><? get_name_site(); echo " | Результаты поиска"; ?></title>
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
                        
                        <?php
                        if(count($orig_name)>=1)
                        {
                            echo '<ul class="rezult_search_ul">';
                            for($l = 0; $l < count($orig_name); $l++)
                            {
                                echo '<li><a href="PHP/category'.$orig_link[$l].'" target="_self">'.$orig_name[$l].'</a></li>';
                            }
                            echo '</ul>';
                        }
                        else
                        {
                            echo '<p class="rezult_search_empty">По Вашему запросу ничего не найдено!</p>';
                        }
                        ?>
                        
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