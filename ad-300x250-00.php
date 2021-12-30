<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth-300.png";
$Alt1 = "10m Fan";
$Url1 = "https://10mfan.com/";
$class1 = "10m-fan-300x250";
$slot_name1 = "10m Fan All Devices (updated sidebar position)";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth-300.png";
$Alt2 = "10m Fan";
$Url2 = "https://10mfan.com/";
$class2 = "10m-fan-300x250";
$slot_name2 = "10m Fan All Devices (updated sidebar position)";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
