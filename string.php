
<?php
echo '<b>string split</b><br>';
$string= 'hi hello ';
echo chunk_split($string, 1, ".");


echo '<b> <br>html special chars</b>';
echo '<br>';
$p = 'hello';
echo htmlspecialchars($p);


echo '<b> <br>string slash </b>';
echo '<br>';
$strr= 'What\'s your major?';
echo stripslashes($strr);


echo '<b> <br>implode </b>';
echo '<br>';
$ary= array('lastname','email','phone');
$seper = implode('.', $ary);
echo $seper;


echo '<b> <br>string position </b>';
echo '<br>';
$t='abcdef';
$find='d';
$pos = strpos($t,$find);
echo $pos;


echo '<b> <br>string length function </b>';
echo'<br>'; 
$string = '0123456789';
echo strlen($string);


echo '<b><br>Explode</b>';
echo '<br>';
$ar = 'arOne arTwo arThree arFour';
$break = explode(' ',$ar);
echo $break[1]; // arTwo
echo $break[3];


echo '<b> <br>add slash </b>';
echo '<br>';
$r = "Hello,  Welcome!";
echo addslashes($r);


echo '<b><br>strip tags </b>';
echo '<br>';
$t= '<p>Loading...</p><a href="">Refresh Here</a>';
echo strip_tags($t);
echo strip_tags($t, '<p><a>');



echo '<b><br>md5</b>';
echo '<br>';
$str = 'apple';
if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
echo "Would you like green or red apple?";
}


echo '<b><br>rtrim</b>';
echo '<br>';
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);
print "\n";
$trimmed = rtrim($text);
var_dump($trimmed);
$trimmed = rtrim($text, " \t.");
var_dump($trimmed);
$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);


echo '<b><br> htmlentities</b><br>';
$x = "are you <b>MAD</b>?";
echo htmlentities($x);

echo '<b><br>ECHO<br></b>';
echo 'This is an echo test.......';

echo '<b><br>Count chars<br></b>';
$str = 'hello world!';
echo count_chars ($str,3);


echo '<b><br>chr<br></b>';
$str = "The string ends in escape: ";
$str .= chr(27); /* add an escape character at the end of $str */
$str = sprintf("The string ends in escape: %c", 27);


echo '<b><br>string get csv file </b><br>';
$file = fopen('csvfile.csv','r');
while(!feof($file)){
echo(str_getcsv($file,','));
}
?>

