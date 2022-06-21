<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/haveClass.php';

$type = 1;
$shooter = new Have();
$shot=$shooter->readHave($bdd,$type);
echo json_encode($shot);








