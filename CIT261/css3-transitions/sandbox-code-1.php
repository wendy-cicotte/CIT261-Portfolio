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
         <h1 id="rotation">Triangle Rotation</h1>
         </br>
         <p id ="instructions">Hover over the triangle.</p></br>
         
        <div id="triangle"></div>
    </div>

    <style>
        
       #triangle {
    width: 0;
    height: 0;
    border-bottom: 140px solid #fcf921;
    border-left: 70px solid transparent;
    border-right: 70px solid transparent;
    -webkit-transition: width 2s, height 2s, -webkit transform 2s; /* Safare */
    transition: width 2s, height 2s, transform 2s;
}

        #triangle:hover {
            border-bottom: 70px solid #fcf921;
            border-left: 35px solid transparent;
            border-right: 35px solid transparent;
            -webkit-transform: rotate(360deg); /* Safari */
            transform: rotate(360deg);
        }
        
        #rotation{
            text-align:center;
            color:aqua;
            font-size:50px;
            font-family:cursive;
            text-decoration:underline;
            -webkit-animation: mymove 2s  ease-in-out infinite; /* Chrome, Safari, Opera */
            animation: mymove 2s ease-in-out infinite;
}

    /* Standard syntax */
@-webkit-keyframes mymove {
    from {color: aqua;}
    to {color:pink;}
}

@keyframes mymove {
    from {color: aqua;}
    to {color: pink;}
}


    </style>
   
</body>
</html>