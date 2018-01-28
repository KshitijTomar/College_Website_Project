<?php
$to = "kshtjtomar40@gmail.com";
$subject = "Admission_student_" . $_POST["Your_name"];
$msg = "New addmission application <br><br>";
$msg = $msg . "Your name = " . $_POST["Your_name"] . "<br>";
$msg = $msg . "Birth date = " . $_POST["bday"] . "<br>";
$msg = $msg . "Your email = " . $_POST["Email"] . "<br>";
$msg = $msg . "Your phone = " . $_POST["Phone"] . "<br>";
$msg = $msg . "Your address = " . $_POST["address"] . "<br>";
$msg = $msg . "Your Line = " . $_POST["Line"] . "<br>";
$msg = $msg . "Your City = " . $_POST["City"] . "<br>";
$msg = $msg . "Your Zip Code = " . $_POST["Zip_Code"] . "<br>";
$headers = "From: college_website_project@college_website.com" . "\r\n" .
"CC: kshtjtomar40@gmail.com";

mail($to,$subject,$msg,$headers);
?>