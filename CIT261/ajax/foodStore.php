<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
    $food =$_GET['food'];
    $foodArray = array('hotdogs','bacon','ham','apples','stuffing','pulled pork','pineapple');
    if (in_array($food, $foodArray)) {
    echo 'We do have ' . $food . '!';
} elseif ($food == '') {
    echo 'Enter a food, please.';
} else {
    echo 'Sorry, we do not sell ' . $food . '!';
}
echo '</response>';
?>

