<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/marc-jean-hypes.jpg";
$Alt1 = "Sax Dakota";
$Url1 = "http://www.musiquedemarc.com";
$ad_name1 = "marcjean_468x60";
$slot_name1 = "Ligature II by Marc Jean";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/dakota-unlaquered.jpg";
$Alt2 = "Sax Dakota";
$Url2 = "http://www.saxdakota.com/";
$ad_name2 = "saxdakota_468x60";
$slot_name2 = "Sax Dakota - For Real Un-Laquered Bronze";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-468x60\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\"
alt=\"".$Alt."\" width=\"468\" height=\"60\"></a></div>";
?>
