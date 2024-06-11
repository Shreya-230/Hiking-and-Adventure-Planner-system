<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database credentials
    $servername = "localhost"; 
    $username = "your_username";
    $password = "your_password"; 
    $database = "dbms";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    // Insert data into database
    $sql = "INSERT INTO userprofiles (username, email, phoneno, password, location) VALUES ('$username', '$email', '$phoneno', '$password', '$location')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close connection
    $conn->close();
}
?>
