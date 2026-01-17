<?php

// ADS 5 & 6

// $Img1 = get_bloginfo('url') . "/wp-content/uploads/BannerAd_DVHR_Alto_Tenor_300x250.png";
// $Alt1 = "DV HR";
// $Url1 = "https://jodyjazz.com/dv-hr-series/";
// $ad_name1 = "BannerAd_DVHR_Alto_Tenor_300x250";
// $slot_name1 = "Jody Jazz Slot 1 - 300x250";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/BannerAd_DVHR_Alto_Tenor_300x250.png";
// $Alt2 = "DV HR";
// $Url2 = "https://jodyjazz.com/dv-hr-series/";
// $ad_name2 = "BannerAd_DVHR_Alto_Tenor_300x250";
// $slot_name2 = "Jody Jazz Slot 1 - 300x250";

$Img1 = get_bloginfo('url') . "/wp-content/uploads/JodyJazz_BestSax_DV-JC-CUSTOM-Tenor_300x250.jpg";
$Alt1 = "DV JC JODY CUSTOM Tenor";
$Url1 = "https://jodyjazz.com/dv-jc-jody-custom-tenor/";
$ad_name1 = "JodyJazz_BestSax_DV-JC-CUSTOM-Tenor_300x250";
$slot_name1 = "Jody Jazz Slot 1 - DV JC JODY CUSTOM Tenor";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/JodyJazz_BestSax_QUASAR-Alto_300x250.jpg";
$Alt2 = "JodyJazz QUASAR Alto";
$Url2 = "https://jodyjazz.com/quasar-alto/";
$ad_name2 = "JodyJazz_BestSax_QUASAR-Alto_300x250";
$slot_name2 = "Jody Jazz Slot 1 - JodyJazz QUASAR Alto";


$num = mt_rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
