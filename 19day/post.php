<?php
function h($str) {
    return htmlspecialchars($str,ENT_QUOTES, 'UTF-8');
  }

if(!isset($_POST['id']) && !isset($_POST['passwd'])){
	header("Location: index.php");
	exit;
}
	$id = h($_POST['id']);
	$passwd = h($_POST['passwd']);
	try{
	$dsn = 'mysql:host=mysql:3306;dbname=blindsqli';
	$pdo = new PDO($dsn, 'root','alphort',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$stmt = $pdo->prepare("select password from login where id = ?");
	$stmt->bindValue(1,$id);
  $stmt->execute(); 
	
	if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		if ($id == 'hoge' && $row['password'] == $passwd){
			header("Location: hoge.html");
			exit;
		}	else if ($id == "admin" && $row['password'] == $passwd){
			echo 'flag is ktwrctf{}';
		} else {
			echo '<pre> User ID exists in the database.</pre>';
			echo '<a href="./index.php">Back</a>';
		}
	} else {
			echo '<pre> worng query.</pre>';
	} 
	} catch(PDOException $e){
		echo 'you are hacker';
	}

?>
