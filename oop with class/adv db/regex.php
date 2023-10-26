<?php
// ye match kare ga jaha per match kar jaye ga wohi rok jaye ga jitna bara paragrapgh ho or bataye ga 1 match ho gaya
$str = "PHP is PHP programming language";
$pattern = "/PHP/";
$check = preg_match($pattern,$str);
echo $check."<br>";

// poora paragraph check karne ka
$str = "PHP is PHP programming language";
$pattern = "/PHP/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// incase sensitive karne ka is se wo capital or small me fark nahi kare ga dono ko same mane ga 
$str = "PHP is php programming language";
$pattern = "/PHP/i";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// multiple search
$str = "PHP is WEB the programming language";
$pattern = "/PHP|WEB|the/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// array ke print
$str = "PHP is WEB the programming language";
$pattern = "/PHP|WEB|the/";
$check = preg_match_all($pattern,$str,$array);
echo $array[0][0]."<br>";

// not character just word search
$str = "PHP is WEB the programming language";
$pattern = "/P|g|e/";
$check = preg_match_all($pattern,$str,$array);
echo $array[0][1].$check."<br>";

// numeric value search
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/444|555|the/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// node or caret  value search is ke ilwawa sab ko search karega
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/[^444]/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// range value search yaha se yaha tak
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/[A-J]/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

//bina incase on kare capital or small dono dhhondna range value
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/[a-jA-J]/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

// numeric range
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/[0-5]/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";

//node numeric range mtlb yaha se yaha tak searh na kare
$str = "PHP is 444 555 WEB the programming language";
$pattern = "/[^0-5]/";
$check = preg_match_all($pattern,$str);
echo $check."<br>";
?>