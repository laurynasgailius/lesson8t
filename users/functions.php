<?php

	$servername = "localhost";
	$db_username = "webpr2016";
	$db_password = "webpr16";

	function login($user, $pass) {

	$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_laugai");

	$stmt = $mysql->prepare("select id FROM users WHERE username=? and password=?");

	echo $mysql->error;

	$stmt->bind_param("ss", $user, $pass);

	$stmt->bind_param($id);

	$stmt->execute();

	// get the data
	if($stmt->fetch()){
		echo "user with id ".$id." logged in!";
	}else{
		echo "wrong credentials";
	}

	}


	function signup($user, $pass){
		
		//hash the password
		$pass = hash("sha512", $pass);
		
		//GLOBALS - access outside variable in function
		$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_laugai");
		
		$stmt = $mysql->prepare("INSERT INTO users (username, password) VALUES (?,?)");
		
		echo $mysql->error;
		
		$stmt->bind_param("ss", $user, $pass);
		
		if($stmt->execute()){
			echo "user saved successfully! ";
		}else{
			echo $stmt->error;
		}
	}
?>