<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script src="/JavaScript/DOM.js"></script>    
    </head>
     <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body onload="createList()"> <!--calls the createList() function immediately upon loading page.-->
        <h3>My Children</h3><!--Static content-->
        <br/>
        <div id="divChildren"></div><!--This is where the dynamic element will be placed-->
    </body>
</html>

