LOL
<?php
	require_once ("functions.php");
	
	if (isset($_POST["login"])){
		
	
		//log in
		echo "Loggin in...";
		
	//sign up button clicked	
	}else if (isset($_POST["signup"])){
		//sign up
		echo "Signing up... ";
		
		//the fields are not empty
		if(!empty($_POST["username"]) && !empty($_POST["password"])){
			
			//save to db
			signup($_POST["username"], $_POST["password"]);
			
		}else{
			echo "Both fields are required! ";
			
		}
		
	}
?>
<h1> Log In </h1>
<form method="POST">

		<input type="text" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password">
		
		<input type="submit" name="login" value="Log In">

</form>

<h1> Sign Up </h1>
<form method="POST">

		<input type="text" placeholder="username" name="username">
		<input type="password" placeholder="password" name="password">
		
		<input type="submit" name="signup" value="Sign Up">

</form>
