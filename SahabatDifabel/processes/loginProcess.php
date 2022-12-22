<?php
require('../classes/userClass.php');
require('../classes/database.php');

$logForm = $_POST;

$database = new Database("localhost","sahabatdifabel","root","");

$exist = $database->getUser($logForm['username'],$logForm['password']);

echo "<pre>";
var_dump($exist);
echo "</pre>";

?>