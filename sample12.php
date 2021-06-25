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
// %数値は桁数を指定している %4 = 4桁,
// %0数値にすると足りない桁数を0で補ってくれる
// dは書式が数値であることを指定している(文字はs)
$date = sprintf("%04d年 %02d月 %02d日", 2021, 6, 25).PHP_EOL;
print("$date");
?>
</pre>
</main>
</body>
</html>