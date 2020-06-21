<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/just_joes.jpg";
$Alt1 = "Just Joe's Sax Gel Strap";
$Url1 = "http://justjoessaxgelstrap.com";
$ad_name1 = "just_joes_position2";
$slot_name1 = "Just Joes 300x250 bottom";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/just_joes.jpg";
$Alt2 = "Just Joe's Sax Gel Strap";
$Url2 = "http://justjoessaxgelstrap.com";
$ad_name2 = "just_joes_position2";
$slot_name2 = "Just Joes 300x250 bottom";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-04\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
