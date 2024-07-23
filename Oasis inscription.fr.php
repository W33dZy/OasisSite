<!DOCTYPE html>
<html>



  <head>
    <title> Page d'inscription fr </title>
      <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
    <style>
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }
        .mode-toggle-icon {
            position: absolute;
            top: 0px;
            left: 290px; /* Décalage pour donner de l'espace entre le logo et la barre de recherche */
            cursor: pointer;
        }
        .search-bar-container {
            position: absolute;
            top: 10px;
            right: 50px;
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px;
        }
        footer a {
            margin-right: 20px;
        }
    </style>
  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><b> Oasis </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Oasis Service.fr.html"> Services </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Oasis blog.fr.html"> Blog </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Oasis contact.fr.html"> Nous contacter </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Oasis connexion.fr.html"> Connexion </a>
            </li>



            <!-- Language Selector -->
            <li class="nav-item">
              <a href="Oasis inscription.fr.html" class="nav-link"><img src="https://hatscripts.github.io/circle-flags/flags/fr.svg" alt="French Flag" width="16" height="16"></a>
            </li>
            <li class="nav-item">
              <a href="Oasis inscription.en.html" class="nav-link"><img src="https://hatscripts.github.io/circle-flags/flags/us.svg" alt="United States Flag" width="16" height="16"></a>
            </li>
            <li class="nav-item">
              <a href="Oasis inscription.al.html" class="nav-link"><img src="https://hatscripts.github.io/circle-flags/flags/de.svg" alt="German Flag" width="16" height="16"></a>
            </li>
            <li class="nav-item">
              <a href="Oasis inscription.es.html" class="nav-link"><img src="https://hatscripts.github.io/circle-flags/flags/es.svg" alt="Spanish Flag" width="16" height="16"></a>
            </li>



          </ul>
        </div>
        <!-- Conteneur de la barre de recherche et du logo -->
        <div class="search-bar-container">
            <!-- Barre de recherche -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
            </form>
            <!-- Logo du mode sombre -->
            <div class="mode-toggle-icon" onclick="toggleDarkMode()">
                <img src="BpSombre.png" alt="Mode sombre" title="Mode sombre" width="36" height="36">
            </div>
        </div>
      </nav>
    </header>


    <main>        
      </section>
      <section id="Inscription">
        <h2> Inscription </h2>
        <form action="submit-signup.php" method="post">
          <label for="username">Nom d'utilisateur : </label>
          <input type="text" id="username" name="username">
          <label for="email">Email : </label>
          <input type="email" id="email" name="email">
          <label for="password">Mot de passe : </label>
          <input type="password" id="password" name="password">

            <div class="g-recaptcha" data-sitekey="6LfDjOopAAAAAE6wD2_UoiHPLrDl2VI27J4YdB3r"></div><br>

            <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recaptcha_secret = '6LfDjOopAAAAAPhmgDaYnVgnHj_wD-L9qYOxUi7T';
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_keys = json_decode($response, true);
    
    if (intval($response_keys["success"]) !== 1) {
        echo 'Veuillez compléter le CAPTCHA correctement.';
    } else {
        // Traitement du formulaire après vérification réussie
        echo 'CAPTCHA validé avec succès.';
    }
}
?>

          <input type="submit" value="S'inscrire">
        </form>
		<p>Vous avez déjà un compte ? <a href="Oasis connexion.fr.html">Connectez-vous ici </a> .</p>
      </section>
    </main>


<footer>
    <a href="politique_cookies.fr.html">Politique de cookies</a>
    <a href="mentions_legales.fr.html">Mentions légales</a>
    <a href="politique_confidentialite.fr.html">Politique de confidentialité</a>
      <p> Copyright &copy; 2024 Joryce. Tous droits réservés. </p>
</footer>
    <script>
        function toggleDarkMode() {
            var body = document.body;
            body.classList.toggle("dark-mode");
        }
    </script>
  </body>
</html>