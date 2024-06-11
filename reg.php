<?php
// Database credentials
$servername = "localhost"; // Change this to your database server name
$username = "your_username"; // Change this to your database username
$password = "your_password"; // Change this to your database password
$database = "dbms"; // Change this to your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $equipment_type = $_POST['equipment_type'];
    $location = $_POST['location'];
    $brand = $_POST['brand'];
    $condition = $_POST['condition'];
    $description = $_POST['description'];
    // Insert data into database
    $sql = "INSERT INTO hiking (equipment_type, location, brand, condition, description) VALUES ('$equipment_type', '$location', '$brand', '$condition', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close connection
$conn->close();
?>
