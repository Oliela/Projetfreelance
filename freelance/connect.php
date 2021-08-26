
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <div class="container">
    <div class="logo">
    </div>

    <div class="formSession">
      <form method="POST">
        <div class="row">
          <input type="email" type="text" name="nomUser" placeholder="Email/Nom d'utilisateur">
        </div>
        <div class="row">
          <input type="password" name="mdp" placeholder="Mot de passe">
        </div>
      <div class="g-recaptcha" data-sitekey="6LcqXoUbAAAAAJmpmgP7oLhjpG9YqeLdgJFA-KuZ"></div>
      <input type="submit" value="connecter" name="connect">
        <div class="row">
          <div class="col">
            <input type="checkbox" name="rappel" id="rappel">
            <label>Se souvenir de moi</label>
          </div>
          <a href="mdp-oublié.html">Mot de passe oublié ?</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>