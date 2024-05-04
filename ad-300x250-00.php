<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/300x250-Birddog.png";
$Alt1 = "Locoparasaxo Wall Mounts";
$Url1 = "https://www.locoparasaxo.com/collections/saxophone-wallmounts";
$class1 = "300x250-Birddoge";
$slot_name1 = "Birddog";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/300x250-Birddog.png";
$Alt2 = "Locoparasaxo Wall Mounts";
$Url2 = "https://www.locoparasaxo.com/collections/saxophone-wallmounts";
$class2 = "300x250-Birddoge";
$slot_name2 = "Birddog";


// $Img1 = get_bloginfo('url') . "/wp-content/uploads/Be-Brave-BestSAXSite2-300px.jpg";
// $Alt1 = "Locoparasaxo Wall Mounts";
// $Url1 = "https://www.locoparasaxo.com/collections/saxophone-wallmounts";
// $class1 = "Be-Brave-BestSAXSite2-300px";
// $slot_name1 = "LocoParaSaxo Be Brave";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/Be-Brave-BestSAXSite2-300px.jpg";
// $Alt2 = "Locoparasaxo Wall Mounts";
// $Url2 = "https://www.locoparasaxo.com/collections/saxophone-wallmounts";
// $class2 = "Be-Brave-BestSAXSite2-300px";
// $slot_name2 = "LocoParaSaxo Be Brave";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-00\"><a href=\"".$URL."\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
