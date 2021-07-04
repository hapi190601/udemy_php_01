<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<!-- ・半角数字に直すプログラム -->
  <?php
    $age = "２０";

    // 文字コード(第三引数)の省略可
    // $age = mb_convert_kana($age, "n", "UTF-8");
    $age = mb_convert_kana($age, "n");

    if(is_numeric($age)) {
      print($age . "歳") . PHP_EOL;
    } else {
      print("※年齢が数字ではありません。") . PHP_EOL;
    };
    ?>
</pre>
</main>
</body>
</html>