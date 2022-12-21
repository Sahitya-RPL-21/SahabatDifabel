<?php
require('../classes/userClass.php');

$email = $_POST['username'];
$password = $_POST['password'];

$user = new LoginClass($email, $password);

$user->print();

echo "<br>";
echo "<pre>";
var_dump($user);
echo "</pre>";
