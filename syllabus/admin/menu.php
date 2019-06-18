<?php
class Menu {
  
  public function placeClassinfo() {
    require_once("./phpQuery-onefile.php");
    $url = "http://syllabus.aoyama.ac.jp/shousai.ashx?YR=2019&FN=1611020-0150&KW=&BQ=3f5e5d46524048535c48584c495933294f4e5745515b42564a5e4f5659534a22067e7d756d6071747c687e6e6b68606a6270667c6608050701780d087a0c1866127c7073757c60051d74081e7d6b05186d77191e69731d1e657f03196d60313146262052263a565a4e2e2129514b2a234d1b135517011a47485c484f3f2d364ea5b3b6e1f0ebcde2e6faebe0f9b0abcaa6b4d3a7b1acd5b2ddaebfd9a8b8dfad8593e4f0c1c4d4c4c08ff9ff918bfee88d97e2f08993e6fe85";
  
  if($data = @file_get_contents($url)){
    return phpQuery::newDocument($data)->find(".content_body")->find("table.editTable")->find("tr#CPH1_tr_Gaiyou")->find("td")->find("span")->text();
  }else{
    //エラー処理
    if(count($http_response_header) > 0){
        //「$http_response_header[0]」にはステータスコードがセットされているのでそれを取得
        $status_code = explode(' ', $http_response_header[0]);  //「$status_code[1]」にステータスコードの数字のみが入る
        //エラーの判別
        switch($status_code[1]){
            //404エラーの場合
            case 404:
              echo "指定したページが見つかりませんでした";
            break;
 
            //500エラーの場合
            case 500:
                echo "指定したページがあるサーバーにエラーがあります";
                break;
 
            //その他のエラーの場合
            default:
                echo "何らかのエラーによって指定したページのデータを取得できませんでした";
        }
    }else{
        //タイムアウトの場合 or 存在しないドメインだった場合
        echo "タイムエラー or URLが間違っています";
    }
}
  } 

}





?>
