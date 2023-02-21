<?php
// get the post records
$db_name = $db_info;
$email_phone = $_POST['email_phone']; 
$password = $_POST['password'];
// database connection code

$conn = new mysqli('localhost', 'root', '', 'db_contact'); // Updated to use the correct credentials and database name

if ($conn->connect_error){
  die('Connection Failed : '-$conn ->connect_error);
}else{
   $stmt = $conn->prepare(" Insert Into tbl_contact(Id, email_number, password)
   values('0', ?, ?)");
   $stmt->bind_param("ss",$email_phone, $password);
   $stmt->execute();
   header("location : couple query.html");
  $stmt->close();
  $conn->close(); 
}