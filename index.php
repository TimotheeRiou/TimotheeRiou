<!DOCTYPE HTML>
<html>

<head>
    <title>Timothée Riou Portfolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">
    <!--
	<button onclick="topFunction()" id="myBtn" title="Go to top">Haut</button>
	-->

    <!-- Wrapper --> 
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="content">
                <div class="inner">
                    <a href="index.html">
                        <p>Bienvenue sur le</p>
                        <h1>Portfolio de Timothée Riou</h1>
                        <p>BTS SIO option SLAM</p>
                    </a>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#e4">Conception et maintenance de solutions informatiques - E4</a></li>
                    <li><a href="#e6">Parcours de professionnalisation - E6</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
                    <li><a href="#veille">Veille technologique-Deep Learning</a></li>
                    <li><a href="#ppe">Projet Personnel Encadrés</a></li>

                    <div class="navdropdown">
                        <button>Stages</button>
                        <div class="navdropdown-content">
                            <a href="#stage1">Stage de 1er année</a>
                            <a href="#stage2">Stage de 2e année</a>
                        </div>
                    </div>
                    <!--
                    <li><a href="#stage">Stages</a></li>-->
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- Intro -->
            <article id="intro">
                <h2 class="major">Introduction</h2>
                <p>Bonjour, je m'appelle Timothée Riou, je suis actuellement en seconde année de BTS SIO (Services
                    Informatiques aux Organisations), en spécialité SLAM (Solutions logicielles et applications métiers)
                    à l'EFREI Paris.
                </p>
                <p>Ce site web va me servir de support pour l'épreuve E6 mais aussi comme portfolio pour le reste de
                    mes études.</p>

                <p>Vous pouvez retrouver les différentes activités que j’ai réalisé au cours de mes années de BTS SIO,
                    pendant ma formation et pendant mes stages.
                </p>
                <br>
                <div class="document">
                    <h3>Curriculum Vitae</h3>
                    <embed src="Timothée Riou.pdf" width="595px" height="842px" />
                </div>
                <!-- <center><a href="cv" class="w-button">Curriculum Vitae</a></center> -->

            </article>

            <!-- Epreuve E4 -->
            <article id="e4">
                <h2 class="major">Conception et maintenance de solutions
                    <br>informatiques - E4
                </h2>
                <p>L’épreuve E4 est composée de deux projets ayant un contexte commun.
                </p>
                <p>L’objectif est de mettre en place une ou des solutions informatiques visant à faire évoluer une
                    infrastructure conformément aux contextes présentés.
                </p>
                <p>Le sujet retenu pour cette épreuve est la Maison des Ligues de Lorraine (M2L), qui a pour mission de
                    fournir des espaces et des services aux différentes ligues sportives régionales et à d’autres
                    structures hébergées.
                </p>
                <p>Le premier projet, ma coéquipière et moi devons développer le site internet de la M2L (Client
                    léger).
                    <br>
                    Pour le deuxième projet, nous devons développer un logiciel de support sous forme de messagerie
                    (Client lourd).
                </p>
                <!--<p>Dans le cadre de sa campagne, pour une plus grande lisibilité des différents services qu’elle propose
					ou qu’elle souhaite proposer aux différentes ligues, la maison des ligues par la voix de son
					directeur, M Lucien Sapin, souhaite faire réaliser un site internet complet.
				</p> -->
                <br>
                <div id="e4">
                    <li><a href="#ClientLeger">Client léger - Site web</a></li>
                    <li><a href="#ClientLourd">Client lourd - Logiciel de support sous forme de messagerie</a></li>
                </div>
                <br>
                <br>
                <br>
                <div class="document">
                    <div id="ClientLeger">
                        <h3>Client léger</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Contexte SIO M2L</p>
                        <embed src="documents/M2L/ContexteM2LOrganisation.pdf" width="800px" height="800px" />
                        <br>
                        <br>
                        <br>
                        <p>Cahier des charges</p>
                        <embed src="documents/M2L/Site/Cahier-des-charges-M2L-efrei2021.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Documentation utilisateur</p>
                        <embed src="documents/M2L/Site/DocumentationUtilisateurClientLéger.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <p>Documentation technique</p>
                        <embed src="documents/M2L/Site/Doc-Tech-M2L-Léger.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <p>Captures d'écran de plusieurs pages du site</p>
                        <img src="documents/M2L/Site/capM2L.png" width=85% height=85%>
                        <br>
                        <img src="documents/M2L/Site/capM2L2.png" width=85% height=85%>
                        <br>
                        <img src="documents/M2L/Site/capM2L3.png" width=85% height=85%>
                        <br>
                        <br>
                        <br>
                        <p>Captures d'écran du panneau de contrôle de l'hébergement Web </p>
                        <img src="documents/M2L/Site/Capture_M2L_panel.png" width=85% height=85%>
                        <br>
                        <p>Captures d'écran du projet sur GitHub</p>
                        <img src="documents/M2L/Site/Capture_Git_M2LLéger.png" width=75% height=75%>
                        <br>
                        <br>
                        <h3><a href="http://m2l-it.byethost7.com/" target="_blank">Cliquer ici pour accéder au site
                                M2L.</a>
                        </h3>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="ClientLourd">
                        <h3>Client lourd</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Contexte SIO M2L</p>
                        <embed src="documents/M2L/ContexteM2LOrganisation.pdf" width="800px" height="800px" />
                        <br>
                        <br>
                        <br>
                        <p>Cahier des charges</p>
                        <embed src="documents/M2L/Logiciel/CDC_Client_Lourd_M2L.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Documentation utilisateur</p>
                        <embed src="documents/M2L/Logiciel/DocumentationUtilisateurClientLourd.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <p>Documentation technique</p>
                        <embed src="documents/M2L/Logiciel/Doc-Tech-M2L-Lourd.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                    </div>
                </div>
            </article>

            <!-- Epreuve E6 -->
            <article id="e6">
                <h2 class="major">Parcours de professionnalisation - E6</h2>
                <p>Dans cette rubrique, se trouve le tableau de synthèse contenant les compétences que j’ai acquis
                    pendant les deux années.
                    <br>
                    <br>
                    <a href="#ppe">Les Projets Personnalisés Encadrés réalisés en formation sont disponible ici.</a>
                </p>
                <br>
                <br>
                <br>
                <div class="document">
                    <div id="tabE6">
                        <h3>Tableau de synthèse - E6</h3>
                        <embed src="documents/E6/riou_timothée_tabE6.pdf" width="800px" height="600px" />
                    </div>
                </div>
            </article>


            <!-- Veille Technologique -->
            <article id="veille">
                <h2 class="major">Veille Technologique</h2>
                <div class="document">
                    <br>
                    <h4>Documents fournis</h4>
                    <p>Documentation sur la veille</p>
                    <embed src="documents/Veille Technologique/11-Veille Technologique&Méthodologie copie.pdf" width="800px" height="800px" />
                    <br>
                    <br>
                    <br>
                    <p>Séquence de travail et méthodologie</p>
                    <embed src="documents/Veille Technologique/11-Sequence_travail-Doc_eleve copie.pdf" width="800px" height="800px" />
                    <br>
                    <br>
                    <br>
                    <br>
                    <h4>Documents réaliser</h4>
                    <p>Travail et recherche sur le Deep Learning</p>
                    <embed src="documents/Veille Technologique/Veille technologique_DL.pdf" width="800px" height="800px" />
                    <br>
                    <br>
                    <p>Captures d’écran du site Pearltress</p>
                    <img src="documents/Veille Technologique/Capture Pearltrees.png" width=85% height=85%>
                    <br>
                    <br>
                    <p>Captures d'écran de newsletters</p>
                    <img src="documents/Veille Technologique/Capture_VT_newsletter.png" width=85% height=85%>
                    <br>
                    <br>
                    <p>Captures d'écran d'exemples d'articles de newsletters</p>
                    <img src="documents/Veille Technologique/Capture_VT_article.png" width=55% height=55%>
                    <br>
                    <img src="documents/Veille Technologique/Capture_VT_article2.png" width=55% height=55%>
                    <br>
                    <br>
                    <p>Dernière article retenu</p>
                    <img src="documents/Veille Technologique/Capture_VT_fbAI.png" width=65% height=65%>
                </div>

            </article>


            <!-- PPE -->
            <article id="ppe">
                <h2 class="major">Projets Personnel Encadrés</h2>
                <div id="ppe">
                    <li><a href="#pfc">Portefeuille de compétences</a></li>
                    <li><a href="#fb">Site d'e-commerce</a></li>
                    <li><a href="#pyld">Jeu vidéo développer avec Stencyl : Pablo y los Dinos</a></li>
                    <li><a href="#hle">Jeu vidéo développer avec Unity : Hotline Efrei</a></li>
                </div>
                <br>
                <br>
                <br>
                <div class="document">
                    <div id="pfc">
                        <h3>Portefeuille de compétences</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Extrait du référentiel du BTS SIO</p>
                        <embed src="documents/PPE/Portfolio/ExpressionBesoin_ExtraitRéférentiel.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <p>Méthode QQOQCCP</p>
                        <embed src="documents/PPE/Portfolio/QQOQCCP_Présentation.pdf" width="800px" height="600px" />
                        <br>
                        <br>
                        <br>
                        <p>Document Analyse du besoin</p>
                        <embed src="documents/PPE/Portfolio/Portfolio_Questionnement.pdf" width="800px" height="600px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Travail Analyse du besoin</p>
                        <embed src="documents/PPE/Portfolio/21-AnalyseDuBesoin.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <p>Travail sur le besoin du portfolio</p>
                        <embed src="documents/PPE/Portfolio/QQOQCCP_Portefolio.pdf" width="800px" height="900px" />
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="fb">
                        <h3>Site d'e-commerce</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Instruction</p>
                        <img src="documents/PPE/Foret Bleue/Capture_FB_énoncé.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Rapport du projet</p>
                        <embed src="documents/PPE/Foret Bleue/Rapport - Forêt Bleue.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <p>Captures d’écran du site une fois développé</p>
                        <img src="documents/PPE/Foret Bleue/capture_FB_accueil.png" width=65% height=65%>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="pyld">
                        <h3>Jeu vidéo développer avec Stencyl : Pablo y los Dinos</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Instruction</p>
                        <img src="documents/PPE/Pablo y los Dinos/Consignes PabloDinos.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Cahier des charges</p>
                        <embed src="documents/PPE/Pablo y los Dinos/CDC Pablo y los dinos.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <p>Captures d’écran du jeu</p>
                        <img src="documents/PPE/Pablo y los Dinos/Capture_Pyld_jouer.PNG" width=65% height=65%>
                        <br>
                        <img src="documents/PPE/Pablo y los Dinos/Capture_Pyld_Rejouer.PNG" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <p>Capture d'écran du langage Scratch</p>
                        <img src="documents/PPE/Pablo y los Dinos/Capture_Scratch.png" width=65% height=65%>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="hle">
                        <h3>Jeu vidéo développer avec Unity : Hotline Efrei</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Instruction</p>
                        <img src="documents/PPE/Hotline EFREI/Consignes HotlineEfrei.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Cahier des charges</p>
                        <embed src="documents/PPE/Hotline EFREI/CDC HotlineEfrei.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <p>Captures d’écran du développement du jeu</p>
                        <img src="documents/PPE/Hotline EFREI/Capture unity.png" width=65% height=65%>
                        <br>
                        <img src="documents/PPE/Hotline EFREI/Capture code.png" width=65% height=65%>
                    </div>
                </div>
            </article>


            <!-- 1er Stage VEESION-->
            <article id="stage1">
                <h2 class="major">Stage de 1er année dans la startup Veesion</h2>
                <div id="stage1">
                    <li><a href="#stage1M1">Mission 1 : Création d'une carte</a></li>
                    <li><a href="#stage1M2">Mission 2 : Réalisation de tests sur des caméras</a></li>
                    <li><a href="#stage1M3">Mission 3 : Installation des serveurs</a></li>
                    <li><a href="#stage1M4">Mission 4 : Création d'un formulaire</a></li>
                </div>
                <br>
                <br>
                <br>
                <div class="document">
                    <div id="stage1M1">
                        <h3>Mission 1 : Création d'une carte</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Capture d'écran des intructions</p>
                        <img src="documents/Stage/Veesion/Carte/Capture_Veesion_mail.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <p>Documentation</p>
                        <embed src="documents/Stage/Veesion/Carte/Veesion Maps Bts.pdf" width="800px" height="500px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Rapport</p>
                        <embed src="documents/Stage/Veesion/Carte/Mission 2_Map copie.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <p>Captures d’écran de la carte</p>
                        <img src="documents/Stage/Veesion/Carte/Capture_Veesion_map1.png" width=65% height=65%>
                        <br>
                        <img src="documents/Stage/Veesion/Carte/Capture_Veesion_map2.png" width=30% height=30%>
                        <br>
                        <img src="documents/Stage/Veesion/Carte/Capture_Veesion_map3.png" width=30% height=30%>
                        <br>
                        <img src="documents/Stage/Veesion/Carte/Capture_Veesion_map4.png" width=65% height=65%>
                        <br>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="stage1M2">
                        <h3>Mission 2 : Réalisation de tests sur des caméras</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Instruction</p>
                        <img src="documents/Stage/Veesion/Test Caméra/Capture_VeesionMail_Test.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <br>
                        <p>Vidéo d’une alerte de vol</p>
                        <video width="586" height="480" controls>
                            <source src="documents/Stage/Veesion/Test Caméra/Veesion_TestCam.mp4" type="video/mp4">
                        </video>
                        <br>
                        <br>
                        <br>
                        <p>Photo d'alertes quand un vol est signalé</p>
                        <img src="documents/Stage/Veesion/Test Caméra/Veesion_Alerte.JPG" width=45% height=45%>
                        <br>
                        <br>
                        <img src="documents/Stage/Veesion/Test Caméra/Veesion_Alerte2.JPG" width=45% height=45%>
                        <br>
                        <br>
                        <p>Tests de vol pour chaque caméras</p>
                        <img src="documents/Stage/Veesion/Test Caméra/Veesion_TestNote.png" width=65% height=65%>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="stage1M3">
                        <h3>Mission 3 : Installation des serveurs</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Documentation sur l'installation</p>
                        <embed src="documents/Stage/Veesion/Installation Serveurs/Veesion_ChecklistInstallation_Questionnaire copie.pdf copie.pdf" width="800px"
                            height="900px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Documentation pour les reconnaissances</p>
                        <embed src="documents/Stage/Veesion/Installation Serveurs/Veesion_Checklist reconnaissanceQuestionnaire.pdf" width="800px" height="1040px" />
                        <br>
                        <br>
                        <p>Ropport des installations</p>
                        <embed src="documents/Stage/Veesion/Installation Serveurs/Veesion_RapportInstall.pdf" width="800px" height="1050px" />
                        <br>
                        <br>
                        <br>
                        <p>Captures d’écran d'un mail avec les détails des configurations des caméras</p>
                        <img src="documents/Stage/Veesion/Installation Serveurs/Veesion_MailCam.PNG" width=35% height=35%>
                        <br>
                        <br>
                        <br>
                        <p>Photos de l'écran des caméras et des configurations des enregistreurs</p>
                        <img src="documents/Stage/Veesion/Installation Serveurs/Veesion_Cam.JPG" width=65% height=65%>
                        <br>
                        <img src="documents/Stage/Veesion/Installation Serveurs/Veesion_Cam2.JPG" width=65% height=65%>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="stage1M4">
                        <h3>Mission 4 : Création d'un formulaire</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Consigne pour créer le formulaire</p>
                        <embed src="documents/Stage/Veesion/Formulaire/Veesion_Questionnaire.pdf" width="800px" height="900px" />
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Captures d’écran du formulaire</p>
                        <img src="documents/Stage/Veesion/Formulaire/Capture_Veesion_Form1.png" width=65% height=65%>
                        <br>
                        <br>
                        <p>Tableau comparatif</p>
                        <img src="documents/Stage/Veesion/Formulaire/Capture_Veesion_Form5.png" width=45% height=45%>
                    </div>
                </div>
            </article>


            <!-- 2e Stage ProPR-->
            <article id="stage2">
                <h2 class="major">Stage de 2e année dans la startup ProPR</h2>
                <div id="stage2">
                    <li><a href="#stage2M1">Mission 1 : Développement du site de la startup</a></li>
                    <li><a href="#stage2M2">Mission 2 : Ajout du code sur GitHub pour organiser le projet</a></li>
                </div>
                <br>
                <br>
                <br>
                <div class="document">
                    <div id="stage2M1">
                        <h3>Mission 1 : Développement du site de la startup</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Capture d'écran du site d'origine</p>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_AncienSite.png" width=55% height=55%>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_AncienSite2.png" width=55% height=55%>
                        <br>
                        <br>
                        <br>
                        <p>Instructions</p>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_Consignes.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <p>Capture d'écran des maquettes du sites</p>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_Figma.png" width=65% height=65%>
                        <p><a href="https://www.figma.com/file/51XPaAtcbPW2oI1b6t6nVj/ProPR-landing-(Copy)?node-id=0%3A1"
                                target="_blank">Lien des maquettes</a></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <p>Captures d'écran de la première version</p>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_SiteV1.png" width=65% height=65%>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_SiteV1.2.png" width=65% height=65%>
                        <br>
                        <br>
                        <p>Captures d'écran de la deuxième version</p>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_SiteV2.png" width=65% height=65%>
                        <img src="documents/Stage/ProPR/Site/Capture_ProPR_SiteV2.2.png" width=65% height=65%>
                        <br>
                        <br>
                        <h5>Fonctionnalités non réalisées</h5>
                        <li>Ajouter un design responsive</li>
                        <li>Ajouter une accessibilité aria-labels</li>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="stage2M2">
                        <h3>Mission 2 : Ajout du code sur GitHub pour organiser le projet</h3>
                        <br>
                        <h4>Documents fournis</h4>
                        <p>Instruction</p>
                        <img src="documents/Stage/ProPR/GitHub/Capture_ProPR_Instruction_GitHub.png" width=65% height=65%>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Documents réaliser</h4>
                        <br>
                        <p>Capture d'écran du dépot de données sur GitHub</p>
                        <img src="documents/Stage/ProPR/GitHub/Capture_ProPR_Git.png" width=65% height=65%>
                    </div>
                </div>
            </article>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; <a href="https://github.com/TimotheeRiou" target="_blank">Timothée
                    Riou</a><br>timo.riou@gmail.com</p>
        </footer>

    </div>
    <!-- BG -->
    <div id="bg"></div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <!--
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>-->

</body>

</html>