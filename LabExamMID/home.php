<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <table>
        <h1>Welcome <?php echo $_SESSION['user']['username']?></h1>
        <a href="profile.php">Profile</a><br>
        <a href="edit.php">Change Password</a><br>
        <a href="logout.php">logout</a><br>
    </table>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>