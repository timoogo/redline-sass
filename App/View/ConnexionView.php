<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Se connecter</title>
</head> 
<body>
    <div class="wrapper app">
        <h1 class="app">Ecran de connexion</h1>
        <form method="POST">
        <!-- mail -->
        <label for="mail">Votre mail</label>    
        <input type="mail" name="mail">
        <!-- password -->
        <label for="pass">Votre password</label>    
        <input type="password" name="pass">
        <input class="button "type="submit" name="submit_connexion" value="Se connecter" />
    </form>
    
    <p>Pas encore de compte ?</p>
    <a href="../public/index.php?page=signUp">S'inscrire</a>

    </div>
</body>
</html>