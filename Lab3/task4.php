<?php

    $n1=50;
    $n2=15;
    $n3=10;

    if($n1>$n2 && $n1>$n3) 
    {
            print("Largest Number is ". $n1);
    }
    else if($n2>$n1 && $n2>$n3) 
    {
            print("Largest Number is ". $n2);
    }
    else
    {
        print("Largest Number is ". $n3);
    }

?>