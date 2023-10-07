<?php
  require_once __DIR__ . "/config.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hardware</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../css/contact.css">
    <link rel="stylesheet" href="./../css/master.css">
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
        <h2>Reti Logiche</h2>
        <a href="/reti/assembler.pdf"><i class="fa fa-file-pdf-o"></i> Assembler</a>
        <a href="/reti/combinatorie.pdf"><i class="fa fa-file-pdf-o"></i> Reti Combinatorie</a>
        <a href="/reti/aritmetica.pdf"><i class="fa fa-file-pdf-o"></i> Aritmetica</a>
        <a href="/reti/sequenziali.pdf"><i class="fa fa-file-pdf-o"></i> Reti Sequenziali</a>
        <h2>Calcolatori Elettronici</h2>
        <a href="/appunti/lettieri_1.pdf"><i class="fa fa-file-pdf-o"></i> Intro - Cpu - Indirizzi</a>
      </div>
      <div class="main" id="articleDashboard">

      </div>
    </div>

    <?php
      include DIR_LAYOUT."author.php";
      include DIR_LAYOUT."footer.php";
    ?>
  </body>
</html>
