<?php
require('../classes/userClass.php');
require('../classes/database.php');

$regForm = $_POST;

$database = new Database("localhost","sahabatdifabel","root","");

$user = new User($regForm['username'],$regForm['password']);
echo "Username: " .$user->getUsername()." is created with Password: " .$user->getPassword();

/*
echo "<pre>";
var_dump($user);
echo "</pre>";
*/

$database->createUser($user);

header("Location: ../home.php");
exit();
?>