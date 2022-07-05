<?php
class Need{
    private $id_need;
    private $name_need;
    private $id_type_need;

public function getId(){
    return $this->id_need;
}
public function setId($newId){
    $this->id_need = $newId;
}

public function getName(){
    return $this->name_need;
}

public function setName($newName){
    $this->name_need = $newName;
}

public function getType(){
    return $this->id_type_need;
}

public function setType($idType){
    $this->id_type_need = $idType;
}



public function createNeed($bdd, $nmne, $tyne){
        try{
            $req=$bdd->prepare('INSERT INTO need(name_need,id_type_need)
                                VALUES(:name_need,:id_type_need)');
            $req->bindParam(':name_need', $nmne, PDO::PARAM_STR);
            $req->bindParam(':id_type_need',$tyne, PDO::PARAM_INT);
            $req->execute();
                                                    
        }
            catch(exception $e){
                die('error:'.$e->getMessage());
            }
    }

public function needExist($bdd){
        $checkOne = $bdd->prepare('SELECT * FROM need WHERE name_need = :name_need');
        $checkOne->execute(array(
                             ':name_need'=>$this->name_need 
                             ));
        $result=$checkOne->fetch();

        if($result){
            return false;
        }
        else{
            return true;
        }
    }

    public function showAllNeed($bdd){
        try{ 
            $req = $bdd->prepare('SELECT id_need,name_need FROM need
                    ORDER BY id_type_need ASC');
                     $req->execute();
          $needed = $req->fetchAll();
          return $needed;
        }
     catch(exception $e){
         die('error:'.$e->getMessage());
         }
         return $needed;
     }

// public function showAllRequired($bdd){
//     try{
//        $req=$bdd->prepare('SELECT * FROM required_one ORDER BY name_required_one ASC');
//        $req->execute();
//        $element = $req->fetchAll();
//     }
//     catch(exception $e){
//         die('error:'.$e->getMessage());
//     }
//     return $element;
// }
}