<?php

// Database me msg,password encrypt karke dalna

// password encrupted start here
// md5 or sha1 encrypt hota h decrypt nahi hota code k zariye isliye isko password k liye use karte hain or jitna bada pass ho usko 32,40 charac me encrypt kare ga

// md5 encrypt ye sirf password k liye use hota h
//default md5 encrypt hexa num 32 charac limit
$pss = "G-965093";
$pss = md5($pss);
echo "md5 hexa num : ".$pss."<br>";
echo "<br>";

//True md5 encrypt binary num 16 charac limit
$pss = "G-965093";
$pss = md5($pss,TRUE);
echo "md5 binary num : ".$pss."<br>";
echo "<br>";

// // md5 ki tarah sha1 bhi encrypt karta h ye bhi sirf password k liye use hota h
//default sha1 encrypt hexa num 40 charac
$pss = "G-965093";
$pss = sha1($pss);
echo "sha1 hexa num : ".$pss."<br>";
echo "<br>";

//True sha1 encrypt binary num 20 charac limit
$pss = "G-965093";
$pss = sha1($pss,TRUE);
echo "md5 binary num : ".$pss."<br>";
echo "<br>";

//  password encrypted end here

// -------------------------------------- Different Section ----------------------------------------------------------//

// msg encrypted start here
// pass k liye md5 or sha1 jo istemaal hota h us me 32,40 charac ki limit hoti h magar jab msg ko Convert_uuencode se encrypt karte hai to iski limit nahi hoti jitna bada msb utna bada encrypt code

//Convert_uuencode msg encrypt karne ka  
$msg = "My Name Is Taha Sheikh";
$encodemsg = convert_uuencode($msg);
echo "Msg encode : ".$encodemsg."<br>";
echo "<br/>";

//Convert_uudecode msg encrypt karne ka  
$decodemsg = convert_uudecode($encodemsg);
echo "Msg decode : ".$decodemsg."<br>";
echo "<br/>";

// msg encrypted end  here

?>