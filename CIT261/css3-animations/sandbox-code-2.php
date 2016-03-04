<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body>
      <style>
#container {
  width: 400px;
  height: 400px;
  position: relative;
  background: yellow;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
}
</style>
<body>

<p>
<button onclick="myMove()">Click Me</button>
</p> 

<div id ="container">
<div id ="animate"></div>
</div>

<script>
function myMove() {
  var elem = document.getElementById("animate");   
  var pos = 0;
  var id = setInterval(frame, 5);
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