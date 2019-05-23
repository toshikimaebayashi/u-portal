<?php

session_start();

$errorMessage = "";

 require '../head.php';


require "t_login.php" ;

if (isset($_POST["login"])) {
  
  if (empty($_POST["username"])) {  
    $errorMessage = 'ユーザー名が未入力です。';
    
  } else if (empty($_POST["password"])) {
    $errorMessage = 'パスワードが未入力です。';
  }

  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    
    $username = $_POST["username"];
    
    $dsn = sprintf("mysql:dbname=syllabus", "root");
    
    // try {例外が発生する可能性のあるコード} catch (Exception $e) {例外が発生した場合に行う処理}
    try {
      $pdo = new PDO("mysql:dbname=syllabus", "root");
      // $pdo->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

      $stmt = $pdo->prepare('SELECT * FROM userdeta WHERE name = ?');
      $stmt->execute(array($username));
      // ?の部分に$usernameを入れている

      $password = $_POST["password"];

      if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      // PDOでMySQLに接続し、fetch(PDO::FETCH_ASSOC)を使って、すべての行を取り出し表示する
        if (password_verify($password, $row['password'])) {
          session_regenerate_id(true);

          // 入力したIDのユーザー名を取得
          $name = $row['name'];
                    $sql = "SELECT * FROM userData WHERE name = $name";  //入力したIDからユーザー名を取得
                    $stmt = $pdo->query($sql);
                    foreach ($stmt as $row) {
                        $row['name'];  // ユーザー名
                    }
                    
          
          $_SESSION["NAME"] = $row['name'];
          $_SESSION['count'] = 1;
          header("Location: main.php");  // メイン画面へ遷移
          exit();  // 処理終了
        } else {
          // 認証失敗
          $errorMessage = 'ユーザー名あるいはパスワードに誤りがあります。';
        }
      } else {
        // 4. 認証成功なら、セッションIDを新規に発行する
        // 該当データなし
        $errorMessage = 'ユーザーIDあるいはパスワードに誤りがあります。';
      }
    } catch (PDOException $e) {
      $errorMessage = 'データベースエラー';
      //$errorMessage = $sql;
      // $e->getMessage() でエラー内容を参照可能（デバッグ時のみ表示）
      // echo $e->getMessage();
    }
  }
}


?>
