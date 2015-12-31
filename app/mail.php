<?php




require(dirname(__FILE__) . '/phpmailer/sendamail.php');

$msg="<p>Name:".$_POST['name']."</p>";
$msg.="<p>Phone:".$_POST['phone']."</p>";
$msg.="<p>Age:".$_POST['age']."</p>";
$msg.="<p>Store:".$_POST['store']."</p>";

$msg.="<p>Email:".$_POST['email']."</p>";

$msg.="<p>Inquiry Projects:";
foreach($_POST['inquiryprojects'] as $proj)
 $msg.= $proj." , ";  
$msg.="</p>";




$msg.="<p>Source:";
foreach($_POST['source'] as $src)
 $msg.= $src." , ";  
$msg.="</p>";



$msg.="<p>Message:".$_POST['msg']."</p>";

if($_POST['subscription'])
$msg.="<p>Subscription:Yes</p>";





if(smtp_mail("danny.ng198811@yahoo.com", "Application Form " ,$msg))
    echo "ok";
else echo "not ok!";


