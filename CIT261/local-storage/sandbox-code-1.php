

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        
        <script type="text/JavaScript">
function carStats() {
    //test for browser support 
    if (typeof(Storage) !== "undefined") {
        //create object
        var car = '{wheels:4, doors:2, sound:"Vroom", name:"Lightning McQueen"}';
   
    // Store object
        localStorage.setItem('car', JSON.stringify(car));
    
    // Retrieve object
        document.getElementById("demo1").innerHTML = JSON.parse(localStorage.getItem('car'));
        
        document.getElementById("demo").innerHTML = car.name + " is an awesome car!!  It has " + car.wheels + " wheels and " +
                car.doors + " doors. It goes " + car.sound + ", " + car.sound + "!";
    } else {
        document.getElementById("demo").innerHTML = "Sorry, your browser does not support Web Storage...";
        
    }       
}
function badCarStats(){
    //test for browser support 
    if (typeof(Storage) !== "undefined") {
        //create object
        var car = {wheels:4, doors:2, sound:"Vroom", name:"Lightning McQueen"};
   
    // Store object
        localStorage.setItem('car', car);
  
    // Retrieve
        document.getElementById("demo2").innerHTML = localStorage.getItem('car');
        
        document.getElementById("demo3").innerHTML = car.name + " is an awesome car!!  It has " + car.wheels + " wheels and " +
                car.doors + " doors. It goes " + car.sound + ", " + car.sound + "!";
    } else {
        document.getElementById("demo3").innerHTML = "Sorry, your browser does not support Web Storage...";
        
    }       
}
</script>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
   
    <body> 
        <div id="car">
            <p>The following is what happens when you use local storage without using JSON to convert your data into a string:</p>
            <button id="carStats" type="button" onclick="badCarStats()">Car Stats</button></br></br>

            <div id="demo2"></div></br>
            <div id="demo3"></div></br>

            <p>The following is the correct way to display your data using JSON to to convert it into a string:</p>

            <button id="carStats" type="button" onclick="carStats()">Car Stats</button></br></br>

            <div id="demo1"></div></br>
            <div id="demo"></div>
       </div>
    </body>
</html>