<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/YGTLR-DES1-300x250-V1.png";
$Alt1 = "You've Got (to learn) Rhythm";
$Url1 = "https://www.infinitemusician.com/p/rhythm-changes?coupon_code=RHYTHM20&product_id=6519009";
$ad_name1 = "YGTLR-DES1-FB-V1";
$slot_name1 = "You've Got (to learn) Rhythm 300x250 V1";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/YGTLR-DES1-300x250-V1.png";
$Alt2 = "You've Got (to learn) Rhythm";
$Url2 = "https://www.infinitemusician.com/p/rhythm-changes?coupon_code=RHYTHM20&product_id=6519009";
$ad_name2 = "YGTLR-DES1-FB-V1";
$slot_name2 = "You've Got (to learn) Rhythm 300x250 V1";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>