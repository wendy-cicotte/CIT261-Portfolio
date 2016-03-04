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
        <script>
             var pyramid = {}
                    pyramid.remaining = 18;
                    pyramid.total = 18;
                    pyramid.goldstar = “Congratulations!  You’ve earned a Gold Star!”;
                    pyramid.encouragement = “You have” + pyramid.remaining + “healthy foods left to eat today.”;
                    pyramid.fill = 0;
                    
                    pyramid.fillIt() {
                    pyramid.fill = pyramid.fill + 1; 
                    //}//determines if you have filled the food pyramid
                
            //pyramid.findEncouragementFunction() {
            pyramid.remaining = pyramid.total – pyramid.fill; 
            //}//finds the remaining number of foods left to eat today.
                    }
           // pyramid.messageFunction(){
            if (pyramid.fill == total) {
            document.getElementById("demo").innerHTML = pyramid.goldstar; //Congratulations!  You’ve earned a Gold Star!!
            }
            Else if (pyramid.fill != total){
            document.getElementById("demo").innerHTML = pyramid.encouragement;// You have ? healthy foods left to eat today. 
            }
            }

            
                   
                
            </script>
            
        <p id="demo"></p>
        <button onclick="pyramid.fillIt()">Carrot</button>


       <!-- <p>Example from the Internet</p>
        <p id="demo1"></p> -->

    </body>
</html>