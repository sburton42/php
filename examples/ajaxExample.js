function addNewContent() {
   var xmlRequest = new XMLHttpRequest();
   xmlRequest.onreadystatechange = function() {
      if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
         addThisContent(xmlRequest.responseText);
      }
   };

   xmlRequest.open("GET", "ajaxExample.php", true);
   xmlRequest.send();
}

function addThisContent(data) {

   var myDiv = document.getElementById("newContent");
   myDiv.innerHTML += data;
}

function updateSuggestions(txt) {
   var curValue = txt.value;

   $.get("ajaxExample.php", {userInput: curValue}, function(data) {
      addSuggestion(data);
   });

}

function addSuggestion(data) {

   $("#suggestions").html(data);

   //var div = document.getElementById("suggestions");
   //div.innerHTML = data;
}
