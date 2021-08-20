<div class="content_block">
    <h1><?php echo $content_text; ?></h1>

    <div id="content_recipes_block" class="content_recipes_block">
        <?php
            $content_count = count($name);
            for($i=0; $i<$content_count; $i++)
            {
                $content_number = rand(1,5);
                echo '<div style="background-image: url(/images/zapis'.$content_number.'.png")><figure>';
                    echo '<div class="content_ovelflow_pic"><img src="/images/category'.$pic[$i].'" alt="'.$name[$i].'" class="content_pic" width="100%"></div>';
                    echo '<figcaption><a class="content_pic_name" href="/PHP/category'.$link[$i].'" title="'.$name[$i].'">'.$name[$i].'</a></figcaption>';
                echo '</figure><div class="content_date_resipe">'.$date[$i].'</div></div>';
            }
        ?>
    </div>
</div>

