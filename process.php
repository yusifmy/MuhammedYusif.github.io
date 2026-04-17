<?php
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);

echo "<h2>Signup Successful</h2>";
echo "Name: " . $fullname . "<br>";
echo "Email: " . $email . "<br>";
?>