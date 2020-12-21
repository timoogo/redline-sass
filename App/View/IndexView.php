<!DOCTYPE html>
<html lang="fr">
    <head>
      <?php include ROOT. "/public/includes/_head.php" ;?>
        <title>Page d'accueil</title>
    </head> 


<body>
    <?php include ROOT. "/public/includes/_header.php" ;?>
    <main>
        <section class="hero--centered">
            <h2 class="catch-phrase">
                Participez à des sondages en <span class="highlight">temps réel</span> et comparez vos résultats
            </h2>
            <a class="button" href="#example">Regarder un exemple</a>
        </section>
        <section singlePoll id="example">
            <div class="title">
                <h2>Les céréales, <span class="highlight">avant</span> ou <span class="highlight">après</span> le lait ?
                </h2>
                <span class="highlight">Demandé par <span class="highlight clear">timogo</span> il y a une
                    semaine</span>
            </div>
            <div class="details">
                <div class="cards">
                    <div class="card answer">
                        <div class="number">3</div>
                        <h4 class="choice">Avant</h4>
                        <div class="progress">
                            <progress value='1' max='2'></progress>
                        </div>
                    </div>
                    <div class="card answer">
                        <div class="number">3</div>
                        <h4 class="choice">Avant</h4>
                        <div class="progress">
                            <progress value='1' max='2'></progress>
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
        <section class="hero--compare">
            <div class="content">
                <h2>Comparez vous à vos <span class="highlight">amis</span> en quelques <span
                        class="highlight">clics</span> !</h2>
                <h3>Répondez aux <span class="highlight">sondages</span> en quelques clics puis demandez <span
                        class="highlight">l'avis</span> à vos amis en le partageant par <span
                        class="highlight">Messenger</span>, <span class="highlight">Twitter</span>, <span
                        class="highlight">SMS</span> et <span class="highlight">WhatsApp</span>. Vous serez sans doute
                    supris de l’avis de vos amis !</h3>
            </div>
        </section>


        <section preview>
            <section class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </section>
            <h2 class="clear">Regardez vos stats</h2>
            <section MyApp>
                <header>
                    <nav>
                        <button>Dashboard</button>
                        <button>Mes participations</button>
                        <button>Mes sondages</button>
                        <button>Mon profil</button>
                    </nav>
                </header>
                <div class="title">
                    <h4>Dashboard</h4>
                    <span class="annotation">Ici tu verras tes stats </span>
                </div>

                <section class="cards">
                    <div class="card profil--response">
                        <div class="smiley"><img src="assets/img/smiley.png" alt="smiley"></div>
                        <h4>Réponses correctes</h4>
                        <div class="progress">
                            <progress value='1' max='2'></progress>
                        </div>
                    </div>
                    <div class="card profil--response">
                        <div class="smiley"><img src="assets/img/smiley.png" alt="smiley"></div>
                        <h4>Réponses correctes</h4>
                        <div class="progress">
                            <progress value='1' max='2'></progress>
                        </div>
                    </div>
                    <div class="card profil--response">
                        <div class="smiley"><img src="assets/img/smiley.png" alt="smiley"></div>
                        <h4>Réponses correctes</h4>
                        <div class="progress">
                            <progress value='1' max='2'></progress>
                        </div>
                    </div>
                </section>
            </section>
        </section>
        <section hero--phone>
           <section class="top">
               <div class="hero-content">
                 <h4>  Utilisable rapidement et facilement sur iPhone grâce à des QR codes générés à la création du formulaire</h4>
                 <a href="#" class="qr-code">
                    <img src="assets/img/qr.png" alt="">
                 </a>
             </div>

                 <div class="hero-image">
                     <img src="assets/img/desktop-frame.png" alt="Aperçu à l'interieur de l'application">
                 </div>
               </div>
           </section>
            <section class="bottom">
            <h2>N’attendez plus,venez l’essayer !</h2>
           <div class="download">
               <a href="#"><img src="assets/img/app_store_download.png" alt="Download on the App Store"></a>
               <a href="#"><img src="assets/img/google_play_download.png" alt="Download on the Google Play"></a>
           </div>
            </section>

        </section>
        </div>
    </main>


    <?php include ROOT. "/public/includes/_footer.php" ;?>
</body>

</html>