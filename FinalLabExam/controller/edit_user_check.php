<?php
session_start();
require_once('../model/user_model.php');

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("Location: ../view/signin.html");
    exit();
}

if (isset($_POST['submit'])) {
    $original_name = $_POST['original_name'];
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];
    $new_emp_name = $_POST['new_emp_name'];
    $new_contact = $_POST['new_contact'];

    if (empty(trim($new_username)) || empty(trim($new_password)) || empty(trim($new_email)) || empty(trim($new_emp_name)) || empty(trim($new_contact))) {
        echo "Please fill all the input fields<br>";
    } else {
        $result = update_user($original_name, $new_username, $new_password, $new_email, $new_emp_name, $new_contact);
        if ($result) {
            echo "User information updated successfully.";
            header("Location: ../view/home.php");
            exit();
        } else {
            echo "Failed to update user information.";
        }
    }
}
?>