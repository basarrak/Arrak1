<?php
    $servername = "localhost:8080";
    $username = "root";
    $password = "";
    $dbname = "db_employee";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
    
    ?>
