<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/wall-stand.jpg";
$Alt1 = "Wood and Winds";
$Url1 = "https://woodandwinds.com/en-us/products/the-wall-hanger-saxophone-wall-stand-gift-for-saxophonist-player-tenor-alto-soprano-sax";
$ad_name1 = "wood-and-winds-wall-stand";
$slot_name1 = "Wood and Winds Wall Stand";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/thumbrest.jpg";
$Alt2 = "Wood and Winds";
$Url2 = "https://woodandwinds.com/en-us/products/wooden-thumbrest-for-saxophone";
$ad_name2 = "wood-and-winds-thumbrest";
$slot_name2 = "Wood and Winds Thumbrest";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/stand.jpg";
$Alt3 = "Wood and Winds";
$Url3 = "https://woodandwinds.com/en-us/products/solid-wood-sax-stand-available-immediately";
$ad_name3 = "wood-and-winds-stand";
$slot_name3 = "Wood and Winds Stand";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/pearls.jpg";
$Alt4 = "Wood and Winds";
$Url4 = "https://woodandwinds.com/en-us/products/wooden-finger-buttons-for-saxophone";
$ad_name4 = "wood-and-winds-pearls";
$slot_name4 = "Wood and Winds Pearls";

$Img5 = get_bloginfo('url') . "/wp-content/uploads/neck-plug.jpg";
$Alt5 = "Wood and Winds";
$Url5 = "https://woodandwinds.com/en-us/products/mouthpiece-stand-for-sax-clarinet-etc";
$ad_name5 = "wood-and-winds-mouthpiece-stand";
$slot_name5 = "Wood and Winds Mouthpiece Stand";

$Img6 = get_bloginfo('url') . "/wp-content/uploads/neck-plug.jpg";
$Alt6 = "Wood and Winds";
$Url6 = "https://woodandwinds.com/en-us/products/exotic-wood-neck-plug-for-saxophone";
$ad_name6 = "wood-and-winds-neck-plug";
$slot_name6 = "Wood and Winds Neck Plug";

// $Img1 = get_bloginfo('url') . "/wp-content/uploads/wood-and-winds-15-percent-off.jpg";
// $Alt1 = "Wood and Winds 15% BSWE Discount";
// $Url1 = "https://woodandwinds.com";
// $ad_name1 = "wood-and-winds-15-percent-bswe-discount";
// $slot_name1 = "Wood and Winds BSWE Discount";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/wood-and-winds-15-percent-off.jpg";
// $Alt2 = "Wood and Winds 15% BSWE Discount";
// $Url2 = "https://woodandwinds.com";
// $ad_name2 = "wood-and-winds-15-percent-bswe-discount";
// $slot_name2 = "Wood and Winds BSWE Discount";


$num = mt_rand(1,6);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-11\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
