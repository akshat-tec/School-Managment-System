<?php
$name = $_POST['name'];
$mname = $_POST['mname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$qualification = $_POST['qualification'];
$passingyear = $_POST['passingyear'];
$percentage = $_POST['percentage'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$server = "localhost";
$username = "root";
$password = "123456";
$dbname = "website";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tform( name,mname,fname,email,phonenumber,qualification,passingyear,percentage,state,city,zipcode) 
VALUES ('$name', '$mname', '$fname', '$email', '$phonenumber', '$qualification', '$passingyear', '$percentage', '$state', '$city', '$zipcode')";

if (mysqli_query($conn, $sql)) {
    echo '<script> alert("THANK YOU ! YOUR RECORDED SUCCESSFULLY WE WILL CONTACT YOU SHORTLY");window. location. href="teacher application.html";</script>';
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>