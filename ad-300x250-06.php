<?php

// SLOT 5

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Ad_BSWE_01.jpg";
$Alt1 = "SGPRO Audio";  
$Url1 = "https://sgproaudio.com/collections/instrument-microphones";
$ad_name1 = "sgpro-audio-clip-mic-front-view";
$slot_name1 = "SGPRO Audio Slot 5";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Ad_BSWE_02.jpg";
$Alt2 = "SGPRO Audio";
$Url2 = "https://sgproaudio.com/collections/instrument-microphones";
$ad_name2 = "sgpro-audio-text-only";
$slot_name2 = "SGPRO Audio Slot 5";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/Ad_BSWE_03_221126.jpg";
$Alt3 = "SGPRO Audio";
$Url3 = "https://sgproaudio.com/collections/instrument-microphones";
$ad_name3 = "sgpro-audio-specs";
$slot_name3 = "SGPRO Audio Slot 5";

// $Img4 = get_bloginfo('url') . "/wp-content/uploads/Ad_BSWE_04.jpg";
// $Alt4 = "SGPRO Audio 15% Discount";
// $Url4 = "https://sgproaudio.com/pages/bswe-2022";
// $ad_name4 = "sgaudiopro-15-percent-discount";
// $slot_name4 = "SGPRO Audio Slot 5";


$num = rand (1,3);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

// REMOVING rel=\"noopener noreferrer nofollow\" target=\"_blank\" on anchor

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
