<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đọc Số Thành Chữ</title>
    <h1 > Đọc Số Thành Chữ</h1>
</head>
<body>
<form action="" method="post">
    <input type="number" name="inputNum">
    <button type="submit">Convert</button>
</form>
</body>
</html>
<?php
include_once "convert-number.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['inputNum'];
    $word = convertToWord($number);
    echo $word;
}