<?php

// ADS 8 & 9

$Img1 = get_bloginfo('url') . "/wp-content/uploads/retro-revival-handcrafted-vintager2_v2.jpg";
$Alt1 = "Retro Revival Saxophone Mouthpieces";
$Url1 = "https://retro-revival.com/";
$ad_name1 = "retro-revival-precision-crafted-vintage-replica";
$slot_name1 = "Retro Revival 300x250 Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/retro-revival-handcrafted-vintager2_v2.jpg";
$Alt2 = "Retro Revival Saxophone Mouthpieces";
$Url2 = "https://retro-revival.com/";
$ad_name2 = "retro-revival-precision-crafted-vintage-replica";
$slot_name2 = "Retro Revival 300x250 Ad";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};
// removed no follow for retro revival only, make sure to put back for other advertisers.
print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-07\"><a href=\"".$URL."\"  target=\"_blank\"
class=\"ad-banner\" data-ad-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
