<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class User {
    private $id_user;
    private $name_user;
    private $surname_user;
    private $email_user;
    private $password_user;
    private $id_rights;
    
    
public function getId(){
   return $this->id_user;
    }
    
public function setId($newId){
    $this->id_user=$newId;
    }
public function getName(){
    return $this->name_user;
}

public function setName($newName){
    $this->name_user=$newName;
}

public function getSurname(){
    return $this->surname_user;
}

public function setSurname($newSurname){
    $this->surname_user = $newSurname;
}

public function getEmail(){
    return $this->email_user;
}

public function setEmail($newEmail){
    $this->email_user = $newEmail;
}

public function getPassword(){
    return $this->password_user;
}

public function setPassword($newPassword){
    $this->password_user = $newPassword;
}

public function getIdRights(){
    return $this->id_rights;
}

public function setIdRights($newRight){
    $this->id_rights = $newRight;
}

public function createUser($bdd){
    try{
        $req = $bdd->prepare('INSERT INTO user(name_user,surname_user,email_user,password_user,id_rights)
        VALUES(:name_user, :surname_user,:email_user,:password_user,:id_rights)');
        $req->execute(array(':name_user'=>$this->name_user,
                            ':surname_user'=>$this->surname_user,
                            ':email_user'=>$this->email_user,
                            ':password_user'=>$this->password_user,
                            ':id_rights'=>$this->id_rights,
                            ));
                        }
    catch(exception $e){
        die('error:'.$e->getMessage());
    }
}


 public function userExist($bdd){
     try{ 
        $check = $bdd->prepare('SELECT * FROM user 
                                INNER JOIN rights ON rights.id_rights = user.id_rights 
                                WHERE email_user = :email_user');
        $check->execute(array(
                             ':email_user'=>$this->email_user  
                             ));
        $result=$check->fetch();

        if($result){
            return false;
        } 
        else{
            return true;
        }
    }
    catch(exception $e){
        die('error:'.$e->getMessage());
    }
}
    
public function getUserByMail($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM user WHERE email_user = :email_user');
        $req->execute(array(
        'email_user'=>$this->email_user,
        ));
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;   
    }
    catch(Exception $e){
        die('error'.$e->getMessage());
    }
}

public function updateUser($bdd){
    try{
    $change=$bdd->prepare('UPDATE user SET
                        name_user = :name_user,
                        surname-user = :surname_user,
                        email_user = :email_user,
                        password_user = :password_user,
                        WHERE id_user = :id_user');
        $change->execute(array(
                        'id_user'=>$this->id_user,
                        ':name_user'=>$this->name_user,
                        ':surname_user'=>$this->surname_user,
                        ':email_user'=>$this->email_user,
                        ':password_user'=>$this->password_user
                        ));
    }
    catch(Exception $e){
         die('error'.$e->getMessage());
    }
}

public function updatePassword($bdd){
    try{
    $req = $bdd->prepare('UPDATE user SET
                         password_user = :password_user,
                         WHERE id_user = :id_user');
            $req->execute(array(
                                'id_user'=>$this->id_user,
                                'password_user' =>$this->password_user
            ));
}
catch(Exception $e){
    die('error'.$e->getMessage());
}
}

public function deleteUser($bdd){

    try{
        $del = $bdd->prepare('DELETE FROM user WHERE id_user = :id_user');
        $del->execute(array(
                            'id_user' => $this->id_user
                            ));
        if($del){
            return true;
        }
        }

    catch(exception $e){
        die('error'.$e->getMessage());
        }
    }
    
public function sendMail($userEmail, $subject,$emailMessage){

require 'vendor/autoload.php';

    try{
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;              
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp-mail.outlook.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'katessmtptest@outlook.fr';                     
    $mail->Password   = 'TestSmtp!';                               
    $mail->SMTPSecure = 'tls';           
    $mail->Port       = 587;                                   
    $mail->setFrom('katessmtptest@outlook.fr','partytime');
    $mail->addAddress($userEmail);                   
    $mail->isHTML(true);                                  
    $mail->Subject =$subject;
    $mail->Body    = $emailMessage;
    $mail->AltBody = 

    $mail->send();
    
    } 
    catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


}



    






?>