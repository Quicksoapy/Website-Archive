<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="photos/icons//favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="photos/icons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="photos/icons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="photos/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="photos/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="photos/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="photos/icons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="photos/icons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="photos/icons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="photos/icons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="photos/icons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="photos/icons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="photos/icons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="photos/icons/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="/widetile.png" />
	<meta name="msapplication-square310x310logo" content="/largetile.png" />
<meta charset="utf-8">
<title>Mail goes brrrrrrr</title>
<link href="contact.css" rel="stylesheet" type="text/css">
</head>
<?php     
$to_email = '<myemail>';
$subject = $_POST['name'];
$message = $_POST['message'];
if ($subject != "" && $message != "") {
  mail($to_email,$subject,$message);
  header('Location: contact.html');
}
?>
<h1>Your input is cringe lmao</h1>
<p>(You probaly just didn't fill anything in)</p>
<h3><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Click here to go back</a></h3>
<body>
</body>
</html>