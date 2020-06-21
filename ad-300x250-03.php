<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt1 = "Trevor James Signature Custom Raw Saxophone";
$Url1 = "http://www.trevorjamessaxophones.com";
$ad_name1 = "massullo";
$slot_name1 = "Massullo Music 300x250 Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt2 = "Trevor James Signature Custom Raw Saxophone";
$Url2 = "http://www.trevorjamessaxophones.com";
$ad_name2 = "massullo";
$slot_name2 = "Massullo Music 300x250 Ad";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-03\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
