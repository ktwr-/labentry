<?php
	function h($str){
		return htmlspecialchars($str, ENT_NOQUOTES, 'UTF-8');
	}
	session_start();
	$id = $_SESSION['id'];
	// ログイン確認---省略
	$pwd = $_POST['pwd'];
	// パスワード変更処理
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
	<?php echo h($id); ?>さんのパスワードを<?php echo h($pwd); ?>に変更しました！
	</div>	<!-- box19 -->
</div>
</body>
</html>
