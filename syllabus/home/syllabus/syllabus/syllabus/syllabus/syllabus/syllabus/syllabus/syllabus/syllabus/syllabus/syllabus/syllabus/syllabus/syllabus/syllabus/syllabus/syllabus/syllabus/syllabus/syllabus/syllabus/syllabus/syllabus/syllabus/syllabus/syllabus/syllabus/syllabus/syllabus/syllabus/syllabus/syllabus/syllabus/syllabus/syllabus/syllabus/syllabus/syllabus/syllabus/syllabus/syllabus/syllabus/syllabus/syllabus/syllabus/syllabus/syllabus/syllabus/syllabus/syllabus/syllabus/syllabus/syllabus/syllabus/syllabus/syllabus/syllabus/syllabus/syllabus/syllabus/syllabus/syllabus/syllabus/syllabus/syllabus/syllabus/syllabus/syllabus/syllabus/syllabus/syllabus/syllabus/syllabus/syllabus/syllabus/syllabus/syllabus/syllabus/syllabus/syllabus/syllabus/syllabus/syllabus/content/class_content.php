<div class="Syllabus mT10">
  <div class="row-A">
    <div class="col-sm-6-A col-xs-12">
      <ul class="Syllabus__list">
        <li class="Syllabus__row-1">
          <div class="Syllabus__header">
            <p>科目コード/科目名</p>
          </div>
          <div class="Syllabus__content">
            <p class="Syllabus__text"><?php echo $syllabuscontent['lecture'] ?></p>
          </div>
        </li>
        <li class="Syllabus__row-1">
          <div class="Syllabus__header">
            <p>テーマ/サブタイトル等</p>
          </div>
          <div class="Syllabus__content">
            <p class="Syllabus__text"><?php echo $syllabuscontent['lecture'] ?></p>
          </div>
        </li>
        <li class="Syllabus__row-1">
          <div class="Syllabus__header">
            <p>担当者</p>
          </div>
          <div class="Syllabus__content">
            <p class="Syllabus__text"><?php echo $syllabuscontent['teacher'] ?></p>
          </div>
        </li>
        <li class="Syllabus__row-1">
          <div class="Syllabus__header">
            <p>備考</p>
          </div>
          <div class="Syllabus__content">
            <p class="Syllabus__text">2016年度以降1年次入学者対象科目</p>
          </div>
        </li>
        <div class="Syllabus__hidden js-Syllabus__basicData">
          <li class="Syllabus__row-1">
            <div class="Syllabus__header">
              <p>学期</p>
            </div>
            <div class="Syllabus__content">
              <p class="Syllabus__text">春学期(Fall Semester)</p>
            </div>
          </li>
          <li class="Syllabus__row-1">
            <div class="Syllabus__header">
              <p>単位</p>
            </div>
            <div class="Syllabus__content">
              <p class="Syllabus__text">２単位(2 Credits)</p>
            </div>
          </li>
          <li class="Syllabus__row-1">
            <div class="Syllabus__header">
              <p>科目ナンバリング</p>
            </div>
            <div class="Syllabus__content">
              <p class="Syllabus__text">CMP2200</p>
            </div>
          </li>
          <li class="Syllabus__row-1">
            <div class="Syllabus__header">
              <p>使用言語</p>
            </div>
            <div class="Syllabus__content">
              <p class="Syllabus__text">日本語(Japanese)</p>
            </div>
          </li>
        </div>
        <div class="Syllabus__more"><a class="Syllabus__more--button">単位数や科目コードなどを見る...</a></div>
      </ul>
    </div>
    <div class="col-sm-6-A-2 col-xs-12">
      <ul class="Syllabus__list">
        <li class="Syllabus__row">
          <div class="Syllabus__header">
            <p>成績評価方法・基準</p>
          </div>
          <div class="Syllabus__table">
            <div style="width:100%">
              <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
            </div>
            <table class="table">
              <tbody>
                <?php echo $syllabuscontent['record'] ?>
              </tbody>
            </table>
          </div>
        </li>
        <div class="pT10 pB10 pL10"><a class="btn btn-info" href="">レビューを書く</a></div>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6-B col-xs-12">
      <ul class="Syllabus__list list1">
        <li class="Syllabus__row">
          <div class="Syllabus__header">
            <p>授業の目標</p>
          </div>
          <div class="Syllabus__content">
            <p class="Syllabus__text"><?php echo nl2br($syllabuscontent['feature']) ?></p>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-sm-6-B col-xs-12">
      <ul class="Syllabus__list list1">
        <li class="Syllabus__row">
          <div class="Syllabus__header">
            <p>授業計画</p>
          </div>
          <div class="Syllabus__tr"><?php echo nl2br($syllabuscontent['content']) ?></div>
        </li>
      </ul>
    </div>
  </div>

  <ul class="Syllabus__list">
    <li class="Syllabus__row-1">
      <div class="Syllabus__header">
        <p>注意事項</p>
      </div>
      <div class="Syllabus__content">
        <p class="Syllabus__text"><?php echo $syllabuscontent['note'] ?></p>
      </div>
    </li>
    <li class="Syllabus__row">
      <div class="Syllabus__header">
        <p>その他（HP等）</p>
      </div>
      <div class="Syllabus__content">
        <p class="Syllabus__text">ー</p>
      </div>
    </li>
  </ul>

  <!--<ul class="Syllabus__list">
                <li class="Syllabus__row">
                  <div class="Syllabus__header">
                    <p>テキスト</p>
                  </div>
                  <div class="Syllabus__content">
                    <p class="Syllabus__text">なし</p>
                  </div>
                </li>
                <li class="Syllabus__row">
                  <div class="Syllabus__header">
                    <p>参考文献</p>
                  </div>
                  <div class="Syllabus__table table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th></th>
                          <th>タイトル</th>
                          <th>著者名</th>
                          <th>出版社</th>
                          <th>ISBN</th>
                        </tr>
                        <tr>
                          <td><img src="https://images-fe.ssl-images-amazon.com/images/I/61S715sW8sL._SL160_.jpg" alt="61s715sw8sl. sl160 "></td>
                          <td>『データマイニング入門』<div class="alert alert-warning mT20"><strong><a>Amazonで購入</a></strong><br>＊買い間違えにご注意ください。</div>
                          </td>
                          <td>豊田秀樹</td>
                          <td>東京図書</td>
                          <td>4489020457</td>
                        </tr>
                        <tr>
                          <td><img src="https://images-fe.ssl-images-amazon.com/images/I/514p8mewxeL._SL160_.jpg" alt="514p8mewxel. sl160 "></td>
                          <td>『Rで学ぶ統計データ分析』<div class="alert alert-warning mT20"><strong><a>Amazonで購入</a></strong><br>＊買い間違えにご注意ください。</div>
                          </td>
                          <td>本橋永至</td>
                          <td>オーム社</td>
                          <td>4274217817</td>
                        </tr>
                        <tr>
                          <td><img src="https://images-fe.ssl-images-amazon.com/images/I/31pN-1AB6WL._SL160_.jpg" alt="31pn 1ab6wl. sl160 "></td>
                          <td>『Rによるデータサイエンス』<div class="alert alert-warning mT20"><strong><a>Amazonで購入</a></strong><br>＊買い間違えにご注意ください。</div>
                          </td>
                          <td>金明哲</td>
                          <td>森北出版</td>
                          <td>462709602X</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="Syllabus__content">
                    <p class="Syllabus__text"></p>
                  </div>
                </li>
              </ul>-->
</div>
