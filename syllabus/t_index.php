<html>
<?php require 'head.php' ?>

<body>
  <div class="wrap">
    <div class="con1">
      <div class="main-visual" data-v-d28f5fe6="" data-v-04c3d416="">
        <p class="lead" data-v-d28f5fe6="">一橋大学生のための大学授業検索サービス </p>
        <p class="concept" data-v-d28f5fe6="">To University<br> Student</p>
        <div class="button-container" data-v-d28f5fe6=""><a href="t_search.php" class="basic-button is-standard is-large" data-v-553e386e="" data-v-d28f5fe6="">授業を検索する</a></div>
        <div class="button-container" data-v-d28f5fe6=""><a href="webroot/SignUp.php" class="basic-button is-standard is-large number2" data-v-553e386e="" data-v-d28f5fe6="">登録してはじめよう</a></div>
      </div>
    </div>
    <div class="title-h1">
      <h1> あなたにあった授業を提供します </h1>
    </div>
    <div class="slick-box">
      <?php foreach ($syllabus as $g) { ?>
      <figure>
        <dl class="clearfix">
          <dt><a href="content.php?name=<?php echo $g['lecture'] ?>"></a></dt>
          <dd>
            <h5 class="kanren-t"> <a href="content.php?name=<?php echo $g['lecture'] ?>"><?php echo $g['lecture'] ?></a> </h5>
            <table class="table table-condensed">
              <tbody>
                <tr class="table-header">
                  <th>講師名</th>
                  <th>曜日</th>
                  <th>何限</th>
                </tr>
                <tr>
                  <td><?php echo $g['teacher'] ?><br></td>
                  <td><?php echo $g['day'] ?><br></td>
                  <td><?php echo $g['coma'] ?>限<br></td>
                </tr>
              </tbody>
            </table>
            <div class="smanone">
              <p><?php echo $g['feature'] ?></p>
            </div>
            <div class="tag-list">
              <ul>
                <li>楽単</li>
                <li>先生が面白い</li>
                <li>重要</li>
              </ul>
            </div>
          </dd>
        </dl>
      </figure>
      <?php } ?>
    </div>
    <div class="slick-box">
      <?php foreach ($syllabus as $g) { ?>
      <figure>
        <dl class="clearfix">
          <dt><a href="content.php?name=<?php echo $g['lecture'] ?>"></a></dt>
          <dd>
            <h5 class="kanren-t"> <a href="content.php?name=<?php echo $g['lecture'] ?>"><?php echo $g['lecture'] ?></a> </h5>
            <table class="table table-condensed">
              <tbody>
                <tr class="table-header">
                  <th>講師名</th>
                  <th>曜日</th>
                  <th>何限</th>
                </tr>
                <tr>
                  <td><?php echo $g['teacher'] ?><br></td>
                  <td><?php echo $g['day'] ?></td>
                  <td><?php echo $g['coma'] ?>限<br></td>
                </tr>
              </tbody>
            </table>
            <div class="smanone">
              <p><?php echo $g['feature'] ?></p>
            </div>
            <div class="tag-list">
              <ul>
                <li>楽単</li>
                <li>先生が面白い</li>
                <li>重要</li>
              </ul>
            </div>
          </dd>

        </dl>
      </figure>
      <?php } ?>
    </div>
    <div class="requestArea">
      <p class="intro">気になる授業を調べる</p>
      <a href="t_search.php" class="rollover" style="opacity: 1;">授業をしらべる</a>
      <p>やりがいを感じるミッションや働きたいと思う会社をリクエストできます。</p>
    </div>
    <div class="serach">
      <div class="img-content">
        <h3 class="panel-title">人気授業ランキング</h3>
        <p class="text">転職・キャリアの個別相談やポートフォリオ相談など、デザイナーに特化したイベントを多数開催してます。</p>
        <div class="content1 con1">
          <p>勉強する</p>
        </div>
        <div class="content1 con2">
          <p>遊ぶ</p>
        </div>
        <div class="content1 con3">
          <p>出会い</p>
        </div>
      </div>
      <p class="search-text">例えば、<span>人気のゼミ・男女の交流がある・面白い授業</span>など<br>それぞれの大学における目的に合わせた授業のカリキュラムを算出します。 </p>
    </div>
  </div>
  <?php require 'footer.php' ?>
</body>

</html>
