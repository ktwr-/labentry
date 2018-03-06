<?php
	function h($str){
		return htmlspecialchars($str, ENT_NOQUOTES, 'UTF-8');
	}
	session_start();
	// ログイン確認---省略
	$id = $_SESSION['id'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Security-Policy" contents="default-src 'self'; script-src 'self';">
		<title>Login form</title>
		<link rel="stylesheet" type="text/css" href="report.css">
	</head>
<body>
<div class="top19">
	<div class="box19">
	<h1>Password Change</h1>
	<form action="passchange.php" method="POST">
		新パスワード : <input name="pwd" type="password"><br>
		<input type="submit" value="パスワード変更">
	</form>
	</div>	<!-- box19 -->
</div>
</body>
</html>
