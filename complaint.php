<?php
$name = $_POST['name'];  
$email = $_POST['email'];
$comment = $_POST['comment'];

$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "website";
echo '<a href="complaint.html"></a>';
// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO complaint(name, email, comment) VALUES ('$name', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
echo '<script> alert("THANK YOU YOUR COMPLAINT RECORDED SUCCESSFULLY");window. location. href="complaint.html";</script>';

} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>