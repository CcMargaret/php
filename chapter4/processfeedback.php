<!DOCTYPE html>

<?php
    //trim()除去整个字符串前后的空格
    //ltrim()只从字符串的开始处（左边）除去空格
    //rtrim（）只从字符串的结束处（右边）除去空格
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    if (!eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$',$email)){
        echo "<p>That is not a valid email address.</p>".
             "<p>Please to return to the previous page and try again.</p>";
        exit ;
    }

    //set up some static information
    $toaddress = "feedback@example.com";

    if (eregi("shop|customer service|retail",$feedback)){
        $toaddress = "retail@example.com";
    }else if (eregi("deliver|fulfill",$feedback)){
        $toaddress = "fulfillment@example.com";
    }else if (eregi("bill|account",$feedback)) {
        $toaddress = "accounts@example.com";
    }
    if(eregi("bigcustomer\.com",$email)){
        $toaddress = "bob@example.com";
    }   

    $subject = "Feedback from web site";
    $mailcontent = "Customer name:".$name."\n".
                   "Customer email:".$email."\n".
                   "Customer comments:\n".$feedback."\n";

    $fromaddress = "From: webserver@example.com";

    //invoke mail() function to send mail
    mail($toaddress,$subject,$mailcontent,$fromaddress);
?>

<html>
    <head>
        <title>Bob's Auto Parts-Feedback Submitted</title>
    </head>
    <body>
        <h1>Feedback Submitted</h1>
        <p>Your feedback has been sent.</p>
    </body>
</html>