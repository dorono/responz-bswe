<?php

// ADS 9 & 10

$Img1 = get_bloginfo('url') . "/wp-content/uploads/muschool-hahn.jpg";
$Alt1 = "MuSchool";
$Url1 = "https://www.muschool.app/download";
$ad_name1 = "muschool-wide-sidebar";
$slot_name1 = "MuSchool wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/muschool-hahn.jpg";
$Alt2 = "MuSchool";
$Url2 = "https://www.muschool.app/download";
$ad_name2 = "muschool--wide-sidebar";
$slot_name2 = "MuSchool wide sidebar";

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
