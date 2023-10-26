<?php
// string agar hum kisi string ko chahte h ke wo readeable na ho wo database me ya file me secure rahe

// bin2hex string ko unreadeble form me convert karne k lye
$str = "Hello World";
$unread = bin2hex($str);
echo $unread."<br>";

// hex2bin string ko readeble form me convert karne k lye
$read = hex2bin($unread);
echo $read."</br>";

// -------------------------------------- Different Section ----------------------------------------------------------//

// string se kisi tag ko hatane k liye jab run ho to ye tag apply na ho

// strip-tags ye isliye jab code run ho to saare tag apply na ho html k
$str = "Hello <b>world</b> hello <i>earth</i>";
$notapply = strip_tags($str);
echo $notapply."</br>";

// agar hum chate h sare tag apply na ho magar jo hum chah rahe he wo tag apply ho html ka 
// us k liye apko allow karna hoga , laga ge tag batana hoga
$str = "Hello <b>world</b> hello <i>earth</i>";
$notapply = strip_tags($str,"<b>");
echo $notapply."</br>";

// -------------------------------------- Different Section ----------------------------------------------------------//

// no word wrep
$str = "This world is beautiful";
echo $str."</br>";

// word wrep hum chate h hamari marzi se itne word baad word wrep ho jese hum chahe wese wrep ho
// 4 parametr cahahiye 1) msg ,2) kitne word k bad cut karna h uski value jese 4 word baad,3)kese cut karana hai html tag se ya kesi or se ,4)true likhan nahi to wo har 4 word baad nahi balke jaha word ke baad space milegei waha se kaate ga 
$wrap = wordwrap($str,4,"<br>",True);
echo $wrap."</br>";
?>