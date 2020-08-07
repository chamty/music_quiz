<?php
session_start();

if (!empty($_POST)) {
  if ($_POST['answer_1'] === '') {
    $error['answer_1'] = 'blank';
  }
  if ($_POST['answer_2'] == '') {
    $error['answer_2'] = 'blank';
  }
  if ($_POST['answer_3'] == '') {
    $error['answer_3'] = 'blank';
  }

  if (empty($error)) {
    $_SESSION['answer'] = $_POST;
    header('Location: submit.php');
    exit();
  }
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
          <div class="question"><span class="qes">Q. </span>「ドレミファソラシド」って何語？</div>
          <label for="answer_1">回答：</label><input type="text" id="answer_1" name="answer_1" value="<?php print(htmlspecialchars($_POST['answer_1'], ENT_QUOTES)); ?>">
          <?php if ($error['answer_1'] === 'blank'): ?>
            <p class="error">※回答を入力してください。</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>次のうち、木管楽器なのは？（複数の場合あり）</div>
          <input type="checkbox" name="answer_2[]" value="サックス" <?php if ($_POST['answer_2'][0] == "サックス") echo checked ?>>サックス
          <input type="checkbox" name="answer_2[]" value="トロンボーン" <?php if ($_POST['answer_2'][0] == "トロンボーン" || $_POST['answer_2'][1] == "トロンボーン") echo checked ?>>トロンボーン
          <input type="checkbox" name="answer_2[]" value="フルート" <?php if ($_POST['answer_2'][0] == "フルート" || $_POST['answer_2'][1] == "フルート" || $_POST['answer_2'][2] == "フルート") echo checked ?>>フルート
          <?php if ($_POST['answer_2'][0] == "サックス") {
            $sax = checked;
          }
          ?>
          <?php
            if(isset($_POST['answer_2'])){
              $answer_2 = $_POST['answer_2'];
            }
          ?>
          <?php if ($error['answer_2'] === 'blank'): ?>
            <p class="error">※１つ以上選択してください。</?>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>次のうち、一番大きい楽器は？</div>
          <input type="radio" name="answer_3" value="ヴィオラ" <?php if ($_POST['answer_3'] == "ヴィオラ") echo checked ?>>ヴィオラ
          <input type="radio" name="answer_3" value="チェロ" <?php if ($_POST['answer_3'] == "チェロ") echo checked ?>>チェロ
          <input type="radio" name="answer_3" value="コントラバス" <?php if ($_POST['answer_3'] == "コントラバス") echo checked ?>>コントラバス
          <?php
            if(isset($_POST['answer_3'])){
              $answer_3 = $_POST['answer_3'];
            }
          ?>
          <?php if ($error['answer_3'] === 'blank'): ?>
            <p class="error">※１つ選択してください。</p>
          <?php endif; ?>
        </div>
        <input class="button" type="submit" value="回答する">
      </form>
      </div>
  </div>
</body>
</html>