<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Wendy Cicotte">
        <link href="/CSS/Normalize.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="/CSS/styleSheet1.css" media="screen">
        <title>CIT261 Portfolio</title>
        <script src="/JavaScript/change.js"></script> 
        <link href="/CSS/change.css" type="text/css" rel="stylesheet">
    </head>
     <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header1.php'; ?>
    </header>
    <body>
        <table id="table">
            <tr>
            <th id="tableHead">
                My Children
            </th>
            </tr>
            <tr>
                <td id="kid1">
                    Taylor
                </td>
            </tr>
            <tr>
                <td id="kid2">
                    Abigail
                </td>
            </tr>
            <tr>
                <td id="kid3">
                    Madeline
                </td>
            </tr>
            <tr>
                <td id="kid4">
                    Ruthie
                </td>
            </tr>
            <tr>
                <td id="kid5">
                    Alan
                </td>
            </tr>
            <tr>
                <td id="kid6">
                    George
                </td>
            </tr>
            <tr>
                <td id="kid7">
                    Lucy
                </td>
            </tr>
        </table>
        <br/>
        <input type="button" value="Boy Style" onclick="boy()">
        <input type="button" value="Girl Style" onclick="girl()">
    </body>
</html>
