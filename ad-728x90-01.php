<div class="banner-wide-box boxunit">
  <?php

  $Img1 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-for-otto-link-1.jpg";
  $Alt1 = "Robertos Winds Uovo - For Otto Link and Metal Mouthpieces";
  $Url1 = "https://www.robertoswinds.com/pages/uovo?ref=cSq6mhW833ZuA";
  $class1 = "robertos_winds_uovo_for_otto_link-1";
  $gaEventLabel1 = "Robertos Winds Uovo - For Otto Link 1";

  $Img2 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-for-otto-link-2.jpg";
  $Alt2 = "Robertos Winds Uovo - For Otto Link and Metal Mouthpieces";
  $Url2 = "https://www.robertoswinds.com/pages/uovo?ref=cSq6mhW833ZuA";
  $class2 = "robertos_winds_uovo_for_otto_link-2";
  $gaEventLabel2 = "Robertos Winds Uovo - For Otto Link 2";

  $Img3 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-it-sings-1.jpg";
  $Alt3 = "Robertos Winds Uovo - For Otto Link and Metal Mouthpieces";
  $Url3 = "https://www.robertoswinds.com/pages/uovo?ref=cSq6mhW833ZuA";
  $class3 = "robertos_uovo_it_sings_1";
  $gaEventLabel3 = "Robertos Winds - It Sings 1";

  $Img4 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-it-sings-2.jpg";
  $Alt4 = "Robertos Winds Uovo - For Otto Link and Metal Mouthpieces";
  $Url4 = "https://www.robertoswinds.com/pages/uovo?ref=cSq6mhW833ZuA";
  $class4 = "robertos_uovo_it_sings_2";
  $gaEventLabel4 = "Robertos Winds - It Sings 2";

  $Img5 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-it-sings-3.jpg";
  $Alt5 = "Robertos Winds Uovo - For Otto Link and Metal Mouthpieces";
  $Url5 = "https://www.robertoswinds.com/pages/uovo?ref=cSq6mhW833ZuA";
  $class5 = "robertos_uovo_it_sings_3";
  $gaEventLabel5 = "Robertos Winds - It Sings 3";

  $num = mt_rand (1,5);

  $Image = ${'Img'.$num};
  $Alt = ${'Alt' .$num};
  $URL = ${'Url'.$num};
  $class = ${'class'.$num};
  $gaEventLabel = ${'gaEventLabel'.$num};

  print "<a data-slot-name=\"".$gaEventLabel."\" rel=\"noopener noreferrer nofollow\" href=\"".$URL."\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\"></a>";

  ?>
</div>