<?php
  require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>RPG</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/contact.css">
    <link rel="stylesheet" href="./../css/master.css">
    <link rel="apple-touch-icon" href="./../img/logo.png">
    <script src="./../javascript/index.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/mail.js" charset="utf-8"></script>
    <script src="./../javascript/ajax/ArticleLoader.js"></script>
		<script src="./../javascript/ajax/ArticleDashboard.js"></script>
		<script src="./../javascript/util/dataManipulation.js"></script>
  </head>
  <body onload="ArticleLoader.getArticles('rpg')">
    <?php
      include DIR_LAYOUT."header.php";
      include DIR_LAYOUT."menu.php";
    ?>

<!-- The flexible grid (content) -->
    <div class="row">
      <div class="side-left">
        <h2>Cyberpunk 2992</h2>
        <a href="/2992/Class_Descriptions_2992.pdf"><i class="fa fa-file-pdf-o"></i> Classes</a>
        <a href="/2992/Ghost_2992.pdf"><i class="fa fa-file-pdf-o"></i> Soldier</a>
        <a href="/2992/Extra_2992.pdf"><i class="fa fa-file-pdf-o"></i> Extra</a>
        <h2>Star Wars 5e</h2>
        <a href="/books/Galactic_Campaign_Guide.pdf"><i class="fa fa-file-pdf-o"></i> Galactic Adventure Campaign</a>
        <h2>DnD 5e</h2>
        <a href="/5e/Player_s_Handbook.pdf"><i class="fa fa-file-pdf-o"></i> Manuale del Giocatore</a>
        <a href="/5e/Guida_del_Dungeon_Master.pdf"><i class="fa fa-file-pdf-o"></i> Manuale del Master</a>
        <a href="/5e/Monster_Manual.pdf"><i class="fa fa-file-pdf-o"></i> Manuale dei Mostri</a>
        <a href="/5e/Compendio_dei_Mostri_PF.pdf"><i class="fa fa-file-pdf-o"></i> Compendio dei Mostri</a>
        <h2>DnD 5e - Espansioni</h2>
        <a href="/5e/Tasha_s_Cauldron_of_Everything.pdf"><i class="fa fa-file-pdf-o"></i> Tasha's Couldron of Everything</a>
        <a href="/5e/Van_Richten_s_Guide_to_Ravenloft.pdf"><i class="fa fa-file-pdf-o"></i> Van Richten's Guide to Ravenloft</a>
        <a href="/5e/Xanathar_s_Guide_to_Everything.pdf"><i class="fa fa-file-pdf-o"></i> Xanathar's Guide to Everything</a>
        <a href="/5e/Volo_s_Guide_to_Monsters.pdf"><i class="fa fa-file-pdf-o"></i> Volo's Guide to Monsters</a>
        <h2>Vampiri: la Masquerade</h2>
        <a href="/books/italy_by_night.pdf"><i class="fa fa-file-pdf-o"></i> Italy by Night</a>
      </div>
      <div class="main" id="articleDashboard">
      	<article class="">
          <h2><a href="/cos/Curse_of_Strahd.pdf">Curse of Strahd</a></h2>
          <h5>Manuale 2022, 27 Ottobre</h5>
          <p>Guida alla campagna COS.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/cos/Dichiarazione_Di_Intenti_1.1.pdf">Dichiarazione d'Intenti</a></h2>
          <h5>2022, 27 Ottobre</h5>
          <p>Regolamento e speifiche per la campagna COS.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/5e/Brancalonia.pdf">Brancalonia</a></h2>
          <h5>2022, 10 Novembre</h5>
          <p>Manuale d'ambientazione Fantasy-Spaghetti.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/5e/Sane_Magical_Prices.pdf">Sane Magical Prices</a></h2>
          <h5>2022, 10 Novembre</h5>
          <p>Prezi Regolari perOggetti fuori dal Comune.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/5e/The_Monster_Harvester_Handbook.pdf">The Monster Harvester Handbook</a></h2>
          <h5>2022, 10 Novembre</h5>
          <p>Guida alla raccolta di parti utili e trofei dalle Bestie di tutte le terre.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/cos/winery_I.pdf">FOCOS: Vigneto I</a></h2>
          <h5>2022, 25 Novembre</h5>
          <p>Note su come gestire il Vigneto del Mago delle Viti.</p>
          <br>
        </article>
        <hr>
        <article class="">
          <h2><a href="/cos/winery_II.pdf">FOCOS: Vigneto II</a></h2>
          <h5>2022, 25 Novembre</h5>
          <p>Note su come gestire il Vigneto del Mago delle Viti.</p>
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
