<? function get_section()
    {
        if($GLOBALS['sections_child']!="")
        {
            $sections = '<a href="'.$GLOBALS['path'].'" target="_self"><span>'.$GLOBALS['sections'].'</span></a><span><img src="/images/icons/arrowRight.png" alt="Иконка стрелка вправо" width="20px"></span><span>'.$GLOBALS['sections_child'].'</span><span><img src="/images/icons/arrowRight.png" alt="Иконка стрелка вправо" width="20px"></span>';
            echo $sections;
        }
        else if($GLOBALS['sections']!="")
        {
            $sections = '<span>'.$GLOBALS['sections'].'</span><span><img src="/images/icons/arrowRight.png" alt="Иконка стрелка вправо" width="20px"></span>';
            echo $sections;
        }
    }

function get_name_site ()
{
    echo 'Cooking.kg';
}

?>