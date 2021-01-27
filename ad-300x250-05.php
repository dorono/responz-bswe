<?php

// ADS 5 & 6

$Img1 = get_bloginfo('url') . "/wp-content/uploads/HR_Custom_Dark_BestSax_Jan21_300x250.jpg";
$Alt1 = "HR* CUSTOM DARK Series";
$Url1 = "https://jodyjazz.com/hr-custom-dark-series-saxophone-mouthpieces/";
$ad_name1 = "HR_Custom_Dark_BestSax_Jan21_300x250";
$slot_name1 = "Jody Jazz Slot 1 - 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/RousseauAd_BestSax_Jan21_300x250.jpg";
$Alt2 = "Rousseau Introduction ";
$Url2 = "https://rousseaumouthpieces.com";
$ad_name2 = "RousseauAd_BestSax_Jan21_300x250";
$slot_name2 = "Jody Jazz Slot 2 - 300x250";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/RovnerAd_072420.jpg";
$Alt3 = "Rovner";
$Url3 = "https://www.rovnerproducts.com/";
$ad_name3 = "RovnerAd_great-relationship";
$slot_name3 = "Rovner 300x250";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/RovnerAd_072420.jpg";
$Alt4 = "Rovner";
$Url4 = "https://www.rovnerproducts.com/";
$ad_name4 = "RovnerAd_great-relationship";
$slot_name4 = "Rovner 300x250";

$num = mt_rand (1,4);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-05\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
