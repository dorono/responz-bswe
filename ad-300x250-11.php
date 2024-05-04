<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/foursaxes-purple-color-correction.jpg";
$Alt1 = "Four Saxes";
$Url1 = "https://en.foursaxes.com";
$class1 = "foursaxes-purple-color-correction-300x250";
$slot_name1 = "Four Saxes - Purple Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/foursaxes-purple-color-correction.jpg";
$Alt2 = "Four Saxes";
$Url2 = "https://en.foursaxes.com";
$class2 = "foursaxes-purple-color-correction-300x250";
$slot_name2 = "Four Saxes - Purple Ad";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-11\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
