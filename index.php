<?php

// if (isset($_REQUEST["submited"])){
//     require_once 'config.php';



//     $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if (!$link) {
//     echo "Erreur de connection avec la base de données";
//     exit;
// }

// $sql = "INSERT INTO `vs_atelier-11`.`users` ( `ID`, `first_name`, `last_name`, `phone`, `email`, `password`, `created_at`, `updated_at`, `logged_at`) VALUES (NULL, 'Slim', 'Amdouni', '55996476', 'amdouni@gmail.com', '12457896', CURRENT_TIMESTAMP, '', '');"

// }

// echo DB_HOST;
// //  echo $_REQUEST ["first_name"]


//ini_set("display_errors", newvalue);


        if (isset($_REQUEST["submited"])) {

            require_once 'config.php';

            $user = [
                "first_name" => $_REQUEST["first_name"],
                "last_name" => $_REQUEST["last_name"],
                "phone" => $_REQUEST["phone"],
                "email" => $_REQUEST["email"],
                "password" => md5($_REQUEST["password"])
            ];

$sql = "INSERT INTO `users` (`first_name`, `last_name`, `phone`, `email`, `password`) "." VALUES "."('".$user['first_name']."', '".$user['last_name']."', '".$user['phone']."', '".$user['email']."', '".$user['password']."');";


      if ($link->query($sql) === TRUE) {
                echo "L'utilisateur ".$user['first_name']." a été ajouté.";
            } else {
                echo "Erreur suivante s'est produite : ".$link->error;
            }

        }

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Formulaire PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/tablet.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 1199px)">
    <link href="assets/css/mobile.css" rel="stylesheet" media="(max-width: 767px)">

</head>

<body >
    <div>
        <form id="registerForm" action="" method="POST" >
            <div class="container">
                <div class="row">
                    <div class="col">
                     <h1>Inscription</h1>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-6" name="first_name" id="prenom" placeholder="Prenom" autocomplete="off" />
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-group row">
                    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-6" name="last_name" id="nom" placeholder="Nom" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-group row">
                    <label for="tel" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-6" name="phone" id="tel" placeholder="Telephone">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control col-6" name="email" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control col-6" name="password" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-2 col-form-label">Confirmation mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control col-6" name="confirm_password" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input"  type="checkbox" name="cgu" id="gridCheck1">
                            <label class="form-check-label"  for="gridCheck1">
                                j'accepte les conditions d'utilisation
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="submited" value="true">
            <div class="container">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/additional-methods.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>