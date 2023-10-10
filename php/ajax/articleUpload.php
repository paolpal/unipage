<?php
    require_once __DIR__ . "/../config.php";
    require_once DIR_UTIL . "articleDbManager.php";
    require_once DIR_AJAX_UTIL . "AjaxResponse.php";

    $response = new AjaxResponse();
        
    // Verifica se il form è stato inviato
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal form
        $title = $_POST["title"];
        $description = $_POST["description"];
        $type = $_POST["type"];

        // Verifica la presenza e la correttezza dei dati
        if (empty($title) || empty($description) || empty($type)) {
            http_response_code(400); // Bad Request
            $message = "Errore: Assicurati di compilare tutti i campi obbligatori.";
            $response = setErrorResponse(400, $message);
            echo json_encode($response);
            exit;
        }

        // Verifica il tipo del file
        $allowedTypes = ["pdf", "html"]; // Tipi di file consentiti
        $fileType = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        if (!in_array($fileType, $allowedTypes)) {
            http_response_code(400); // Bad Request
            $message = "Errore: Tipo di file non consentito. Sono consentiti solo file PDF e HTML.";
            $response = setErrorResponse(400, $message);
            echo json_encode($response);
            exit;
        }

        // Altri controlli possono essere aggiunti, ad esempio:
        // - Controllo delle dimensioni del file
        // - Controllo se il file è stato caricato correttamente
        // - Controllo se la cartella di destinazione esiste e ha i permessi corretti
        // - Rinomina il file in modo sicuro, ecc.

        // Imposta la data su currentdate
        $date = date("Y-m-d");

        // Gestione dell'upload del file
        $targetDirectory = DIR_UPLOADS; // Cartella di destinazione per i file caricati
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            // Esegui l'inserimento nel database
            if (addArticle($title, $date, $description, $targetFile, $type)) {
                $message =  "Articolo inserito con successo nel database.";
                $result = getArticleByType($type);
                if (checkEmptyResult($result)){
                    $response = setEmptyResponse($message);
                }
                else {
                    $response = setResponse($result, $message);
                }
                echo json_encode($response);
                return;
            } else {
                $message =  "Errore durante l'inserimento nel database: " . $stmt->error;
                $response = setErrorResponse(500, $message);
                echo json_encode($response);
                return;
            }
        } else {
            $message =  "Errore durante il caricamento del file.";
            $response = setErrorResponse(500, $message);
            echo json_encode($response);
            return;
        }
    } else {
        http_response_code(405); // Method Not Allowed
        $message = "Errore: Richiesta non consentita.";
        $response = setErrorResponse(405, $message);
        echo json_encode($response);
        return;
    }

    function setErrorResponse($code, $message){
        return new AjaxResponse($code, $message);
    }

    function setResponse($result, $message){
		$response = new AjaxResponse("0", $message);
		$index = 0;
		while ($row = $result->fetch_assoc()){
			$articolo = new Articolo();
			$articolo->title = $row['title'];
			$articolo->date = $row['date'];
			$articolo->description = ( $row['description'] );
			$articolo->link = ( $row['link'] );
			$articolo->classNames = ( $row['classNames'] );

			$response->data[$index] = $articolo;
			$index++;
		}
		return $response;
	}

    function checkEmptyResult($result){
		if ($result === null || !$result)
			return true;
			
		return ($result->num_rows <= 0);
	}
	
	function setEmptyResponse($message){
		return new AjaxResponse("-1", $message);
	}
?>
