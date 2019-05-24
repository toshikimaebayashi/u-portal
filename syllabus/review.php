<?php 
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM syllabus");
  $syllabus = $st->fetchAll();
  require 't_review.php';
?>
