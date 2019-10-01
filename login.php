<?php 
if (isset($_REQUEST['submit'])) {
    require_once 'config.php';
$email=$_REQUEST['email'];
$Password=$_REQUEST['Password'];
 $sql = "SELECT * form users where email='$email' and password='$password'";
 $result=mysql_query($link, $sql);
 if(mysql_num_rows($result)==1)
 {
    session_start();
    $_SESSION['auth']='true';
    header('location:profile.php');
 }
 else {echo 'email ou mot de passe incorrect';}
}
 ?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Atelier Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/tablet.css" rel="stylesheet" media="(min-width: 768px) and (max-width: 1199px)">
        <link href="assets/css/mobile.css" rel="stylesheet" media="(max-width: 767px)">

    </head>
    <body>
        <div>
            <form id="loginForm" action="" method="POST" >
                <div class="container">
                    <div class="row">
                        <div class="col">
                         <h1>Login</h1>
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
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </div>
            </div>
        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/additional-methods.min.js"></script>
    <!-- <script src="assets/js/script.js"></script> -->
    </body>
</html>
