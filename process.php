<?php
// get the post records
$db_name = $db_info;
$email_phone = $_POST['email_phone']; 
$password = $_POST['password'];

// database connection code
$servername = "sql12.freesqldatabase.com";
$username = "sql12599952"; // replace with your own username
$password = "zttT6GSgwr"; // replace with your own password
$dbname = "sql12599952";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
   $stmt = $conn->prepare("INSERT INTO tbl_contact (Id, email_number, password) VALUES (0, ?, ?)");
   $stmt->bind_param("ss", $email_phone, $password);
   $stmt->execute();
   header("Location: couple_query.html");
   $stmt->close();
   $conn->close(); 
}
?>
