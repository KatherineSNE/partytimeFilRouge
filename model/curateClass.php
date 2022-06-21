<?php
class Curate{
    private $id_partyitem;
    private $id_user;


public function getIdParty(){
    return $this->id_partyitem;
}

public function setIdParty($newPid){
    $this->id_partyitem = $newPid; 
}

public function getIdUser(){
    return $this->id_user;
}

public function setIdUser($newUid){
    $this->id_user = $newUid;
}


public function createCurate($bdd){
    try{
        $req=$bdd->prepare('INSERT INTO curate (id_partyitem,id_user)
                            VALUES(:id_partyitem,:id_user)');
        $req->execute(array(
            ':id_partyitem'=>$this->id_partyitem,
            ':id_user'=>$this->id_user
            
        ));
    }
        catch(exception $e){
            die('error:'.$e->getMessage());
        }
}

public function selectAllCurate($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM curate 
        INNER JOIN user ON user.id_user = curate.id_user
        INNER JOIN partyitem ON partyitem.id_partyitem = curate.id_partyitem');
        $allPlanners = $req->fetchAll();
        return $allplanners;
    }
    catch(exception $e){

    }
}

public function curateExist($bdd){
    $checkCurate = $bdd->prepare('SELECT * FROM curate 
                                INNER JOIN user ON user.id_user = curate.id_user
                                INNER JOIN partyitem ON partyitem.id_partyitem = curate.id_partyitem
                                WHERE curate.id_partyitem = :id_partyitem AND curate.id_user=:id_user');
    $checkCurate->execute(array(
                            ':id_user'=> $this->id_user,
                            ':id_partyitem'=>$this->id_partyitem 
                         ));
    $result=$checkCurate->fetchAll();

    if($result){
        return false;
    }
    else{
        return true;
    }
}

public function selectCurateByUser($bdd){
    try{
        $req=$bdd->prepare('SELECT name_partyitem,description_partyitem FROM curate 
        INNER JOIN user ON user.id_user = curate.id_user
        INNER JOIN partyitem ON partyitem.id_partyitem = curate.id_partyitem 
        WHERE user.id_user = :id_user');
        $req->execute(array(
            ':id_user'=>$this->id_user,
        ));
        $planner=$req->fetchAll();
        return $planner;
    }
    catch(exception $e){
        die('error:'.$e->getMessage());
    }
}






}
//!gives me id of user with all info from item chosen
//SELECT * FROM voir INNER JOIN partyItem ON partyItem.id_partyItem = voir.id_partyItem WHERE voir.id_user = :id_user')
//!take all info from voir as well as all info from user 
//SELECT * FROM `voir` join partyitem on voir.id_partyItem=partyitem.id_partyItem join user on voir.id_user=user.id_user;
//!lets me count info stocked by a certain user - Marketing
//SELECT COUNT(*)FROM `voir` WHERE `id_user`=1;