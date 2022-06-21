
<?php
include './header/header.php';
include './view/menu.php';
?>
     
<body>
    <section>

        <form action="" method="POST">
            
            <label for="name_user">Prénom</label>
            <input type="text" name="name_user">
    
            <label for="surname_user">Nom de famille</label>
            <input type="text" name="surname_user">
            
            <label for="email_user">Email</label>
            <input type="email" name="email_user">
            
            <label for="password_user">Choisir votre mot de passe</label>
            <input  class="viewPass" class="hidePass" type="password" name="password_user">
            
            <label for="confirmPassword">Confirmer votre mot de passe</label>
            <input class="passShow" class="passHide" type="password" name="confirmPassword"> 

            <input type="hidden" name="id_rights" value="1">
        <div>
            <button type="submit" name="submit">S'inscrire</button>
            <button id="browse" type="button" class="view" class="hide">voir le mot de passe</button>
        </div>
    
        </form>
    
    </section>
    
    
   
    
</body>
</html>