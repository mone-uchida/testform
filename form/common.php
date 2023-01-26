<?php 

// 学部選択のラジオボタンの値を格納
$facultySelect = array(
  "literature"=>"文学部",
  "law"=>"法学部",
  "economics"=>"経済学部",
  "science"=>"理学部",
  "engineering"=>"工学部",
  "education"=>"教育学部",
  "others"=>"その他"
  );

// 趣味選択のチェックボックスの値を格納
$hobbySelect = array(
  "game"=>"ゲーム",
  "watchingsports"=>"スポーツ",
  "readingbooks"=>"読書",
  "working"=>"散歩",
  "sauna"=>"サウナ",
  "cooking"=>"料理",
  "none"=>"特になし"
  );

//送信ボタンが押された場合の処理
if (isset($_POST['submitted'])) {

  //POSTされたデータを変数に格納
  $name = filter_input(INPUT_POST, 'name');
  $age = filter_input(INPUT_POST, 'age');
  $faculty = filter_input(INPUT_POST, 'faculty');
  $hobby = filter_input( INPUT_POST, 'hobby', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

  //エラーメッセージを保存する配列の初期化
  $error = array();
  
  //値の検証
  if($name == '') {
    $error['name'] = '名前を入力してください。';
  }
  if ($age == '') {
    $error['age'] = '年齢を入力してください。';
  } elseif ( !is_numeric($age) ) {
    $error['age'] = '年齢は半角数値で入力してください。';
  }
  if ($faculty == '') {
    $error['faculty'] = '学部を選択してください。';
  }
  if (empty($hobby )) {
    $error['hobby'] = '趣味を選択してください。';
  }
}
?>