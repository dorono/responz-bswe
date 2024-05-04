<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/JodyJazz-DVHR_1200x628px.jpg";
$Cta1 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText1 = "<p>The new JodyJazz DV HR Tenor uses the patented DV secondary window to add mid and low harmonics, resulting in a more authoritative tone than normal tenor sax mouthpieces provide. And the long straight somewhat high baffle gives the mouthpiece it’s fantastic projection and cutting power along with excellent altissimo.</p>";
$ProductName1 = "The New DV HR Tenor from JodyJazz";
$DisplayUrl1 = "JODYJAZZ.COM";
$Url1 = "https://jodyjazz.com/dv-hr-tenor/";
$ad_name1 = "JodyJazz-DVHR_1200x628px";
$slot_name1 = "JodyJazz Hero Banner - Scream Cry Soothe";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/FAMT_800x419-for-bswe-1.png";
$Cta2 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText2 = "<p>Here's a new alternative to the uninspiring tunes often found in the average beginning sax book. This collection of 25 tunes, each with backing and demonstration tracks plus a video tutorial, is the product one of my most significant discoveries in over two decades of working with beginning saxophonists. That is, beginners learn fundamentals much faster by playing the kind of music that attracted them to the horn in the first place.</p>";
$ProductName2 = "🎷 Sax Fundamentals Faster";
$DisplayUrl2 = "INFINITEMUSICAN.COM";
$Url2 = "https://www.infinitemusician.com/p/fun-and-modern-tunes-for-beginner-saxophonists";
$ad_name2 = "FAMT_800x419-for-bswe";
$slot_name2 = "FAMT Hero Banner With Features";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/liebman-multi.jpg";
$Cta3 = get_bloginfo('url') . "/wp-content/uploads/fb-learn-more-btn.jpg";
$MainText3 = "<p>Regardless of your horn, mouthpiece, or reed, the truth is, to the outside listener, you sound pretty much like...you. It's not that gear doesn't affect your sound at all, but your biggest and richest sound will only come by developing the skills within both your body and mind to sound great on any setup.</p>

<p>So if you're willing to move beyond having your day ruined by a lousy reed, then sax legend David Liebman's course, <em>Ultimate Guide to Saxophone Sound Production</em> is where you're going to want to go next.</p>

<p>Broken down into bite-sized lessons, this streaming video program covers just about every single aspect of saxophone sound production. It represents his entire life's work teaching the techniques and concepts that were handed down to masters such as Michael Brecker, Bob Berg, and Harvey Pittel (among many others), and then refined over the course of decades teaching countless lessons and masterclasses worldwide. Click below to see for yourself why so many professional saxophonists consider David's thorough, methodical, and practical approach the \"real deal\" for players at any level.</p>";
$DisplayUrl3 = "SAXOPHONETONE.COM";
$Alt3 = "The Ultimate Guide to Saxophone Sound Production";
$ProductName3 = "The Ultimate Guide to Saxophone Sound Production";
$Url3 = "https://www.infinitemusician.com/p/ultimate-guide-to-saxophone-sound-production";
$ad_name3 = "ugssp-ad-v1-course-title-multi";
$slot_name3 = "UGSSP FB-Style Featured Ad - COURSE TITLE";

//////////////////////////////////////////////////////////
/////////////// END OF ADS SECTION //////////////////////
//////////////////////////////////////////////////////////

// UPDATE IN "Inside the Loop" AND "FB Ad Style Widget (After Paragraph) WIDGETS

$num = rand (1,3);

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
