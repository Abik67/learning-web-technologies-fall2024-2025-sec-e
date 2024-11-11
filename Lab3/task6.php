<?php

    $arr=[1,2,3,4,5];
    $search=6;
    $found=false;

    for($i=0;$i<count($arr);$i++)
    {
        if($search==$arr[$i])
        {
            print($search." is found.");
            $found=true;
        }
    }
    if($found==false)
    {
        print($search." is not found.");
    }

?>