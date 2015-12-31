<?php




require(dirname(__FILE__) . '/phpmailer/sendamail.php');

$msg="<p>Name:".$_POST['name']."</p>";
$msg="<p>Phone:".$_POST['phone']."</p>";
$msg="<p>Age:".$_POST['age']."</p>";
$msg="<p>Store:".$_POST['store']."</p>";

$msg.="<p>Email:".$_POST['email']."</p>";

$msg="<p>Inquiry Projects:".$_POST['inquiryprojects']."</p>";
$msg="<p>Source:".$_POST['source']."</p>";

$msg.="<p>Message:".$_POST['msg']."</p>";
$msg.="<p>Subscription:".$_POST['subscription']."</p>";





if(smtp_mail("danny.ng198811@yahoo.com", "Application Form " ,$msg))
    echo "ok";
else echo "not ok!";


