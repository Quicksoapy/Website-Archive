<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact With Mail</title>
<link href="contact.css" rel="stylesheet" type="text/css">
</head>
<?php
    // the message
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("example@gmail.com","My subject",$msg);
?>
<body>
</body>
</html>