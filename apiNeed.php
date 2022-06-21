
<?php
header ("Access-Control-Allow-Origin: *");
include './config/connexion.php';
include './model/needClass.php';
$ingredient=new Need();
$addNeed = $ingredient->showAllNeed($bdd);
echo json_encode($addNeed);