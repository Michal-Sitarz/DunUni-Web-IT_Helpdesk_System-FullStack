<?php

session_start();


if (!empty($_POST)) {
    $ticketID = $_POST['ticketID'];
    $topic = $_POST['topic'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    //update database entry
    include '../../DB/connection.php';

    $queryUpdate = $conn->prepare("UPDATE Tickets SET status=?, topic=?, description=? WHERE ticketID=?");
    $queryUpdate->bind_param("sssi", $status, $topic, $description, $ticketID);
    $queryUpdate->execute();

    $queryUpdate->close();
    $conn->close();
}
//redirect back to the home page
if ($_SESSION["admin"]) {
    header('location: home-a.php');
} else {
    header('location: home.php');
}
exit;
