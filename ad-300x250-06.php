<?php

// ADS 9 & 10

$Img1 = get_bloginfo('url') . "/wp-content/uploads/BABN_BarSax_300X250.jpg";
$Alt1 = "Airmen of Note Announcing Immediate Vacancy for Baritone Saxophone";
$Url1 = "https://www.music.af.mil/Auditions/Upcoming-Vacancies/";
$ad_name1 = "usaf-airmen-of-note-wide-sidebar";
$slot_name1 = "Airmen of Note wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/BABN_BarSax_300X250.jpg";
$Alt2 = "Airmen of Note Announcing Immediate Vacancy for Baritone Saxophone";
$Url2 = "https://www.music.af.mil/Auditions/Upcoming-Vacancies/";
$ad_name2 = "usaf-airmen-of-note-wide-sidebar";
$slot_name2 = "Airmen of Note wide sidebar";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


// REMOVING rel=\"noopener noreferrer nofollow\" target=\"_blank\" on anchor

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
