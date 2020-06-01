<?php   
if(preg_match("/ca+t/", "caaaaaaat")){
    echo "true";
} else{
    echo "false";
}
if(preg_match("/ca+t/", "ct")){
    echo "true";
} else{
    echo "false";
}

if(preg_match("/ca?t/", "caaaaaaaaat")){
    echo "true";
} else{
    echo "false";
}

if(preg_match("/ca?t/", "cat")){
    echo "true";
} else{
    echo "false";
}

if(preg_match("/ca*t/", "ct")){
    echo "true";
} else{
    echo "false";
}

if(preg_match("/a{4}/", "aaaaaa")){
    echo "true";// output
} else{
    echo "false"; 
}
if(preg_match("/a{2,3}/", "a")){
    echo "true";
} else{
    echo "false"; // output
}
echo "<br>";
$pattern = "/^J.+r$/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
foreach($matches as $match){
    echo $match . "<br>";
}

$pattern1 = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern1, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}

echo "<br>";
$regex = '/^[a-zA-Z ]*$/'; 
$nameString = '00Sharukh khan'; 
if(preg_match($regex, $nameString)) { 
    echo("Name string matching with"
        . " regular expression"); 
} 
else { 
    echo("Only letters and white space"
        . " allowed in name string");  
}

echo "<br>";
$regex1 = "([0-9]+)"; 
$original = "Completed graduation in 2004"; 
$replaceWith = "2002"; 
$original = preg_replace($regex1, $replaceWith, $original);     
echo $original; 

$names = array('andrew','john','peter','nastin','bill');
$output = preg_grep('/^[abc]/', $names);
print_r( $output );

$pattern2 = "/color/i";
$text2 = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern2, $text2, $array);
echo $matches . " matches were found.";

$pattern3 = "/^color/im";
$text3 = "Color red is more visible than \ncolor blue in daylight.dfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffg hjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\njjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjdf \nColor";
$matches3 = preg_match_all($pattern3, $text3, $array);
echo $matches3 . " matches were found.";


$pattern5 = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern5, $replacement, $text);

$name = "one five six two";
if (preg_match('/(one|two)/', $name)) {echo 'true';}

$pattern6 = "/[\w|\d]+/";
$string6 = "[abc - 123 - def - 456 - ghi - 789 - jkl]";
preg_match_all($pattern6, $string6, $matches6);
print_r($matches6[0]);

$pattern7 = "/\s/"; //output : Earth-revolves-around-the-Sun
$replacement7 = "-";
$text7 = "Earth revolves around\nthe\tSun";
echo preg_replace($pattern7, $replacement7, $text7);

$pattern8 = "/\S/"; //output : ----- -------- ------ --- ---
$replacement8 = "-";
$text8 = "Earth revolves around\nthe\tSun";
echo preg_replace($pattern8, $replacement8, $text8);

$pattern9 = "/\d/"; //output : aaabbb
$replacement9 = "a";
$text9 = "123bbb";
echo preg_replace($pattern9, $replacement9, $text9);

$pattern10 = "/\D/"; //output : 123aaa
$replacement10 = "a";
$text10 = "123bbb";
echo preg_replace($pattern10, $replacement10, $text10);

echo "<br>";
$pattern11 = "/\w/"; //output : aaaaaa
$replacement11 = "a";
$text11 = "123bbb";
echo preg_replace($pattern11, $replacement11, $text11);


$text = "foobar foobar foobar fooabar";
$rules = "/foo(?!bar)/";
$newLine = preg_replace($rules, "\thahaha", $text);
print_r( $newLine );

$text1 = "foobar foobar foobar  foowbar";
$rules1 = "/foo(?=bar)/";
$newLine1 = preg_replace($rules1, "\thahaha", $text1);
print_r( $newLine1 );

$str = "hello worlddsdd hello world payal";
$newstr = preg_replace('/(?<=hello )world/i', 'NEWVAL', $str, -1, $count);
if ($count > 0) {
  echo "\n$newstr\n";
} else {
  echo "No replacement\n";
}


$re = '/(?(?=abc)a|2)/m';
$str = '1a 2a abc';
preg_match($re, $str, $matches);
// Print the entire match result
print_r($matches);


if(preg_match("/[[:digit:]-]{2}/", "11")){
    echo "true";
} else{
    echo "false";
}

$string8 = "payal ++*^&^&^ 123 - Payal";
$newLine2 = preg_replace("/[^[:alpha:]0-9 ]/", 'a', $string8);
print_r( $newLine2 );


if(preg_match("/[[:alnum:]-]{2}/", "K1")){
    echo "true";
} else{
    echo "false";
}

$string9 = "payal 123 Payal";//op:payal-123-Payal
$newLine9 = preg_replace("/[[:space:]  ]/", '-', $string9);
print_r( $newLine9 );

$string10 = "payal 123 Payal";
$newLine10 = preg_replace("/[[:upper:]]/", '-', $string10);
print_r( $newLine10 );

$string11 = "payal 123 Payal";//op:----- 123 P----
$newLine11 = preg_replace("/[[:lower:]]/", '-', $string11);
print_r( $newLine11 );
?>
