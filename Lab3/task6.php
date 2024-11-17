<?php
    $array=[5,10,15,20];
    $ele=20;
    $flag=false;

    for($i=0; $i < count($array); $i++)
    {
        if($ele == $array[$i])
            {
                print("Element ".$ele." is found");
                $flag = true;
            }
    }
    if($flag==false)
    {
        print("Element ".$ele." is not found");
    }
    
?>