<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/marc-jean-hypes.jpg";
$Alt1 = "Marc Jean";
$Url1 = "http://www.musiquedemarc.com";
$ad_name1 = "marcjean_468x60";
$slot_name1 = "Ligature II by Marc Jean";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/marc-jean-hypes.jpg";
$Alt2 = "Marc Jean";
$Url2 = "http://www.musiquedemarc.com";
$ad_name2 = "marcjean_468x60";
$slot_name2 = "Ligature II by Marc Jean";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/marc-jean-hypes.jpg";
$Alt3 = "Marc Jean";
$Url3 = "http://www.musiquedemarc.com";
$ad_name3 = "marcjean_468x60";
$slot_name3 = "Ligature II by Marc Jean";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/marc-jean-hypes.jpg";
$Alt4 = "Marc Jean";
$Url4 = "http://www.musiquedemarc.com";
$ad_name4 = "marcjean_468x60";
$slot_name4 = "Ligature II by Marc Jean";

// SAX DAKOTA 4 ROTATING BANNERS
$Img5 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-1.jpg";
$Alt5 = "Sax Dakota";
$Url5 = "http://www.saxdakota.com/";
$ad_name5 = "SaxDakota_BannerAd_468x60-1.jpg";
$slot_name5 = "Sax Dakota - Saxophones #1";

$Img6 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-2.jpg";
$Alt6 = "Sax Dakota";
$Url6 = "http://www.saxdakota.com/";
$ad_name6 = "SaxDakota_BannerAd_468x60-2";
$slot_name6 = "Sax Dakota - Saxophones #2";

$Img7 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-3.jpg";
$Alt7 = "Sax Dakota";
$Url7 = "http://www.saxdakota.com/";
$ad_name7 = "SaxDakota_BannerAd_468x60-3-sdt-xr-92-tenor";
$slot_name7 = "Sax Dakota - #3 sdt-xr-92 Tenor";

$Img8 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd_468x60-4.jpg";
$Alt8 = "Sax Dakota";
$Url8 = "http://www.saxdakota.com/";
$ad_name8 = "SaxDakota_BannerAd_468x60-4-sdss-xr-73-soprano";
$slot_name8 = "Sax Dakota - #4 SDSS XR 73 Soprano";

$num = rand (1,8);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-468x60\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\"
alt=\"".$Alt."\" width=\"468\" height=\"60\"></a></div>";
?>
