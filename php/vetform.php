<?php
// Include the database connection file
include 'connection.php';



    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $caddress = $_POST['caddress'];
    $areatovisit = $_POST['areatovisit'];
    $exp = $_POST['exp'];
    $quali = $_POST['quali'];
    

    $sql = "INSERT INTO vetinfo (first_name, last_name, contact_no, address, clinic_address, area_to_visit, experience, qualification) VALUES ('$fname', '$lname', '$phone', '$address', '$caddress', '$areatovisit', '$exp', '$quali')";


    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Record inserted successfully!");</script>';
        echo '<script>window.location.href = "../vetform.html";</script>';
    } else {
        echo '<script>alert("Error");</script>';
        echo '<script>window.location.href = "../vetform.html";</script>';
    }

    // Close connection
    $conn->close();




?>