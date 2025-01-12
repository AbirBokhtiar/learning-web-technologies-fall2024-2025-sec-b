


<?php
session_start();
require_once('../model/user_model.php');

if(isset($_POST["signup"])){
    
    // $errors = [];

    
    $name = $_REQUEST['name'];
    $password= $_REQUEST['password'];
    $confirm_password= $_REQUEST['confirm_password'];
    $emp_name = $_REQUEST['emp_name'];
    $contact = $_REQUEST['contact'];
    
    
    function check_empty($name, $password, $confirm_password, $emp_name, $contact){
        // global $errors;
        if(empty(trim($name)) || empty(trim($password)) || empty(trim($confirm_password)) || empty(trim($emp_name)) || empty(trim($contact))){
            echo "<h3>Input fields can not be emtpy</h3>";
        }
    }

    function check_username($name){
       // global $errors;
        if(strlen($name) < 6 ){
            $errors[] = "<h3>Username length should be at least 6</h3>";
        }
        if(strpos($name, " ")){
            $errors[] = "<h3>Username Can not have a middle space</h3>";
        }
        if(!ctype_alpha($name)){
            
            $errors[] = "<h3>Username Can not contain numbers</h3>";
        }
    }


    function check_password($password,$confirm_password, &$errors){
        if(strlen($password) < 6){
            $errors[] = "<h3> Password length should be at least 6</h3>";
        }
        if($password !== $confirm_password){
            $errors[] = "<h3> Password and confirm password does not match</h3>";
        }
    }

    function check_email($email, &$errors){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            $errors[] =  "<h3>Please enter a valid email</h3>"; 
        } 
    }
        // $validate1 = strpos($email, ".com");
        // $validate2 = strpos($email, "@");
        //     if($validate1 == null || $validate1 < strlen($email) - 4 || (strlen($email) - $validate2) < 5){
        //         $errors[] =  "<h3>Please enter a valid email</h3>";
        //     } 
    // }

    check_empty($name, $password, $confirm_password, $emp_name, $contact);
    // check_username($name, $errors);
    // check_password($password,$confirm_password, $errors);
    // check_email($email, $errors);
// echo count($errors);

    // if(count($errors) > 0){
    //     foreach($errors as $error){
    //         echo $error;
    //     }
    // }
    // else{   
        // $type = $_POST['type'];
    // $user = ['id' => $id, 'password' => $password, 'name' => $name, "type" => $type];

    // $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
    // var_dump($conn);
    // $sql = "select * from first_check";
    // $result = mysqli_query($conn, $sql);

    // $sql = "insert into first_check VALUES('$name', '$password', '$id', '$email')";
    // if(mysqli_query($conn, $sql)){
        //    header("location:login.html");
    // }else{
        // echo "There is an error";
    // }

        $addUser = addUser($name, $password, $contact, $emp_name);
        if($addUser){
            header("location:../view/signin.html");
        }
        else{
            header("location:../view/signup.html");
        }


    // $_SESSION['users'][] = $user;
    // $user_info = "$id $name $password $type \n";
    // fwrite( $file, $user_info);
    // fclose( $file );
    // foreach($_SESSION['users'] as $user){
    //     echo ''.$user['id'].' '.$user['password']. $user['type'] ."<br>";
    // }   
//    header("location:login.html");

    }   

// }
else{
    header("location:../view/signup.html");
}

?>
