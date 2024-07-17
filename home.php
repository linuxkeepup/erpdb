<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<h1>Hello</h1>
	<a href="index.php?logout=true">Logout</a>

	<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}
?>
<?php
session_start();

// Logout: Destroy session and redirect to login page
if (isset($_GET["logout"])) {
    session_destroy();
    header("location: login.php");
    exit();
}
?>


</body>
</html>