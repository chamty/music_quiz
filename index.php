<?php
if (!empty($_POST)) {
  if ($_POST['answer_1'] === '') {
    $error['answer_1'] = 'blank';
  }
  if ($_POST['answer_2'] === '') {
    $error['answer_2'] = 'blank';
  }
  if ($_POST['answer_3'] === '') {
    $error['answer_3'] = 'blank';
  }

  // if (empty($error)) {
  //   header('Location: submit.php');
  //   exit();
  // }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz_php</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="container">
    <h1 id="app_title">音楽クイズ</h1>
      <div class="quiz_table">
      <form action="" method="post">
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>「ピアノ」の正式名称は？</div>
          <label for="answer_1">回答：</label><input type="text" id="answer_1" name="answer_1">
          <?php if ($_POST['answer_1'] === ''): ?>
            <p class="error">※回答を入力してください。</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>次のうち、木管楽器なのは？（複数選択可）</div>
          <input type="checkbox" name="answer_2[]" value="サックス">サックス
          <input type="checkbox" name="answer_2[]" value="トロンボーン">トロンボーン
          <input type="checkbox" name="answer_2[]" value="フルート">フルート
          <?php if ($_POST['answer_2'] === ''): ?>
            <p class="error">※１つ以上選択してください。</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>次のうち、一番大きい楽器は？</div>
          <input type="radio" name="answer_3" value="ヴィオラ">ヴィオラ
          <input type="radio" name="answer_3" value="チェロ">チェロ
          <input type="radio" name="answer_3" value="コントラバス">コントラバス
          <?php if ($_POST['answer_3'] === ''): ?>
            <p class="error">※１つ選択してください。</p>
          <?php endif; ?>
        </div>
        <input type="submit" value="回答する">
      </div>
      </form>
  </div>
</body>
</html>