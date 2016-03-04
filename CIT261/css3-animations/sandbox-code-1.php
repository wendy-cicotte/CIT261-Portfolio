<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        
        <style>
            #pic{
                position:absolute;
            }
           #logo{
 
                /* Chrome, Safari, Opera */
                -webkit-animation-name: logoMove;
                -webkit-animation-duration: 4s; 
                -webkit-animation-iteration-count: 1; 
                -webkit-animation-fill-mode: forwards;
                
                animation-name: logoMove;
                animation-duration: 4s;
                animation-iteration-count: 1;
                animation-fill-mode: forwards;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes logoMove {
   25% {margin-left:200px; margin-top:0px;} 
   50% {margin-left: 200px; margin-top:100px;}
   75% {margin-top:100px; margin-left:400px;}
   100% {margin-left:400px; margin-top:200px;} 
}

@keyframes logoMove {
   25% {margin-left:200px; margin-top:0px;} 
   50% {margin-left: 200px; margin-top:100px;}
   75% {margin-top:100px; margin-left:400px;}
   100% {margin-left:400px; margin-top:200px;} 
    
}
#text{
    margin-left:530px;
    margin-top:300px;
    position:relative;
    font-size:18px;
    font-family:fantasy;
    color:#000;
    
}
#fadeIn{  
    -webkit-animation-name: fade;
    -webkit-animation-duration: 6s;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-timing-function: ease-in;
    -webkit-animation-fill-mode: forwards;
    
    
    animation-name: fade;
    animation-duration: 6s;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;
  
}
@-webkit-keyframes fade {
    from { opacity: 0;}
    to {opacity: 1;}
}

@keyframes fade {
    from { opacity: 0;}
    to {opacity: 1;}
}
        </style>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body>
    <div id="logo">
        <img src="/images/acalong.gif" id="pic">
    </div>
        <div id="text">
        <p id="fadeIn">Your place for answers.</p>  
        </div>
    </body>
</html>