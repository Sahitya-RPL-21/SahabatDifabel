<?php
require('../classes/userClass.php');
require('../classes/database.php');

$logForm = $_POST;

$database = new Database("localhost","sahabatdifabel","root","");

echo "<pre>";
var_dump($logForm);
echo "</pre>";

?>