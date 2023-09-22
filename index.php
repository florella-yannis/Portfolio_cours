<?php
if (isset($_POST['submit'])) {

    // Récupération des données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation du nom, de l'e-mail et du message 
    $errors = [];

    if (empty($name)) {
        $errors[] = "Le champ 'Nom' est obligatoire.";
    }

    if (empty($email)) {
        $errors[] = "Le champ 'E-mail' est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse e-mail n'est pas valide.";
    }

    if (empty($message)) {
        $errors[] = "Le champ 'Message' est obligatoire.";
    }

    // Si des erreurs sont présentes, les afficher
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Si aucune erreur, envoyer l'e-mail
        $to = "florellayannis@gmail.com";
        $from = $email;
        $header = "From:\"$name\"<$from>\n";
        $header .= "Reply-To:$from\n";
        $header .= "Content-type:text/html; charset=\"iso-8859-1\"";

        if (mail($to, "Nouveau message de contact", $message, $header)) {
            echo "Votre e-mail a été envoyé avec succès.";
        } else {
            echo "Erreur : Votre e-mail n'a pas pu être envoyé. Veuillez réessayer.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Florella Yannis</title>
    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://kit.fontawesome.com/2b3bbb85b2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <header>
        <nav>
            <span>FY<i class="fa-solid fa-circle"></i></span>
            <ul id="nav-links">
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#histoire">Histoire</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="fa-solid fa-bars"></i>
        </nav>
    </header>

    <nav class="widget">
        <a href="https://www.linkedin.com/in/yannis-florella-9b055918a/"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/trending"><i class="fa-brands fa-git"></i></a>
        <a href="./assets/document/CV-Florella-Yannis-DWWM.pdf" download="yannis-florella-cv">CV</a>
        <a href="mailto:florellayannis@gmail.com"><i class="fa-solid fa-envelope"></i></a>
    </nav>
    <nav class="turn">
        <i class="fa-solid fa-sun" id="toggleDark"></i>
        <!-- <div id="moon"><i class="fa-solid fa-moon"></i></div> -->
    </nav>
    <!-- <div id="particles-js"></div> -->
    <main>
        <section class="presentation" id="presentation" data-aos="fade-right" data-aos-duration="2000">
            <div class="pfirst" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="50">
                <h1 data-aos="fade-right" data-aos-duration="2000" data-aos-delay="50">FLORELLA YANNIS<i class="fa-solid fa-circle"></i></h1>
                <div class="trait" data-aos-delay="70"></div>
                <h2>DEVELOPPEUR WEB &</h2>
                <h2>WEB MOBILE.</h2>
                <p>💼 Actuellement en quête d'une opportunité en alternance en tant que Concepteur Développeur d'Applications. 💻🌟
                </p>
                <a href="#histoire">En savoir plus &#8595;</a>
            </div>
            <div class="psecond">
                <div class="imgp">
                    <img src="./assets/img/presentation.jpg" alt="Presentationbureau">
                </div>
            </div>
        </section>

        <div class="line"></div>

        <section class="formation" id="histoire">
            <div class="contenaire" data-aos="zoom-in" data-aos-duration="2000">
                <div class="textimg" data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000">
                    <h2>QUI SUIS-JE ?</h2>
                </div>
                <div class="imgstyle">
                    <div class="imgp">
                        <img src="./assets/img/change.jpg" alt="reconvertion">
                    </div>
                </div>
                <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000">Passionné par l'aventure et la découverte, je me suis lancé dans le développement web en juin 2022 après des voyages en Asie et en Europe où j'ai rencontré des nomades digitaux et des développeurs web inspirants. J'ai suivi ensuite une formation de 7 mois chez Doranco pour acquérir des compétences solides en développement web.</p>

                <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="2000">À court terme, je recherche une entreprise pour une alternance en tant que concepteur développeur d'application. Mon objectif est de continuer à développer mes compétences et de contribuer à des projets innovants.</p>

                <p data-aos="fade-right" data-aos-delay="600" data-aos-duration="2000">Mon plus grand plaisir dans le développement web réside dans la création, la résolution de problèmes et l'innovation.</p>

                <!-- <p data-aos="fade-right" data-aos-delay="800" data-aos-duration="2000">Un nouveau monde s’offre a moi avec Doranco, allié travail et plaisir tout en vivant ma vie rêver.
            7 mois de formation intense, prêt a relever un nouveau challenge.</p> -->
            </div>
        </section>

        <div class="line"></div>

        <section class="tech" id="competences">
            <h2 data-aos="fade-up" data-aos-delay="100" data-aos-duration="2000">COMPETENCE</h2>

            <div class="box" data-aos="zoom-in-down" data-aos-duration="2000">
                <div class="competence" data-aos="flip-left" data-aos-delay="50" data-aos-duration="2000">
                    <h3>HTML</h3>
                    <img class="anim2" src="./assets/img/html.png" alt="html5" width="90" height="90">
                </div>
                <div class="competence" data-aos="flip-left" data-aos-delay="70" data-aos-duration="2000">
                    <h3>CSS</h3>
                    <img class="anim2" src="./assets/img/css.png" alt="CSS3" width="90" height="90">
                </div>
                <div class="competence" data-aos="flip-left" data-aos-delay="90" data-aos-duration="2000">
                    <h3>JAVASCRIPT</h3>
                    <img class="anim2" src="./assets/img/js.png" alt="javaScript" width="90" height="90">
                </div>
                <div class="competence" data-aos="flip-left" data-aos-delay="110" data-aos-duration="2000">
                    <h3>MY SQL</h3>
                    <img class="anim2" src="./assets/img/mysql.png" alt="mysql" width="90" height="90">
                </div>
                <div class="competence" data-aos="flip-left" data-aos-delay="130" data-aos-duration="2000">
                    <h3>REACT</h3>
                    <img class="anim" src="./assets/img/react.png" alt="react" width="100" height="100">
                </div>
                <div class="competence" data-aos="flip-left" data-aos-delay="150" data-aos-duration="2000">
                    <h3>PHP</h3>
                    <img class="anim" src="./assets/img/php.png" alt="php" width="100" height="100">
                </div>
            </div>
        </section>

        <div class="line"></div>

        <section class="projet" id="projets">
            <h2 data-aos="fade-down" data-aos-delay="200" data-aos-duration="2000">MES REALISATIONS</h2>

            <div class="gallery" data-aos="fade-down" data-aos-duration="2000" data-aos-duration="2000">
                <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                    <div class="boite"><a href="https://www.google.fr/"><img src="./assets/img/ecran1.png" alt="ecran1"></a></div>
                    <div class="lien">
                        <a href="https://www.google.fr/">GOOGLE</a>
                        <div class="trait2"></div>
                        <p>2023</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="70" data-aos-duration="2000">
                    <div class="boite"><a href="https://www.google.fr/"><img src="./assets/img/ecran2.png" alt="ecran2"></a></div>
                    <div class="lien">
                        <a href="https://www.google.fr/">PORTFOLIO 1</a>
                        <div class="trait2"></div>
                        <p>2023</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="90" data-aos-duration="2000">
                    <div class="boite"><a href="https://www.google.fr/"><img src="./assets/img/ecran3.png" alt="ecran3"></a></div>
                    <div class="lien">
                        <a href="https://www.google.fr/">PORTFOLIO 2</a>
                        <div class="trait2"></div>
                        <p>2023</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="110" data-aos-duration="2000">
                    <div class="boite"><a href="https://www.google.fr/"><img src="./assets/img/ecran4.png" alt="ecran4"></a></div>
                    <div class="lien">
                        <a href="https://www.google.fr/">STUDIORAMA</a>
                        <div class="trait2"></div>
                        <p>2023</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="line"></div>

        <section class="contact" id="contact">
            <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="2000">CONTACT</h2>
            <h3>DEMARRONS UN PROJET ENSEMBLE, N'HESITEZ PAS A ME CONTACTER</h3>
            <div class="formulaire">
                <form action="envoi_email.php" method="POST" enctype="multipart/form-data">
                    <label for="name"></label>
                    <input required="" type="text" id="name" name="name" placeholder="Nom" required>

                    <label for="email"></label>
                    <input required="" type="email" id="email" name="email" placeholder="Email">

                    <label for="message"></label>
                    <textarea required="" id="message" name="message" rows="4" placeholder="Message" required></textarea>

                    <button type="submit" name="submit">Me contacter</button>
                </form>

                <?php
                if (!empty($errors)) {
                    echo '<div class="error-messages">';
                    foreach ($errors as $error) {
                        echo '<p>' . $error . '</p>';
                    }
                    echo '</div>';
                }
                ?>

            </div>
            <div class="map" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14191.99766378127!2d2.5388344200006863!3d48.95559858559528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6143caa00e487%3A0xe9435569d9bd4c33!2sVillepinte!5e0!3m2!1sfr!2sfr!4v1674744199343!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="carte">
                    <h3>Vous avez un projet ?</h3>
                    <p>Je serai ravi d'en discuter avec vous.</p>
                    <ul data-aos="flip-up" data-aos-delay="500" data-aos-duration="2000">
                        <li><i class="fa-solid fa-location-dot"></i> 93420 Villepinte</li>
                        <li><i class="fa-solid fa-location-arrow"></i> Paris Ile-de-france</li>
                        <li><i class="fa-solid fa-phone"></i> +33 06 41 49 39 19</li>
                        <li><i class="fa-solid fa-car"></i> Permis B</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="line2"></div>

        <footer>

            <nav class="widget2">
                <a href="https://www.linkedin.com/in/florellayannis/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/florella-yannis"><i class="fa-brands fa-git"></i></a>
                <a href="./assets/document/CvAprentissage.pdf" download="yannis-florella-cv">CV</a>
                <a href="mailto:florellayannis@gmail.com"><i class="fa-solid fa-envelope"></i></a>
            </nav>
            <!--<div class="top">
            <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
        </div>-->
            <p>&copy; Florella Yannis <i class="fa-solid fa-circle"></i> Tous droits réservés</p>
        </footer>
    </main>

    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/particles.min.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>