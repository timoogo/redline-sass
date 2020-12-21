<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include ROOT. "/public/includes/_head.php" ;?>
    <title>Mes sondages passés</title>
</head>

<body>
    <?php include ROOT.'/public/includes/_header.php'?>
    <div class="wrapper app">
        <!-- Afficher le user name -->
        <h1 class="app">Bienvenue <?php echo($user[0]->user_name)?></h1>
        <div class="links">
            <a class="button" href="?page=friends">Mes amis</a>
            <a class="button" href="?page=profil">Modifier mes infos</a>
            <a class="button" href="?page=deconnexion">Se deconnecter</a>
        </div>
        <div class="previousPolls">

            <h2 class="app highlight">Mes sondages passés :</h2>
            <table class="centers">
                <thead>
                    <tr>
                        <th>Titre du sondage</th>
                        <th>Choix numéro 1</th>
                        <th>Choix numéro 2</th>
                        <th>Date de création</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

         foreach($exeAllPolls as $user_poll) : ?>
                    <tr>
                        <td><?= $user_poll->poll_title ?></td>
                        <td><?= $user_poll->poll_answer1 ?></td>
                        <td><?= $user_poll->poll_answer2 ?></td>
                        <td><?= $user_poll->created_at ?></td>
                        <td><a class= "button" href="?page=createdPoll&poll_id=<?= $user_poll->poll_id ?>">Voir le sondage</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

        <div class="currentPolls">
            <h2 class="app highlight">Les sondages en cours de mes amis :</h2>

            <table class="centers">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Titre du sondage</th>
                        <th>Choix numéro 1</th>
                        <th>Choix numéro 2</th>
                        <th>Date de fin</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

foreach($friendsPolls as $friendPolls) : ?>
                    <?php
foreach($friendPolls as $friendPoll) : ?>
                    <tr>
                        <td><?= $friendPoll->poll_creator ?></td>
                        <td><?= $friendPoll->poll_title ?></td>
                        <td><?= $friendPoll->poll_answer1 ?></td>
                        <td><?= $friendPoll->poll_answer2 ?></td>
                        <td><?= $friendPoll->poll_limit ?></td>
                        <td><a class="button" href="?page=createdPoll&poll_id=<?= $friendPoll->poll_id?>">Voir le sondage</a></td>

                    </tr>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

      <div class="userActions">
      <a class ="button" href="?page=createPoll" class="returnhome">Créer un sondage</a>
        <a class ="button" href="?page=allMyPolls" class="returnhome">Tous mes sondages</a>
      </div>
    </div>
    <?php include ROOT.'/public/includes/_footer.php'?>
</body>

</html>