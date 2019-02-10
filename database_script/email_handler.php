<?php
	/*if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$company=$_POST['company'];

		$to="vikram1001102@gmail.com";
		$subject="user registration";
		$message="Name : ".$name."\n"."Email : ".$email."\n"."Phone : ".$phone."\n"."City : ".$city."\n"."Company : ".$company;
		$header="From ".$email;
		if(mail($to, $subject, $message,$header)){
			echo"<h1> Send Successfully! Thank You "." ".$name.", We will contact you soon.";
		}else{
			echo " Something went wrong!";
		}

	}*/
	if(isset($_POST['submit'])){
		$email=$_POST['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
/*$sql = "CREATE DATABASE myDB";*/
// sql to create table
/*$sql = "CREATE TABLE MyClient(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(30) NOT NULL
)";*/
$sql= "insert into myclient(email) values('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>