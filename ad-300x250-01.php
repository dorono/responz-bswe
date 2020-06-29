<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/liebman-multi.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$Alt1 = "The Ultimate Guide to Saxophone Sound Production";
$Url1 = "http://saxophonetone.com";
$ad_name1 = "ugssp-ad-v1";
$slot_name1 = "UGSSP FB-Style Featured Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/liebman-multi.jpg";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$Alt2 = "The Ultimate Guide to Saxophone Sound Production";
$Url2 = "http://saxophonetone.com";
$ad_name2 = "ugssp-ad-v1";
$slot_name2 = "UGSSP FB-Style Featured Ad";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Cta = ${'Cta'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div id=\"featured-box-1\" class=\"sidebar-boxunit boxunit featured-box\" data-boxunit-slot=\"boxunit-300x250-02\"><div class=\"featured-box-container\"><div class=\"top-text\"><p>Sax legend David Liebman's new course is designed to be the ONLY course on saxophone sound you'll ever need. This streaming video series features the most effective sound production techniques and concepts he's come across over decades spent helping saxophonists to find their biggest, richest, and most compelling voice on the horn.</p><p>David takes the same methods that were taught to fellow legends (Michael Brecker, Eddie Daniels, and other giants), and expands on them so that players at any level (including those who don't have a ton of time to practice each week) can start building the kind of sound that truly turns heads.</p></div><div class=\"featured-box-img-container\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\"></a></div>



<div class=\"featured-box-title\" onclick=\"window.open('$URL', '_blank')\"><p class=\"url\">SAXOPHONETONE.COM</p><div class=\"text\"><p class=\"headline\">Ultimate Guide to Saxophone Sound Production</p></div>
<div class=\"cta\"><img src=\"".$Cta."\"></div></div></div></div>";
?>
