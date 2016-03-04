<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script>
        function background(){
            document.body.style.background="#ADD8E6";
        }
        </script>
        <style>
            #mouse{
                position:absolute;
                width:300px;
                height:50px;
                border:5px solid magenta;
                margin-left:100px;
                margin-top:50px;
            }
            #input{
                position:absolute;
                margin-left:900px;
                margin-top:75px;
            }
            #output{
                position:absolute;
                margin-left:900px;
                margin-top:100px;
            }
            #start{
                position:absolute;
                margin-left:500px;
                margin-top:50px;
                width:300px;
                height:50px;
                border:2px dashed magenta;
            }
            #question{
                position:absolute;
                margin-left: 900px;
                margin-top: 50px;
            }
            #response{
                position:absolute;
                margin-left:900px;
                margin-top:125px;
                color:red;
                font-size: 16px;
            }
        </style>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body onload="background()">
        <div id="mouse" onmouseover="this.innerHTML=Date()">What is the date & time?</div> 
        <p id="question">Do you like this class?</p>   
       <input type="text" id="input" oninput="input()">

<p id="output"></p>
<p id="response"></p>
<div id="start" ontouchstart="start()">Touch this box to change it</div>

<script>
function input() {
    var output = document.getElementById("input").value;
    document.getElementById("output").innerHTML = "You wrote: " + output;
    if(output=="yes" || output=="Yes"){
        document.getElementById("response").innerHTML = "I do too!";
    }else{
            document.getElementById("response").innerHTML = "I'm sorry to hear that.  I am really enjoying it.";
        }
    }

function start(){
    var div=document.getElementById("start");
    div.style.color="purple";
    div.style.background="magenta";
}
</script>

    </body>
</html>