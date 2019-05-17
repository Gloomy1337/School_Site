<?php
	session_start();
	if(empty($_SESSION["name"])){
	header("location: home.html");
	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Hello there, <?php echo  htmlspecialchars($_SESSION["name"]);?></h1>

</body>
</html>