<?php

class Blocked{
    private $id_blocked_user;
    private $ip_blocked_user;
   

public function getId(){
    return $this->id_blocked_user;
}

public function setId($newId){
    $this->id_blocked_user = $newId;
}

public function getIp(){
    return $this->ip_blocked_user;
}

public function setIp($newIp){
    $this->ip_blocked_user = $newIp;
}


public function createBlocked($bdd){
    try{
        $block=$bdd->prepare('INSERT INTO blocked_user(ip_blocked_user)
                            VALUES(:ip_blocked_user)');
                        $block->execute(array(
                            ':ip_blocked_user'=>$this->ip_blocked_user,
                        ));                    
    }
    catch(exception $e){
        die('error:'.$e->getMessage());
    }
}

public function deleteBlockedIp($bdd){

    try{
        $del = $bdd->prepare("DELETE FROM blocked_user WHERE :ip_blocked_user = ip_blocked_user");
        $del->execute(array(
                            ':ip_blocked_user' => $this->time_blocked_user
                            ));
        if($del){
            return true;
        }
        }

    catch(exception $e){
        die('error'.$e->getMessage());
        }
    }


}