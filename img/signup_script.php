<?php 

include 'config.php';



$email =mysqli_real_escape_string($conn,$_POST['email']);
$name =$_POST['name'];
$contact =$_POST['contact'];
$city =$_POST['city'];
$codeneed =$_POST['codeneed'];

$user= "INSERT INTO form (`email`, `name`, `contact`, `city`, `codeneed`) VALUES ('$email', '$name', '$contact', '$city', '$codeneed')" or die (mysqli_error ($conn, $user));
$user = mysqli_query($conn, $user) or die(mysqli_error($conn, $user));


header("location:index.php");



?>