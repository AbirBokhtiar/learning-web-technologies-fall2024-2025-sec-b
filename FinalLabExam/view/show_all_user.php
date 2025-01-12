<?php
    session_start();
    require_once("../model/user_model.php");
    $result = show_users();
?>
<html>
<head>
    <title>View Users</title>
</head>
<body>
        <h1 align="center">User list</h1>
        <table border=1 cellspacing="0" align="center" width="50%">
            <tr align="center">
                <th>Employee Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Contact NO.</th>
                <th colspan="2">Action</th>
                
            </tr>
            <?php 
                 while($row = mysqli_fetch_assoc($result)){
                //echo "<br>";
                //print_r($row);
                // }
            ?>
            <tr align="center">
                <td><?php echo $row['employee_name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td>
                    <a href="edit_user.php?name=<?php echo $row['username']; ?>"> EDIT </a> 
                </td>
                <td>
                    <a href="delete_user.php?name=<?php echo $row['username']; ?>"> DELETE </a>
                </td>
                <?php } ?>
            </tr>
                <tr align="center">
                <td colspan="6">
                    <a href="admin_home.php?id=<?php echo $idd ?>"> Go Home </a> 
                </td>
                </tr>
        </table>
</body>
</html>