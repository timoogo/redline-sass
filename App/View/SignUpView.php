<!DOCTYPE html>
<html lang="fr">
<head>
    <title>S'inscire</title>
<?php include ROOT. "/public/includes/_head.php" ;?>
</head> 
<body>
    <div class="wrapper app">
        <h1 class="app">Ecran d'inscription</h1>
        <form method="POST">
        <label for="username">username</label>    
        <input type="text" name="username">
        <!-- mail -->
        <label for="mail">Votre mail</label>    
        <input type="email" name="mail">
        <!-- password -->
        <label for="pass">Votre password</label>    
        <input type="password" name="pass">
        <label for="confirmPassword">Confirm password</label>    
        <input type="password" name="confirmPass">
        <input class="button" type="submit" name="submit_signUp" value="Se connecter" />
    </form>
 
    <p>Vous avez déjà un compte ?</p>
    <a href="../public/index.php?page=connexion">Se connecter</a>
    
    </div>
</body>
</html>