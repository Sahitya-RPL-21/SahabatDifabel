<?php
require('../classes/userClass.php');

$regForm = $_POST;

$user = new User($regForm['username'],$regForm['password']);
echo "Username: " .$user->getUsername()." is created with Password: " .$user->getPassword();

echo "<pre>";
var_dump($user);
echo "</pre>";

header("Location: ../home.php");
exit();
?>