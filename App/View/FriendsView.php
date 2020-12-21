<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Gestion d'amitié</title>
</head> 
<body>
    
    <h1>Mes amis :</h1>

    <?php
    foreach($arrayOfFriendsNameArrays as $user_friend) : ?>
        <tr>
            <td><?= $user_friend[0]->user_name ?></td>
        </tr>
    <?php endforeach; ?>
    <h3>Amis en ligne :</h3>
    <?php
    foreach($arrayOnlineFriends as $onlineFriend) : ?>
        <tr>
            <td><?= $onlineFriend[0]->user_name ?></td>

        </tr>
    <?php endforeach; ?>

    <h3>Ajouter un ami</h3>

    <form  action="" method="POST">
    <input type="text" name="researchedFriend" placeholder="Rechercher un utilisateur">
    <button type="submit" name="addFriend">Ajouter comme ami</button>
    </form>

    <h2>Retirer un ami</h2>

    <form action="" method="POST">
    <input type="text" name="deletedFriend" placeholder="Rechercher un ami">
    <button type="submit" name="supprFriend">Supprimer cet ami</button>
    </form>

    <a href="?page=MyPolls" class="returnhome">Retour à la page principale</a>

</body>
</html>