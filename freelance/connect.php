
<?php 
require('Recaptcha/autoload.php');

if (isset($_POST['connect'])) {

  if (isset($_POST['g-recaptcha-response'])) {

    $recaptcha = new \ReCaptcha\ReCaptcha('6LcqXoUbAAAAAA9uM3uNIEjiibYxvFeGjqeVcqwd');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
                      
    if ( $resp -> isSuccess()) {

    }else {
         $erreurs= $resp -> getErrorCodes();
         echo "Captcha invalide";
    }
  } else {
    echo "Captcha non valide";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Connection</title>

  <!-- css -->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/connect.css">
  <!-- js -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <div class="cantainer">
    <h1>Connectez vous</h1>
    <form method="POST">

      <!-- mail -->
      <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="nomUser"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
       </div>

        <!-- mot de passe  -->
        <div class="mb-3 ">
         <label for="exampleInputPassword1" class="form-label">Password</label>
         <input type="password" class="form-control " name="mdp" id="exampleInputPassword1">
        </div>
        <!-- capchat -->
        <div class="g-recaptcha"   data-sitekey="6LcqXoUbAAAAAJmpmgP7oLhjpG9YqeLdgJFA-KuZ"></div>

        <!-- checkbox  -->
       <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        <a href="#" class="lien">Mot de passe oublié ?</a>
        </div>
      <div class="mb-3 mx-auto">
        <button type="submit" class="btn btn-success  col-12 " name="connect">Se Connecter</button>
       </div>
      <p>Pas encore membre?<a href="inscription.php">S'inscrire maintenant</a></p>
    
    </form>
  </div>
</body>
</html>