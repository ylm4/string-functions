<?php
//string split
$string= 'hi hello';
$ar1= str_split($string);
$ar2= str_split($string, 3);
print_r($ar1);
print_r($ar1, 3);

//string repeat
echo str_repeat("hello", 5);

//string word count
$st = 'hello, how are you doing   today?';
print_r(str_word_count($st, 1));
print_r(str_word_count($st, 2));

//string shuffle
$s= 'abcdef';
$shuffled = str_shuffle($s);
echo $shuffled;

//html special characters
$p = 'hello';
echo htmlspecialchars($p);

//string slash
$strr= 'What\'s your major?';
echo stripslashes($strr);


//string pad
$l= 'Abel';
echo str_pad($l, 20, 'Vega');

//implode
$ary= array('lastname','email','phone');
$seper = implode('.', $ary);
echo $seper;

//print
print('HOW ARE YOU');

//string position
$t='abcdef';
$find='d';
$pos = strpos($t,$find);
echo $pos;

//stristr()
$web = 'www.njit.com';
echo stristr($web, 'j');

//explode
$ar = 'arOne arTwo arThree arFour';
$break = explode(' ',$ar);
echo $break[1]; // arTwo
echo $break[3];

?>
