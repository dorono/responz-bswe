<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/bsp-300x250-gunter.jpg";
$Alt1 = "Bulletproof Saxophone Playing";
$Url1 = "https://www.infinitemusician.com/p/bulletproof-saxophone-playing/";
$class1 = "bsp-300x250-gunter";
$slot_name1 = "Bulletproof Saxophone Playing Gunter 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/bsp-300x250-gianluca.jpg";
$Alt2 = "Bulletproof Saxophone Playing";
$Url2 = "https://www.infinitemusician.com/p/bulletproof-saxophone-playing/";
$class2 = "bsp-300x250-gianluca";
$slot_name2 = "Bulletproof Saxophone Playing Gianluca 300x250";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/bsp-300x250-valdez.jpg";
$Alt3 = "Bulletproof Saxophone Playing";
$Url3 = "https://www.infinitemusician.com/p/bulletproof-saxophone-playing/";
$class3 = "bsp-300x250-valdez";
$slot_name3 = "Bulletproof Saxophone Playing Valdez 300x250";


$num = mt_rand(1,3);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
