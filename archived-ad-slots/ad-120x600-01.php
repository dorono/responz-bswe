<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth";
$Alt1 = "10m Fan";
$Url1 = "https://10mfan.com/";
$class1 = "10m-fan-narrow-sidebar";
$slot_name1 = "10m Fan All Devices";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth";
$Alt2 = "10m Fan";
$Url2 = "https://10mfan.com/";
$class2 = "10m-fan-narrow-sidebar";
$slot_name2 = "10m Fan All Devices";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-120x600-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." boxunit-banner\" data-slot-name=\"".$slot_name."\" data-boxunit-name=\"".$class."\"><img src=\"".$Image."-300.png\"
 alt=\"".$Alt."\"
class=\"mobile-boxunit-img\"><img
src=\"".$Image."-120.png\" alt=\"".$Alt."\" class=\"desktop-tablet-boxunit-img\"></a></div>";
?>
