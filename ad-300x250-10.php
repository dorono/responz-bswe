<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Rovner_bestsaxad_022421.jpg";
$Alt1 = "Rovner";
$Url1 = "https://www.rovnerproducts.com/avatar-mouthpiece";
$ad_name1 = "RovnerAd_avatar";
$slot_name1 = "Rovner 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Rovner_bestsaxad_022421.jpg";
$Alt2 = "Rovner";
$Url2 = "https://www.rovnerproducts.com/avatar-mouthpiece";
$ad_name2 = "RovnerAd_avatar";
$slot_name2 = "Rovner 300x250";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-10\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
