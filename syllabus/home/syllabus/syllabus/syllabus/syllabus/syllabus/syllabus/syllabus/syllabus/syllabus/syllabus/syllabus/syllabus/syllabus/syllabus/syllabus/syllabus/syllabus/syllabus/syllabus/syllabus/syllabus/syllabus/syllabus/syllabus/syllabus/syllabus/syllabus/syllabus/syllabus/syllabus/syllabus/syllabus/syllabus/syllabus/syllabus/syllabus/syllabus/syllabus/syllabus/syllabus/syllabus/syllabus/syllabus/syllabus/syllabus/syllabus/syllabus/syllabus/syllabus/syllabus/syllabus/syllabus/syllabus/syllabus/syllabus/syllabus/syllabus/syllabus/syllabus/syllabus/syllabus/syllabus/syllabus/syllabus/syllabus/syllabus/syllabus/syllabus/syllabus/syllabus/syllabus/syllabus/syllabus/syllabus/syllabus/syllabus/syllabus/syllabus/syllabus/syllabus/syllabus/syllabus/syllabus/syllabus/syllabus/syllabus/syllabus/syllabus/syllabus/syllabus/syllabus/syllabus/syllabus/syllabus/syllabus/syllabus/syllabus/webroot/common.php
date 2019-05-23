<?php
  session_start();

  function connect() {
    return new PDO("mysql:dbname=syllabus", "root");
  }

  function img_tag($code) {
    if (file_exists("images/$code.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="images/' . $name . '.jpg" alt="">';
  }
  

?>