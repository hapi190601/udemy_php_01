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

<table>
  <?php
    for($i=1; $i<=10; $i++) {
      // 余りが1の時(0以外 = true)
      if($i % 2) {
        print("<tr style='background-color:gray;'>");
      // 余りが0のとき(0 = false)
      } else {
        print("<tr>");
      }
      print("<td>" .  $i . "行目</td>");
      print("</tr>");
    }
  ?>
</table>
<pre>
<!-- ここにプログラムを記述します -->
  <!-- 剰余算 -->
  <?php
    $week = ["金", "土", "日", "月", "火", "水", "木"];

    // インデックス番号を余りで指定することでインデックス番号0~6の繰り返し処理ができる
    // 数値を0から順に7で割っていくと余りは0~6のいずれかになり、それが繰り返されるため。
    for($i=1; $i<31; $i++) {
      print($week[$i%7]) . PHP_EOL;
    }

  ?>
</pre>
</main>
</body>
</html>