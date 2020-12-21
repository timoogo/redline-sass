<!DOCTYPE html>
<html lang="fr">
<head> 
<?php include ROOT. "/public/includes/_head.php" ;?>
<title>Créer un sondage</title>
</head> 
<body>
<?php include ROOT.'/public/includes/_header.php'?>
    <div class="wrapper app">
    <!-- formulaire de création du sondage -->
    <h1 class="app">Créer un nouveau sondage</h1>

    <form method="POST" class="create">

        <input type="text" name="poll_title" placeholder="Choisir une question">
        <div class="choices">
            <input type="text" name="poll_answer1" placeholder="Choix numéro 1" class="choice">
            <span class="highlight">VS</span>
            <input type="text" name="poll_answer2" placeholder="Choix numéro 2" class="choice">
        </div>


        <h2 class="app highlight">Se terminera le :</h2>
        <div class="date">
            <span class="highlight">Année :</span>
            <select name="poll_limit_years">
                <?php for($i = 2020; $i<=2030;$i++) 
                echo("
                    <option value='$i'>$i</option>")     
            ?>
            </select>

            <span class="highlight">Mois :</span>
            <select name="poll_limit_months">
                <?php for($i = 1; $i<=12;$i++) 
                if($i<10){
                    echo("
                    <option value='0$i'>0$i</option>");   
                }else{
                    echo("
                    <option value='$i'>$i</option>");  
                }
            ?>
            </select>
            <span class="highlight">Jour :</span>
            <select name="poll_limit_days">
                <?php for($i = 1; $i<=31;$i++) 
                if($i<10){
                    echo("
                    <option value='0$i'>0$i</option>");   
                }else{
                    echo("
                    <option value='$i'>$i</option>");  
                }     
            ?>
            </select>
            <span class="highlight">Heure :</span>
            <select name="poll_limit_hours">
                <?php for($i = 1; $i<=24;$i++) 
                    if($i<10){
                        echo("
                        <option value='0$i'>0$i</option>");   
                    }else{
                        if($i == 24){
                            echo("
                        <option value='00'>00</option>");
                        }else{
                            echo("
                        <option value='$i'>$i</option>");
                        }
                    }    
            ?>
            </select>
            <span class="highlight">Minute :</span class="highlight">
            <select name="poll_limit_min">
                <?php for($i = 0; $i<=59;$i++) 
                if($i<10){
                    echo("
                    <option value='0$i'>0$i</option>");   
                }else{
                    echo("
                    <option value='$i'>$i</option>");  
                }      
            ?>
            </select>   
        </div>
        <!-- Bouton d'envoie du formulaire  -->
        <input name="sendPollToDb" type="submit" placehoder="Créer le sondage">
    </form>

    <a href="?page=MyPolls">Retour à l'accueil</a>
    </div>
    <?php include ROOT.'/public/includes/_footer.php'?>
</body>

</html>