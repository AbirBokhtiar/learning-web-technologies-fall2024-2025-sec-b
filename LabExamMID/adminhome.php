<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome <?php echo $_SESSION['id']?></h1>
        <a href="profile.php">Profile</a><br>
        <a href="edit.php">Change Password</a><br>
        <a href="userlist.php">View Users</a><br>
        <a href="logout.php">Logout</a><br>
        
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>