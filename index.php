<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<input name="name" type="text" placeholder="Name"><br>
		<input name="password" type="password" placeholder="Password">
		<input name="submit" type="submit" value="Save">


	</form>
</body>
</html>
<?php

	$nameErr = $password = "";
	$name = $name = "";

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$name = test_input($_POST["name"]);
		$password = test_input($_POST["password"]);

		echo "Hi {$name}, your password is : {$password}";
	}
	
	

?>


