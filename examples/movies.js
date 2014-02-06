
function handleChange(dropDown)
{
   //alert("dropDown list changed to " + dropDown.value);

   //$.get("getMovies.php", {actorId: dropDown.value}, handleResult(data));

   var xmlRequest = new XMLHttpRequest();
   xmlRequest.onreadystatechange = function() {
      if (xmlRequest.readyState == 4 && xmlRequest.status == 200) {
         handleResult(xmlRequest.responseText);        
      }
   };

   xmlRequest.open("GET", "getMovies.php?actorId=" + dropDown.value, true);
   xmlRequest.send();
}

function handleResult(result)
{
   alert("Got this back: " + result);
}
