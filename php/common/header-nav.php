<?php
    $filePath = $_SERVER["PHP_SELF"];
    $fileName = substr($filePath, strripos($filePath,'/')+1, strlen($filePath));
        
    if($fileName != "home.php" && $fileName != "home-a.php")
    {
        echo 'Back <i class="fas fa-undo-alt fa-lg"></i></a> |';
    }
    
    if($_SESSION["admin"]){
        echo '<a href="home-a.php">';
    }
    else{
        echo '<a href="home.php">';
    }
    
?>
    <i class="fas fa-home fa-lg"></i></a> |
    <i class="fas fa-user fa-lg"></i> <p><?php echo $_SESSION["fullName"]; ?></p> | 
    <a href="logout.php"><i class="fas fa-power-off fa-lg"></i> Logout</a>
    </div>
</header>
