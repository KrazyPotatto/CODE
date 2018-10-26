<?php
session_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=nust", "root", "");
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
		die("Connection failed: " . $e->getMessage());
    }

function force_connect(){
	if(!isset($_SESSION['auth'])){
		header('Location: /');
	}
}