<?php
    $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password, if any
    $database = "strayshelter"; // Your MySQL database name
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>