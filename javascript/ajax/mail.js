function ajaxpost(){
  // (A) GET FORM DATA
  var data = new FormData();
  data.append("name", document.getElementById("id-name").value);
  data.append("email", document.getElementById("id-email").value);
  data.append("phone", document.getElementById("id-phone").value);
  data.append("message", document.getElementById("id-message").value);

  // (B) AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/util/contact_me.php");
  // What to do when server responds
  xhr.onload = function(){
    console.log(this.response);
  };
  xhr.send(data);
  // (C) PREVENT HTML FORM SUBMIT
  return false;
}
