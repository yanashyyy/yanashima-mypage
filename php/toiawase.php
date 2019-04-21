<!DOCTYPE html>
  <html lang="ja">
    <head>
      <meta charset="UTF-8">
      <title>出力結果</title>
    </head>
      <body>
        <?php
          // print_r($_POST);
          echo htmlspecialchars($_POST['onamae'],ENT_QUOTES,'UTF-8');
          echo "<br>";
          if ($_POST['category'] === '1') echo "男性";
          if ($_POST['category'] === '2') echo "女性";
          // echo "<br>";
          echo htmlspecialchars($_POST['mail_address'],ENT_QUOTES,'UTF-8');
          // if ($_POST['difficulty'] === '1') {
          //   echo "簡単";
          // } elseif ($_POST['difficulty'] === '2') {
          //   echo "普通";
          // } else {
          //   echo "難しい";
          // }
          echo "<br>";
          // if (is_numeric($_POST['budget'])) {
          //   echo number_format($_POST['budget']);
          // }
          // echo "<br>";
          echo nl2br(htmlspecialchars($_POST['howto'],ENT_QUOTES,'UTF-8'));
          echo "<br>"
        ?>
      </body>
    </html>