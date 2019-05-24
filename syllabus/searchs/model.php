<?php
function getUserData($params){
//DBの接続情報
  
  //DBコネクタを生成
  $pdo = new PDO("mysql:dbname=syllabus", "root");
  
  //入力された検索条件からSQl文を生成
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
     var_dump ($sql);
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
?>
