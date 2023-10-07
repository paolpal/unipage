<?php
  require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Progettazione Web</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/contact.css">
    <link rel="stylesheet" href="./../css/master.css">
    <link rel="apple-touch-icon" href="/blog/img/logo.png">
    <script src="./../javascript/index.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/mail.js" charset="utf-8"></script>
  </head>
  <body>

    <?php
      include DIR_LAYOUT."header.php";
      include DIR_LAYOUT."menu.php";
    ?>

<!-- The flexible grid (content) -->
    <div class="row">
      <div class="side-left">
        <h2>Documenti</h2>
        <a href="/pweb/HTML.pdf"><i class="fa fa-file-pdf-o"></i> HTML</a>
        <a href="/pweb/CSS.pdf"><i class="fa fa-file-pdf-o"></i> CSS</a>
        <a href="/pweb/JavaScript.pdf"><i class="fa fa-file-pdf-o"></i> Javascript</a>
        <a href="/pweb/PHP.pdf"><i class="fa fa-file-pdf-o"></i> PHP</a>
        <a href="/pweb/HTTP.pdf"><i class="fa fa-file-pdf-o"></i> HTTP</a>
        <h2>Progetto</h2>
        <a href="/pweb/Progetto_FantaCalcio.pdf"><i class="fa fa-file-pdf-o"></i> Fantacalcio</a>
      </div>
      <div class="main" id="articleDashboard">
        <article class="">
          <h2><a href="http://paolopalumbotesting.altervista.org/pweb/giacomotanganelli/">Giacomo Tanganelli</a></h2>
          <h5>Esercitazione, Ottobre, 2019</h5>
          <img src="./../img/tanganelli.png" alt="screenshot">
          <p>L'obbiettivo dell'esrcitazione è quello di realizzare una pagina web, che rispetti le condizioni riportate.</p>
          <br>
        </article>
        <hr>
      </div>
    </div>

    <?php
      include DIR_LAYOUT."author.php";
      include DIR_LAYOUT."footer.php";
    ?>
  </body>
</html>
