<?php
    session_start();
    if(isset($_COOKIE['flag']) && ($_SESSION['user']['type'] == $admin)){

        $user = ['username'=> $username, 'password'=> $password, 'id'=> $id, 'confirmpass'=> $confirmpass, 'type'=> $type];
        $_SESSION['user'] = $user;
?>

<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
        <h2>User List </h2>
        <a href="home_admin.php">Back</a> |
        <a href="logout.php">logout</a>

        <table border=1> 
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                    for($i=0; $i< count($users); $i++){
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['username']; ?></td>
                <td><?=$users[$i]['type']?></td>
                <td>
                    <a href='edit.php?id=<?=$users[$i]['id']?>'> EDIT </a> |
                    <a href='delete.php'> DELETE </a> 
                </td>
            </tr>

            <?php } ?>
        </table>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>