<?php

// ADS 9 & 10

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Jazzfuel-ad-1.jpg";
$Alt1 = "Jazz Promoter Survey";
$Url1 = "https://jazzfuel.com/jazz-promoter-survey/?utm_medium=paid&utm_source=promotion&utm_campaign=bestsaxwebsiteever";
$ad_name1 = "Jazzfuel-Jazz-Promoter-Survey-Ad-1";
$slot_name1 = "Jazzfuel Jazz Promoter Survey - Ad #1";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Jazzfuel-ad-2.jpg";
$Alt2 = "Jazz Journalist Survey";
$Url2 = "https://jazzfuel.com/jazz-journalists-survey/?utm_medium=paid&utm_source=promotion&utm_campaign=bestsaxwebsiteever";
$ad_name2 = "Jazzfuel-Jazz-Journalist-Survey-Ad-2";
$slot_name2 = "Jazzfuel Jazz Journalist Survey - Ad #2";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/Jazzfuel-ad-3.png";
$Alt3 = "Saxophone Brands Around the World";
$Url3 = "https://jazzfuel.com/best-saxophone-brands/?utm_medium=paid&utm_source=promotion&utm_campaign=bestsaxwebsiteever";
$ad_name3 = "Jazzfuel-Saxophone-Brands-Around-the-World-Ad-3";
$slot_name3 = "Saxophone Brands Around the World - Ad #3";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/Jazzfuel-ad-4.png";
$Alt4 = "Reviewing the Greats";
$Url4 = "https://jazzfuel.com/jazz-instruments/saxophone/?utm_medium=paid&utm_source=promotion&utm_campaign=bestsaxwebsiteever";
$ad_name4 = "Jazzfuel-Reviewing-the-Greats-Ad-4";
$slot_name4 = "Jazzfuel Reviewing the Greats - Ad #4";

$Img5 = get_bloginfo('url') . "/wp-content/uploads/Jazzfuel-ad-5.png";
$Alt5 = "Beginner Saxophone?";
$Url5 = "https://jazzfuel.com/beginners-saxophone-guide/?utm_medium=paid&utm_source=promotion&utm_campaign=bestsaxwebsiteever";
$ad_name5 = "Jazzfuel-Beginner Saxophone-Ad-5";
$slot_name5 = "Jazzfuel Beginner Saxophone - Ad #5";

$num = rand (1,5);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


// REMOVING rel=\"noopener noreferrer nofollow\" target=\"_blank\" on anchor

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
