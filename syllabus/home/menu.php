<?php 
 
  function findByName($syllabus, $name) {
    foreach ((array)$syllabus as $g) {
      if ($g['lecture'] == $name) {
        return $g;
      }
    }
  }

  function findByNamereview($syllabus, $name) {
    foreach ((array)$syllabus as $g) {
      if ($g['classname'] == $name) {
        return $g;
      }
    }
  }

  function findPost($post, $name) {
    
    $arrayPost = [];
    $i = 0;
    foreach((array)$post as $g) {
      if ($g['classname'] == $name) {
        $arrayPost[$i]['comment'] = $g;
        $i ++;
      }
    print var_export($arrayPost , true);
    return $arrayPost;
    }
  }

  function findBypost($name) {
    $pdo = connect();
    $sql = "SELECT * FROM post WHERE classname = '$name' ";
    $st = $pdo->query($sql);
    $posts = $st->fetchAll();
    return $posts;
  }

// ユーザーが授業をお気に入り登録したかどうか調べるメソッド。もし登録していたらtrueを返す
  function findLikeclass($userdata, $syllabuscontent) {
    $pot;
    foreach ($userdata as $g) {
      $pot = in_array($syllabuscontent['lecture'], $g);
      if ($pot == true){
        break;
      }
    }
    return $pot;
  }
  
?>
