<?php 

class Menu {
  
  public $code;
  public $lecture;
  public $coma;
  public $day;
  public $record;
  public $feature;
  public $content;
  public $teacher;
  public $note;
  public $book;
  public $bookother;
  public $campus;
  public $year;
  public $faculty_id;
  public $term;
  
  public function findByName($syllabus, $name) {
    foreach ((array)$syllabus as $g) {
      if ($g['lecture'] == $name) {
        return $g;
      }
    }
  }

  public function findByNamereview($syllabus, $name) {
    foreach ((array)$syllabus as $g) {
      if ($g['classname'] == $name) {
        return $g;
      }
    }
  }

  public function findPost($post, $name) {
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

  public function findBypost($name) {
    $pdo = connect();
    $sql = "SELECT * FROM post WHERE classname = '$name' ";
    $st = $pdo->query($sql);
    $posts = $st->fetchAll();
    return $posts;
  }
  
  
  //favoriteテーブルにユーザーの名前が含まれているか返すメソッド
  public function findLikeUserdata($upload_user_name){
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM favorite WHERE username =" ."'". $upload_user_name."'");
    $userdata = $st->fetchAll();
    return $userdata;
  }

  // ユーザーが授業をお気に入り登録したかどうか調べるメソッド。もし登録していたらtrueを返す
  public function findLikeclass($userdata, $syllabuscontent) {
    $pot;
    foreach ($userdata as $g) {
      $pot = in_array($syllabuscontent['lecture'], $g);
      if ($pot == true){
        break;
      }
    }
    return $pot;
  }
  
  // ユーザーがお気に入り登録したらデータベースに情報を送るメソッド
  public function sendLikeclass($classname, $username) {
    $pdo = connect();
    $sql = "INSERT INTO favorite(username, likeclass) VALUES (:username, :classname);";
    $stmt = $pdo->prepare($sql);
    $params = array(':username' => $username , ':classname' => $classname);
    $stmt->execute($params);
    header('Location: ../index.php');
    exit();
  }
  
  public function getUserData($params){
   
    $pdo = connect();
  
    $where = [];
    if(!empty($params['name'])){
      $where[] = "name like '%{$params['name']}%'";
    }
    if(!empty($params['year'])){
      $where[] = 'year = '  . $params['year'];
    }
    if(!empty($params['campus'])){
      $where[] = 'campus = '  .'"'. $params['campus'].'"';
    }
    if(!empty($params['term'])){
      $where[] = 'term = '  .'"'. $params['term'].'"';
    }
    if(!empty($params['day'])){
      $where[] = 'day = '  .'"'. $params['day'] .'"' ;
    }
    if(!empty($params['coma'])){
      $where[] = 'coma = ' .$params['coma'] ;
    }
    if($where){
      $whereSql = implode(' AND ', $where);
      // implode:合体させる
      $sql = 'select * from syllabus WHERE ' . $whereSql ;
    }else{
      $sql = 'select * from syllabus';
    }
    $sql2 = 'select * from syllabus name like "%財務管理論%" ';
    //SQL文を実行する
    $UserDataSet = $pdo->query($sql);
    //扱いやすい形に変える
    $result = [];
    while($row = $UserDataSet->fetch()){
      $result[] = $row;
    }
    return $result;
  }
  
}
  
?>
