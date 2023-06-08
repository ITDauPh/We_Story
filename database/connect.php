<?php
    include '../config/database_info.php';
    $conn = new mysqli($servername, $username, $password, $database_name);
    if (!$conn){
        die("Connect to database failure ! " . mysqli_connect_errno());
    }
    
?>