
<!DOCTYPE html>
<html>
<head>
  <title>Inscription </title>

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/inscription.css">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="cantainer">
<h1>Rejoingnez-nous</h1>
<form class="g-3 needs-validation" novalidate>
  <!-- username -->
    <div class="mb-3">
      <label for="validationCustom01" class="form-label" >Nom</label>
      <input type="text" class="form-control" name="nom"   id="validationCustom01" required>
      <div class="invalid-feedback">
        Remplir le champ
      </div>
    </div>
    <div class="mb-3">
      <label for="validationCustom02" class="form-label">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="validationCustom02" required>
      <div class="invalid-feedback">
        Remplir le champ
      </div>
    </div>
    <div class="mb-3">
      <label for="validationCustomUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Veuillez choisir un nom d'utilisateur 
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="validationCustom03" class="form-label">Mot de passe </label>
      <input type="text" class="form-control" name="mdp" id="validationCustom03" required>
      <div class="invalid-feedback">
        Veuillez fournir un mot de passe valide 
      </div>
    </div>
    <div class="mb-3">
      <label for="validationCustom03" class="form-label">Conirmer le mot de passe </label>
      <input type="text" class="form-control" name="Cmdp" id="validationCustom03" required>
      <div class="invalid-feedback">
      
      </div>
    </div>
    <div class="mb-3">
    <div class="mb-3">
      <label for="validationCustom05" class="form-label">Numero de telepone</label>
      <input type="text" class="form-control" name="telephone" id="validationCustom05" required>
      <div class="invalid-feedback">
        Veuillez fournir un numero valide 
      </div>
    </div>
    </div>
    <div class="g-recaptcha"   data-sitekey="6LcqXoUbAAAAAJmpmgP7oLhjpG9YqeLdgJFA-KuZ"></div>
      
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
         Accepter les termes et conditions.
        </label>
        <div class="invalid-feedback">
          Vous devez accepter avant de soumettre.
        </div>
      </div>
    <!-- bouton -->
    <div class="mb-3 mx-auto">
      <button class="btn btn-success col-12" name="inscrire" type="submit">S'inscrire</button>
      <p>Déja membre?<a href="connect.php">Se connecter</a></p>
    </div>
  </form>

</div>

   
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/teste.js"></script>
</body>
</html>