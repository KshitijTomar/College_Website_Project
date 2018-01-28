<html>
<body>
<div id="result"></div>
<?php
//connect to db
$conn = mysqli_connect("localhost","root","","college_website_db");
//get POST data
$uname = $_POST["username"];
$psw = $_POST["password"];
//Set variables
$logged_in = false;

//get data from db to check for already existing usernames and passwords
$query = "SELECT uname, psw FROM users ORDER BY id;";
$result = mysqli_query($conn,$query);
while($data = mysqli_fetch_assoc($result)){
	$name = $data['uname'];
	$pass = $data['psw'];
	if ($uname == $name) {
		{
			if ($psw == $pass) {
				echo "Login Successful";
				$logged_in = true;
				//set COOKIES
				setcookie("user_name", $uname, time() + (86400 * 30), "/"); // 86400 = 1 day
				setcookie("logged_in", "1", time() + (86400 * 30), "/"); // 86400 = 1 day
				header('Location: index.php');
				break;
			}
		}
	}
}

if($logged_in == false){
	echo 'User not registered.<br><a href="login.php">Go back and press the Register Button at the bottom.</a>';
	setcookie("user_not_registered", "1", time() + (86400 * 30), "/"); // 86400 = 1 day
	header('Location: register.php');
}
$conn->close();
?>

</body>
</html>