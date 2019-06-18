<?php
  require 'common.php';
  require 'media/class_media.php';
  $upload_user_name = $_SESSION["NAME"];
  Media::profile_media_up($upload_user_name);
  $userdata = Media::return_user_data($upload_user_name);
  require 't_profile.php';
?>
