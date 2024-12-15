<?php
    session_start();
    if(isset($_POST['submit'])){
        $id  =  trim($_REQUEST['id']);
        $password  =  trim($_REQUEST['password']);

        if($id == null || empty($password) ){
            echo "Null data found!";
        }else if ($_SESSION['user']['id'] == $id && $_SESSION['user']['confirmpass']==$password){

            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['id'] = $id;
            ($_SESSION['user']['type'] === 'admin' ? header('location: adminhome.php') : header('location: home.php'));
        }else{
            echo "Invalid user";
        }
    }else{
        header('location: login.html');
    }
?>