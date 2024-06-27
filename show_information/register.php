<?php
// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user input from the form
$name = $_POST["username"];
$email = $_POST["email"];

// Escape special characters to prevent SQL injection (important!)
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);

// Prepare the SQL statement
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

// Execute the query and handle errors
if ($conn->query($sql) === TRUE) {
    header("Location: index.php?success=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
