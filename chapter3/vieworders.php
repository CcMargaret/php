<!DOCTYPE html>

<?php 
    //使用php显示BOb的订单内容
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

    $orders = file("$DOCUMENT_ROOT/../oders/order.txt");

    $number_of_orders = count($orders);

    if($number_of_orders == 0){
        echo" <p><strong>No orders pending.
            Please try again later.</strong></p>";

    }

    for($i=0;$i<$number_of_orders;$i++){
        echo $orders[$i]."<br/>";
    }
    
?>