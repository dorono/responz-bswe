<?php

// AD SLOT 8
// ADD NOFOLLOW IF NOT ONE OF MY COURSES!
$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music-video.jpg";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
$ad_name1 = "LFCC-300x250-sheet-music-video";
$slot_name1 = "Lightning-Fast and Crystal-Clean Saxophone Playing";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music.jpg";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
$ad_name2 = "lfcc-300x250-sheet-music-b&w-adam.jpg";
$slot_name2 = "Lightning-Fast and Crystal-Clean Saxophone Playing";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-09\"><a href=\"".$URL."\" rel=\"noopener noreferrer\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
