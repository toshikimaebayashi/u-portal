<?php

  require '../common.php';

  if ( !empty($_POST['btn-like'])) {
  
    $classname = $_POST['classname'];
    $username = $_SESSION["NAME"];
    
    $pdo = connect();
    
    $sql = "INSERT INTO favorite(username, likeclass) VALUES (:username, :classname);";
    
    $stmt = $pdo->prepare($sql);
    
    $params = array(':username' => $username , ':classname' => $classname);
    
    $stmt->execute($params);
    
    header('Location: ../index.php');

    exit();
  }
  
?>
