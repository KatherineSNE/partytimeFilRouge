<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    $page=$_GET['page'];
        if($page=="LoginToPartyWithTheBest"){
    ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/login.css">
                <script src="./scripts/rememberUser.js" defer></script>
                <script src="./scripts/password.js" defer></script>
                <script src="./scripts/browser.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                <title>Se connecter</title>
                </head>
    <?php
        }
    if($page=="TuEsPartiTôt!"){
    ?>
                        <link rel = "stylesheet" href="./css/pass_verify.css">
                        <script src="./scripts/errorLogin.js" defer></script>
                        <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                        <title>Deconnected</title> 
    </head>
    <?php
        }
        if($page=="Create"){
    ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/createuser.css">
                <script src="./scripts/createUsePass.js" defer></script>
                <script src="./scripts/browser.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
               
                <title>S'inscrire</title>
                </head>
    <?php
        }
        if($page=="ChoisirShooter"){
        ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/partyitem.css">
                <script src="./scripts/shotsClient.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                <title>Shots</title>
                </head>
    <?php
        }
         if($page=="SelectionnerIdea"){
    ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/partyitem.css">
                <script src="./scripts/ideasClient.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                <title>Ideas</title>
                </head>
    <?php
//*ALL ERRORS
        }
        //*EMAIL NOT FOUND AT LOG IN
        if($page=="NotPartying"){
    ?>      
                <link rel="stylesheet" href="./css/pass_verify.css">
                <script src="./scripts/errorCreate.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                <title>Verifier Email</title>
                </head>
    <?php
        }//*PASS INCORRECT | PASSWORDS DONT MATCH CREATE
        if($page=="TryAgain"|$page=="whoops!"){
    ?>
                <link rel="stylesheet" href="./css/pass_verify.css">
                <script src="./scripts/errorReturn.js" defer></script>
                <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                <title>Whoopsi!</title>
                </head>
    <?php
        }
        //*EMAIL ALREADY EXISTS AT CREATE 
          if($page=="AlreadyPartying!"){
            ?>
                        <link rel="stylesheet" href="./css/pass_verify.css">
                        <script src="./scripts/errorLogin.js" defer></script>
                        <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                        <title>Whoopsi!</title>
                        </head>
            <?php
          }
        //  * ACCOUNT CREATED LINK SENT TO LOGIN 
             if($page=="verifyEmail"){
                ?>
                            <link rel="stylesheet" href="./css/pass_verify.css">
                            <script src="./scripts/verifyAccount.js" defer></script>
                            <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
                            <title>Presque dans le party!</title>
                            </head>
                <?php

            
             }
            //  *ATTEMPTS TO MODIFY URL
        else if($page=="Login"|$page=="login"|$page=="Admin"|$page=="admin"){
            ?>
            <link rel="stylesheet" href="./css/pass_verify.css">
            <script src="./scripts/errorReturn.js" defer></script>
            <link rel="icon" href="./image/yicon.jpg" type="image/x-icon">
            <title>Coquin!!!!</title>
        </head>
        <?php


        }
        //*Admin Add
        if($page=="685732145AdMinAreABossInDaHouse!"){
    ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/adminAdd.css">
                <link rel="stylesheet" href="./css/forms.css">
                <script src="./scripts/admin.js" defer></script>
                <title>Whoop new Party!</title>
                </head>
    <?php
        }
        //*Admin Mod 
        if($page=="sop489kh62375AdMinAreABossInDaHouse!"){
    ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/adminMod.css">
                <link rel="stylesheet" href="./css/forms.css">
                <script src="./scripts/adminMod.js" defer></script>
                <title>Update Party!</title>
                </head>
    <?php
        } 
    if($page=="PartyOn!"){
            ?>
                <link rel="stylesheet" href="./css/mainO.css">
                <link rel="stylesheet" href="./css/Planner.css">
                <script src="./scripts/planner.js" defer></script>
                <title>Update Party!</title>
                </head>
            <?php
                } 
    

    ?>

