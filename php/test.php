<?php

    // echo "Hello PHP"." test";
    // print("Hello php". " test");

    // $name = "alamin";
    // $id = 12;
    // $cgpa = 2.5;
    // $status = true;

    // $std = array('alamin', 12, 2.5, 'alamin@aiuub.edu');
    // $std[3];
    // $std = ['alamin', 12, 2.5, 'alamin@aiuub.edu'];
    // $stds = [
    //             ['alamin', 12, 2.5, 'alamin@aiuub.edu'],
    //             ['alamin', 12, 2.5, 'alamin@aiuub.edu'],
    //             ['alamin', 12, 2.5, 'alamin@aiuub.edu']
    //         ];
    
    // //echo $stds[2][3];
     $std = ['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu'];
    // $std['email'];

    // $stds = [
    //     ['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu'],
    //     ['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu'],
    //     ['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu']
    // ];

    // $stds[2]['email'];

    // $stds = [
    //     's1'=>['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu'],
    //     's2'=>['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu'],
    //     's3'=>['name'=>'alamin', 'id'=>12, 'cgpa'=>2.5, 'email'=>'alamin@aiuub.edu']
    // ];

    //$stds['s3']['email'];
    //print_r($stds);
    //echo $stds;
    
    function sum ($a=0, $b=20){
        return $a+$b;
    }

//    echo sum(10, 50);

    if(10 === "10"){
        echo "true";
    }else{
        echo "false";
    }

    // for($i=0; $i<10; $i++){
    //     echo "My name is Alamin\r\n";
    // }

    // foreach($std as $s){
    //     echo $s."\r\n";
    // }


?>