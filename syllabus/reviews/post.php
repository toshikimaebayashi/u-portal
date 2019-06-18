<?php

  require '../common.php';
  require 'class_Review.php';
  
  if ( !empty($_POST['btn-confirm'])) {
    
    $resultgrade = $_POST['resultgrade'];
    $resultlearn = $_POST['resultlearn'];
    $resulteasylearn = $_POST['resulteasylearn'];
    $resulttakeclass = $_POST['resulttakeclass'];
    $resultcomment = $_POST['resultcomment'];
    $classname = $_POST['classname'];
    $username = $_SESSION["NAME"];
    
    $userReview = new Review($resultgrade, $resultlearn, $resulteasylearn, $resulttakeclass, $resultcomment, $classname, $username);
    
    $userReview->createReview($resultgrade, $resultlearn, $resulteasylearn, $resulttakeclass, $resultcomment, $classname, $username);
  }

?>
