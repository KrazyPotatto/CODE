<?php
sleep(1.5);
include("../inc/init.php");
extract($_POST);
if(empty($username) OR empty($password)){
	http_response_code(500);
	die("You must fill all input");
}
$req = $db->prepare('SELECT * FROM users WHERE username = ?');
$req->execute(array($username));
$rs = $req->fetch();
if($req->rowCount() == 0){
	http_response_code(500);
	die("Username or password is invalid");
}
if(!password_verify(sha1($password),$rs['password'])){
	http_response_code(500);
	die("Username or password is invalid");
}

$_SESSION['auth'] = $rs['id'];
$_SESSION['username'] = $username;
http_response_code(200);
die("");
