<?php
include './config/connexion.php';
include './model/partyitemClass.php';
include './model/haveClass.php';
include './view/modifyPartyItem.php';

if(isset($_POST['name_partyitem'])&&isset($_POST['image_partyitem'])
&&isset($_POST['description_partyitem'])&&isset($_POST['visibility_partyitem'])&&isset($_POST['id_type_partyitem'])){
      $partymod = new Partyitem();
      $partymod->setId(htmlspecialchars(strip_tags($_POST['id_partyitem'])));
      $partymod->setName(htmlspecialchars(strip_tags($_POST['name_partyitem'])));
      $partymod->setImage(htmlspecialchars(strip_tags($_POST['image_partyitem'])));
      $partymod->setDescription(htmlspecialchars(strip_tags($_POST['description_partyitem'])));
      $partymod->setVisibility(htmlspecialchars(strip_tags($_POST['visibility_partyitem'])));
      $partymod->setType(htmlspecialchars(strip_tags($_POST['id_type_partyitem'])));
      if(isset($_POST['update_db']))
      $partymod->updateParty($bdd);
      

}
if(isset($_POST['name_partyitem'])&&isset($_POST['image_partyitem'])
&&isset($_POST['description_partyitem'])&&isset($_POST['id_type_partyitem'])&&isset($_POST['visibility_partyitem'])){
     
            $del = new Partyitem();
            $del->setId(htmlspecialchars(strip_tags($_POST['id_partyitem'])));
            $del->setName(htmlspecialchars(strip_tags($_POST['name_partyitem'])));
            $del->setImage(htmlspecialchars(strip_tags($_POST['image_partyitem'])));
            $del->setDescription(htmlspecialchars(strip_tags($_POST['description_partyitem'])));
            $del->setVisibility(htmlspecialchars(strip_tags($_POST['visibility_partyitem'])));
            $del->setType(htmlspecialchars(strip_tags($_POST['id_type_partyitem'])));
      
            if(isset($_POST['choose'])&&isset($_POST['del_db'])){
            $del->deletePartyitem($bdd);
}
    }





    


    
        

