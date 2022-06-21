<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/haveClass.php';
$type = "3";
$thought = new Have();
$idea=$thought->readHave($bdd,$type);
echo json_encode($idea); 