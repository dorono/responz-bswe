<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/300x250-Bach-Shapes-Sheet-Music.png";
$Alt1 = "Bach Shapes";
$Url1 = "https://www.infinitemusician.com/p/bach-shapes";
$class1 = "bach-shapes-sheet-music-300x250";
$slot_name1 = "Bach Shapes Sheet Music 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/300x250-Bach-Shapes-Sheet-Music.png";
$Alt2 = "Bach Shapes";
$Url2 = "https://www.infinitemusician.com/p/bach-shapes";
$class2 = "bach-shapes-sheet-music-300x250";
$slot_name2 = "Bach Shapes Sheet Music 300x250";

// $Img1 = get_bloginfo('url') . "/wp-content/uploads/Universal-Method-1.png";
// $Alt1 = "Universal Method";
// $Url1 = "https://amzn.to/3Gnbv04";
// $class1 = "universal-method-300x250";
// $slot_name1 = "Amazon Link - Universal Method";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/25-daily-studies-300x250-1.jpg";
// $Alt2 = "25 Daily Studies";
// $Url2 = "https://amzn.to/45NcVLY";
// $class2 = "25-daily-studies-300x250";
// $slot_name2 = "Amazon Link - 25 Daily Studies";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
