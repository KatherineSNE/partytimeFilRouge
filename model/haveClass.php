<?php
class Have{
     private $id_need;
    private $id_partyitem;
    private $placement;
 
    
    public function getIdPar(){
        return $this->id_partyitem;
    }
    public function setIdPar($newIdPar){
        $this->id_partyitem=$newIdPar;
    }

    public function getIdNeed(){
        return $this->id_need;
    }
    
    public function setIdNeed($newIdNeed){
        $this->id_need = $newIdNeed;
    }

    public function getPlacement(){
        return $this->placement;
    }
    
    public function setPlacement($newPlacement){
        $this->placement = $newPlacement;
    }

public function createHave($bdd){
    try{
        $req=$bdd->prepare('INSERT INTO have(id_partyitem, id_need, placement)
                            VALUES(:id_partyitem, :id_need, :placement)');
        $req->execute(array(
                            
                            ':id_partyitem'=>$this->id_partyitem,
                            ':id_need'=>$this->id_need,
                            ':placement'=>$this->placement,         
        ));
    }
    catch(exception $e){
        die('error:'.$e->getMessage());
    }
}

public function readHave($bdd,$type){
    try{    
            $partyitem=$bdd->prepare("SELECT DISTINCT have.id_partyitem,name_partyitem,image_partyitem,
                                description_partyitem,id_type_partyitem 
                                FROM have
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem
                                WHERE visibility_partyitem = 1  AND id_type_partyitem = $type
                                ORDER BY have.id_partyitem ASC");
                
            $partyitem->execute();
            $item = $partyitem->fetchAll(PDO::FETCH_OBJ);
    foreach($item as $details){
            $one=$bdd->prepare("SELECT have.id_partyitem, name_need AS one FROM have 
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need 
                                WHERE $details->id_partyitem AND id_type_partyitem = $type AND placement = 1");
}
            $one->execute();
            $first = $one->fetchAll(PDO::FETCH_OBJ);
    foreach($first as $next){
            $two=$bdd->prepare("SELECT have.id_partyitem, name_need AS two 
                                FROM have 
                                INNER JOIN partyitem  ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need 
                                WHERE $next->id_partyitem AND id_type_partyitem = $type AND placement = 2");
                        }
            $two->execute();
            $second = $two->fetchAll(PDO::FETCH_OBJ);
    foreach($second as $last){
            $three=$bdd->prepare("SELECT have.id_partyitem, name_need AS three 
                                FROM have
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need 
                                WHERE $last->id_partyitem AND id_type_partyitem = $type AND placement = 3");
                        }
            $three->execute();
            $third = $three->fetchAll(PDO::FETCH_OBJ);
            $objectComplete = array($item,$first,$second,$third);
            return $objectComplete;
    }       
    catch(exception $e){
        die('error:'.$e->getMessage());
    }  
}
public function readAllAssociate($bdd){
    try{
        $req=$bdd->prepare("SELECT * FROM associate 
                            INNER JOIN partyitem ON partyitem.id_partyitem = associate.id_partyitem 
                            INNER JOIN required_one ON required_one.id_required_one = associate.id_required_one
                            INNER JOIN required_two ON required_two.id_required_two = associate.id_required_two 
                            INNER JOIN required_three ON required_three.id_required_three = associate.id_required_three
                            ORDER BY partyitem.id_typeitem ASC");
        $req->execute();
        $as = $req->fetchAll();
        return $as;
    }
    catch(exception $e){
        die('error:'.$e->getMessage());
        }  
    }
}