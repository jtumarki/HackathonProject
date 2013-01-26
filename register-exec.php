<?php
	//Start session
	session_start();


   //php form for actually putting user info into database when registering happens
   
    //connect to database
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"],1);

	//tries to open connection to database
	$con = mysql_connect($server, $username, $password);
	if (!$con)
	{
			die('Could not connect: ' . mysql_error());
	}
			
	mysql_select_db($db); // does this work? check ratings.php if this doesn't
	
	//check to see if username already exists?
		function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//Sanitize the POST values
	$fname = clean($_POST['email']);
	$lname = clean($_POST['password']);
	$login = clean($_POST['name']);
	$password = clean($_POST['organization']);
	
	//if username does not exist, insert user info into database


?>