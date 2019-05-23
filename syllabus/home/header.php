<header>
  <div class="contain">
    <div class="container-small">
      <a href="index.php">
        <img src="images/transparent.png" class="title">
      </a>
    </div>
    <?php if(!isset($_SESSION["NAME"])) { ?>
    <div class="action-menu pc-only">
      <a class="login fa-icon" href="webroot/login.php">ログイン</a>
      <a class="button-signin fa-icon" href="webroot/SignUp.php">会員登録</a>
    </div>
    <?php } else {?>
    <div class="action-menu pc-only">
      <p><?php echo $_SESSION["NAME"] ?>でログインしています</p>
      <a class="login fa-icon" href="webroot/logout.php">ログアウト</a>
      <a class="button-signin fa-icon" href="profile.php">マイページへ</a>
    </div>
    <?php } ?>
  </div>
</header>
