<?php
session_start();

if (!isset($_SESSION['answer'])) {
  header('Location: index.php');
  exit();
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
      <form action="submit.php" method="get">
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>「ピアノ」の正式名称は？</div>
          <label for="answer_1">回答： <?php print(htmlspecialchars($_SESSION['answer']['answer_1'], ENT_QUOTES)); ?></label>
          <?php if($_SESSION['answer']['answer_1'] === 'ピアノフォルテ'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>木管楽器なのは？</div>
          <?php $answer_2 = $_POST['answer_2']; ?>
          <label for="answer_2">回答：
          <?php print(htmlspecialchars($_SESSION['answer']['answer_2'][0], ENT_QUOTES)); ?>
          <?php print(htmlspecialchars($_SESSION['answer']['answer_2'][1], ENT_QUOTES)); ?>
          <?php print(htmlspecialchars($_SESSION['answer']['answer_2'][2], ENT_QUOTES)); ?>
          </label>
          <?php if($_SESSION['answer']['answer_2'][0] === 'サックス' && $_SESSION['answer']['answer_2'][1] === 'フルート'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>一番大きいのは？</div>
          <label for="answer_3">回答： <?php print(htmlspecialchars($_SESSION['answer']['answer_3'], ENT_QUOTES)); ?></label>
          <?php if($_SESSION['answer']['answer_3'] === 'コントラバス'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <input type="button" value="やり直し" onclick="location.href='index.php'">
      </div>
      </form>
  </div>
</body>
</html>