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

<h2>My Children</h2>

<p id="children"></p>

<script>
var kidArray = '{"children":[' + '{"name":"Taylor Cicotte","Birth":"1991","status":"Married!"},' + '{"name":"Abigail Cicotte","Birth":"1994","status":"Married!"},' + '{"name":"Madeline Cicotte","Birth":"1996","status":"On mission!"},' + '{"name":"Ruthie Cicotte","Birth":"1998","status":"Home in name only - Senior"},' + '{"name":"Alan Cicotte","Birth":"2000","status":"Sophmore"},' + '{"name":"George Cicotte","Birth":"2003","status":"7th grader"},' + '{"name":"Lucy Cicotte","Birth":"2007","status":"3rd grader"}]}';

var obj = JSON.parse(kidArray);

for(i=0;i<kidArray.length;i++){
    document.getElementById("children").innerHTML +=  obj.children[i].name + "<br>" + obj.children[i].Birth + "<br>" + obj.children[i].status + "<br>" + "<br>";
    }
</script>

</body>
</html>