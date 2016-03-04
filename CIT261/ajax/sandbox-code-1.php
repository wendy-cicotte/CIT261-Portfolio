

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script src="/JavaScript/response1.js"></script>
        
        <style>
            #grow{
                background-color:blue;
                padding:10px;
                color:white;
            }
            #who{
                background:blue;
                color:white;
                padding:10px;
                border:7px solid orange;
                margin:100px 0px 0px 100px;
            }
            #who:hover{
                background:orange;
                border:7px solid blue;
                animation:button 1s;
                -webkit-animation: button 1s;
            }
           
            div#kids{
                width:250px;
                border:5px solid black;
                background:#ffffff;
                position:relative;
                margin:20px 0px 20px 100px;
            }
            div#container{
                background:orange;
            }
            #status{
                background:orange;
                padding:10px;
                border:7px solid blue;
                color:white;
                margin:0px 0px 0px 100px;
            }
            #status:hover{
                background:blue;
                
                border:7px solid orange;
                animation:button 1s;
                -webkit-animation: button 1s;
            }
            @keyframes button{
               
               0% {transform: rotate(0deg);}
                2% {transform: rotate(-10deg);}
                3.5% {transform: rotate(10deg);}
                5% {transform: rotate(-10deg);}
                10% {transform: rotate(10deg);}
                100% {transform: rotate(0deg);}
                
}
            @-webkit-keyframes button{
               0% {-webkit-transform: rotate(0deg);}
                2% {-webkit-transform: rotate(-10deg);}
                3.5% {-webkit-transform: rotate(10deg);}
                5% {-webkit-transform: rotate(-10deg);}
                10% {-webkit-transform: rotate(10deg);}
                100% {-webkit-transform: rotate(0deg);}
            }
           .border{
                border:5px dashed blue;
                padding-left:10px;
                transition:transform 1s;
                -webkit-transition:transform 1s;
            }
            .border:hover{
                border:5px solid orange;
                transform:rotate(360deg);
                -webkit-transform:rotate(360deg);
            }
            .change{
                color:blue;
                font-family: arial;
            }
            .change:hover{
                font-family:georgia;
                color:orange;
            }
            
          
        </style>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
<body>  
<button type="button" id="who" onclick="process()">What is the status of my children?</button>
    <div id="container">
       
    <div id="kids"></div>
    </div>
<button type="button" id="status" onclick="changeStatus()">Click to update status</button>
 <button id="grow" onclick="changeSize('kids')">Change</button>
   
</body>
</html>