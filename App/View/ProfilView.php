<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Mon profil</title>
</head> 
<body>
    <div class="wrapper">
        <h1>Changez vos informations</h1>
        <form action="" method="POST">
            <label for="username">New username</label>
            <input type="text" name="newUsername" placeholder="<?=$user[0]->user_name;?>">
            <label for="password">New mdp</label>
            <input type="password" name="newPassword">
            <label for="confirmPassword">Confirm new mdp</label>
            <input type="password" name="newPasswordConfirmed" >

            <button type="submit" name="submitProfilChanges">Valider</button>
        </form>
        <a href="?page=main" class="returnhome">Retour à l'accueil</a>
    </div>
</body>
</html>