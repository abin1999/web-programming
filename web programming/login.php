
<html>
<head>
<title>Login</title>
</head>
<body>
<?php
// Check if username and password are correct
if ($_POST["username"] == "abin" && $_POST["password"] == "004") {
// If correct, we set the session to YES
 session_start();
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged correctly in</h1>";
 echo "<p><a href='document.php'>Link to protected file</a><p/>";
}
else {
// If not correct, we set the session to NO
 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='document.php'>Link to protected file</a></p>";
}
?>
</body>
</html>