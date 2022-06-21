<?php
include './config/connexion.php';
include './model/partyitemClass.php';
include './model/needClass.php';
include './model/haveClass.php';
include './view/createPartyItem.php';



if(isset($_POST['name_partyitem'])&&isset($_POST['image_partyitem'])&&isset($_POST['description_partyitem'])
&&isset($_POST['visibility_partyitem'])&&isset($_POST['id_type_partyitem'])){
    $go = new Partyitem();
if(isset($_POST['add_partyitem'])){
    $go->setName(htmlspecialchars(strip_tags($_POST['name_partyitem'])));
    $go->setImage(htmlspecialchars(strip_tags($_POST['image_partyitem'])));
    $go->setDescription(htmlspecialchars(strip_tags($_POST['description_partyitem'])));
    $go->setVisibility(htmlspecialchars(strip_tags($_POST['visibility_partyitem'])));
    $go->setType(htmlspecialchars(strip_tags($_POST['id_type_partyitem'])));
    
    if($go->partyitemExist($bdd)==true){
        $go->createPartyitem($bdd);
        echo'<script>alert("partyitem has been added")</script>';
        }
    else{
        echo'<script>alert("partyitemitem already exists")</script>';
        }
    }
 }


if(isset($_POST['name_need'])&&isset($_POST['id_type_need'])){
    $need = new Need();
    if(isset($_POST['add_need'])){
        $need->setName(htmlspecialchars(strip_tags($_POST['name_need'])));
        $need->setType(htmlspecialchars(strip_tags($_POST['id_type_need']))); 
            if($need->needExist($bdd)==true){
                $need->createNeed($bdd);
                echo'<script>alert("item has been added")</script>';
                }
            else{
                echo'<script>alert("item already exists")</script>';
                }
            }
         }


if(isset($_POST['id_partyitem'])&&isset($_POST['id_need'])&&isset($_POST['placement'])){
    $have = new Have();
if(isset($_POST['add_have'])){
    $have->setIdPar(htmlspecialchars(strip_tags($_POST['id_partyitem'])));
    $have->setIdNeed(htmlspecialchars(strip_tags($_POST['id_need'])));
    $have->setPlacement(htmlspecialchars(strip_tags($_POST['placement'])));
    $have->createHave($bdd);
    echo'<script>alert("item has been added")</script>';
}
else{
echo'<script>alert("item not added")</script>';
}

}



