<?php

$conn = mysqli_connect("localhost","root","","college_website_db");

$uname = $_POST["username"];
$psw = $_POST["password"];
$email = $_POST["email"];
$user_exists = false;

$query = "SELECT uname, psw, email FROM users ORDER BY id;";
$result = mysqli_query($conn,$query);
while($data = mysqli_fetch_assoc($result)){
	$name = $data['uname'];
	$pass = $data['psw'];

	if ($uname == $name) {
		{
			if ($psw == $pass) {
				echo "User already exists. Redirecting to login page....";
				$user_exists = true;
				// sleep(5);
				header('Location: Login.php');
				break;
			}
		}
	}
}

if ($user_exists == false) {
	$mysql_qry = "INSERT INTO `users` (`id`, `uname`, `psw`, `email`) VALUES (NULL,'$uname','$psw', '$email');";

	//$mysqli_result  = mysqli_query($conn,$mysql_qry);
	if ($conn->query($mysql_qry) === TRUE) {
	 	setcookie("user_name", $uname, time() + (86400 * 30), "/"); // 86400 = 1 day
		setcookie("logged_in", "1", time() + (86400 * 30), "/"); // 86400 = 1 day
		header('Location: index.php');
	}
	else{
		echo "Error : " . $mysql_qry . "<br>" . $conn->error;
	}
}
$conn->close();
?>