<?php
class Partyitem{

    private $id_partyitem;
    private $name_partyitem;
    private $image_partyitem;
    private $description_partyitem;
    private $visibility_partyitem;
    private $id_type_partyitem;
    

public function getId(){
    return $this->id_partyitem;
}

public function setId($newId){
    $this->id_partyitem = $newId;
}

public function getName(){
    return $this->name_partyitem;
}

public function setName($newName){
    $this->name_partyitem = $newName;
}

public function getImage(){
    return $this->image_partyitem;
}

public function setImage($newImage){
    $this->image_partyitem = $newImage;
}

public function getDescription(){
    return $this->description_partyitem;
}

public function setDescription($newDescription){
    $this->description_partyitem = $newDescription;
}

public function getVisibility(){
    return $this->visibility_partyitem;
}

public function setVisibility($newVisibility){
    $this->visibility_partyitem = $newVisibility;
}

public function getType(){
    return $this->id_type_partyitem;
}

public function setType($newType){
    $this->id_type_partyitem = $newType;
}

public function createPartyitem($bdd, $name, $im ,$des, $vis, $ity){
try{    
        $req = $bdd->prepare('INSERT INTO partyitem(name_partyitem, image_partyitem,description_partyitem,
                                          visibility_partyitem,id_type_partyitem)
                    VALUES (:name_partyitem,:image_partyitem,:description_partyitem,:visibility_partyitem,
                            :id_type_partyitem)');
      
                            $req->bindParam(':name_partyitem', $name, PDO::PARAM_STR);
                            $req->bindParam(':image_partyitem', $im, PDO::PARAM_STR);
                            $req->bindParam(':description_partyitem', $des, PDO::PARAM_STR);
                            $req->bindParam(':visibility_partyitem', $vis, PDO::PARAM_INT);
                            $req->bindParam(':id_type_partyitem', $ity, PDO::PARAM_INT);
                            $req->execute();
    }
catch(exception $e){
    die('error:'.$e->getMessage());
    }
}

public function partyitemExist($bdd, $name){
    $checkItem = $bdd->prepare('SELECT image_partyitem, name_partyitem, description_partyitem FROM partyitem 
                                WHERE name_partyitem = :name_partyitem');
    $checkItem ->bindParam(':name_partyitem',$name);
    $checkItem->execute();
    $result=$checkItem->fetch();

    if($result){
        return false;
    }
    else{
        return true;
    }
}


public function showAll($bdd){
   try{ 
       $req = $bdd->prepare('SELECT id_partyitem,name_partyitem FROM partyitem');
                $req->execute();
     $recipe = $req->fetchAll();
     return $recipe;
   }
catch(exception $e){
    die('error:'.$e->getMessage());
    }
    return $recipe;
}


public function showAllItems($bdd){
    try{ 
        $req = $bdd->prepare('SELECT * FROM partyitem ORDER BY id_type_partyitem ASC');
                 $req->execute();
      $all = $req->fetchAll();
      
    }
 catch(exception $e){
     die('error:'.$e->getMessage());
     }
     return $all;
 }
public function showPartyitembyType($bdd,$type){
    try{
    $req = $bdd->prepare('SELECT * FROM partyitem WHERE partyitem.id_type_partyitem LIKE '.$type.' AND visibility_party = 1');
                $req->execute();
                 $recipe = $req->fetchAll();
     return $recipe;
}
catch(exception $e){
    die('error:'.$e->getMessage());
    }
}

public function updateParty($bdd){
        try{
        $mod = $bdd->prepare('UPDATE partyitem SET  
                                                 name_partyitem = :name_partyitem,
                                                 image_partyitem = :image_partyitem,
                                                 description_partyitem = :description_partyitem,
                                                 visibility_partyitem = :visibility_partyitem,
                                                 id_type_partyitem = :id_type_partyitem
                                                 WHERE id_partyitem = :id_partyitem');
        
                            $mod->execute(array(
                                                'id_partyitem' => $this->id_partyitem, 
                                                ':name_partyitem'=>$this->name_partyitem,                                    
                                                'image_partyitem'=>$this->image_partyitem,
                                                ':description_partyitem'=>$this->description_partyitem,
                                                ':visibility_partyitem'=>$this->visibility_partyitem,
                                                ':id_type_partyitem'=>$this->id_type_partyitem
                                                 ));
                                    
            }
        
catch(exception $e){
die('error'.$e->getMessage());
        }
        
    }

public function deletePartyitem($bdd){

        try{
            $del = $bdd->prepare('DELETE FROM partyitem WHERE id_partyitem = :id_partyitem');
            $del->execute(array(
                                'id_partyitem' => $this->id_partyitem,
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



