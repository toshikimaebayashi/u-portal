<?php
session_start();
?>

<html>
<?php require 'head.php' ?>

<body>
  <div class="wrap">
    <?php require 'header.php' ?>
    <div class="icatch">
      <div class="inner">
        <div class="text-wrap">
          <p><span>ITサービス・ツールを<wbr>まとめて比較</span></p>
          <h1>おすすめ資料カテゴリ一覧</h1>
        </div>
      </div>
    </div>
    <div class="theme-links">
      <h2>カテゴリを選択してください</h2>
      <ul>
        <?php require 'searchs/search_form.php' ?>
      </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-xs-12">
          <?php require 'searchs/search.php' ?>
        </div>
      </div>
    </div>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>
