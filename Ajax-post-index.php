<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<input onclick='makerequest("POST","ajax-post.php",true,"result",params2)' type="button" value="">
<div id="result"></div>
<script type="text/javascript">

/*  - To create the XMLHttpRequest object for all browsers, you can use the following syntax:
var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');  // XMLHttpRequest object


*/


/*
 The "request" variable contains an instance of the XMLHttpRequest object.
Properties of the XMLHttpRequest object
onreadystatechange - Determines which event handler will be called when the object’s readyState property changes
readyState - Integer reporting the status of the request: 0 = uninitialized, 1 = loading, 2 = loaded, 3 = interactive, 4 = completed
responseText - Data returned by the server in text string form
responseXML - Data returned by the server expressed as a XML document object
status - HTTP status code returned by server (200 = succes, 404 = not found, , 500 = server error, etc.)
statusText - HTTP reason phrase returned by server ("OK", "Not found", "Internal Server Error", etc.)


Methods of the XMLHttpRequest object
abort() - Stops the current request
getAllResponseHeaders() - Returns all headers as a string
getResponseHeader(x) - Returns the value of header x as a string
open(method, URL, bool)
method - Specifies the HTTP method (for example, GET or POST)
URL - the target URL
bool - whether the request should be handled asynchronously (If yes, bool=true -the default; if no, bool=false)
send(content) - sends the request to the server. "content" indicates the information that can be sent along with data from "open()", it can be a string, array, XML DOM object or null and is usually used when data is sent via POST. If you only send data via GET and no need to use this parameter, add "null".
setRequestHeader('x', 'y') - Sets a parameter and value pair x=y and assigns it to the header to be sent with the request


response file code is here
echo $_POST["name"];


*/

var params2 = "name=gsm&email=www.google.com";
// var params = "name=ashik&email=www.google.com";
  function makerequest(method,url,async,id,params) {
    var request = (window.XMLHttpRequest) ?  new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    request.open(method, url, async);
    // request.send(params);
    request.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" ); // If You Not Use This send() function parameter out put Dont Show
    request.send(params);

    // You Can Change Function Parameter name response To Another
    request.onreadystatechange = function (response){
      

       if (request.readyState == 0) {
        document.getElementById(id).innerHTML = "Request uninitialized";

      }

else if (request.readyState == 1) {
        document.getElementById(id).innerHTML = "Loading";

      }

      else if (request.readyState == 2) {
        document.getElementById(id).innerHTML = "Loaded";

      }


      else if (request.readyState == 3) {
        document.getElementById(id).innerHTML = "interactive";

      }

      if (request.readyState == 4) {
document.getElementById(id).innerHTML = request.response;

      }




    }

      }

  

</script>
<!--      <script src="myscript.js"></script>
 --></body>
</html>
