<?php
session_start();
include './config/connexion.php';
include './model/userClass.php';
include './view/createuser.php';





if(isset($_POST['name_user'])&&isset($_POST['surname_user'])&&
   isset($_POST['email_user'])&&($_POST['password_user'])&&isset($_POST['id_rights'])){
       
   

    if($_POST['password_user']!=$_POST['confirmPassword']){
  
        header('Location: TryAgain');
    
    }else{           
                
    
            $user = new User();         
            $user->setName(htmlspecialchars(strip_tags($_POST['name_user'])));
            $user->setSurname(htmlspecialchars(strip_tags($_POST['surname_user'])));
            $user->setEmail(htmlspecialchars(strip_tags($_POST['email_user'])));
            $user->setPassword(htmlspecialchars(strip_tags(password_hash($_POST['password_user'], PASSWORD_DEFAULT))));
            $user->setIdRights(htmlspecialchars(strip_tags($_POST['id_rights'])));

            if($user->userExist($bdd)==true&&isset($_POST['submit'])){
            $user->createUser($bdd);
            $userEmail = "katherinesneddon33@gmail.com";
            $subject = "Welcome to the Party!!!!";
            $emailMessage =  'Veuillez cliquer sur le lien pour activer votre compte<br><br>
                              http://localhost/partytime/LoginToPartyWithTheBest';
            $user->sendMail($userEmail,$subject,$emailMessage);
            header('Location: verifyEmail');
             
            }
            else{
                header('Location: AlreadyPartying!');
            }
          
       } 
   }


  
   











    

?>  