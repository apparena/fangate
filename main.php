<?php
   $fan_image=$config['fan_image']['value'];
   $nonfan_image=$config['nonfan_image']['value'];

   if(is_fan() == true)
   {
      echo '<img src="'.$fan_image.'" alt="nonfan">';
   }
   else
   {
      echo '<img src="'.$nonfan_image.'" alt="fan" >';
   }

