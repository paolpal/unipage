<?php
  require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/contact.css">
    <link rel="stylesheet" href="./../css/master.css">
    <script src="./../javascript/index.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/mail.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/ArticleLoader.js"></script>
		<script src="./../javascript/ajax/ArticleDashboard.js"></script>
		<script src="./../javascript/util/dataManipulation.js"></script>
  </head>
  <body onload="ArticleLoader.getArticles('db')">

    <?php
      include DIR_LAYOUT."header.php";
      include DIR_LAYOUT."menu.php";
    ?>

<!-- The flexible grid (content) -->
    <div class="row">
      <div class="side-left">
        <h2>Progetto</h2>
        <a href="/database/progetto2019.pdf"><i class="fa fa-file-pdf-o"></i> Farmhouse 4.0</a>
        <a href="/database/Relazione_Progetto_Farmhouse4.0.pdf"><i class="fa fa-file-pdf-o"></i> Relazione</a>
        <h2>Documenti SQL</h2>
        <a href="/database/basididati1_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 1</a>
        <a href="/database/basididati2_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 2</a>
        <a href="/database/basididati3_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 3</a>
        <a href="/database/basididati4_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 4</a>
        <a href="/database/basididati5_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 5</a>
        <a href="/database/basididati6_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 6</a>
        <a href="/database/basididati7_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 7</a>
        <a href="/database/basididati8_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 8</a>
        <a href="/database/basididati9_2019S.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 9</a>
        <a href="/database/basididati10_2019.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 10</a>
        <a href="/database/basididati11_2019.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 11</a>
        <a href="/database/basididati12_2019.pdf"><i class="fa fa-file-pdf-o"></i> Lezione 12</a>
      </div>
      <div class="main" id="articleDashboard">
      	<article class="">
          <h2><a href="/database/farmhouse_23_12_R.pdf">Diagramma Entita-Relazione Ristrutturato</a></h2>
          <h5>Progetto 2019, 23 Dicembre</h5>
          <p>Database progettato da Paolo Palumbo e Giacomo Tornabene.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/database/farmhouse_23_12_nonR.pdf">Diagramma Entita-Relazione Non-Ristrutturato</a></h2>
          <h5>Progetto 2019, 23 Dicembre</h5>
          <p>Database progettato da Paolo Palumbo e Giacomo Tornabene.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/database/farmhouse/farmhouse.html">Schema Database estratto con DbSchema</a></h2>
          <h5>Progetto 2019, 5 Dicembre</h5>
          <p>Database progettato da Paolo Palumbo e Giacomo Tornabene.</p>
          <br>
        </article>
        <hr>
      	<article class="">
          <h2><a href="/database/farmhouse/farmhousegroup.html">Schema Database a Gruppi estratto con DbSchema</a></h2>
          <h5>Progetto 2019, 5 Dicembre</h5>
          <p>Database progettato da Paolo Palumbo e Giacomo Tornabene.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/database/farmhouse_5_11_end_.pdf">Diagramma Entita-Relazione</a></h2>
          <h5>Progetto 2019, 5 Novembre</h5>
          <p>Diagramma ER, realizzato da Paolo Palumbo e Giacomo Tornabene.</p>
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
