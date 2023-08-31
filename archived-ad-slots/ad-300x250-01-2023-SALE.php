<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/2023-Enhanced-LFCC-FB-multi.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>Showing off with Mind-LESS fast notes is obviously not where it’s at. Nonetheless, great technique, used mind-FULLY unlocks a critical key to making an emotionally-compelling impression on listeners.</p>

<p>In this popular course, monstrous saxophonist Adam Larson shares a mind-FULL approach to developing technique with the same approach used by modern saxophone giants like John Coltrane and Michael Brecker. </p>

<p>With this 2023 Expanded edition, we’ve added a separate PDF worksheet for every. single. exercise in the videos so that you can see results and not just drift away from the material after perusing the course once or twice (like with so many other courses).</p>

<p>The good news is that from now through this coming Tuesday, August 8 at 11:59PM PST, you can get started with this barrier-busting course at a 25% discount, and can be paid off in 4 easy payments as part of our new “Buy Now, Pay Later” option.</p>

<p>So click the button below to make today the day that you begin the journey to not only turbo-charged technique, but seriously-enhanced ears, “musical visualization” skills, and improvisational vocabulary.</p>";
$ProductName1 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
$DisplayUrl1 = "INFINITEMUSICAN.COM";
$Url1 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean?coupon_code=CHOPS2023&product_id=974744";
$ad_name1 = "lfcc-2023-expanded-sale-multi";
$slot_name1 = "LFCC FB-Style Featured Ad - Enhanced-2023 Sale - Multi";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/social-sharing-SALE-VERSION-2023-Expanded-LFCC-Sales-Page-Cover.jpg";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>Build your chops using the same types of exercises used by Brecker and Coltrane.</p>";
$ProductName2 = "Lightning-Fast and Crystal-Clean Saxophone Technique";
$DisplayUrl2 = "INFINITEMUSICAN.COM";
$Url2 = "https://www.infinitemusician.com/p/lightning-fast-and-crystal-clean?coupon_code=CHOPS2023&product_id=974744";
$ad_name2 = "lfcc-2023-enhanced-workbooks-sale-multi";
$slot_name2 = "LFCC FB-Style Featured Ad - Enhanced-2023 Sale - Workbooks";

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
