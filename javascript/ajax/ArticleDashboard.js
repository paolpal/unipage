function ArticleDashboard() {}

ArticleDashboard.removeContent = function(){
	var dashboardElement = document.getElementById("articleDashboard");
	if (dashboardElement === null)
		return;
	
	var firstChild = dashboardElement.firstChild;
	while(firstChild !== null){
		dashboardElement.removeChild(firstChild);
		firstChild = dashboardElement.firstChild;
	}

}

ArticleDashboard.setEmptyDashboard = function(){
	ArticleDashboard.removeContent();
}

ArticleDashboard.refreshData = function(data) {
    ArticleDashboard.removeContent();
  
    var articleContainer = document.getElementById("articleDashboard");
    // Creare un elemento per ciascun articolo
    for (var i = 0; i < data.length; i++) {
      var articleElement = ArticleDashboard.createArticleElement(data[i]);
      articleContainer.appendChild(articleElement);
    }
  }
  

ArticleDashboard.createArticleElement = function(data){
	// Creazione dell'elemento <article>
    var articleElement = document.createElement("article");
    if (data.classNames) {
      articleElement.setAttribute("class", data.classNames);
    }
  
    // Creazione dell'elemento <h2> con un link
    var h2Element = document.createElement("h2");
    var aElement = document.createElement("a");
    if (data.link) {
      aElement.setAttribute("href", data.link);
    }
    if (data.title) {
      aElement.textContent = data.title;
    }
    h2Element.appendChild(aElement);
  
    // Creazione dell'elemento <h5>
    var h5Element = document.createElement("h5");
    if (data.date) {
      h5Element.textContent = trasformaData(data.date);
    }
  
    // Creazione dell'elemento <p>
    var pElement = document.createElement("p");
    if (data.description) {
      pElement.textContent = data.description;
    }
  
    // Creazione dell'elemento <br>
    var brElement = document.createElement("br");
  
    // Aggiunta di tutti gli elementi come figli dell'elemento <article>
    articleElement.appendChild(h2Element);
    articleElement.appendChild(h5Element);
    articleElement.appendChild(pElement);
    articleElement.appendChild(brElement);
  
    // Aggiunta dell'elemento <hr> alla fine dell'elemento <article>
    var hrElement = document.createElement("hr");
    articleElement.appendChild(hrElement);
  
    return articleElement;
}