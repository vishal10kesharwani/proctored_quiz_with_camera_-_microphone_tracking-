
<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
//$name = $_POST['name'];
//$name= ucwords(strtolower($name));
//$gender = $_POST['gender'];
$email = $_POST['email'];

$password = $_POST['password'];



$q=mysqli_query($con,"INSERT INTO admin VALUES  ('$email' , '$password' , 'admin')");

$message = "Successfully Registered";
echo "<script type='text/javascript'>alert('$message');</script>";

header("location:$ref?q=Succesfully registered");


?>