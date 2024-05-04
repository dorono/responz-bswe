<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/FAMT_800x419-for-bswe.png";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>Here's a new alternative to the uninspiring tunes often found in the average beginning sax book. This collection of 25 tunes, each with backing and demonstration tracks plus a video tutorial, is the product one of my most significant discoveries in over two decades of working with beginning saxophonists. That is, beginners learn fundamentals much faster by playing the kind of music that attracted them to the horn in the first place.</p>";
$ProductName1 = "🎷 Sax Fundamentals Faster";
$DisplayUrl1 = "INFINITEMUSICAN.COM";
$Url1 = "https://www.infinitemusician.com/p/fun-and-modern-tunes-for-beginner-saxophonists?coupon_code=FUNTUNES&product_id=4992501";
$ad_name1 = "FAMT_800x419-for-bswe";
$slot_name1 = "FAMT 30% Off Hero Banner";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/FAMT_800x419-for-bswe.png";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>Here's a new alternative to the uninspiring tunes often found in the average beginning sax book. This collection of 25 tunes, each with backing and demonstration tracks plus a video tutorial, is the product one of my most significant discoveries in over two decades of working with beginning saxophonists. That is, beginners learn fundamentals much faster by playing the kind of music that attracted them to the horn in the first place.</p>";
$ProductName2 = "🎷 Sax Fundamentals Faster";
$DisplayUrl2 = "INFINITEMUSICAN.COM";
$Url2 = "https://www.infinitemusician.com/p/fun-and-modern-tunes-for-beginner-saxophonists?coupon_code=FUNTUNES&product_id=4992501";
$ad_name2 = "FAMT_800x419-for-bswe";
$slot_name2 = "FAMT 30% Off Hero Banner";

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
