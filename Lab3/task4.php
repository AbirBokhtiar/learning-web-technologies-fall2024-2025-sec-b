<?php
    $num1 = 450;
    $num2 = 550;
    $num3 = 50;

    if($num1 >= $num2 && $num1 >= $num3)
    {
        print("The number ".$num1." is the largest");
    }
    else if($num2 >= $num1 && $num2>= $num3)
    {
        print("The number ".$num2." is the largest");
    }
    else if($num3 >= $num1 && $num3 >= $num2)
    {
        print("The number ".$num3." is the largest");
    }
?>