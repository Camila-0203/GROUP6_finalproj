20:16
Jaff
Jaff Albain
<?php
// Start the PHP session if needed
session_start();

// Define page title
$title = "FIXEDGEAR";

// Database configuration
$servername = "localhost";      
$username = "root";
$password = "";
$dbname = "event_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists to avoid Undefined Array Key warnings
$fullName = isset($_POST['full_name']) ? $_POST['fullname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['select_event']) ? $_POST['select_event'] : '';
$address = isset($_POST['preferred_date']) ? $_POST['preferred_date'] : '';
$product = isset($_POST['contact_number']) ? $_POST['contact_number'] : '';
$quantity = isset($_POST['special_requests']) ? $_POST['special_requests'] : '';
$payment = isset($_POST['registration_date']) ? $_POST['registration_date'] : '';

// SQL query to insert data into the transactions table
$sql = "INSERT INTO transactions (full_name, email, select_event, preferred_date, contact_number, special_requests, registration_date) 
VALUES ('$full_name', '$email', '$select_event', '$preferred_date', '$contact_number', '$special_requests', '$registration_date')";
?>

