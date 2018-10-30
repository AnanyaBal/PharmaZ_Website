<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmaz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
$confpassword=$_POST['confirm_password'];
$phn=$_POST['phn'];


if($password == $confpassword) {
  echo "yay";
  $id = mt_rand();
  $sql = "INSERT INTO `users`(`UID`, `Name`, `Email`, `Password`, `Phone`) VALUES ($id,'$name','$email','$password',$phn)";
  echo $sql;
  $result = mysqli_query($conn,$sql);
  if($result) {
    setcookie("user_name", $name, time() + 5600*60);
    header("Location: Home.php");
  }
  else {
    echo "nop";
  }

}
