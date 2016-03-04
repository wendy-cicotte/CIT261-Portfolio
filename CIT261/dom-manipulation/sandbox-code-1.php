

<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script type="text/javascript">

function addList(){
    var item = document.createElement("li");
    var text = document.createTextNode(document.getElementById("listItem").value);
    item.appendChild(text);
    document.getElementById("list").appendChild(item);
}


</script>
    </head>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body>
        <h1 id="header">My Shopping List</h1>
    <input type="text" onkeypress="{if (event.keyCode===13)addList()}" id ="listItem">
    <button type="button" onclick="addList()" id ="add">Add item to list</button>
    <ul id="list"> 
        
    </ul>
    </body>
</html>