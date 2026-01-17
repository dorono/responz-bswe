<?php

// ADS 5 & 6

$Img1 = get_bloginfo('url') . "/wp-content/uploads/BannerAd_DVHR_Alto_Tenor_300x250.png";
$Alt1 = "DV HR";
$Url1 = "https://jodyjazz.com/dv-hr-series/";
$ad_name1 = "BannerAd_DVHR_Alto_Tenor_300x250";
$slot_name1 = "Jody Jazz Slot 1 - 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/BannerAd_DVHR_Alto_Tenor_300x250.png";
$Alt2 = "DV HR";
$Url2 = "https://jodyjazz.com/dv-hr-series/";
$ad_name2 = "BannerAd_DVHR_Alto_Tenor_300x250";
$slot_name2 = "Jody Jazz Slot 1 - 300x250";

$num = mt_rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
