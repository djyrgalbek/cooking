<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">   
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Caveat|Francois+One|Staatliches|Yanone+Kaffeesatz" rel="stylesheet">
    <?php
        include 'PHP/functions.php';
        $content_text = "Контакты";
        $GLOBALS['sections'] = $content_text;
    ?>
    <title><? get_name_site(); echo " | Контакты"; ?></title>
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
                        
                        <div class="contacts_block">
                            <div>
                                <h1>Написать автору</h1>
                                <h2>Если у вас возникли вопросы, то заполните нижележащую форму.</h2>
                                <form action="redirect.php" name="contacts_form" method="GET" class="contacts_form">
                                    <span>Имя</span><br/>
                                    <input type="text" name="name" required><br/>
                                    <span>Вопрос</span><br/>
                                    <textarea name="message" maxlength="350" required></textarea ><br />
                                    <span>Почта</span><br/>
                                    <input type="email" name="mail" pattern="\S+@[a-z]+.[a-z]+" required><br/>
                                    <button type="submit">Отправить</button>
                                </form>   
                            </div>
                            <div>
                                <h1>Контактные данные</h1>
                                <img src="/images/contacts.png" alt="Контакты" class="contacts_block_pic">
                                <h2>Вы можете найти меня по ...</h2>
                                <ul class="contacts_block_ul">
                                    <a href="tel:+996708223398" target="_blank"><li><img src="/images/social/telephone_c.png" alt="" >+996708123456</li></a>
                                    <a href="https://www.instagram.com/kojomkulova.j/?hl=ru" target="_blank"><li><img src="/images/social/instagram_c.png" alt="" >kojomkulova.j</li></a>
                                    <a href="https://wa.me/996708223398?text=Я%20заинтересован%20в%20ваших%20рецептах!" target="_blank"><li><img src="/images/social/whatsapp_c.png" alt="" >+996708123456</li></a>
                                    <a href="mailto: esenkulovajann@gmail.com" target="_blank"><li><img src="/images/social/mail_c.png" alt="" >esenkulovajann@gmail.com</li></a>

                                </ul>
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