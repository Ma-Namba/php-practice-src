<?php
//変数を定義する
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

//小計
$subtotal = $price * $quantity;
//消費税額
$tax_amount = $subtotal * $tax_rate;
//合計金額
$total = $subtotal + $tax_amount;
?>

<!DOCTYPE html>
<html lang="ja">
    <body>
        商品名: <?php echo $product_name; ?><br>
        単価: <?php echo number_format($price); ?>円<br>
        数量: <?php echo number_format($quantity); ?>個<br>
        小計: <?php echo number_format($subtotal); ?>円<br>
        消費税(10%): <?php echo number_format($tax_amount); ?>円<br>
        <strong>合計金額: <?php echo number_format($total); ?>円</strong><br>
    </body>
</html>