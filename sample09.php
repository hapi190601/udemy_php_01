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
// 連想配列
$fruits = [
  "apple"=>"りんご",
  "grape"=>"ぶどう",
  "lemon"=>"レモン",
  "tomato"=>"トマト",
  "peach"=>"ピーチ"
];
print $fruits["grape"].PHP_EOL;

// 配列の繰り返し処理(値だけ)
foreach($fruits as $val) {
  print($val).PHP_EOL;
};

// 配列の繰り返し処理(キーと値両方)
foreach($fruits as $english => $japanese) {
  print($english . ":" . $japanese).PHP_EOL;
};
?>
</pre>
</main>
</body>
</html>