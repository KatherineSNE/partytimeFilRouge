#Activation du rewrite des URL
RewriteEngine On
#base du projet (emplacement à partir de la racine du serveur)
RewriteBase /partytime/
#si ce n'est pas un répertoire
RewriteCond %{REQUEST_FILENAME} !-d
# Si ce n'est pas un fichier
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]

$parsed_url = parse_url($_SERVER['REQUEST_URI']);
   
   $path = isset($parsed_url['path']) ? $parsed_url['path'] : '/';

   switch($path){
       case $path === "/partytime/":
               include './controllerHome.php';
       case $path === "/partytime/Login":
           include './controllerLogin.php';
       case $path === "/partytime/Create" : 
           include './controllerCreateAccount.php';
       
   }


   #RewriteEngine On

#RewriteCond %{REQUEST_FILENAME} !-f
#RewriteCond %{REQUEST_FILENAME} !-d

#RewriteRule ^(.*)$ index.php?page=$1



#Options -Indexes


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

  
//       if(isset($_GET['page'])) {
//           $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
//       }
//       if(empty($url[0])) {
//           require "controllerHome.php";
//       }
     
//       else {
//           switch($url[0]) {
//               case "Login":
//                   if (empty($url[1])) {
//                     require "controllerLogin.php";
                    
