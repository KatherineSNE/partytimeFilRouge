<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/curateClass.php';
$plan= new Curate();
$planner = $plan->selectCurateByUser($bdd);
echo json_encode($planner);