<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_admin_index0.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login_admin_index0.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
<!doctype html>
<html lang="fr">

<head>
    <title>reset_pass.php</title>
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
   
    
<div class ="container-fluid row col-sm-12 col-lg-12 dashboard justify-content-center"><!--reset_pass-->

    <div class="col-sm-12 col-md-4 col-lg-3 border border-light shadow global">

        <div class="text-center marge-contact">       
            <h2>Changer votre mot de passe</h2>
            <p>Votre nouveau mot de passe</p>
        </div>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label><small class="form-text text-muted">Nouveau mot de passe</small></label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label><small class="form-text text-muted">Confirmer</small></label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-secondary btn-sm" value="Valider">
                <a class="btn btn-link" href="login_admin_index0.php">Annuler</a>
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
