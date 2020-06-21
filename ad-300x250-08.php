<?php

// AD SLOT 10 & 11

$Img1 = get_bloginfo('url') . "/wp-content/uploads/whisper-room-1.jpg";
$Alt1 = "Whisper Room";
$Url1 = "https://www.whisperroom.com";
$ad_name1 = "Whisper-Room-Practice-Without-Disturbing-Your-Neighbors";
$slot_name1 = "Whisper Room - Practice Without Disturbing Your Neighbors";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/whisper-room-1.jpg";
$Alt2 = "Whisper Room";
$Url2 = "https://www.whisperroom.com";
$ad_name2 = "Whisper-Room-Practice-Without-Disturbing-Your-Neighbors";
$slot_name2 = "Whisper Room - Practice Without Disturbing Your Neighbors";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-08\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
