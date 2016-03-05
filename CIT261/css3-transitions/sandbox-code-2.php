
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
    <style>
div#box1 {
	background: #9DCEFF;
	width: 400px;
	height: 200px;
        padding: 10px;
        margin:200px;
}
#one{
    margin-left:200px;
    margin-top:25px;
}
#two{
    margin-left: 275px;
    margin-top: 25px;
}
#three{
    margin-left:350px;
    margin-top:25px;
}
</style>
<script>
function changeBG(el,clr){
	var elem = document.getElementById(el);
	elem.style.transition = "background 1.0s linear 0s";
	elem.style.background = clr;
}
function changeDimension(){
    var elem = document.getElementById("box1");
    elem.style.transition = "width 3s ease-in 0s";
    elem.style.width = "600px";
}
</script>
<body>
<button id="one" onclick="changeBG('box1','#F0F')">Magenta</button>
<button id="two" onclick="changeBG('box1','#0C0')">Green</button>
<button id="three" onclick="changeBG('box1','#9DCEFF')">Original</button>
<div id="box1" onmouseover="changeDimension()">Click one of the buttons to fire off
    </br> a JavaScript event and change the background of this box,
    </br>or hover to see a change in dimension.
</div>
</body>
</html>