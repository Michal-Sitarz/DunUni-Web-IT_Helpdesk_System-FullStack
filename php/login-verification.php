<?php

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
session_id($username);
if (session_status() < 2) {
    session_start();
} else {
    session_unset();
    session_destroy();
    session_start();
}

include '../../DB/connection.php';

// obtain user's information from DB (in a secure manner)
$verifyUserQuery = $conn->prepare("SELECT * FROM Users WHERE username = ?");
$verifyUserQuery->bind_param('s', $username);
$verifyUserQuery->execute();

$userInfo = $verifyUserQuery->get_result();
$verifyUserQuery->close();

// check if username was found in the DB
if ($userInfo->num_rows > 0) {
    $user = $userInfo->fetch_object();
    $conn->close();
} else {
    $conn->close();
    header('location: login-failed.php');
    exit;
}

//verify password and set session's user information -> use: password_verify() for "hashed" passwords
if ($password === $user->password) {

    $_SESSION['username'] = $user->username;
    if (empty($user->firstName) || empty($user->lastName)) {
        $_SESSION['fullName'] = $user->username;
    } else {
        $_SESSION['fullName'] = $user->firstName . " " . $user->lastName;
    }
    // access granted > redirect to a Home page according to the user type

    if ($user->adminUsertype) {
        $_SESSION['admin'] = true;
        header('location: home-a.php');
        exit;
        
    } else {
        $_SESSION['admin'] = false;
        header('location: home.php');
        exit;
    }
} else {
    // access denied > redirect to the login page - how to redirect to fill username/password again in the original login.php page???
    header('location: login-failed.php');
    exit;
}
?>