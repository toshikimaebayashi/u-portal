<!doctype html>
<html>

<body>
  <div class="form-wrapper">
    <h1>ログイン画面</h1>
    <form id="loginForm" name="loginForm" action="" method="POST">

      <div>
        <font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font>
      </div>
      <div class="form-item">
        <label for="username">ユーザー名</label><input type="text" id="username" name="username" placeholder="ユーザー名を入力" value="<?php if (!empty($_POST["username"])) {echo htmlspecialchars($_POST["username"], ENT_QUOTES);} ?>">
        <br>
        <label for="password">パスワード</label><input type="password" id="password" name="password" value="" placeholder="パスワードを入力">
        <br>
        <div class="button-panel">
          <input type="submit" id="login" name="login" value="ログイン" class="button">
        </div>
      </div>
    </form>
    <br>
    <form action="SignUp.php">
      <fieldset>
        <legend>新規登録フォーム</legend>
        <input type="submit" value="新規登録">
      </fieldset>
    </form>
  </div>
</body>
