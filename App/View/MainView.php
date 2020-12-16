<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/import.css">
    <script src="https://kit.fontawesome.com/2a28e9e3fb.js" crossorigin="anonymous"></script>
</head>
<body>
   <?php include ROOT. "/public/includes/_header.php" ;?>
    <main>
        <section class="hero--centered">
            <h2 class="catch-phrase">
            Participez à des sondages en <span class="highlight">temps réel</span> et comparez vos résultats
            </h2>
           <a class="button"href="#">Regarder un exemple</a>
        </section>
        <section singlePoll>
            <div class="title">
                <h2>Les céréales, <span class="highlight">avant</span> ou <span class="highlight">après</span> le lait ?</h2>
                <span class="highlight">Demandé par <span class="highlight clear">timogo</span> il y a une semaine</span>
            </div>
            <div class="details">
             <div class="cards">
             <div class="card answer">
                    <div class="number">3</div>
                    <h4 class="choice">Avant</h4>
                    <div class="progress">
                        <progress value='1'max='2'></progress>
                    </div>
                </div>
                <div class="card answer">
                    <div class="number">3</div>
                    <h4 class="choice">Avant</h4>
                    <div class="progress">
                        <progress value='1'max='2'></progress>
                    </div>
                </div>
             </div>
                <aside>
                    <button>Répondre</button>
                    <h4>Nb de vote</h4>
                   <div class="vote">
                   <span>4</span>
                   </div>
                    <section class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </section>
                </aside>
            </div>
        </section>
    </main>


   <?php include ROOT. "/public/includes/_footer.php" ;?>
</body>
</html>