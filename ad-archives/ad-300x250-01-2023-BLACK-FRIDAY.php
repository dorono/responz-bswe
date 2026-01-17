<?php

// UPDATE IN "Inside the Loop" AND "FB Ad Style Widget (After Paragraph) WIDGETS
$Img1 = get_bloginfo('url') . "/wp-content/uploads/gift-card-collage-900x471-blue-bg.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>This holiday season, <strong>skip the sax cufflinks</strong> and get them what they really want...<strong>a brand new set of musical \"power tools\"</strong> to get them sounding better than ever.</p>

<p>Infinite Musician is now offering gift cards for all of our highly effective and acclaimed courses, taught by some of the world\'s greatest saxophonists.</p>

<p>So grab a gift card today, schedule the date and time you want it to go out, and <strong>cross your lucky saxophonist's name off of that shopping list!</strong></p>";
$ProductName1 = "NEW: Gift Cards for All Sax and Jazz Courses";
$DisplayUrl1 = "INFINITEMUSICAN.COM";
$Url1 = "https://www.infinitemusician.com/p/gift-cards";
$ad_name1 = "gift-card-collage-900x471-1";
$slot_name1 = "Gift Cards Black Friday 2023";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/gift-card-collage-900x471-blue-bg.jpg";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>This holiday season, <strong>skip the sax cufflinks</strong> and get them what they really want...<strong>a brand new set of musical \"power tools\"</strong> to get them sounding better than ever.</p>

<p>Infinite Musician is now offering gift cards for all of our highly effective and acclaimed courses, taught by some of the world\'s greatest saxophonists.</p>

<p>So grab a gift card today, schedule the date and time you want it to go out, and <strong>cross your lucky saxophonist's name off of that shopping list!</strong></p>";
$ProductName2 = "NEW: Gift Cards for All Sax and Jazz Courses";
$DisplayUrl2 = "INFINITEMUSICAN.COM";
$Url2 = "https://www.infinitemusician.com/p/gift-cards";
$ad_name2 = "gift-card-collage-900x471-1";
$slot_name2 = "Gift Cards Black Friday 2023";

// $Img2 = get_bloginfo('url') . "/wp-content/uploads/social-sharing-SALE-VERSION-2023-Expanded-LFCC-Sales-Page-Cover.jpg";
// $Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
// $MainText2 = "<p>Build your chops using the same types of exercises used by Brecker and Coltrane.</p>";
// $ProductName2 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
// $DisplayUrl2 = "INFINITEMUSICAN.COM";
// $Url2 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean?coupon_code=CHOPS2023&product_id=974744";
// $ad_name2 = "lfcc-2023-enhanced-workbooks-sale-multi";
// $slot_name2 = "LFCC FB-Style Featured Ad - Enhanced-2023 Sale - Workbooks";

//////////////////////////////////////////////////////////
/////////////// END OF ADS SECTION //////////////////////
//////////////////////////////////////////////////////////

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
