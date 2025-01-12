<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "webtech" );
    return $conn;
}

function addUser($username, $password, $contact_no, $employee_name)
{
    $conn = get_connection();
    $sql = "insert into employees values ('$employee_name', '$contact_no', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function login($username, $password){
    $conn = get_connection();
    $sql = "select * from employees where username = '{$username}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function update_user($original_name, $new_username, $new_password, $new_emp_name, $new_contact) {
    $conn = get_connection();
    $sql = "UPDATE employees SET username=?, password=?, employee_name=?, contact_no=? WHERE username=?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die("Error preparing statement: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sssss", $new_username, $new_password, $new_emp_name, $new_contact, $original_name);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $result;
}

function delete_user($username) {
    $conn = get_connection();
    $sql = "DELETE FROM employees WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die("Error preparing statement: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $result;
}

function show_users(){
    $conn = get_connection();
    $sql = "select * from employees";
    $result = mysqli_query($conn, $sql);
    return $result;
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<br>";
    //     print_r($row);
    // }
}

function user_info($name) {
    $conn = get_connection();

    $sql = "select * from employees where username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user_info = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $user_info;
}


?>