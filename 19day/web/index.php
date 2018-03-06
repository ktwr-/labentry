<?php
	function h($str){
		return htmlspecialchars($str, ENT_NOQUOTES, 'UTF-8');
	}
	session_start();
	$id = @$_GET['id'];
	if (! $id) $id = 'yamada';
	$_SESSION['id'] = $id;
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
	<h1>Index</h1>
	<div class="about">
	<p>
		ログインしました。id: <?php echo h($id); ?>
	</p>
	</div>
	<a href="passwd.php">パスワード変更</a>	
	</div>	<!-- box19 -->
</div>
</body>
</html>
