<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boat Finder</title>

    <!-- css -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

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
                   <!-- TODO faire un bouton de deconnexion -->

                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center">
        <div class="intro">

            <h1>Bienvenue
                <?php

                $user = new User($bdd, 7);
                echo $Prenom =  $user->GetPrenom();

                ?>
            </h1>
            <p>Nous sommes heureux d'aider de jeunes marins à se repérer en mer</p>
        </div>
    </header>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>