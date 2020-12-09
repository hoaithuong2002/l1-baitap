<!--#tính chiết khấu sản phẩm-->
<!--#B1 : tạo giao diện người dùng-->
<!--#B2:  tính lượng chiết khấu và giá sau khi chiết khấu-->
<!--#B3 : hiển thị-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính chiết khấu sản phẩm </title>
</head>
<body>
<form method="post">
    <input type="text" name="product-description" placeholder="mô tả sản phẩm">
    <input type="text" name="list-price" placeholder="giá niêm yết của sản phẩm">
    <input type="text" name="discount-percent" placeholder="tỷ lệ chiết khấu">
    <button type="submit">submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_descrice = $_POST['product-description'];
    $list_price = $_POST['list-price'];
    $discount =$_POST['discount-percent'];
    $value = calculatorDiscount($list_price,$discount);

    echo "duoc giam gia " . $value;
    echo "gia sau chiet khau" . getDiscountPrice($list_price, $value);
}
function calculatorDiscount($list_price, $discount){
    $amount= $list_price * $discount *0.01;

    return $amount;
}
function getDiscountPrice($price, $discount){
    return $price - $discount;
}
?>