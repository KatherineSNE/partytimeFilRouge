
<?php
include './header/header.php';
include './view/menu.php';
?>
     
<body>
    <section>

        <form action="" method="POST">
            
            <label for="name_user">Prénom</label>
            <input type="text" name="name_user" pattern="(?=.[A-Za-z]).{2,}">
    
            <label for="surname_user">Nom de famille</label>
            <input type="text" name="surname_user">
            
            <label for="email_user">Email</label>
            <input type="email" name="email_user" pattern="[a-z0-9._%+-]+@[a-z0-9-]+\.[a-z]{2,}$">
            <!-- here the question mark matches with the string but, not the whitespace regex the *\d dictates all characters and numbers
            This pattern requires the password to be at least 12 characters long and must contain at least one uppercase and one lowercase letter and a number
         -->
            <label for="password_user">Choisir votre mot de passe</label>
            <input  class="viewPass" class="hidePass" type="password" name="password_user" pattern ="(?=.*\d)(?=.*[a-z0-9-])(?=.*[A-Z]).{12,}">
            
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