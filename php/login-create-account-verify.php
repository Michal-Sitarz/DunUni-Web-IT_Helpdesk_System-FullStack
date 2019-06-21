<?php

if (!empty($_POST)) {
    $username = $_POST['username'];
}
include '../../DB/connection.php';

$checkUsername = $conn->prepare("SELECT username FROM Users WHERE username = ?");
$checkUsername->bind_param('s', $username);
$checkUsername->execute();

$usernameExists = $checkUsername->get_result();
$checkUsername->close();

// check if username was found in the DB
if ($usernameExists->num_rows > 0) {
    //this username already exists in the Database
    $conn->close();
    header('location: login-create-account-failed.php');
    exit;
} else {
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $department = $_POST['department'];

        //establish user type
        $adminUsertype = (substr($username, 0, 2) == "a-" ? 1 : 0);

        //upload new database entry
        $addNewUser = $conn->prepare("INSERT INTO Users(username, password, adminUsertype, firstName, lastName, department) VALUES (?, ?, ?, ?, ?, ?)");
        $addNewUser->bind_param("ssisss", $username, $password, $adminUsertype, $firstName, $lastName, $department);
        $addNewUser->execute();

        $addNewUser->close();
        $conn->close();

        //redirect back to the login page
        header('location: login.php#successful');
        exit;
        
    } else {
        //Something went wrong
        $conn->close();
        header('location: login-create-account-failed.php');
        exit;
    }
}
