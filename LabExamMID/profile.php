<?php
session_start();
if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p>ID: <?php echo $_SESSION['user']['id']; ?></p>
    <p>Name: <?php echo $_SESSION['user']['username']; ?></p>
    <p>Type: <?php echo $_SESSION['user']['type']; ?></p>
    <a href="home.php">Go Home</a>
</body>
</html>
<?php
    }else{
        ($_SESSION['user']['type'] === 'admin' ? header('location: adminhome.php') : header('location: home.php'));
    }
?>