<?php
session_start();
require_once('../model/user_model.php');

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("Location: signin.html");
    exit();
}

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    $user_info = user_info($name);

    if ($user_info) {
        $name = isset($user_info['username']) ? $user_info['username'] : '';
        $pass = isset($user_info['password']) ? $user_info['password'] : '';
        $emp_name = isset($user_info['employee_name']) ? $user_info['employee_name'] : '';
        $contact = isset($user_info['contact_no']) ? $user_info['contact_no'] : '';
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user specified.";
    exit();
}
?>

<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <table align="center" height="500px" width="20%">
        <tr align="center">
            <td></td>
        </tr>
        <tr align="center">
            <td></td>
        </tr>
        <tr height="80px">
            <td></td>
        </tr>
        <tr>
            <td>
                <form action="../controller/edit_user_check.php" method="post">
                    <fieldset>
                        <legend align="center">Edit User</legend>
                        <table align="center" width="100%">
                            <tr>
                                <td>
                                    <table align="center">
                                        <tr>
                                            <td>Username <br>
                                                <input type="text" name="new_username" value="<?php echo htmlspecialchars($name); ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password <br>
                                                <input type="password" name="new_password" value="<?php echo htmlspecialchars($pass); ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Employee Name <br>
                                                <input type="text" name="new_emp_name" value="<?php echo htmlspecialchars($emp_name); ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contact No. <br>
                                                <input type="text" name="new_contact" value="<?php echo htmlspecialchars($contact); ?>" required>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <input type="hidden" name="original_name" value="<?php echo htmlspecialchars($name); ?>">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" name="reset" value="Reset">
                                    <a href="home.php">Back to Home</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>