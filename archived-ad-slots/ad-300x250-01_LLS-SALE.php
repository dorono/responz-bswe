<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Little-Leaps-and-Sounds-BSWE-Banner.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>The art + science of weaving elegantly through harmonic tension & release, hitting the \"nooks and crannies\" of the changes.</p>

<p><strong>For a limited time, 25% off, PLUS, a FREE copy of Adam's other collection of stunning etudes, \"One Chorus Wonders\" (normally priced at $25).</strong></p>";
$ProductName1 = "Stunning Solos, Demystified";
$DisplayUrl1 = "INFINITEMUSICAN.COM";
$Url1 = "https://www.infinitemusician.com/p/little-leaps-and-sounds?coupon_code=LEAPNOW&product_id=5228863";
$ad_name1 = "Little-Leaps-and-Sounds-BSWE-Banner";
$slot_name1 = "Little Leaps and Sounds 25% Off Hero Banner";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Little-Leaps-and-Sounds-BSWE-Banner.jpg";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>Take action on the material in this collection, and you'll...</p>

<p>- Add intensity to your solos with unexpected melodic shapes<br>
- \"Speak jazz\" authentically by deconstructing precisely what melodic and harmonic devices go into the solos of the jazz masters<br>
- Develop a satisfying balance of tension and resolution in your melodic lines<br>
- Play (and sight read!) confidently at faster tempos<br>
- Develop a rhythmic creativity that brings rhythm sections to life</p>

<p><strong>For a limited time, 25% off, PLUS, a FREE copy of Adam's other collection of stunning etudes, \"One Chorus Wonders\" (normally priced at $25).</strong></p>";
$ProductName2 = "Stunning Solos, Demystified";
$DisplayUrl2 = "INFINITEMUSICAN.COM";
$Url2 = "https://www.infinitemusician.com/p/little-leaps-and-sounds?coupon_code=LEAPNOW&product_id=5228863";
$ad_name2 = "Little-Leaps-and-Sounds-BSWE-Banner";
$slot_name2 = "Little Leaps and Sounds 25% Off Hero Banner";

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

print "<div id=\"featured-box-1\" class=\"sidebar-boxunit boxunit featured-box sticky\" data-boxunit-slot=\"boxunit-300x250-01\"><div class=\"featured-box-container\"><div class=\"top-text\">".$MainText."</div><div class=\"featured-box-img-container\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$ProductName."\"></a></div><div class=\"featured-box-title\" onclick=\"window.open('$URL', '_blank')\"><p class=\"url\">".$DisplayUrl."</p><div class=\"text\"><p class=\"headline\">".$ProductName."</p></div><div class=\"cta\"><img src=\"".$Cta."\"></div></div></div></div>";
?>
