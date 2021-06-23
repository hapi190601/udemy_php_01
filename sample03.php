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
print(date('l')).PHP_EOL;
print(date('s秒')).PHP_EOL;
print(date('i分 s秒')).PHP_EOL;
print(date('G時 i分 s秒')).PHP_EOL;
// 文字列の連結
print("現在は" . date('G時i分s秒' . "です")).PHP_EOL;
?>
</pre>
</main>
</body>
</html>