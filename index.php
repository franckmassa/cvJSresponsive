<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>CV JS RESPONSIVE</title>
</head>

<body>
    <header>
        <h1>Concepteur développeur d'applications</h1>
        <div id="menu">
            <span id="tab1" onclick="showPage(this)"> Projets web</span>
            <span id="tab2" onclick="showPage(this)">Expériences professionnelles</span>
            <span id="tab3" onclick="showPage(this)">Compétences</span>
            <span id="tab4" onclick="showPage(this)">Formations</span>
            <span id="tab5" onclick="showPage(this)">Langues</span>
            <span id="tab6" onclick="showPage(this)">Loisirs</span>
            <span id="tab7" onclick="showPage(this)">Contact</span>
        </div>
    </header>

    <!-- PORTRAIT -->
    <div id="portrait">
        <div id="photo">
            <img src="pics/photo.jpg" alt="Ma photo">
        </div>
        <div class="legend">
            <marquee behavior="loop=10" direction="right" width="500" height="25" bgcolor="#4285F4" scrolldelay="200">Monsieur Maquette</marquee>
        </div>
    </div>

    <div id="pages">
        <!-- PROJET -->
        <section class="blockProject" id="tab1-page">
            <div class="heading">
                <h2>Projets</h2>
            </div>
            <div class="bkg">
                <div>
                    <span class="year">2019</span><span class="project">Site "Stream Project" Collaboration entre
                        streamer sur le jeu vidéo.</span>
                </div>
                <div>
                    <span class="year">2018</span><span class="project">Site "Chouette Web" Hakaton La Manu.<br />
                        Questionnaire ludique pour enfants sur le thème informatique.</span>
                </div>
                <div>
                    <span class="year">2018</span><span class="project">CV numérique.</span>
                </div>
            </div>
        </section>

        <!-- EXPERIENCES PROFESSIONNELLES -->

        <section class="blockExperience" id="tab2-page">
            <div class="heading">
                <h2>Expériences Professionnelles</h2>
            </div>
            <div class="bkg">
                <div>
                    <span class="year">2011-2016</span><span class="experience">Conseiller
                        clientèle-WEBHELP-Compiègne.</span>
                </div>
                <div>
                    <span class="year">2011-2016</span><span class="experience">Conseiller clientèle-CCA
                        International-Compiègne.</span>
                </div>
            </div>
        </section>

        <!-- COMPÉTENCES -->
        <section class="blockSkill" id="tab3-page">
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="bkg">
                <div id="technoHtmlCss">
                    <span class="type">HTML5 / CC3</span><span class="bar">
                        <span class="progress-bar blue"></span>
                    </span>
                </div>
                <div id="technoJs">
                    <span class="type">javaScript</span><span class="bar">
                        <span class="progress-bar blue"></span>
                    </span>
                </div>
                <div id="technoPhp">
                    <span class="type">PHP</span><span class="bar">
                        <span class="progress-bar blue"></span>
                    </span>
                </div>
                <div id="technoSql">
                    <span class="type">SQL</span><span class="bar">
                        <span class="progress-bar blue"></span>
                    </span>
                </div>
                <div id="technoLinux">
                    <span class="type">Linux</span><span class="bar">
                        <span class="progress-bar blue"></span>
                    </span>
                </div>
            </div>
        </section>

        <!-- FORMATIONS -->
        <section class="blockTraining" id="tab4-page">
            <div class="heading">
                <h2>Formations</h2>
            </div>
            <div class="bkg">
                <div>
                    <span class="year">2019-2020 </span><span class="training">CDA GRETA Compiègne</span>
                </div>
                <div>
                    <span class="year">2018-2019</span><span class="training">Dev Web La Manu Soissons</span>
                </div>
                <div>
                    <span class="year">2009-2010 </span><span class="training">Game design ISART DIGITAL</span>
                </div>
                <div>
                    <span class="year">2008-2009 </span><span class="training">Prépa Game design ISART
                        DIGITAL</span>
                </div>
                <div>
                    <span class="year">2005-2008 </span><span class="training">BTS MUC</span>
                </div>
                <div>
                    <span class="year">2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="training">BAC ACC</span>
                </div>
            </div>
        </section>

        <!-- LANGUAGES -->
        <section class="blockLanguage" id="tab5-page">
            <div class="heading">
                <h2>Langues étudiées</h2>
            </div>
            <div>
                <span class="country"><img src="pics/anglais.png" alt="Angleterre" title="Angleterre"></span>
                <span class="country"><img src="pics/espagne.png" alt="Espagne" title="Espagne"></span>
                <span class="country"><img src="pics/japonais.png" alt="Japon" title="Japon"></span>
            </div>
        </section>

        <!-- LOISIRS -->
        <section class="blockLeisure" id="tab6-page">
            <div class="heading">
                <h2>Loisirs</h2>
            </div>
            <div class="contentLeisure">
                <div class="listLeisure">
                    <ul class="bkg">
                        <li><span class="type">Jeux vidéo</span>
                        </li>
                        <li><span class="type">Japon</span>
                        </li>
                        <li><span class="type">Guitare</span>
                        </li>
                        <li><span class="type">Piano</span>
                        </li>
                        <li><span class="type">Kendo</span>
                        </li>
                        <li><span class="type">Dessin</span>
                        </li>
                        <li><span class="type">Reconstitution<br /> médiévale</span>
                        </li>
                    </ul>
                </div>
                <div class="blockImage">
                    <div class="image"><img src="pics/jeu.jpg" alt="manette de jeu"></div>
                    <div class="image"><img src="pics/guitare.png" alt="guitare"></div>
                    <div class="image"><img src="pics/kendo.png" alt="kendo"></div>
                    <div class="image"><img src="pics/medieval.png" alt="bouclier medieval"></div>
                </div>
            </div>
        </section>

    </div>
    <!-- CONTACT -->
    <footer class="blockContact" id="tab7-page">
        <div class="heading">
            <h2>Contact</h2>
        </div>
        <div class="bkg">
            <div id="firstContactLine">
                <div id="adress">
                    <img src=" pics/postale.png" alt="Adresse postale" title="1 rue de la forêt 60200 Compiègne" />
                    <p>1 rue de la forêt 60200 Compiègne</p>
                </div>
                <div id="linkedin">
                    <a href="https://www.linkedin.com/" title="linkedin"><img src="pics/linkedin.png" alt="Linkedin" /></a>
                </div>
                <div id="github">
                    <a href="https://github.com/" title="github"><img src="pics/github.png" alt="Github" /></a>
                </div>
            </div>
            <div id="secondContactLine">
                <div id="smartphone">
                    <a href="tel:0600000000" title="0600000000"><img src="pics/smartphone.png" alt="Smartphone" /></a>
                    <p>060000000</p>
                </div>
                <div id="mail">
                    <a href="mailto:monsieurmaquette@gmail.com" title="monsieurmaquette.com"><img src="pics/mail.png" alt="Adresse email" /></a>
                    <p>monsieurmaquette@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>