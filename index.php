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
        $to = "florellayannis@gmail.com"; // Adresse e-mail de destination
        $subject = "Nouveau message de contact"; // Sujet de l'e-mail

        // Corps de l'e-mail
        $mailContent = "Nom: $name\n";
        $mailContent .= "E-mail: $email\n\n";
        $mailContent .= "Message:\n$message";

        // En-têtes de l'e-mail
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $mailContent, $headers)) {
            echo 'Votre e-mail a été envoyé avec succès.';
        } else {
            echo 'Erreur : Votre e-mail n\'a pas pu être envoyé. Veuillez réessayer.';
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
    <link rel="icon" href="assets/img/logo.png">
</head>

<body>
<div class="cursor"></div>
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
        <a href="https://www.linkedin.com/in/yannis-florella-9b055918a/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/florella-yannis" target="_blank"><i class="fa-brands fa-git"></i></a>
        <a href="./assets/document/CV-Florella-Yannis-DWWM.pdf" download="yannis-florella-cv">CV</a>
        <a href="mailto:florellayannis@gmail.com"><i class="fa-solid fa-envelope"></i></a>
    </nav>
    <nav class="turn">
        <i class="fa-solid fa-lightbulb" id="toggleDark"></i>
        <!-- <div id="moon"><i class="fa-solid fa-moon"></i></div> -->
    </nav>
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
                <p data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000"><strong>Passionné par l'aventure et la découverte</strong>, je me suis lancé dans le développement web en juin 2022 après des voyages en Asie et en Europe où j'ai rencontré des nomades digitaux et des développeurs web inspirants. J'ai suivi ensuite une formation de 7 mois chez Doranco pour acquérir des compétences solides en <strong>développement web</strong> <i class="fas fa-laptop-code"></i>.</p>

                <p data-aos="fade-right" data-aos-delay="400" data-aos-duration="2000">À court terme, je recherche une entreprise pour une alternance en tant que <strong>concepteur développeur d'application</strong>. Mon objectif est de continuer à développer mes compétences et de contribuer à des projets innovants <i class="fas fa-lightbulb"></i>.</p>
                
                <p data-aos="fade-right" data-aos-delay="600" data-aos-duration="2000">Mon plus grand plaisir dans le <strong>développement web</strong> réside dans la <strong>création</strong>, la <strong>résolution de problèmes</strong> et l'<strong>innovation</strong>.</p>



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
                <div data-aos="zoom-in" data-aos-delay="90" data-aos-duration="2000">
                    <div class="boite"><a href="https://csnet.fr/"  target="_blank"><img src="./assets/img/csnet.png" alt="csnet" target="_blank"><div class="hover-text">Au cours de mon stage, j'ai contribué à la création d'un site de gestion des devis. J'ai participé à la mise en place de fonctionnalités de gestion des clients, des projets et des devis.</div></a></div>
                    <div class="lien">
                        <a href="https://csnet.fr/" target="_blank">CS-NET</a>
                        <div class="trait2"></div>
                        <p>SYMFONY</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                    <div class="boite"><a href="https://github.com/florella-yannis/Teeshop" target="_blank"><img src="./assets/img/ecran1.png" alt="e-commerce"><div class="hover-text">J'ai créé un site e-commerce dynamique. Ce projet m'a permis de développer des compétences en gestion de bases de données et en création d'interfaces utilisateur.</div></a></div>
                    <div class="lien">
                        <a href="https://github.com/florella-yannis/Teeshop" target="_blank">SITE E-COMMERCE</a>
                        <div class="trait2"></div>
                        <p>SYMFONY</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="70" data-aos-duration="2000">
                    <div class="boite"><a href="https://github.com/florella-yannis/Portfolio_cours" target="_blank"><img src="./assets/img/ecran2.png" alt="Portfolio"><div class="hover-text">Mon portfolio est une vitrine de mes compétences en développement web. Il met en avant mes projets et compétences de manière claire et attrayante.</div></a>
                </div>
                    <div class="lien">
                        <a href="https://github.com/florella-yannis/Portfolio_cours" target="_blank">PORTFOLIO</a>
                        <div class="trait2"></div>
                        <p>PHP / CSS / JAVASCRIPT</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="90" data-aos-duration="2000">
                    <div class="boite"><a href="https://github.com/florella-yannis/FYPress" target="_blank"><img src="./assets/img/ecran3.png" alt="Blog"><div class="hover-text">J'ai créé un site web dédié à la publication d'articles de presse. Ce projet m'a permis de maîtriser la gestion des contenus, l'authentification des utilisateurs et la création de pages dynamiques pour les articles.</div></a></div>
                    <div class="lien">
                        <a href="https://github.com/florella-yannis/FYPress" target="_blank">ARTICLES DE PRESSE</a>
                        <div class="trait2"></div>
                        <p>SYMFONY</p>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="90" data-aos-duration="2000">
                    <div class="boite"><a href="https://github.com/ronicairo/Hotel" target="_blank"><img src="./assets/img/ecran6.png" alt="csnet"><div class="hover-text"> En collaboration avec une équipe,nous avons développé un système de réservation en ligne d'un hôtel. Ce projet a impliqué la création de formulaires de réservation, la gestion des disponibilités et la mise en place de confirmations automatiques pour les clients.</div></a></div>
                    <div class="lien">
                        <a href="https://github.com/ronicairo/Hotel" target="_blank">SITE DE RESERVATION D'HOTEL</a>
                        <div class="trait2"></div>
                        <p>SYMFONY</p>
                    </div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="110" data-aos-duration="2000">
                    <div class="boite"><a href="https://florella-yannis.github.io/calculatrice/" target="_blank"><img src="./assets/img/ecran5.png" alt="calculatrice"><div class="hover-text">Ce projet m'a permis de renforcer mes compétences en développement front-end.</div></a></div>
                    <div class="lien">
                        <a href="https://florella-yannis.github.io/calculatrice/" target="_blank">CALCULATRICE</a>
                        <div class="trait2"></div>
                        <p>HTML / CSS / JAVASCRIPT</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="line"></div>

        <section class="contact" id="contact">
            <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="2000">CONTACT</h2>
            <!-- <h3>DEMARRONS UN PROJET ENSEMBLE, N'HESITEZ PAS A ME CONTACTER</h3> -->
            <div class="formulaire">
                <form method="POST" enctype="multipart/form-data">
                    <label for="name"></label>
                    <input required="" type="text" id="name" name="name" placeholder="Nom" required>

                    <label for="email"></label>
                    <input required="" type="email" id="email" name="email" placeholder="Email">

                    <label for="message"></label>
                    <textarea required="" id="message" name="message" rows="4" placeholder="Message" required></textarea>

                    <button type="submit" name="submit">Me contacter</button>
                </form>

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
         <p>Copyright &copy; 2023 FLORELLA Yannis  <i class="fa-solid fa-circle"></i> Tous droits réservés</p>
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