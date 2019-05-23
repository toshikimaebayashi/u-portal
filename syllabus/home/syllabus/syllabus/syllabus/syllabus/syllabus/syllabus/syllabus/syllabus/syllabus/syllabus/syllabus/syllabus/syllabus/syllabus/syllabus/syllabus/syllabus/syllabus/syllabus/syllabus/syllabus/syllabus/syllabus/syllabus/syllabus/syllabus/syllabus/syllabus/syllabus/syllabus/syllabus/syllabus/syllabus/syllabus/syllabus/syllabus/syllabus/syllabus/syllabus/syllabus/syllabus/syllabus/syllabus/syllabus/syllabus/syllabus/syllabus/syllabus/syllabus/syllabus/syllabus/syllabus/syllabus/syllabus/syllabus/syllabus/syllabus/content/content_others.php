<div class="Lesson__relative-lesson">
  <h4 class="text-success">あなたが閲覧したシラバス</h4>
  <div class="LessonModule__container">
    <ol class="LessonModule__carousel">
      <div class="slick-box">
        <?php foreach ($syllabus as $g) { ?>
        <li class="LessonModule__col item">
          <p class="LessonModule__has-review">
            <i class="glyphicon glyphicon-flash"></i>
          </p>
          <div class="LessonModule__header">
            <h3 class="LessonModule__title">
              <a href="content.php?name=<?php echo $g['lecture'] ?>"><?php echo $g['lecture'] ?></a>&nbsp;/&nbsp;池袋
            </h3>
            <p class="LessonModule__item">全学部共通カリキュラム&nbsp;/&nbsp;総合系科目(2016~)</p>
          </div>
          <div class="LessonModule__footer">
            <table class="table table-condensed">
              <tbody>
                <tr class="table-header">
                  <th>講師名</th>
                  <th>学期</th>
                  <th>コマ</th>
                </tr>
                <tr>
                  <td><?php echo $g['teacher'] ?><br></td>
                  <td><?php echo $g['day'] ?><br></td>
                  <td><?php echo $g['coma'] ?>限<br></td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <?php } ?>
      </div>
    </ol>
  </div>
</div>
