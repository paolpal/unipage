<?php
/* semplice codice di prova, per  valutare se il caricamento di file e' fattibile. */ 
/*
ini_set('display_errors',1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
     $_FILES["fileToUpload"]["name"]."\n";
     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}
*/
?>

<?php
  require_once __DIR__ . "/../config.php";
	require_once DIR_UTIL . "articleDbManager.php";
	require_once DIR_AJAX_UTIL . "AjaxResponse.php";
// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $title = $_POST["title"];
    $description = $_POST["description"];
    $type = $_POST["type"];

    // Imposta la data su currentdate
    $date = date("Y-m-d");

    // Gestione dell'upload del file
    $targetDirectory = "uploads/"; // Cartella di destinazione per i file caricati
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // Esegui l'inserimento nel database
        if (addArticle($title, $date, $description, $targetFile, $type)) {
            echo "Articolo inserito con successo nel database.";
        } else {
            echo "Errore durante l'inserimento nel database: " . $stmt->error;
        }
    } else {
        echo "Errore durante il caricamento del file.";
    }
}
?>
