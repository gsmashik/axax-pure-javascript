<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h5 onclick="ajax_request('get.php','context')">Click</h5>
 <div id="context"></div> 
 <div id="text1">ashik</div> 
 <script>
 function ajax_request(serverPage,tagId) {
     var request = new XMLHttpRequest();
     var url  = serverPage+'?name='+document.getElementById('text1').innerHTML;
     request.open("GET",url,true);
     request.send();
     request.onreadystatechange = function () {
         if (request.readyState == 4) {
             document.getElementById(tagId).innerHTML =request.responseText; 
         }
     }

 }
 </script> 
</body>
</html>