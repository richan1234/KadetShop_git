<?php

// Assuming your database connection details
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cadetshop';

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$nim = $_POST['nim'];
$password = $_POST['password'];

// Query to check if the user exists
$query = "SELECT * FROM pembeli WHERE nim = '$nim' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // User exists, send success response
    $response = array("success" => true);
} else {
    // User doesn't exist or incorrect password, send failure response
    $response = array("success" => false);
}

// Return the JSON response
header('Content-Type: application/json');
echo json_encode($response);

// Close the database connection
$conn->close();

?>
