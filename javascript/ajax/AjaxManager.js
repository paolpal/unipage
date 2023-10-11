function AjaxManager() {
    if (typeof fetch !== 'undefined' && typeof fetch === 'function') {
        this.performAjaxRequest = this.performFetchRequest;
    } else {
        this.performAjaxRequest = this.performLegacyRequest;
    }
}

AjaxManager.prototype.performFetchRequest = function (method, url, isAsync, dataToSend, responseFunction) {
    const fetchOptions = {
        method: method,
        headers: {
            'Content-Type': 'application/json',
        },
        mode: 'cors', // Puoi personalizzare la modalità a seconda delle tue esigenze
    };

    if (dataToSend !== null) {
        fetchOptions.body = dataToSend;
    }

    fetch(url, fetchOptions)
        .then(function (response) {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Errore nella richiesta');
            }
        })
        .then(function (data) {
            responseFunction(data);
        })
        .catch(function (error) {
            console.error('Errore:', error);
        });
};


AjaxManager.prototype.performLegacyRequest = function (method, url, isAsync, dataToSend, responseFunction) {
    var xmlHttp = this.getAjaxObject();
    if (xmlHttp === null) {
        window.alert('Your browser does not support AJAX!'); // Imposta la funzione di errore
        return;
    }

    xmlHttp.open(method, url, isAsync);
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            console.log(xmlHttp.responseText);
            var data = JSON.parse(xmlHttp.responseText);
            responseFunction(data);
        }
    };
    xmlHttp.send(dataToSend);
};

AjaxManager.prototype.getAjaxObject = function () {
    var xmlHttp = null;
    try {
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP'); //IE (recent versions)
        } catch (e) {
            try {
                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP'); //IE (older versions)
            } catch (e) {
                xmlHttp = null;
            }
        }
    }
    return xmlHttp;
};

// Esempio di utilizzo:
const ajaxManager = new AjaxManager();

