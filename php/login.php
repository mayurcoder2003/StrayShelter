<?php

include 'connection.php'; // Include the database connection file

// Retrieve the username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username and password match in the vetinfo table
$sql = "SELECT * FROM adoptions WHERE username = '$username' AND password = '$password'";

// Execute the query
$result = $conn->query($sql);

// Check if there is a matching row
if ($result->num_rows > 0) {
    echo '<script>alert("Login successfully!");</script>';
    echo '<script>window.location.href = "../petsAvail.php";</script>';
} else {
    echo '<script>alert("Error! Check Username or Password");</script>';
    echo '<script>window.location.href = "../login.html";</script>';
}

// Close connection
$conn->close();
?>
