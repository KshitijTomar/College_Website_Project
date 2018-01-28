<?php
setcookie("user_name", "null", time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("logged_in", "0", time() + (86400 * 30), "/"); // 86400 = 1 day
header('Location: index.php');
?>