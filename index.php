<?php session_start();

include "header.php";
include "METIER/fonction.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boat Finder</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php 
if (isset($isconnect)) { 

    if ($isconnect == true) {

        session_destroy();

} else { ?>

    <body data-spy="scroll" data-target="#site-nav">
        <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
            <div class="container">
                <div class="navbar-header">

                    <!-- logo 
                <div class="site-branding">
                    <a class="logo" href="index.html">
                        
                         logo image  
                <img src="assets/images/logo.png" alt="Logo"> Conference 2015
                </a>
            </div>
            -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="nav navbar-nav navbar-right">

                        <!-- navigation menu -->
                        <li class="active"><a data-scroll href="#about">Accueil</a></li>
                        <li><a data-scroll href="#speakers">Map</a></li>
                        <li><a data-scroll href="#schedule">Mon Compte</a></li>

                    </ul>
                </div>
            </div>
            <!-- /.container -->
        </nav>

        <header id="site-header" class="site-header valign-center">
            <div class="intro">

                <h2>Bienvenue sur</h2>

                <h1>GEO BOAT FINDER</h1>

                <p>Nous sommes heureux d'aider de jeunes marins à se repérer en mer</p>

                <a class="btn btn-white" data-scroll href="#registration">Inscrivez-vous</a>
            </div>
        </header>

        <?php
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['mdp'])) {
            $result = inscription($bdd, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['mdp']);

            if ($result == true) {

                $_SESSION['connect'] = true;
            }
        } ?>

        <section id="registration" class="section registration">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Formulaire d'inscription</h3>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12" id="registration-msg" style="display:none;">
                            <div class="alert"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prénom" id="prenom" name="prenom" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Téléphone" id="telephone" name="telephone" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe" id="mdp" name="mdp" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt20">
                        <input type="submit" class="btn btn-black" id="registration-submit-btn" name="btnSubmit"> <a href=""> Déja inscrit ? </a>
                    </div>
                </form>
            </div>
        </section>

        <!-- <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
-->

    <?php }} ?>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by Wantelez Florian </p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
    </body>

</html>