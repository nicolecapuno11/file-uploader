<?php

include "file.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$result = Registration::handleUpload($_FILES['input_file']);
if ($result == "error"){
	header('Location: index.php?error=' . "error file type");
}
else{
	if ($result !== FALSE) {
		$encrpyted_pass = md5($_POST['password']);
		$register = new Registration($_POST['complete_name'], $_POST['email'], $password = $encrpyted_pass, $result['save_path']);
		$result = $register->save();
		header('Location: index.php?success=1');
	} else {
		header('Location: index.php?error=' . $e->getMessage());
	}
}
?>