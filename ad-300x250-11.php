<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Olegature-September-Sale-2.jpg";
$Alt1 = "Olegature September Sale";
$Url1 = "https://olegproducts.com/saxophone-ligatures";
$ad_name1 = "Olegature-September-Sale-2-2025-Ad-300x250";
$slot_name1 = "Olegature September Sale";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Bulldog-Sax-Stand.jpg";
$Alt2 = "Bulldog Sax Stand";
$Url2 = "https://olegproducts.com/bulldog-saxophone-stand/";
$ad_name2 = "Bulldog-Sax-Stand-20%-Ad-300x250";
$slot_name2 = "Bulldog Sax Stand";

// $Img1 = get_bloginfo('url') . "/wp-content/uploads/Olegature-August-2025-Ad-300x250-1.jpg";
// $Alt1 = "Olegature";
// $Url1 = "https://olegproducts.com/saxophone-ligatures";
// $ad_name1 = "Olegature-August-2025-Ad-300x250";
// $slot_name1 = "Olegature";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/Oleg-Enhancer-August-2025-Ad-300x250-1.jpg";
// $Alt2 = "Oleg Enhancer";
// $Url2 = "https://olegproducts.com/saxophone-enhancers/";
// $ad_name2 = "Oleg-Enhancer-August-2025-Ad-300x250-1";
// $slot_name2 = "Oleg Enhancer";

// $Img3 = get_bloginfo('url') . "/wp-content/uploads/Oleg-Products-Ad-Poster.jpg";
// $Alt3 = "Oleg Products";
// $Url3 = "https://olegproducts.com/";
// $ad_name3 = "Oleg-Products-300x250-black-bg";
// $slot_name3 = "Oleg Products";

// $Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music-video.jpg";
// $Alt1 = "Lightning-Fast and Crystal-Clean Saxophone Playing";
// $Url1 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
// $ad_name1 = "LFCC-300x250-sheet-music-video";
// $slot_name1 = "Lightning-Fast and Crystal-Clean Saxophone Playing";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-sheet-music.jpg";
// $Alt2 = "Lightning-Fast and Crystal-Clean Saxophone Playing";
// $Url2 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean";
// $ad_name2 = "lfcc-300x250-sheet-music-b&w-adam.jpg";
// $slot_name2 = "Lightning-Fast and Crystal-Clean Saxophone Playing";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-11\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
