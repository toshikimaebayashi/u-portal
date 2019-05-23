<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}
?>

<!doctype html>
<html>

<?php require '../head.php' ?>

<body>
  <div class="form-wrapper">
    <div class="form-item">
      <h1>メイン画面</h1>
      <div class="main">
        <!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
        <p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p> <!-- ユーザー名をechoで表示 -->
        <ul class="list">
          <li><a href="Logout.php">ログアウト</a></li>
          <li><a href="../index.php">トップへ戻る</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>
