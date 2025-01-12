<?php
session_start();
require_once("../model/user_model.php");
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("Location: signin.html");
    exit();
}

if (isset($_REQUEST['name'])) {

    $name = $_REQUEST['name'];

    $result = delete_user($name);

    if($result){
        echo "delete succesfull";
    }
    else{
        echo "problem in deleting user";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h2>Delete User</h2>
    <form action="delete_user.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="name_id" name="name" required>
        <input type="submit" name="submit" value="Delete User">
    </form>
    
</body>
</html>