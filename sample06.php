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
$i = 1;
while($i<=365) {
  print($i).PHP_EOL;
  // 改行はエスケープシーケンスを使って.PHP_EOLを使わず、下記のようにコードを書くことも可能
  // print($i . "\n");
  $i += 1;
  // $i++; インクリメント(加算)
  // $i--デクリメント(減算)
};

for($i=1; $i<=365; $i++) {
  print($i).PHP_EOL;
}
?>
</pre>
</main>
</body>
</html>