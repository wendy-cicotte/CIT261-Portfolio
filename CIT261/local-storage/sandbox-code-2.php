

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        
        <script type="text/javascript">
        function storeList(){       
            //retrieve objects
         var itemOne = document.getElementById("item1").value;
         var itemTwo = document.getElementById("item2").value;
         var itemThree = document.getElementById("item3").value;
         var itemFour = document.getElementById("item4").value;
         var itemFive = document.getElementById("item5").value;
         
         //set objects into an array
         var list = [itemOne, itemTwo, itemThree, itemFour, itemFive];
         
         //store objects in local storage
            localStorage.setItem("theList", JSON.stringify(list));
        }
        
    function displayList() {
        var array = JSON.parse(localStorage.getItem("theList"));
        var i;
        var text = "<ul>";
        
        for (var i = 0; i < array.length; i++) {
            text += "<li>" + array[i] + "</li>";
        }
         text += "</ul>";
        document.getElementById("myList").innerHTML = text;       
     }  

        </script>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body>
        <div id="listStyle"> 
        Item 1 <input type="text" id="item1"></br>
        Item 2 <input type="text" id="item2"></br>
        Item 3 <input type="text" id="item3"></br>
        Item 4 <input type="text" id="item4"></br>
        Item 5 <input type="text" id="item5"></br>
        </div>
     <button id="storeList" type="button" onclick="storeList()">Store List</button>
     
     <button id="displayList" type="button" onclick="displayList()">Display List</button></br></br>
     <div id="myList">
        
     </div>
        
    </body>
</html>