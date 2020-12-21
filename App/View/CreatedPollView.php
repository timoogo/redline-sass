<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Le sondage a bien été crée</title>
</head> 
<body>

<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Date de création</th>
                <th>Date de fin</th>

            </tr>
        </thead>
        <tbody>
    <pre>
   
    </pre>
    <?php
    foreach($getPoll as $poll) : ?>
        <tr>
            <td><?= $poll->poll_title ?></td>
            <td><?= $poll->poll_answer1 ?></td>
            <td><?= $poll->poll_answer2 ?></td>
            <td><?= $poll->created_at ?></td>
            <td><?= $poll->poll_limit ?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>