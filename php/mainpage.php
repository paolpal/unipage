<?php
  require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Main Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/master.css">
    <link rel="stylesheet" href="./../css/mainpage.css">
    <link rel="stylesheet" href="./../css/contact.css">
    <link rel="apple-touch-icon" href="/blog/img/logo.png">
    <script src="./../javascript/index.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/mail.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/ArticleLoader.js"></script>
		<script src="./../javascript/ajax/ArticleDashboard.js"></script>
		<script src="./../javascript/util/dataManipulation.js"></script>
  </head>
  <body onload="ArticleLoader.getArticles('')">

    <?php
      include DIR_LAYOUT."header.php";
      include DIR_LAYOUT."menu.php";
    ?>

<!-- The flexible grid (content) -->
    <div class="row">
      <div class="main-page main" id="articleDashboard">
        <!--  -->
      </div>
      <div class="side-right">
      	<article>
          <a href="/appunti/8_semafori.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Semafori</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/7_primitive.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Primitive</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/6_processi.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Processi</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/5_nucleo.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Nucleo</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/4_protezione.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Protezione</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/3_eccezioni.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Eccezioni</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/2_esempio-bus-mastering.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Bus Mastering</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/1_esempi-interruzioni.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Calcolatori</h3>
              </div>
            </div>
          </a>
          <p class="description">Interruzioni</p>
          <p class="date">19/05/2021</p>
        </article>
      	<article>
          <a href="/appunti/Appunti_Fondamenti_di_Automatica.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Automatica</h3>
              </div>
            </div>
          </a>
          <p class="description">Integrabili</p>
          <p class="date">10/03/2021</p>
        </article>
        <article>
          <a href="/appunti/presentazione_root.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Programmazione</h3>
              </div>
            </div>
          </a>
          <p class="description">Root - Data Analysis Framework</p>
          <p class="date">05/11/2019</p>
        </article>
        <article>
          <a href="/appunti/complex_computazionale.pdf">
            <div class="bg programming">
              <div class="header">
                <h2>Appunti</h2>
                <h3>Programmazione</h3>
              </div>
            </div>
          </a>
          <p class="description">Complessità Computazionale</p>
          <p class="date">03/11/2019</p>
        </article>
      </div>
    </div>

    <?php
      include DIR_LAYOUT."author.php";
      include DIR_LAYOUT."footer.php";
    ?>
  </body>
</html>
