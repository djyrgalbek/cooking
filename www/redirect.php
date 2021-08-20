<?php 
    if(isset($_GET['name']) && isset($_GET['message']) && isset($_GET['mail']))
    {
        $name = $_GET['name'];
        $message = $_GET['message'];
        $mail = $_GET['mail'];
        $check = true;

        $check_mail = mail("t.jyrgal@bk.ru, esenkulovajann@gmail.com", "Сообщение от посетителей Cooking.kg", "<b>Имя:</b> ".$name."\n<b>Сообщение:</b> ".$message."\n<b>Почта:</b> ".$mail);
        if($check_mail)
        {
            echo '<p align="center">Ваше сообщение отправлено!</p>'; 
        }
        else
        {
            echo '<p align="center">Ваше сообщение не отправлено!</p>'; 
            $check = false;
        }
    }
    
    
?>

<script>
    var check = '<?php echo $check; ?>';
    if(check == true)
    {
        alert("Ваше сообщение отправлено!");
    }
    else
    {
        alert("Ваше сообщение не отправлено!");
    }
    location.href = "contacts.php";
  
</script>