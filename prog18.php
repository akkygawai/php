<!-- Write a PHP script to implement database creation. -->
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);
if(! $conn )
    die('Could not connect: ' . mysqli_connect_error());   
else
    echo 'Connected successfully<br/>';
$sql = 'CREATE Database mySQLDB1';  
if(mysqli_query( $conn,$sql))  
    echo "Database created successfully.";  
else
echo "Sorry, database creation failed ".mysqli_error($conn);  
mysqli_close($conn);  
?>