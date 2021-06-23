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
<?php
// タイムスタンプ
print(time() + 60 * 60 *24).PHP_EOL;
// 当日
print(date("n/j(D)", time())).PHP_EOL;
// 明日
print(date("n/j(D)", time() + 60 * 60 * 24)).PHP_EOL;
// string to timeの略(文字列をタイムスタンプに変更)
// タイムスタンプとは1970年1月1日を起点に今まで何秒経ったかを表す数値
// strtotime("+1day")
print(date("n/j(D)", strtotime("+1day"))).PHP_EOL;
print(date("n/j(D)", strtotime("+2day"))).PHP_EOL;
print(date("n/j(D)", strtotime("+3day"))).PHP_EOL;

// $i = 0;
// $date = "+" . "$i" . "day";
//   print($date);

$i = 0;
// while($i<365){
//   $date = strtotime("+" . $i . "day");
//   print(date("n/j(D)", $date)).PHP_EOL;
//   $i++;
// };

while($i<365):
  $date = strtotime("+" . $i . "day");
  print(date("n/j(D)", $date)).PHP_EOL;
  $i++;
endwhile;
?>
</pre>
</main>
</body>
</html>