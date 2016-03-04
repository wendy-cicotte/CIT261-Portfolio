

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
    
    <p id="old">Every time I start a new class I am scared.</br>
        I can't sleep at night for the first few weeks because I am worrying that I <b>CAN'T</b> succeed.</br>
        Then, once I realize I <b>CAN</b> succeed, I can't sleep at night because I am thinking of all the amazing things I am learning.</br>
        I thought once my seven children grew up I would get more sleep!
    </p>
    <div id="buttons">
<button type="button" id="red" onclick="document.getElementById('old').style.color = 'red'">RED</button>
<button type="button" id="blue" onclick="document.getElementById('old').style.color = 'blue'">BLUE</button>
<button type="button" id="green" onclick="document.getElementById('old').style.color = 'green'">GREEN</button>
    </div>   

</body>
</html>
