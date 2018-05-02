<!DOCTYPE html>

<?php
    //create short variable name
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
    <head>
        <title>
            Bob's Auto Parts - Customer Orders
        </title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Orders</h2>
        <?php
            @$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt",'rb');
            //flock($fp,LOCK_SH);//读操作锁定，该文件可以共享
            //flock($fp,UN);//释放已有的锁定

            if(!$fp){
                echo "<p><strong>No orders pending.
                Please try again later.</strong></p>";
                exit;
            }
            while(!feof($fp)){
                $order = fgets($fp,999);
                echo $order."<br/>";
            }
            /*
            echo 'Final position of the file pointer is'.(ftell($fp));//以字节为单位报告文件指针当前位置
            echo '<br/>';
            rewind($fp);//文件指针复位到文件开始位置
            echo 'After rewind,the position is '.(ftell($fp));
            echo '<br/>';

            fclock($fp);
            */
        ?>
    </body>
</html>