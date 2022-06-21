<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/partyitemClass.php';

$fete = new Partyitem();
$shot=$fete->showAllItems($bdd);
echo json_encode($shot);
