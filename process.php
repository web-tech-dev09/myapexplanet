<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>