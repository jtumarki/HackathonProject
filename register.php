<!DOCTYPE HTML>
<html>
<?php
	session_start();
?> 

 <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
  	<title>SisterMatch</title>
  	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato|Sacramento' />
  	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen" />
  	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  </head>
  <body class="index">
    
	
	<?php
	
	//copying from register-form on my techcomm project
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  <!-- indicates that clicking the submit button on this form will post to register-exec.php -->
    <form id="register-form" class="form-box" method="post" action="register-exec.php"> 
      <h1>Register for SisterMatch</h1>
      
      <label>E-mail Address</label>
      <input type="text"  id= "email"/>
      
      <label>Password</label>
      <input type="password"  id = "password"/>      
      
      <label>Real Name</label>
      <input type="text" id = "name"/>
      
      <label>Organization</label>
      <select>
        <option value="AP" id = "organization">Alpha Phi</option>
        <option value="AXO" id = "organization">Alpha Chi Omega</option>
        <option value="DDD" id = "organization">Delta Delta Delta</option>
        <option value="DG" id = "organization">Delta Gamma</option>
        <option value="KAO" id = "organization">Kappa Alpha Theta</option>
        <option value="KKG" id = "organization">Kappa Kappa Gamma</option>
      </select>
      
      <label></label>
      <input type="submit" value="Register" />
    </form>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  </body>
</html>