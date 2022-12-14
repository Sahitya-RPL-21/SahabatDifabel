<?php
require('userClass.php');
$regForm = $_POST;

$user = new User($regForm['username'],$regForm['password']);

echo "Username = ".$user->getUsername().", Password = ".$user->getPassword();

echo "<pre>";
var_dump($regForm);
echo "</pre>";

?>