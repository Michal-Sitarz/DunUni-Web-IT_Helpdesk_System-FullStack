<?php

include '../../DB/connection.php';

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $department = $_POST['department'];
    
    //update database
    
}
else
{
    header('location: user-account-edit.php');
    exit;
}


?>
