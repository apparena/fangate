<?php
   /*
   require_once dirname(__FILE__).'/lib/Facebook/facebook.php';

   $fb_app_id=$config['fb_app_id'];
   $fb_app_secret=$config['fb_app_secret'];

   $facebook = new Frd_Facebook(array(
      'appId' => $fb_app_id,
      'secret' => $fb_app_secret,
      'cookie' => true
   ));

   */
   $fan_image=$config['fan_image'];
   $nonfan_image=$config['nonfan_image'];

   if(is_fan() == true)
   {
      echo '<img src="'.$nonfan_image.'" alt="nonfan">';
   }
   else
   {
      echo '<img src="'.$fan_image.'" alt="fan" >';
   }

