<?php
// -------------------------------------string && text compare function -------------------------------------- //

// case sensitive  is me small ko choti value capital ko badi value gine ga

// dono value ko aik dusre se compare kare ga pehli value badi hogi to positive dosri value badi hogi to negative dono brabar hoga to 0 ye case sensitive h captal o badi or small ko chooti value gine ga 
$str1 = "Hello World";
$str2 = "Hello World";
$compare = strcmp($str1,$str2);
echo "case sensitive : ".$compare."</br>";

// negative tarika
$str1 = "Hello World";
$str2 = "hello World";
$compare = strcmp($str1,$str2);
echo "negative case sensitive : ".$compare."</br>";

// positive tarika
$str1 = "hello World";
$str2 = "Hello World";
$compare = strcmp($str1,$str2);
echo "positive case sensitive : ".$compare."</br>";

// ek particular length check karne ka k itna tak compare karo
$str1 = "hello World";
$str2 = "Hello World";
$compare = strncmp($str1,$str2,5);
echo "Length case sensitive : ".$compare."</br>";

// agar ap is me integer value bhi compare karna chahte h agar ye nahi kare ge to integer compare nahi hoga
$str1 = "2hello World";
$str2 = "10hello World";
$compare = strnatcmp($str1,$str2);
echo "natural case sensitive : ".$compare."</br>";

// incase sensitive 

// is me capital,small letter matter nahhi karta sab ko brabar samjhe ga
$str1 = "hello World";
$str2 = "Hello World";
$compare = strcasecmp($str1,$str2);
echo "incasecase sensitive : ".$compare."</br>";

// agar ap is me integer value bhi compare karna chahte h agar ye nahi kare ge to integer compare nahi hoga
$str1 = "2hello World";
$str2 = "2Hello World";
$compare = strnatcasecmp($str1,$str2);
echo "natural incase sensitive : ".$compare."</br>";

// agar bich se kesi value ko compare karna h word start 0 se hoga
$str1 = "hello World";
$str2 = "World";
$compare = substr_compare($str1,$str2,6);
echo "sub sensitive : ".$compare."</br>";

// kaha se kaha tak compare karana h kis length tak
$str1 = "hello World";
$str2 = "World";
$compare = substr_compare($str1,$str2,6,4);
echo "length sub sensitive : ".$compare."</br>";

// end se gene ga
$str1 = "hello World";
$str2 = "World";
$compare = substr_compare($str1,$str2,-2,4);
echo "End length sub sensitive : ".$compare."</br>";

// false default hota h jo case sensitive h true karne se incasesensitive hojata h
$str1 = "hello World";
$str2 = "WoRlD";
$compare = substr_compare($str1,$str2,-2,4,TRUE);
echo "End length sub incase sensitive : ".$compare."</br>";

//-----------------------------------------------similar text ---------------------------//

// is ye cse-incase nh dekhe ga ye pehle word se akhar word tak comapre kare jitna word repeat hoga wo bataye ga k aik word kitni dafa likhaya h
$str1 = "hello World";
$str2 = "hello World";
$compare = similar_text($str1,$str2);
echo "similar text : ".$compare."</br>";
?>