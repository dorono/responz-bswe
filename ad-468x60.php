<?php

// ADS 1 & 2
// SAX DAKOTA 4 ROTATING BANNERS
$Img1 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-1.jpg";
$Alt1 = "Sax Dakota";
$Url1 = "http://www.saxdakota.com/";
$ad_name1 = "SaxDakota_BannerAd_468x60-1.jpg";
$slot_name1 = "Sax Dakota - Saxophones #1";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-2.jpg";
$Alt2 = "Sax Dakota";
$Url2 = "http://www.saxdakota.com/";
$ad_name2 = "SaxDakota_BannerAd_468x60-2";
$slot_name2 = "Sax Dakota - Saxophones #2";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-3.jpg";
$Alt3 = "Sax Dakota";
$Url3 = "http://www.saxdakota.com/";
$ad_name3 = "SaxDakota_BannerAd_468x60-3-sdt-xr-92-tenor";
$slot_name3 = "Sax Dakota - #3 sdt-xr-92 Tenor";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-4.jpg";
$Alt4 = "Sax Dakota";
$Url4 = "http://www.saxdakota.com/";
$ad_name4 = "SaxDakota_BannerAd_468x60-4-sdss-xr-73-soprano";
$slot_name4 = "Sax Dakota - #4 SDSS XR 73 Soprano";

$num = rand (1,4);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-468x60\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\"
alt=\"".$Alt."\" width=\"468\" height=\"60\"></a></div>";
?>
