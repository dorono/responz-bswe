<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/300x250-Bach-Shapes-Sheet-Music.png";
$Alt1 = "Bach Shapes";
$Url1 = "https://www.infinitemusician.com/p/bach-shapes";
$ad_name1 = "bach-shapes-300x250-enhanced";
$slot_name1 = "Bach Shapes Enhanced 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/300x250-Bach-Shapes-Sheet-Music.png";
$Alt2 = "Bach Shapes";
$Url2 = "https://www.infinitemusician.com/p/bach-shapes";
$ad_name2 = "bach-shapes-300x250-enhanced";
$slot_name2 = "Bach Shapes Enhanced 300x250";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-11\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
