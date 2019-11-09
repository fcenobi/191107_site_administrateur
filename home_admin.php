<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_admin_index0.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>home_admin.php</title>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--style css-->
    <link rel="stylesheet" href="css/style.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap|Work : semi-bold" rel="stylesheet">
    <!--animation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

</head>

<body>

    <!--Carousel-->
    <div class="carousel slide home-slide carousel-fade" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="img"><img class="d-block img-fluid" src="images/b10.jpg" alt="slide 1"></div>
            </div>
            <div class="carousel-item">
                <div class="img"><img class="d-block img-fluid" src="images/b20.jpg" alt="slide 2"></div>
            </div>
        </div>
    </div>
    <!--End Carousel-->

    <!--Navbar-->
        <!--icones-->
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white">
        <a class="navbar-brand">
            <img src="images/bpath1.png" width="35" height="35" alt="icone">
        </a>
           <!--End icones-->

        <!--hamburger-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span><img src="images/bpath_txt.png" width="" height="34" alt="icone"></span> 
        </button>
        <!--End hamburger-->
        <div class="collapse navbar-collapse navbar-light " id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link" href="home_admin.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
    
                 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Base de données
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="nav-link" href="index_import_question.php"><h4>Questions</h4></a>
        </div>
            </li>
           
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Plus
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="nav-link" href="message_admin.php"><h4>Message</h4></a>
         <a class="nav-link" href="reset_pass.php"><h4>Changer de mot de passe</h4></a>
        </div>
            </li>
            </ul>
            <a href="logout_admin.php" class="btn btn-sm btn-outline-secondary">Déconnection</a>
        </div>
    </nav>
    <!--End Navbar-->
    <div>
        <h4 class="wow fadeInLeft" data-wow-delay="1s">Bonjour <?php echo htmlspecialchars($_SESSION["email"]); ?> Bienvenue sur votre espace</h4>
    </div>
    <!--Card-->
    <div>
        <div class="card text-center condition">
            <div class="card-header">
                Votre espace
            </div>

            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                </p>
                <a href="question.php" class="btn btn-primary">Go!</a>
            </div>

            <div class="card-footer text-muted">
                --
            </div>
        </div>
    </div>
    <!--End Card-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Animationns animate wow-->
    <script src="js/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <!--Pour l'envoi des mails-->
    <script src="js/contact.js"></script>
</body>

</html>
