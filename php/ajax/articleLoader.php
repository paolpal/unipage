<?php
	//session_start();
	require_once __DIR__ . "/../config.php";
	require_once DIR_UTIL . "articleDbManager.php";
	require_once DIR_AJAX_UTIL . "AjaxResponse.php";
	$response = new AjaxResponse();
	if(isset($_GET['type'])){
		$type = $_GET['type'];
		$result = getArticleByType($type);
	}
	elseif(isset($_GET['latest'])){
		$result = getLatestArticle();
	}
	else{
		echo json_encode($response);
		return;
	}

	if (checkEmptyResult($result)){
		$response = setEmptyResponse();
		echo json_encode($response);
		return;
	}

	$message = "OK";	
	$response = setResponse($result, $message);
	echo json_encode($response);

	return;


	function checkEmptyResult($result){
		if ($result === null || !$result)
			return true;
			
		return ($result->num_rows <= 0);
	}
	
	function setEmptyResponse(){
		$message = "No more data to load";
		return new AjaxResponse("-1", $message);
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
?>