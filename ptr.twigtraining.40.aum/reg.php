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

?>
