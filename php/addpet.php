<?php

    include 'connection.php';

    // Prepare data for insertion
    $animalType = $_POST["animalType"];
    $age = $_POST["age"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $breed = $_POST["breed"];
    $name = $_POST["name"];
    $contactNo = $_POST["contactNo"];


    // Insert data into MySQL table
    $sql = "INSERT INTO pets (animalType, age, address1, address2, breed, name, contactNo) VALUES ('$animalType', '$age', '$address1', '$address2', '$breed', '$name', '$contactNo')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Record inserted successfully!");</script>';
        echo '<script>window.location.href = "../addpet.html";</script>';
    } else {
        echo '<script>alert("Error");</script>';
        echo '<script>window.location.href = "../addpet.html";</script>';
    }

    // Close connection
    $conn->close();
?>
