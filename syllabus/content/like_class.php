<?php

  require '../common.php';
  require '../menu.php';

  if ( !empty($_POST['btn-like'])) {
  
    $classname = $_POST['classname'];
    $username = $_SESSION["NAME"];
    
    Menu::sendLikeclass($classname, $username);
  }
  
?>
