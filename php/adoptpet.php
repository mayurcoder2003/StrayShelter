<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare data for insertion
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $contactNo = $_POST["contactNo"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $numPetsAdopted = $_POST["numPetsAdopted"];
    $responsibility = isset($_POST["responsibility"]) ? $_POST["responsibility"] : '';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // Insert data into MySQL table
    $sql = "INSERT INTO adoptions (firstName, lastName, contactNo, address, address2, numPetsAdopted, responsibility, username, password) 
            VALUES ('$firstName', '$lastName', '$contactNo', '$address', '$address2', '$numPetsAdopted', '$responsibility', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Register successfully!");</script>';
        echo '<script>window.location.href = "../petsAvail.php";</script>';
    } else {
        echo '<script>alert("Error");</script>';
        echo '<script>window.location.href = "../addpet.html";</script>';
    }
}

// Close connection
$conn->close();
?>
