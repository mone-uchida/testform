<?php require('common.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>フォーム</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2 class="">お問い合わせフォーム</h2>
    <?php if( isset($error) && empty($error)) echo "<div class='clear-message'>入力に成功しました。</div>"; ?>
  <p>以下のフォームからお問い合わせください。</p>
  <form id="form" method="post">
    <div class="form-group">
      <div class="form-label">
        <label for="name">名前</label>
      </div>
      <input type="text" class="form-input" id="name" name="name" value=<?php if(!empty($name)) { echo $name; } ?>>
      <div class="error-message">
        <?php if(isset($error['name'])) echo $error['name'] ?>
      </div>
    </div>
    <div class="form-group">
      <div class="form-label">
        <label for="age">年齢</label>
      </div>  
      <input type="age" class="form-input" id="age" name="age" value=<?php if(!empty($age)) { echo $age; } ?>>
      <div class="error-message">
        <?php if(isset($error['age'])) echo $error['age'] ?>
      </div>
    </div>
    <div class="form-group">
      <div class="form-label">
        <label for="faculty">学部</label>
      </div>
      <?php
        foreach($facultySelect as $key => $value){
          if(isset($faculty) && $key == $faculty){
              echo "<input type='radio' name='faculty' class='form-radio' value='$key' checked>".$value;
          }else{
              echo "<input type='radio' name='faculty'class='form-radio' value='$key'>".$value;
          }
        }
      ?>
      <div class="error-message">
        <?php if(isset($error['faculty'])) echo $error['faculty'] ?>
      </div>
    </div>
    <div class="form-group">
      <div class="form-label">
        <label for="hobby">趣味</label>
      </div>
      <?php
        foreach($hobbySelect as $key => $value){
          if(isset($hobby) && in_array($key, $hobby)){
            echo "<input name='hobby[]' type='checkbox' class='form-select' value='$key' checked>".$value;
          }else{
            echo "<input name='hobby[]' type='checkbox' class='form-select' value='$key' >".$value;
          }
        }
      ?>
      <div class="error-message">
        <?php if(isset($error['hobby'])) echo $error['hobby']; ?>
      </div>
    </div>
    <button name="submitted" type="submit" class="form-btn">送信</button>
  </form>
</div>
</body>
</html>
