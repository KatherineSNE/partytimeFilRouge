<?php
include './config/connexion.php';
include './model/blockedUserClass.php';

$add = $_SERVER['REMOTE_ADDR'];

$blockuser = new Blocked();
$blockuser->getIp($add);
$blockuser->setIp(htmlspecialchars(strip_tags($add)));
$blockuser->createBlocked($bdd);

$time = time();
$day = 3;
$hour = 0;
$ban = ((3600 * $day)+(60*$hour)) * 900 ;


if($time > $ban<900){
    $blockuser->deleteBlock($bdd)
}



//!research temporary table to self delete after so long



