<?php

    //$data = $_REQUEST['mydata'];
    //$std = json_decode($data);
    //echo "Your name is: {$std->name}";

    $user  = ['name'=>'alamin', 'email'=>'email@aiub.edu', 'password'=>'123'];
    $jsondata = json_encode($user);
    echo $jsondata;
?>  