<?php 
require 'menu.php';
$menuName = $_GET['name'];
$syllabuscontent = findByName($syllabus, $menuName);
?>
<html>

<?php require 'head.php' ?>

<body>
  <div class="wrap">
    <?php require 'header.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-xs-12">
          <div class="mT5 mB10">
            <ol class="breadcrumb">
              <li><a href="/">トップ</a></li>
              <li><a>「2017」 - 秋学期 - の検索結果</a></li>
              <li class="active">現代社会の解読</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-12 col-xs-12">
            </div>
          </div>
          <div class="LessonDetail">
            <?php require 'content/content_header.php' ?>
            <?php require 'content/class_content.php' ?>
            <div class="articleTitle">
              <h2 class="articleTitle_regular">PICK UP 社員クチコミ</h2>
              <h3 class="articleTitle_small articleTitle_small-hyphen">株式会社三菱UFJ銀行</h3>
            </div>
            <?php require 'reviews/d_review.php' ?>
            <?php require 'content/content_others.php' ?>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <?php require 'content/sidebar.php' ?>
        </div>
      </div>
    </div>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>
