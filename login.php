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
$password=$_POST['lpwd'];
echo $email;
$sql = "SELECT UID FROM users WHERE Email LIKE '".$email."' and Password = '$password' ";
echo $sql;
$result = mysqli_query($conn,$sql);
if($result) {
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
}
else {
	echo "nop";
	$count = 0;
}


if($count == 1)
{
	setcookie("user_name",$email,time() + 5600*60)
	header('Location: home.php');
}
else {
    header('Location: login.html');
 }
?>
