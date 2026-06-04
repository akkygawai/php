<?php  
$host = 'localhost';  
$user = '';  
$pass = '';  
$dbname='admissiondb';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO admissions VALUES ('$name', '$email', $phone, '$course')";

if ($conn->query($sql) === TRUE) 
    echo "New record created successfully";
else 
    echo "Error: " . $sql . "<br>" . $conn->error;
$conn->close();
?>
