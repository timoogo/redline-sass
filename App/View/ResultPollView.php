<!DOCTYPE html>
<html lang="fr">
<head>
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Résultat des votes</title>
</head> 
<body>
<?php include ROOT. "/public/includes/_header.php" ;?>
<div class="wrapper app">
    
<h2 class="app">Résultats :</h2>

<h3><?=$getPollFirstAnswer?> : <?=$votesAnswer1Percents?>%</h3>

<h3><?=$getPollSecondAnswer?> : <?=$votesAnswer2Percents?>%</h3>

<h3>Total votes : <?=$totalVotes?></h3>

<div id="messages"></div>


    <form method="POST">
        <input class="message" type="text" name="message" id="">
        <button class="sendMessage" type="submit" name="sendMessage">Envoyer</button>
    </form>

    <a href="?page=main">Retour à l'accueil</a>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/assets/js/app.js"></script>
</body>
</html>