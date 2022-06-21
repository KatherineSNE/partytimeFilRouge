<?php
include './config/connexion.php';
include './model/blockedUserClass.php';

$add = $_SERVER['REMOTE_ADDR'];

$blockuser = new Blocked();
$blockuser->getIp($add);
$blockuser->setIp(htmlspecialchars(strip_tags($add)));
$blockuser->createBlocked($bdd);



//!research temporary table to self delete after so long



