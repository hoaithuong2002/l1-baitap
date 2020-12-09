<!--
Máy tính tương lai
b1: tạo giao diện
b2: tính lãi suất
b3: hiển thị
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máy Tính Tương Lai</title>
    <h1>Máy Tính Tương Lai</h1>
</head>
<body>
<form method="post">
    <input type="text" name="inventment-amount" placeholder="Lượng tiền đầu tư ban đầu ">
    <input type="text" name="yearly-interest" placeholder="Lãi suất năm">
    <input type="text" name="number-of-years" placeholder="Số năm đầu tư  ">
    <button>Calculate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inventment_amount = $_POST['inventment-amount'];
    $interest = $_POST['yearly-interest'];
    $years = $_POST['number-of-years'];
    $value = displaysCalculator($inventment_amount, $years, $interest);
    echo 'giá trị trong tương lai sẽ nhận được là : ' . $value;
}
function displaysCalculator($money, $years, $interest)
{
    $future = 0;
    for ($i = 0; $i < $years; $i++) {
        $future = $money + ($money * ($interest/100));

        $money = $future;
    }
    return $future;
}

?>
</body>
</html>