//                   break;
//                   }
//                   case "Guest":
//                     if(empty($url[1])) {
//                         require "controllerHome.php";
//                         break;
//                     }
//                     case "Create":
//                         if(empty($url[1])) {
//                             require "controllerCreateAccount.php";
//                             break;
//                         }
//                 }
//             }

            
                // case "Create":
                //   if(empty($url[1])) {
                //       require_once "controllerCreateAccount.php";
                //       $cre = new User;
                //       $cre->userExist($bdd);
                //       $cre->createUser($bdd);
                //       break;
                //   }
                  
                //     case "Contact":
                //         if(empty($url[1])) {
                //             require "controllerCreateAccount.php";
                //             break;
                //     }
            
 //!Nav not connected 
 if($_GET['page']=="Login"){
?>
        <!-- <style>
            a:nth-of-type(1){
            color:var(--purple);
            }
        </style>
<!-- <?php
    }       
    else if($_GET['page']=="Create"){
?> -->
        <style>
            a:nth-of-type(2){
            color:var(--blue);
            }
        </style>
<?php
    }
    else if($_GET['page']=="Shots"){
?>
        <style>
            a:nth-of-type(3){
            color:var(--newpink);
            }
        </style>
<?php
    }
    else if($_GET['page']=="Ideas"){
?>
        <style>
            a:nth-of-type(4){
            color:var(--yellow);
            }
        </style>
<?php
    }
} -->
             
 //!Nav connected 
 if($_GET['page']=="Deconnected"){
    ?>
        <style>
            a:nth-of-type(1){
            color:var(--purple);
            }
        </style>
    <?php
        }
        else if($_GET['page']=="Shots"){
    ?>
            <style>
                a:nth-of-type(2){
                color:var(--blue);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="Ideas"){
    ?>
            <style>
                a:nth-of-type(3){
                color:var(--newpink);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="Panier"){
    ?>
            <style>
                a:nth-of-type(4){
                color:var(--green);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="Contact"){
    ?>
            <style>
                a:nth-of-type(5){
                color:var(--yellow);
                }
            </style>
    <?php
        }
    }
    
        else if(isset($_SESSION['rights'])==2){
    ?>
            <header id=home>
            </header>
            <nav>
                <a href="Deconnected"><li class="purple">Deconnexion</li></a>
                <a href="Shots"><li class="blue">Shooters</li></a>
                <a href="Ideas"><li class="pink">Idées</li></a>
                <a href="685732145AdMinAreABossInDaHouse!"><li class="yellow">Admin</li></a>
            </nav>
    <?php
        if($_GET['page']=="Deconnected"){
        ?>
            <style>
                a:nth-of-type(1){
                color:var(--purple);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="Shots"){
    ?>
            <style>
                a:nth-of-type(2){
                color:var(--blue);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="Ideas"){
    ?>
            <style>
                a:nth-of-type(3){
                color:var(--newpink);
                }
            </style>
    <?php
        }
        else if($_GET['page']=="685732145AdMinAreABossInDaHouse!"){
    ?>
            <style>
                a:nth-of-type(4){
                color:var(--green);
                }
            </style>
    <?php
        }
    }
        else{
            ?>
   
   //!-------------------------------------------------------
   //! SELECT FROM NOT WORKING FUNCTIONS WORK PROBLEM IN STRING CONVERSION
   //!------------------------------------------------------
   <!-- $details=$bdd->prepare("SELECT have.id_partyitem,name_need
                                FROM have 
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need
                                WHERE partyitem.visibility_partyitem = 1 AND id_type = 1  
                                ORDER BY have.id_partyitem ASC,placement");

        $details->execute();
       
        $list = $details->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($list);
       return $list;
        
      
       
        $need=$bdd->prepare("SELECT DISTINCT partyitem.name_partyitem, partyitem.image_partyitem, partyitem.description_partyitem
                              INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem
                              WHERE partyitem.id_partyitem = $p->id_partyitem
                              ORDER BY have.id_partyitem ASC");
      
        $need->execute();
        $end = $need->fetchAll(PDO::FETCH_ASSOC);
        return $end; -->


        //!-------------------------------------------------------
   //! SELECT FROM NOT WORKING FUNCTIONS WORK PROBLEM WITH UNION SYNTAX BECAUSE IT IS A JOIN
   //!------------------------------------------------------
<!-- 
        SELECT DISTINCT partyitem.name_partyitem,partyitem.image_partyitem,partyitem.description_partyitem
                                FROM have 
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                WHERE partyitem.visibility_partyitem = 1 AND id_type = 1  
                                ORDER BY have.id_partyitem ASC
                                UNION
                                SELECT need.name_need  FROM have AS one
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need
                                WHERE partyitem.visibility_partyitem = 1 AND id_type = $type 
                                AND placement = 1
                                ORDER BY have.id_partyitem ASC
                                UNION
                                SELECT name_need FROM have AS two
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need
                                WHERE partyitem.visibility_partyitem = 1 AND id_type = $type 
                                AND placement = 2
                                ORDER BY have.id_partyitem ASC
                                UNION
                                SELECT name_need FROM have AS three
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need
                                WHERE partyitem.visibility_partyitem = 1 AND id_type = $type 
                                AND placement = 3
                                ORDER BY have.id_partyitem ASC"); -->

    //!-------------------------------------------------------
   //! THIS WORKS!
   //!------------------------------------------------------

        $details=$bdd->prepare("SELECT have.id_partyitem,name_need
        FROM have 
        INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
        INNER JOIN need ON need.id_need = have.id_need
        WHERE partyitem.visibility_partyitem = 1 AND id_type = 1  
        ORDER BY have.id_partyitem ASC,placement");

        $details->execute();
        $list = $details->fetchAll(PDO::FETCH_OBJ);//return string
        echo json_encode($list);//pass the result into the next result from select from and allow the foreach
        // make sure the information pulled is in relation and the same order as the information
        //in the first select from
        foreach($list as $keys){

        $need=$bdd->prepare("SELECT DISTINCT have.id_partyitem,name_partyitem,image_partyitem,description_partyitem 
                            FROM have
                            INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem
                            WHERE partyitem.visibility_partyitem = 1 AND id_type = 1 AND $keys->id_partyitem");
                }
            $need->execute();
            $end = $need->fetchAll(PDO::FETCH_ASSOC);
            //json to convert array to string so the two jsons can be merged
            echo json_encode($end);
            $merged = json_encode($list+$end);
            var_dump($list);
            return $merged; 



//!works but the visibility is buggy

            
public function readHave($bdd,$type){
    try{
            $one=$bdd->prepare("SELECT have.id_partyitem, name_need AS one FROM have 
                                INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                INNER JOIN need ON need.id_need = have.id_need 
                                WHERE visibility_partyitem = 1 AND id_type_partyitem = $type AND placement = 1 
                                ORDER BY have.id_partyitem ASC");
            $one->execute();
            $first = $one->fetchAll(PDO::FETCH_OBJ);
           

            foreach($first as $next){
                                $two=$bdd->prepare("SELECT have.id_partyitem, name_need AS two 
                                                    FROM have 
                                                    INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                                    INNER JOIN need ON need.id_need = have.id_need 
                                                    WHERE  $next->id_partyitem AND id_type_partyitem = $type AND placement = 2
                                                    ORDER BY have.id_partyitem");
                                    }
            $two->execute();
            $second = $two->fetchAll(PDO::FETCH_OBJ);
           

            foreach($second as $last){
                                $three=$bdd->prepare("SELECT have.id_partyitem, name_need AS three 
                                                    FROM have
                                                    INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem 
                                                    INNER JOIN need ON need.id_need = have.id_need 
                                                    WHERE  $last->id_partyitem AND id_type_partyitem = $type AND placement = 3
                                                    ORDER BY have.id_partyitem ASC");
                                    }
            $three->execute();
            $third = $three->fetchAll(PDO::FETCH_OBJ);
            
            
            foreach($third as $details){
                                $need=$bdd->prepare("SELECT DISTINCT have.id_partyitem,name_partyitem,image_partyitem,description_partyitem,id_type_partyitem 
                                                    FROM have
                                                    INNER JOIN partyitem ON partyitem.id_partyitem = have.id_partyitem
                                                    WHERE $details->id_partyitem  AND id_type_partyitem = $type
                                                    ORDER BY have.id_partyitem ASC");
                                    }
            $need->execute();
            $end = $need->fetchAll(PDO::FETCH_OBJ);
            
            $objectComplete = array($end,$first,$second,$third);

            return $objectComplete;