<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
  <title>SafetyCasque</title>
  <link href="style/style.min.css" rel="stylesheet" />
  <meta name="google-site-verification" content="ANbxdcO-gH6S3w0DTIz1R0qlcYG3myxaAxwzvYSv7GI" />
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body class="bg-white vh-100 position-static d-flex flex-column">
  <header>
    <div class="d-none justify-content-center bg-black d-lg-flex">
      <img class="w-cm-5" src="img/logo.png" alt="Logo SafetyCasque" />
      <h1 class="text-uppercase text-size-40-pt mx-5 text-white">
        <span class="text-size-60-pt">S</span>afety
        <span class="text-size-60-pt">C</span>asque
      </h1>
      <img class="w-cm-5" src="img/logo.png" alt="Logo SafetyCasque" />
    </div>
    <div class="d-flex justify-content-center bg-black d-sm-none">
      <img class="w-cm-5" src="img/logo.png" alt="Logo SafetyCasque" />
    </div>
    <div class="d-none d-sm-block bg-black d-lg-none">
      <p class="text-center">
        <img class="w-cm-5" src="img/logo.png" alt="Logo SafetyCasque" />
        <br>
      </p>
      <h1 class="text-uppercase text-size-40-pt mx-5 text-white text-center">
        <span class="text-size-60-pt">S</span>afety
        <span class="text-size-60-pt">C</span>asque
      </h1>
    </div>
  </header>
  <nav class="navbar nav nav-pills bg-secondary navbar-expand" id="navbar">
    <div class="d-flex w-100 text-center flex-row flex-wrap justify-content-evenly">
      <a class="nav-link text-outline-red flex-fill" href="#presentation">Présentation</a>
      <a class="nav-link text-outline-yellow flex-fill" href="#conception">Conception</a>
      <a class="nav-link text-outline-purple flex-fill" href="#photos">Photos</a>
      <a class="nav-link text-outline-light-blue flex-fill" href="#informations">Informations</a>
      <a class="nav-link text-outline-green flex-fill" href="#contact">Contact</a>
    </div>
  </nav>
  <div class="container overflow-hidden mt-3 mb-0 pb-0" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="550">
    <section class="h-100 container overflow-auto mb-3" id="presentation">
      <?php include('presentation.php'); ?>
    </section>
    <section class="h-100 container overflow-auto mb-3" id="conception">
      <?php include('conception.php'); ?>
    </section>
    <section class="h-100 container overflow-auto mb-3" id="photos">
      <?php include('photos.php'); ?>
    </section>
    <section class="h-100 container overflow-auto mb-3" id="informations">
      <?php include('etapes.php'); ?>
    </section>
    <section class="h-100 container text-center overflow-auto mb-3" id="contact">
      <h2>Nous contacter :</h2>
      <p>
        <a class="text-size-20-pt text-decoration-none" href="https://www.instagram.com/safetycasque/">
          <i class="fab fa-instagram" aria-hidden="true"></i>
          @safetycasque
        </a>
      </p>
      <p>
        <a href="mailto:safetycasque+contact@gmail.com" class="text-size-20-pt text-decoration-none">
          <i class="far fa-envelope-open"></i>
          safetycasque@gmail.com
        </a>
      </p>
      <form action="" method="post">
        <h3>Commentaires, Avis ?</h3>
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
          <label for="email">Votre adresse email</label>
        </div>
        <label class="d-none" for="texte">Votre message</label>
        <textarea class="container vh-25" name="texte" id="texte" placeholder="Votre message" required></textarea>
        <input type="submit" value="Envoyer">
      </form>

    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script async src="js/main.js"></script>
</body>

</html>