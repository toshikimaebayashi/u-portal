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
        <div class="col-xs-12"></div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="mT5 mB10">
            <ol class="breadcrumb">
              <li><a href="/">トップ</a></li>
              <li><a href="/lesson/12768">宇宙の科学</a></li>
              <li class="active">レビューの登録</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-xs-12"><a href="/lesson/12768">戻る</a></div>
          </div>
          <div class="LessonDetail">
            <div class="LessonDetail__header">
              <div class="LessonDetail__title">
                <div class="pull-left">
                  <div class="LessonDetail__item">
                    <h1 class="lecture-title">
                      <?php echo $syllabuscontent['lecture'] ?>
                    </h1>
                  </div>
                </div>
                <div class="pull-down">
                  <ul class="LessonDetail__nav-list">
                    <li class="LessonDetail__nav">
                      <a class="btn btn-primary btn-go">レビューを書く</a>
                    </li>
                    <li class="LessonDetail__nav">
                      <div id="Favorite__button--12599">
                        <form method="post">
                          <button class="btn btn-warning btn-" type="submit">
                            <i class="glyphicon glyphicon-star"></i>お気に入りに追加
                          </button>
                          <input type="hidden" name="authenticity_token">
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="LessonDetail__info">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr class="tr-table">
                        <th>年度</th>
                        <th>学部</th>
                        <th>学科</th>
                        <th>講師</th>
                        <th>学期</th>
                        <th>コマ</th>
                        <th>教室</th>
                      </tr>
                      <tr>
                        <td>2018</td>
                        <td>全学部共通カリキュラム</td>
                        <td>総合系科目(2016~)</td>
                        <td><a>二階堂　晃祐</a><br></td>
                        <td>秋</td>
                        <td>火・4<br></td>
                        <td>8201</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php require 'reviews/new_result.php' ?>
        </div>
      </div>
    </div>
    <?php require 'footer.php' ?>
  </div>
</body>

</html>
