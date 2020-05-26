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

?><br/>
<?php
$subject='Give me 10 eggs';
$pattern='~\b(\d+)\s*(\w+)$~';

$success = preg_match($pattern, $subject, $match);
if ($success) {
	echo "Match: ".$match[0]."<br />"; 
	echo "Group 1: ".$match[1]."<br />"; 
	echo "Group 2: ".$match[2]."<br />"; 
	}
echo "<br>";
$subject1='Give me 12 eggs then 12 more.';
$pattern12='~\d+~';
$newstring = preg_replace($pattern12, "6", $subject1);
echo $newstring;

$str = "token1@@ABC123token2@@DEF456token3";
$regex = "/@@([A-Z]{3})(\d{3})/";
print_r(preg_split($regex,$str,-1,PREG_SPLIT_DELIM_CAPTURE));


$string2 = "(TheDayMyVoiceBroke)";
$regex1 = "~(?=[A-Z])~";
echo preg_replace($regex1," ",$string2);
?>