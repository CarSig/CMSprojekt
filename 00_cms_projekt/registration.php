<?php
require 'classes/Database.php';
require 'includes/url.php';
require ('config/dbconfig.php');
require 'includes/encryption.php';


$username = $_POST["username"];
$pw = $_POST["password"];
$repeatPw= $_POST["repeatPassword"];
$pwh = encryption($pw);
$zip = $_POST["zip"];
$email = $_POST["email"];




$db = new Database ();
$conn = $db->getConn();


	$data = [
		"uName" => $username,
		"pWHash" => $pwh,
		"zip" => $zip,
		"email" => $email,
		"repeatPw" => $repeatPw
		];

			
	
$sql = 'INSERT INTO user(username,pwhash,zip,email) VALUES (:username, :pwhash,:zip,:email)';
$stmt = $conn->prepare($sql);
$stmt->execute(['username' => $username, 'pwhash' => $pwh, 'zip' => $zip, 'email' => $email]);
		
					

echo json_encode($data);



?>