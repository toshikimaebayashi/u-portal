<?php
session_start();

if (isset($_SESSION["NAME"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

<!doctype html>
<html>

<?php require '../head.php' ?>

<body>
  <div class="form-wrapper">
    <div class="form-item">
      <h1>ログアウト画面</h1>
      <div class="main">
        <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
        <ul class="list">
          <li><a href="Login.php">ログイン画面に戻る</a></li>
          <li><a href="../index.php">トップへ戻る</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>
