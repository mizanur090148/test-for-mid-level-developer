<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itech Test</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    #myContainer {
        width: 400px;
        height: 400px;
        position: relative;
        background: yellow;
    }
    #myAnimation {
        width: 50px;
        height: 50px;
        position: absolute;
        background-color: red;
    }
</style>
</head>
<body>

<p>
    <button onclick="myMove()">Click Me</button> 
</p>

<div id ="myContainer">
<div id ="myAnimation"></div>
</div>

<script>
function myMove() {
  var elem = document.getElementById("myAnimation");   
  var pos = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }
  }
}
</script>


</body>
</html>
