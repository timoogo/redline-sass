<!DOCTYPE html>
<html lang="fr">
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Répondez à ce sondage</title>
<body>
    
<h3>Voter :</h3>

<form action="" method="POST">
    <button type="submit" name="chooseFirstAnswer"><?=$getPollFirstAnswer?></button>
</form>
<br><br>
<form action="" method="POST">
    <button type="submit" name="chooseSecondAnswer"><?=$getPollSecondAnswer?></button>
</form>

</body>
</html>