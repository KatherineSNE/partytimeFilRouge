<?php
session_start();
include './config/connexion.php';
include './model/curateClass.php';
include './view/ideas.php';

if(isset($_POST['id_partyitem'])&&isset($_SESSION['id'])){
    $idea = new Curate();
     
 if(isset($_POST['add_plan'])){
    $idea->setIdParty($_POST['id_partyitem']);
    $idea->setIdUser($_SESSION['id']);
    $idea->createCurate($bdd);
}
}