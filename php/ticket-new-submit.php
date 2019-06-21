<?php

session_start();


if (!empty($_POST)) {
    $topic = $_POST['topic'];
    $description = $_POST['description'];
    $ticketType = $_POST['ticketType'];
    $category = $_POST['category'];
    $username = $_SESSION['username']; //mind this is obtained from SESSION, not POST !!!
    $status = $_POST['status'];
    
    //echo "user: ".$username."<br>topic: ".$topic."<br>desc: ".$description."<br>type: ".$ticketType."<br>categ: ".$category."<br>status: ".$status."<br>";
    
    //upload new database entry
    include '../../DB/connection.php';
    $query = $conn->prepare("INSERT INTO Tickets(raisedBy, status, ticketType, category, topic, description) VALUES ((SELECT username FROM Users WHERE username=?), ?, ?, ?, ?, ?)");
    $query->bind_param("ssssss", $username, $status, $ticketType, $category, $topic, $description);
    $query->execute();

    $query->close();
    $conn->close();
    
    //redirect back to the home page
    if ($_SESSION["admin"]) {
        header('location: home-a.php');
    } else {
        header('location: home.php');
    }
    exit;
    
} else {
    //Something went wrong
    $conn->close();
    header('location: ticket-new.php#error');
    exit;
        
}
?>