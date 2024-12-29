<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
?>

<html>
<head>
    <title>HOME Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='view_users.php' > View All </a> | 
        <a href='../controller/logout.php' > logout </a> |
        <a href='view_users.php' > link1 </a> | 
        <a href='../controller/logout.php' > link2 </a> |
        <a href='view_users.php' > link3 </a> | 
        <a href='../controller/logout.php' > link4 </a> |
        <a href='view_users.php' > link5 </a> | 
        <a href='../controller/logout.php' > link6 </a> |
</body>
</html>