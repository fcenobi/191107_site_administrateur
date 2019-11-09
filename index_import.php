<!DOCTYPE html>
<html lang="fr">

<head>
    <title>index_import.php</title>
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
                    <a class="nav-link" href="wellcome_mail.php">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="question.php">Votre test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vos graphiques</a>
                </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Plus
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="nav-link" href="message.php"><h4>Message</h4></a>
         <a class="nav-link" href="reset_mail.php"><h4>Changer de mot de passe</h4></a>
        </div>
            </li>
            </ul>
            <a href="logout_mail.php" class="btn btn-sm btn-outline-secondary">Déconnection</a>
        </div>
    </nav>

    <!--End Navbar-->

<div class ="container-fluid col-sm-12 col-lg-12 justify-content-center">


    <div class="text-center marge_contact top-form">
        <h2>Accéder à la base de données</h2>
    </div>
        <!-- Modal -->
<div class="modal fade border-light shadow" id="conditions" tabindex="-1" role="dialog" aria-labelledby="tableau" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tableau">Création du fichier CSV Questions</h5>
        

        <button type="button btn-secondary btn-sm" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-left">
            <p>- Database Mysql : "process" - Table : "questions"<br>
        - Colonnes : "question" - "classe"<br>
        - "id" auto-incrémenté - "date" automatique à l'insertion</p>
        </div>
           <div class="card-header bg-transparent text-center ">
                <h4>Avec Excel ou LibreOffice Calc</h4>
            </div>
       
            <img src="images/Capture_1.png" alt="Tableau">
            <h5 class="text-left">- Créer un tableau en deux colonnes.<br>
        - Sauvegarder au Format .csv<br>- Jeu de caractères : (Unicode) Utf-8<br>- Séparateur de champ : ,</h5>
      </div>

      <div class="modal-footer">   
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Fermer</button>
      </div>        
    </div>
  </div>
</div>
<!-- End Modal -->

<div class ="container-fluid row col-sm-12 col-lg-12 zero">
    <div class="row col-sm-8 col-md-8 col-lg-8 border border-light shadow">
        <div class="col-lg-6 text-left">
            <h4  class="wow fadeInLeft" data-wow-delay="1s">Modifier la table des questions</h4>
        </div>
        <div class="col-lg-6 text-right">
            <h4 class="wow fadeInRight" data-wow-delay="1s">Importer de nouvelles questions</h4>
        </div>
      
    </div>
</div>

<div class ="container-fluid row col-sm-12 col-lg-12 justify-content-center database"><!--container-->
 
    <div class="row col-sm-8 col-md-8 col-lg-8 border border-light shadow global">
    

        <div class="form-group btn-database">
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#conditions"><!-- Button popup modal -->
        <label>Créer le fichier</label>   
        </button>
        </div>                           

        <div class="form-group col btn-database">   
         <!--   <label><small class="form-text text-muted">Selectionner le fichier</small></label>-->
            <input type="file" class="btn-submit btn-light btn-sm" name="file" id="file" accept=".csv">
        </div>

        <div class="form-group btn-database">    
            <input type="submit" id="submit" name="import" class="btn btn-secondary btn-sm" value="Importer">    
        </div>

</div>    
</div>


<!--listing-->
            <ul class="list-inline  list-group-item-dark row col-sm-12 col-lg-12">
                <li class="list-inline-item text-left titre-liste col-sm-2 col-lg-2">N°<br></li>
                <li class="list-inline-item text-left titre-liste col-sm-6 col-lg-6">Question<br></li>
                <li class="list-inline-item text-left titre-liste col-sm-2 col-lg-2">Classe<br></li>
                <li class="list-inline item text-left titre-liste col-sm-1 col-lg-1">Date<br></li>
            </ul>
<!--end listing-->
<?php
try
{
//Connexion à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=process;charset=utf8', 'cc', 'xxxxxxxx');

}
catch(Exception $e)
{
// En cas d'erreur
        die('Erreur : '.$e->getMessage());
}

// On récupère tout le contenu de la table quest
$reponse = $bdd->query('SELECT * FROM questions');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>


  
    <div class ="container-fluid row col-sm-12 col-lg-12 justify-content-center smooth-scroll" id="test1">
 

            <ul class="list-group card-quest col-sm-2 col-lg-2">
                <li class="list-group-item"><?php echo $donnees['id']; ?><br></li>
            </ul>
            <ul class="list-group card-quest col-sm-6 col-lg-6">
                <li class="list-group-item"><?php echo $donnees['question']; ?><br></li>
            </ul>
            <ul class="list-group card-quest col-sm-2 col-lg-2">
                <li class="list-group-item"><?php echo $donnees['classe']; ?><br></li>
            </ul>
            <ul class="list-group card-quest col-sm-2 col-lg-2">
                <li class="list-group-item"><?php echo $donnees['date']; ?><br></li>
            </ul>
    </div>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



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