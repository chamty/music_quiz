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
          <label for="answer_1">回答：<?php print(htmlspecialchars($_REQUEST['answer_1'], ENT_QUOTES)); ?></label>
          <?php if($_REQUEST['answer_1'] === 'ピアノフォルテ'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>木管楽器なのは？</div>
          <label for="answer_1">回答：<?php print(htmlspecialchars($_REQUEST['answer_2'], ENT_QUOTES)); ?></label>
          <?php if($_REQUEST['answer_2'] === 'サックス'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <div class="quiz">
          <div class="question"><span class="qes">Q. </span>一番大きいのは？</div>
          <label for="answer_1">回答：<?php print(htmlspecialchars($_REQUEST['answer_3'], ENT_QUOTES)); ?></label>
          <?php if($_REQUEST['answer_3'] === 'コントラバス'): ?>
            <p class="correct">正解！</p>
          <?php else: ?>
            <p class="miss">不正解！</p>
          <?php endif; ?>
        </div>
        <input type="submit" value="回答する">
      </div>
      </form>
  </div>
</body>
</html>