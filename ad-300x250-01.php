<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/UGSSP-300x250.jpg";
$Alt1 = "The Ultimate Guide to Saxophone Sound Production";
$Url1 = "http://saxophonetone.com";
$ad_name1 = "ugssp-ad-v1";
$slot_name1 = "UGSSP 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/UGSSP-300x250.jpg";
$Alt2 = "The Ultimate Guide to Saxophone Sound Production";
$Url2 = "http://saxophonetone.com";
$ad_name2 = "ugssp-ad-v1";
$slot_name2 = "UGSSP 300x250";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-02\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
