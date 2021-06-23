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
// 配列
$week_name = ["日", "月", "火", "水", "木", "金", "土"];
// arrayを使った下記の書き方もできるが古いバージョンの書き方
// $week_name = array("日", "月", "火", "水", "木", "金", "土");
// インデックス番号は[]で囲む
$date_number = date("w");
print($week_name[$date_number]).PHP_EOL;
?>
</pre>
</main>
</body>
</html>