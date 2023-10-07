<?php
	require_once __DIR__ . "/../config.php";
	require_once DIR_UTIL . "uniPageDbManager.php";

	function getLatestArticle() {
		global $uniPageDb;
		$queryText = 'SELECT * FROM articolo ORDER BY date DESC LIMIT 10';
		$result = $uniPageDb->performQuery($queryText);
		$uniPageDb->closeConnection();
		return $result;
	}
	
	function getArticleByType($tipo) {
		global $uniPageDb;
	
		$queryText = 'SELECT * FROM articolo WHERE type = ? ORDER BY date DESC';
		$stmt = $uniPageDb->prepare($queryText);
		
		if ($stmt === false) {
			die("Errore nella preparazione della query: " . $uniPageDb->error);
		}

		$tipo = $uniPageDb->sqlInjectionFilter($tipo);
		$stmt->bind_param("s", $tipo);
		$stmt->execute();
		
		if ($stmt === false) {
			die("Errore nell'esecuzione della query: " . $stmt->error);
		}
		
		$result = $stmt->get_result();
		$stmt->close();
		$uniPageDb->closeConnection();
		
		return $result;
	}
	
?>