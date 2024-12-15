<?php
    session_start();
    if(isset($_POST['submit'])){
        $id  =  trim($_REQUEST['id']);
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $confirmpass  =  trim($_REQUEST['confirmpass']);
        $type = trim($_REQUEST['usertype']);

        if($id == null || $username == null || empty($password) || empty($confirmpass)){
            echo "Null data found!";
        }else {
            $user = ['username'=> $username, 'password'=> $password, 'id'=> $id, 'confirmpass'=> $confirmpass, 'type'=> $type];
            $_SESSION['user'] = $user;
            header('location: login.html');
        }
    }else{
        header('location: signup.html');
    }

?>