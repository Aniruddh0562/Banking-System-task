<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="banking";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$a = $_POST['account_no'];
$b = $_POST['name'];
$c = $_POST['email'];
$d = $_POST['balance'];

$sql = "INSERT INTO `customers`( `account_no`, `customer_name`, `email_id`, `balance`) VALUES ('$a','$b','$c','$d')"; 

        
       																										 

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('location:http://localhost/banking/add_users.php');	

?>