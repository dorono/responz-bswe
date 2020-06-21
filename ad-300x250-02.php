<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music.jpg";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "http://saxtechnique.com";
$ad_name1 = "lfcc-wide-sidebar";
$slot_name1 = "Lightning-Fast and Crystal-Clean wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music-video.jpg";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "http://saxtechnique.com";
$ad_name2 = "lfcc-video-still-wide-sidebar";
$slot_name2 = "Lightning-Fast and Crystal-Clean VIDEO STILL wide sidebar";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>