<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>LAMP App</title>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body bgcolor="yellow">
	<h1>LAMP App</h1>

	<?php
    require_once("login_db.php");
	
    echo "Message is " . $auidence . " " . $message;
	
	?>

	
</body>
</html>


