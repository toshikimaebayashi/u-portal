<?php 
  require 'common.php';
  require 'media/class_media.php';
  require 'menu.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM syllabus");
  $syllabus = $st->fetchAll();
  $menuName = $_GET['name'];
  $syllabuscontent = Menu::findByName($syllabus, $menuName);
  require 't_content.php';
?>
