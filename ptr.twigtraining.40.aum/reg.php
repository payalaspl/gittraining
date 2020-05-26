<b>Quanti­fiers</b>
<span>
+ , * , ? , {n}
</span>
<?php
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
 
// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "<br>";
}
?>
<b>Anchors</b>
<?php

$pattern1 = "/^C/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern1, $names);
 
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br>";
}
?>
<b>Pattern Modifiers</b>
<?php
$pattern3 = "/color/i";
$text3 = "Color red is more visible than color blue in daylight.";
$matches1 = preg_match_all($pattern3, $text3, $array);
echo $matches1. " matches were found.";
?>