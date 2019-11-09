<!doctype html>
<html lang="fr">

<head>
    <title>message_admin.php</title>
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
 
<div class ="container-fluid row col-sm-12 col-lg-12 dashboard justify-content-center"><!--reset_pass-->

    <div class="col-sm-12 col-md-4 col-lg-3 border border-light shadow global">

        <div class="text-center marge-contact">   
            <h2>Votre message</h2>
            <p>Merci de compléter votre demande</p>  
        </div>    


    <form action="send_data.php" method="POST">
        <div class="form-group">
            <label><small class="form-text text-muted">Nom</small></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label><small class="form-text text-muted">Email</small></label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label><small class="form-text text-muted">Message</small></label>
            <textarea class="form-control" name="message" required></textarea>
        </div>

        <div class="form-group">
            <!--   <button class="btn btn-success" type="submit">Submit</button>-->
            <input type="submit" class="btn btn-secondary btn-sm" value="Envoyer">
        </div>

    </form>
</div>
</div>

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
