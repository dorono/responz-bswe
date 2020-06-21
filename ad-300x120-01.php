<?php

// ADS 9 & 10

$Img9= get_bloginfo('url') . "/wp-content/uploads/claude-lakey-compass.jpg";
$Alt9= "Claude Lakey";
$Url9= "http://www.claudelakey.com/products/compass";
$class9 = "Claude-Lakey-Banner";
$slot_name9 = "Claude Lakey Sidebar";


$Img10 = get_bloginfo('url') . "/wp-content/uploads/Melodic-Minor-bannerBSWE.jpg";
$Alt10 = "Melodic Minor Jazz Studies";
$Url10 = "http://billplakemusic.org/my-books/melodic-minor-landing-page/";
$class10 = "Bill-Plake-Banner";
$slot_name10 = "Bill Plake Sidebar";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x120-01\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"".$class." boxunit-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
