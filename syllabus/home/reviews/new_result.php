 <form class="new_result" id="new_result" method="post" action="reviews/post.php">
   <input type="hidden" name="classname" value="<?php echo $syllabuscontent['lecture'] ?>">
   <div class="row center-block">
     <div class="row">
       <div class="form-group col-md-12 col-xs-12">
         <label class="form-label">成績評価（D〜S）</label>
         <select class="form-control form-grade-input" name="resultgrade">
           <option value="<?php echo $record ?>">あなたの成績を選択してください</option>
           <option value="S">S</option>
           <option value="A">A</option>
           <option value="B">B</option>
           <option value="C">C</option>
           <option value="D">D</option>
         </select>
       </div>
     </div>
     <div class="row">
       <div class="form-group col-md-4 col-sm-4 col-xs-12">
         <label class="form-label">学びの大きさ</label>
         <select class="form-control" name="resultlearn" id="result_rep_1">
           <option value="<?php echo $learning ?>">5が最高で、1が最低です</option>
           <option value="5">5</option>
           <option value="4">4</option>
           <option value="3">3</option>
           <option value="2">2</option>
           <option value="1">1</option>
         </select>
       </div>
       <div class="form-group col-md-4 col-sm-4 col-xs-12">
         <label class="form-label">授業の簡単さ</label>
         <select class="form-control" name="resulteasylearn" id="result_rep_2">
           <option value="<?php echo $easylearn ?>">5が最高で、1が最低です</option>
           <option value="5">5</option>
           <option value="4">4</option>
           <option value="3">3</option>
           <option value="2">2</option>
           <option value="1">1</option>
         </select>
       </div>
       <div class="form-group col-md-4 col-sm-4 col-xs-12">
         <label class="form-label">単位の取りやすさ</label>
         <select class="form-control" name="resulttakeclass" id="result_rep_3">
           <option value="<?php echo $takeclass ?>">5が最高で、1が最低です</option>
           <option value="5">5</option>
           <option value="4">4</option>
           <option value="3">3</option>
           <option value="2">2</option>
           <option value="1">1</option>
         </select>
       </div>
     </div>
     <div class="row">
       <div class="form-group col-xs-12">
         <label class="form-label">コメント</label>
         <textarea placeholder="個人的な感想・成績評価の仕方・出欠などについて" class="form-control" rows="5" name="resultcomment" id="result_comment"></textarea>
       </div>
     </div>
   </div>
   <div class="row mB10">
     <input name="btn-confirm" type="submit" value="投稿" class="btn btn-success btn-go btn-register">
   </div>
 </form>
