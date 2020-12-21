<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Etape de sécurité</title>
</head> 
<body>
    <div class="wrapper">
        <h1>Rentrez votre mdp</h1>
        <form action="" method="POST">
            <label for="confirmPassword">Current password</label>
            <input type="password" name="currentPassword" >
            <button type="submit" name="submitCurrentPassword">Valider</button>
        </form>
        <a href="?page=MyPolls" class="returnhome">Retour à la page principale</a>
   
    </div>
</body>
</html>