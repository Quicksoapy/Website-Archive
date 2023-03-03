<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact With Mail</title>
<link href="contact.css" rel="stylesheet" type="text/css">
</head>
<?php     
$to_email = '<mail>';
$subject = 'subject';
$message = 'message';
$headers = 'headers';
mail($to_email,$subject,$message,$headers);
?>
<body>
</body>
</html>