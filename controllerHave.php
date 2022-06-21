<?php
session_start();
include './config/connexion.php';
include './model/curateClass.php';
include './view/shots.php';

if(isset($_POST['id_partyitem'])&&isset($_SESSION['id'])){
    $plan = new Curate();
     
 if(isset($_POST['add_plan'])){
    $plan->setIdParty(htmlspecialchars(strip_tags($_POST['id_partyitem'])));
    $plan->setIdUser(htmlspecialchars(strip_tags($_SESSION['id'])));
    if($plan->curateExist($bdd)==true){
    $plan->createCurate($bdd);
    echo '<script>alert("Item added to planner")</script>';
    }

else{
echo '<script>alert("Item already in planner")</script>';
}
}
}