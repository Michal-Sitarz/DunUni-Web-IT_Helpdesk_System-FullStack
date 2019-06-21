<?php
session_start();
$username = $_SESSION['username'];
include '../../DB/connection.php';

if (!empty($_POST)) {
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $department = $_POST['department'];
    
    //update database
    $updateUser = $conn->prepare("UPDATE Users SET password=?, firstName=?, lastName=?, department=? WHERE username=?");
    $updateUser->bind_param("sssss", $password, $firstName, $lastName, $department, $username);
    $updateUser->execute();
    
    $updateUser->close();
    $conn->close();

    //redirect back to the "user account edit" page
    header('location: user-account-edit.php');
    exit;
    
} else {
    //Something went wrong
    $conn->close();
    header('location: user-account-edit.php#error');
    exit;
}
?>


