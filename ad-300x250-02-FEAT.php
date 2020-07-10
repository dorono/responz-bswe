<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-adam-bw-sheet-music.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>Recording artist and master class clinician, Adam Larson shares his proven system for building technique in a way that not only uncovers and removes your technical \"blind spots\", but also opens you up to a whole new world of jazz improv vocabulary. Even if you don't have a ton of time to practice each week, if you're ready to move out of your comfort zone in a fun and inspiring way, then click the picture below and check the program out for yourself!</p>";
$ProductName1 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
$DisplayUrl1 = "SAXTECHNIQUE.COM";
$Url1 = "http://saxtechnique.com";
$ad_name1 = "lfcc-adam-bw-sheet-music";
$slot_name1 = "LFCC FB-Style Featured Ad - Sheet Music";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/fb-stacked-4ths-screencap.jpg";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>Recording artist and master class clinician, Adam Larson shares his proven system for building technique in a way that not only uncovers and removes your technical \"blind spots\", but also opens you up to a whole new world of jazz improv vocabulary. Even if you don't have a ton of time to practice each week, if you're ready to move out of your comfort zone in a fun and inspiring way, then click the picture below and check the program out for yourself!</p>";
$DisplayUrl2 = "SAXTECHNIQUE.COM";
$ProductName2 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
$Url2 = "http://saxtechnique.com";
$ad_name2 = "fb-stacked-4ths-screencap";
$slot_name2 = "LFCC FB-Style Featured Ad - Stacked 4ths";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/lfcc-minor-3rd-1up-1down.jpg";
$Cta3 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText3 = "<p>Recording artist and master class clinician, Adam Larson shares his proven system for building technique in a way that not only uncovers and removes your technical \"blind spots\", but also opens you up to a whole new world of jazz improv vocabulary. Even if you don't have a ton of time to practice each week, if you're ready to move out of your comfort zone in a fun and inspiring way, then click the picture below and check the program out for yourself!</p>";
$ProductName3 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
$DisplayUrl3 = "SAXTECHNIQUE.COM";
$Url3 = "http://saxtechnique.com";
$ad_name3 = "lfcc-minor-3rd-1up-1down";
$slot_name3 = "LFCC FB-Style Featured Ad - Minor 3rd Up and Down";

$num = rand (1,3);

$Image = ${'Img'.$num};
$Cta = ${'Cta'.$num};
$MainText = ${'MainText'.$num};
$DisplayUrl = ${'DisplayUrl'.$num};
$ProductName = ${'ProductName' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div id=\"featured-box-2\" class=\"sidebar-boxunit boxunit featured-box\" data-boxunit-slot=\"boxunit-300x250-02\"><div class=\"featured-box-container\"><div class=\"top-text\">".$MainText."</div><div class=\"featured-box-img-container\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$ProductName."\"></a></div><div class=\"featured-box-title\" onclick=\"window.open('$URL', '_blank')\"><p class=\"url\">".$DisplayUrl."</p><div class=\"text\"><p class=\"headline\">".$ProductName."</p></div><div class=\"cta\"><img src=\"".$Cta."\"></div></div></div></div>";
?>