<?php
// Database connection settings (replace with your database credentials)
$host = "localhost:3307";
$username = "root";
$password = "";
$database = "book";

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$destination = $_POST["destination"];
$persons = $_POST["persons"];
$date = $_POST["date"];
$message = $_POST["message"];

// Insert the booking into the database
$sql = "INSERT INTO bookings (destination, persons, date, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $destination, $persons, $date, $message);

if ($stmt->execute()) {
    echo "Booking successfully saved in the database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
