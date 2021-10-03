<?php

// ADS 9 & 10

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music.jpg";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
$ad_name1 = "lfcc-wide-sidebar";
$slot_name1 = "Lightning-Fast and Crystal-Clean wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music-video.jpg";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
$ad_name2 = "lfcc-video-still-wide-sidebar";
$slot_name2 = "Lightning-Fast and Crystal-Clean VIDEO STILL wide sidebar";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


// REMOVING rel=\"noopener noreferrer nofollow\" target=\"_blank\" on anchor

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
