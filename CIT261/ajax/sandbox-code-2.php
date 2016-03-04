<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script src="/JavaScript/foodStore.js"></script> 
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body onload="process()">       
        <h3 id="pigs">The 3 Crazy Pigs Restaurant</h3>
        Enter the food you would like to order:
        <input type="text" id="userInput" />
        <div id="underInput"></div>
    </body>
</html>