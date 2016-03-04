
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
}
</style>
<script>
function changeBG(el,clr){
	var elem = document.getElementById(el);
	elem.style.transition = "background 1.0s linear 0s";
	elem.style.background = clr;
}
</script>
<body>
<button onclick="changeBG('box1','#F0F')">Magenta</button>
<button onclick="changeBG('box1','#0C0')">Green</button>
<button onclick="changeBG('box1','#9DCEFF')">Original</button>
<div id="box1">Content in box 1 ...</div>
</body>
</html>