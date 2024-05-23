<?php
$username = $_POST["username"];
$name = $_POST["name"];
$email    = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "", "firstdb");
$query = "insert into signupdetails(username, name, email, password) values ('$username', '$name', '$email', '$password')";


$result = mysqli_query($con, $query);

// echo $userName, "<br>";
// echo $name, "<br>";
// echo $email, "<br>";
// echo $password, "<br>";


echo "<script>alert('Signed Up Successfully'); window.location.href='login.php';</script>"

?>