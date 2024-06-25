<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'sesotho');

// Check connection
if ($conn->connect_error) {
    die("Connection failed  : " .$conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into clients(firstname, lastname, username, email, password) value(?,?,?,?,?)");
	$stmt->bind_param( "sssss" ,$firstName, $lastName, $username, $email, $password);
	
	$stmt->execute();
	
	header('location: login.html');
	
	$stmt->close();
	$conn->close();
}
?>


