<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/flute-school-sax-players.png";
$Alt1 = "Flute School";
$Url1 = "https://www.flute.school/free-saxophone ";
$class1 = "flute-school-300x250-sax-players";
$slot_name1 = "Flute School - Sax Players - More Gigs";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/flute-school-sax-players.png";
$Alt2 = "Flute School";
$Url2 = "https://www.flute.school/free-saxophone ";
$class2 = "flute-school-300x250-sax-players";
$slot_name2 = "Flute School - Sax Players - More Gigs";


// $Img1 = get_bloginfo('url') . "/wp-content/uploads/Universal-Method-1.png";
// $Alt1 = "10m Fan";
// $Url1 = "https://amzn.to/3Gnbv04";
// $class1 = "universal-method-300x250";
// $slot_name1 = "Amazon link 300x250 - Universal Method";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/Parker-Omnibook-300x250-1.png";
// $Alt2 = "10m Fan";
// $Url2 = "https://amzn.to/3PRoude";
// $class2 = "charlie-parker-omnibook-300x250";
// $slot_name2 = "Amazon link 300x250 - Parker Omnibook";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
