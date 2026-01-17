<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/YGTLR-DES1-BSWE-V1.png";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>SPOILER ALERT: There really aren't that many melodic and harmonic \"tricks\" you need to know to play great solos. After going through just a few of these etudes and their brief analysis, you'll be well on your way to having a rock-solid \"improvisational arsenal\".</p>";
$ProductName1 = "20% Off Limited Time Sale!";
$DisplayUrl1 = "INFINITEMUSICIAN.COM";
$Url1 = "https://www.infinitemusician.com/p/rhythm-changes?coupon_code=RHYTHM20&product_id=6519009";
$ad_name1 = "YGTLR-DES1-FB-V1-limited-time-sale";
$slot_name1 = "You've Got (to learn) Rhythm V1 Limited Time Sale";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/YGTLR-DES1-BSWE-V1.png";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>SPOILER ALERT: There really aren't that many melodic and harmonic \"tricks\" you need to know to play great solos. After going through just a few of these etudes and their brief analysis, you'll be well on your way to having a rock-solid \"improvisational arsenal\".</p>";
$ProductName2 = "20% Off Limited Time Sale!";
$DisplayUrl2 = "INFINITEMUSICIAN.COM";
$Url2 = "https://www.infinitemusician.com/p/rhythm-changes?coupon_code=RHYTHM20&product_id=6519009";
$ad_name2 = "YGTLR-DES1-FB-V1-limited-time-sale";
$slot_name2 = "You've Got (to learn) Rhythm V1 Limited Time Sale";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/YGTLR-DES2-FB-V1.jpg";
// $Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
// $MainText2 = "<p>Want to play mind-blowing solos? Here's a secret: you don't need 1000s of \"tricks\" up your sleeve. Work through these simple etudes with brief analysis to make Rhythm Changes your ticket to authentic jazz language on ANY tune.  
// </p>";
// $ProductName2 = "20% Off Limited Time Sale!";
// $DisplayUrl2 = "INFINITEMUSICIAN.COM";
// $Url2 = "https://www.infinitemusician.com/p/rhythm-changes?coupon_code=RHYTHM&product_id=6519009";
// $ad_name2 = "YGTLR-DES1-FB-V1-limited-time-sale";
// $slot_name2 = "You've Got (to learn) Rhythm V1 Limited Time Sale";

//////////////////////////////////////////////////////////
/////////////// END OF ADS SECTION //////////////////////
//////////////////////////////////////////////////////////

// UPDATE IN "Inside the Loop" AND "FB Ad Style Widget (After Paragraph) WIDGETS

$num = rand (1,2);

$Image = ${'Img'.$num};
$Cta = ${'Cta'.$num};
$MainText = ${'MainText'.$num};
$DisplayUrl = ${'DisplayUrl'.$num};
$ProductName = ${'ProductName' .$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div id=\"featured-box-1\" class=\"sidebar-boxunit boxunit featured-box sticky\" data-boxunit-slot=\"boxunit-300x250-01\"><div class=\"featured-box-container\"><div class=\"top-text\">".$MainText."</div><div class=\"featured-box-img-container\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$ProductName."\"></a></div><div class=\"featured-box-title\" data-ad-url=\"".$URL."\" onclick=\"window.open('$URL', '_blank')\"><p class=\"url\">".$DisplayUrl."</p><div class=\"text\"><p class=\"headline\">".$ProductName."</p></div><div class=\"cta\"><img src=\"".$Cta."\"></div></div></div></div>";
?>
