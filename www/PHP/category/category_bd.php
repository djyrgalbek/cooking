<?php
    $db = mysql_connect("localhost","root","","cooking");
    mysql_set_charset("utf-8", $db);
    mysql_select_db("cooking", $db) or die("Нет соединения с БД. ".mysql_error());
           
    $id = Array();
    $name = Array();
    $description = Array();
    $pic = Array();
    $link = Array();
    $date = Array();
    $i = 0;
    
    $read = mysql_query("SELECT * FROM $category ORDER BY date DESC", $db);
    while($arr = mysql_fetch_array($read))
    {
        $id[$i] = $arr['id'];
        $name[$i] = $arr['name'];
        $description[$i] = $arr['description'];
        $pic[$i] = $arr['pic'];
        $link[$i] = $arr['link'];
        $date[$i] = $arr['date'];
        $i++;
    }
    mysql_close($db);
?>

