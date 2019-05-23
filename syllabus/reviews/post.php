<?php

  require '../common.php';
  
  if ( !empty($_POST['btn-confirm'])) {
      
    $resultgrade = $_POST['resultgrade'];
    $resultlearn = $_POST['resultlearn'];
    $resulteasylearn = $_POST['resulteasylearn'];
    $resulttakeclass = $_POST['resulttakeclass'];
    $resultcomment = $_POST['resultcomment'];
    $classname = $_POST['classname'];
    $username = $_SESSION["NAME"];
    
    $pdo = new PDO("mysql:dbname=syllabus", "root");
    
    $sql = "INSERT INTO post(resultgrade,resultlearn,resulteasylearn,resulttakeclass,resultcomment,classname,username) VALUES(:resultgrade, :resultlearn, :resulteasylearn, :resulttakeclass, :resultcomment, :classname, :username)";
    
    $stmt = $pdo->prepare($sql);
    
    $params = array(':resultgrade' => $resultgrade, ':resultlearn' => $resultlearn, ':resulteasylearn' => $resulteasylearn, ':resulttakeclass' => $resulttakeclass, ':resultcomment' => $resultcomment, ':classname' => $classname, ':username' => $username);
    
    $stmt->execute($params);
    
    header('Location: ../index.php');

    exit();
  }

?>
