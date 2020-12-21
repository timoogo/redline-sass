<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Regardez tout les sondages disponibles</title>
</head> 
<body>
<?php include ROOT.'/public/includes/_header.php'?>
    <div class="wrapper app">
    <h1 class="app">Tous mes sondages :</h1>
<div class="center">
<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Date</th>
                <th>Date de fin</th>
                <th>Résultats</th>

            </tr>
        </thead>
        <tbody>
    <pre>
    </pre>
    <?php
    foreach($allMyPolls as $user_poll) : ?>
        <tr>
            <td><?= $user_poll->poll_title ?></td>
            <td><?= $user_poll->poll_answer1 ?></td>
            <td><?= $user_poll->poll_answer2 ?></td>
            <td><?= $user_poll->created_at ?></td>
            <td><?= $user_poll->poll_limit ?></td>
            <td><a href="?page=createdPoll&poll_id=<?= $user_poll->poll_id ?>">Voir</a></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
    </div>

    <a href="?page=MyPolls" class="returnhome">Retour à l'accueil</a>
    <?php include 'DeconnexionView.php'?>
    </div>
    <?php include ROOT.'/public/includes/_footer.php'?>;

</body>
</html>