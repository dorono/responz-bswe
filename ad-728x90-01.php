<div class="banner-wide-box boxunit">
  <?php

  $Img1 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-consistent-728x90-v2.jpg";
  $Alt1 = "Roberto's Winds";
  $Url1 = "https://www.robertoswinds.com/";
  $class1 = "robertos_winds_wide_rect";
  $gaEventLabel1 = "Robertos Winds - Consistent Character and Power";

  $Img2 = "https://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-tim-price-728x90-v2.jpg";
  $Alt2 = "Roberto's Winds";
  $Url2 = "https://www.robertoswinds.com/";
  $class2 = "robertos_winds_wide_rect";
  $gaEventLabel2 = "Robertos Winds - Tim Price";

  $num = mt_rand (1,2);

  $Image = ${'Img'.$num};
  $Alt = ${'Alt' .$num};
  $URL = ${'Url'.$num};
  $class = ${'class'.$num};
  $gaEventLabel = ${'gaEventLabel'.$num};

  print "<a data-slot-name=\"".$gaEventLabel."\" rel=\"noopener noreferrer nofollow\" href=\"".$URL."\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\"></a>";

  ?>
</div>