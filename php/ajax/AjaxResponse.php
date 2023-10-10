<?php  
	/*
		AjaxResponse is the class that will be sent back to the client at every Ajax request.
		The class is serialize according the Json format through the json_encode function, that 
		serialize ONLY the public property.
		
		It is possibile to serialize also protected and private property but it is out of the course scope.
	*/
	require_once __DIR__ . "/../config.php";
	//require_once DIR_UTIL . "sessionUtil.php";
	//session_start();

	class AjaxResponse{
		public $responseCode; // 0 all ok - 1 some errors - -1 some warning
		public $message;
		public $data;
		
		function __construct($responseCode = 1, 
								$message = "Somenthing went wrong! Please try later.",
								$data = null){
			$this->responseCode = $responseCode;
			$this->message = $message;
			$this->data = null;
		}
	}

	class Articolo {
		public $title;
		public $date;
		public $description;
		public $link;
		public $classNames;
	
		function __construct($title=null, $date=null, $description=null, $link=null, $classNames=null) {
			$this->title = $title;
			$this->date = $date;
			$this->description = $description;
			$this->link = $link;
			$this->classNames = $classNames;
		}
	}

?>