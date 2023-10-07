
function openmenu() {
  var body = document.body;
  var user = document.getElementById('user');
  if(user.classList.contains('open')){
  	user.classList.remove('open');
  }
  else user.classList.add('open');

  if(body.classList.contains('noscroll')){
    body.classList.remove('noscroll');
  }
  else body.classList.add('noscroll');
}

function closePopup(){
  var body = document.body;
  user.classList.remove('noscroll');
  var popup = document.getElementById('container');
  body.removeChild(popup);
}

function createFieldNode(txt,name){
  var container = document.createElement("div");
  container.classList.add('form-container');

  var labelTxt = document.createTextNode(txt);
  var label = document.createElement("label");
  label.appendChild(labelTxt);

  var input = document.createElement("input");

  if(name=='email') input.setAttribute('type', 'email');
  else input.setAttribute('type', 'text');
  input.setAttribute('name', name);
  input.setAttribute('id', 'id-'+name);
  input.setAttribute('placeholder', txt);
  input.required = true;

  container.appendChild(label);
  container.appendChild(input);
  return container;
}

function createMessageNode(txt,name){
  var container = document.createElement("div");
  container.classList.add('form-container');
  var labelTxt = document.createTextNode(txt);
  var label = document.createElement("label");
  label.appendChild(labelTxt);

  var textarea = document.createElement("textarea");
  textarea.setAttribute('type', 'text');
  textarea.setAttribute('name', name);
  textarea.setAttribute('id', 'id-'+name);
  textarea.setAttribute('placeholder', txt);
  textarea.required = true;

  container.appendChild(label);
  container.appendChild(textarea);
  return container;
}

function createForm(){
  var body = document.body;
  var form = document.createElement("form");

  form.appendChild(createFieldNode("Nome","name"));
  form.appendChild(createFieldNode("Indirizzo Email","email"));
  form.appendChild(createFieldNode("Telefono","phone"));
  form.appendChild(createMessageNode("Messaggio","message"));
  form.setAttribute('onsubmit', "return false");
  return form;
}

function sendMail(){
  document.getElementById('form').submit();
  document.getElementById('form').reset();
}

function contactMe(){
  var body = document.body;
  var user = document.getElementById('user');

  user.classList.add('noscroll');

  var popup = document.createElement("div");
  popup.classList.add('contactPopup');
  popup.setAttribute('id', 'container');


  var content = document.createElement("div");
  content.classList.add('contactContent');

  var header = document.createElement("h2");
  var title = document.createTextNode('Contact Me');

  var close = document.createElement("a");
  close.classList.add('closePopup');
  var closeSymbol = document.createTextNode('\u00d7');
  close.setAttribute('onClick', 'closePopup()');

  var form = createForm();
  form.setAttribute('id', 'form');

  var send = document.createElement("a");
  send.classList.add('sendMessage');
  var sendText = document.createTextNode('Invia');
  //send.setAttribute('onClick', "sendMail()");
  send.setAttribute('onClick', "ajaxpost(); closePopup()");

  send.appendChild(sendText);
  close.appendChild(closeSymbol);
  header.appendChild(title);
  content.appendChild(header);
  content.appendChild(close);
  content.appendChild(form);
  content.appendChild(send);
  popup.appendChild(content);
  body.appendChild(popup);
}
