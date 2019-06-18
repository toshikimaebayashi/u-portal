<?php 

class Review {
  
  public $resultgrade;
  public $resultlearn;
  public $resulteasylearn;
  public $resulttakeclass;
  public $resultcomment;
  public $classname;
  public $username;
  
  public function __construct($resultgrade, $resultlearn, $resulteasylearn, $resulttakeclass, $resultcomment, $classname, $username) {
    $this->resultgrade = $resultgrade;
    $this->resultlearn = $resultlearn;
    $this->resulteasylearn = $resulteasylearn;
    $this->resulttakeclass = $resulttakeclass;
    $this->resultcomment = $resultcomment;
    $this->classname = $classname;
    $this->username = $username;
  }
  
  public function createReview($resultgrade, $resultlearn, $resulteasylearn, $resulttakeclass, $resultcomment, $classname, $username) {
    $pdo = connect();
    $sql = "INSERT INTO post(resultgrade,resultlearn,resulteasylearn,resulttakeclass,resultcomment,classname,username) VALUES(:resultgrade, :resultlearn, :resulteasylearn, :resulttakeclass, :resultcomment, :classname, :username)";
    $stmt = $pdo->prepare($sql);
    $params = array(':resultgrade' => $resultgrade, ':resultlearn' => $resultlearn, ':resulteasylearn' => $resulteasylearn, ':resulttakeclass' => $resulttakeclass, ':resultcomment' => $resultcomment, ':classname' => $classname, ':username' => $username);
    $stmt->execute($params);
    header('Location: ../index.php');
    exit();
  }
  
  public function displayReview() {
    $pdo = connect();
    $st = $pdo->query("SELECT * FROM post");
    $syllabuspost = $st->fetchAll();
    $postcontent = findByPost($syllabuscontent['lecture']);
    return $postcontent;
  }
}
?>
