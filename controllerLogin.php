<?php
session_start();
include './config/connexion.php';
include './model/userClass.php';
include './view/login.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    if(isset($_POST['email_user'])&& isset($_POST['password_user'])){
        $user = new User();
        $user->setEmail(htmlspecialchars(strip_tags($_POST['email_user'])));
        $user->setPassword(htmlspecialchars(strip_tags($_POST['password_user'])));
        
        $emailLog = $_POST['email_user'];
        $passwordLog = $_POST['password_user'];

        $userLog = $user->getUserByMail($bdd);
        
        $ex = $user->userExist($bdd);
        if($ex!=NULL){
            header('Location: NotPartying');
        }
       
        else if($userLog!=NULL){
            if(password_verify($passwordLog, $userLog[0]['password_user'])){
                 
                $_SESSION['id'] = $userLog[0]['id_user'];
                $_SESSION['name'] = $userLog[0]['name_user'];
                $_SESSION['surname'] = $userLog[0]['surname_user'];
                $_SESSION['email'] = $userLog[0]['email_user'];
                $_SESSION['password'] = $userLog[0]['password_user'];
                $_SESSION['rights'] = $userLog[0]['id_rights'];
                $_SESSION['msg'] = "";
                $_SESSION['connected'] = true;}
                else{
                    header('Location: whoops!');
                    }
                
            if($_SESSION['rights']==1){
                header('Location: ChoisirShooter');
                }
            else if($_SESSION['rights']==2){
                header('Location: 685732145AdMinAreABossInDaHouse!');
                }

            }
        }
}



        
    



?>