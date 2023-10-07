function ArticleLoader(){}

ArticleLoader.DEFAUL_METHOD = "GET";
ArticleLoader.USER_REQUEST = "./ajax/articleLoader.php";
ArticleLoader.ASYNC_TYPE = true;

ArticleLoader.SUCCESS_RESPONSE = "0";
ArticleLoader.NO_MORE_DATA = "-1";

ArticleLoader.getArticles = function(type) {
    var queryString;
    if (type === null || type.length === 0){
		  queryString = "?latest";
	  }
    else queryString = "?type="+type;
    var url = ArticleLoader.USER_REQUEST + queryString;
  
    fetch(url, {
      method: ArticleLoader.DEFAUL_METHOD,
      //mode: 'cors', // Aggiungi questa opzione se la richiesta è cross-origin
      headers: {
        'Content-Type': 'application/json',
      },
      // body: JSON.stringify(data), // Se hai dei dati da inviare nel corpo della richiesta
    })
    .then(response => response.json())
    .then(data => ArticleLoader.onAjaxResponse(data))
    .catch(error => {
      // Gestisci eventuali errori qui
      console.error('Errore durante la richiesta:', error);
    });
}
  

ArticleLoader.onAjaxResponse = function(response){
	if (response.responseCode === ArticleLoader.SUCCESS_RESPONSE){
		ArticleDashboard.refreshData(response.data);
		return;
	}
	
	if (response.responseCode === ArticleLoader.NO_MORE_DATA)
		ArticleDashboard.setEmptyDashboard();
	return;
}







