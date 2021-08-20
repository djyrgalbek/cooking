<?php
    $db = mysql_connect("localhost","root","","cooking");
    mysql_set_charset("utf-8", $db);
    mysql_select_db("cooking", $db) or die("Нет соединения с БД. ".mysql_error());
         
    if(isset($_GET['search_word']))
    {
        $search_word = $_GET['search_word'];
    }

    if($search_word!="")
    {
        $search_word_filtr = preg_replace('/[^a-zA-Zа-яА-Я0-9\s]/ui', '', $search_word);
        $word = explode(" ", $search_word_filtr);
       
        $id = Array();
        $name = Array();
        $link = Array();
        $i = 0;

        $orig_name = Array();
        $orig_link = Array();

        for($k = count($word) - 1; $k >= 0 ; $k--)
        {
            $read = mysql_query("(SELECT * FROM c_salad WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_snack WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_soup WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_second_course WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_fish WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_bakery WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_savory_bakery WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_pancakes WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_cake WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_dessert WHERE name LIKE '%$word[$k]%')
            UNION
            (SELECT * FROM c_different WHERE name LIKE '%$word[$k]%')", $db);

            while($arr = mysql_fetch_array($read))
            {
                $id[$i] = $arr['id'];
                $name[$i] = $arr['name'];
                $link[$i] = $arr['link'];
                $i++;
            }
        }

        $flag = false;
        for ($n = 0; $n < count($name); $n++)
        {
            for($m = $n + 1; $m <= count($name); $m++)
            {
                if($name[$n] != $name[$m])
                {
                    $flag = true;
                }
                else
                {
                    $flag = false;
                    break;
                }
            }
            if($flag == true)
            {
                array_push($orig_name, $name[$n]);
                array_push($orig_link, $link[$n]);
            }
        }
    }
    mysql_close($db);
?>

