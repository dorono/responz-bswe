<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Be-Brave-BestSAXSite2-300px.jpg";
$Alt1 = "Bulletproof Saxophone Playing";
$Url1 = "https://www.locoparasaxo.com/";
$class1 = "Be-Brave-BestSAXSite2-300px";
$slot_name1 = "LocoParaSaxo Be Brave";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Be-Brave-BestSAXSite2-300px.jpg";
$Alt2 = "Bulletproof Saxophone Playing";
$Url2 = "https://www.locoparasaxo.com/";
$class2 = "Be-Brave-BestSAXSite2-300px";
$slot_name2 = "LocoParaSaxo Be Brave";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
