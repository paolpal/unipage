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
  else queryString = "?type=" + type;
  var url = ArticleLoader.USER_REQUEST + queryString;

  ajaxManager.performAjaxRequest(
      ArticleLoader.DEFAUL_METHOD,
      url,
      ArticleLoader.ASYNC_TYPE,
      null, // Non hai bisogno di specificare 'dataToSend' in questo caso
      function (data) {
          ArticleLoader.onAjaxResponse(data);
      }
  );
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







