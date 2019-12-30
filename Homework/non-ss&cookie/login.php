
<?php
		session_start();
		if (isset($_POST['submit'])) {
		$_SESSION['username'] = $_POST['name'];  
		$_SESSION['password'] = $_POST['pass']; 
		if($_SESSION['username'] == "admin" && $_SESSION['password'] == "123"){
			echo "Login successful!";
		}else{
			echo "Failed";
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		input{
			text-indent: 15px;
			height: 40px;
			width: 200px;
			border: none;
			background: transparent;
			font-style: italic;
			border-bottom: 1px solid lightgrey;
			outline: none;
		}
		.login-form{
			/*width: auto;
			height: auto;
			padding: 10px 30px; */                                       
			background: transparent;
			display: grid;
			align-items: center;
			justify-content: center;
			grid-template-columns: auto;
			color: black;
			margin: 100px 100px;
		}
		a{
			color: lightblue;
			font-size: 14px;
		}
		label{
			margin-top: 15px;
			margin-bottom: 15px;
		}
		button{
			margin: 15px 15px;
			height: 30px;
			width: auto;
			border:none;
			border-radius: 10px;
			background: lightblue;
			font-weight: bold;
			outline: none;
		}
		button:hover{
			background: yellow;
		}
		body{
			display: grid;
			grid-template-columns: auto;
			font-family: sans-serif;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>
	<form class="login-form" action="" method="post">
		<h1>Login</h1>
		<label>User name </label>
		<input type="text" name="name" placeholder="Enter your name" >
		<label>Password</label>
		<input type="text" name="pass"placeholder="Enter your password" ><br>
		<button type="submit">Login</button>
		<p>
			<a href="#">Forgot your password</a><br>
			<a href="#">Don't have account?Sign up </a>
		</p>
	</form>	
</body>
</html>
