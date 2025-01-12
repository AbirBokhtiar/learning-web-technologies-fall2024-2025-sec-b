<?php
session_start();
require_once("../model/user_model.php");

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("Location: signin.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="edit_user.php?name=<?php echo $_SESSION['username']; ?>">edit user</a>
        <a href="delete_user.php?name=<?php echo $_SESSION['username']; ?>">delete user</a>
       <a href="show_all_user.php">show all user</a>
       <a href="signup.html">add user</a>
    </body>
</html>