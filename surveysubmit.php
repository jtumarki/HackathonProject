<?PHP

		//need to have some variable $username on this page, possibly passed along from url?
		//try:
		
if (!isset($_SESSION['SESS_FIRST_NAME'])){
	echo 'Please login to comment and rate.';
}
else{
	
		$username = $_SESSION['SESS_USERNAME'];
		echo 'username: '.$username.'</br>';
		
		$ptype1_status = 'unchecked'; //makes sure that all of the buttons were checked
		$ptype2_status = 'unchecked';
		$ptype3_status = 'unchecked';
		$ptype4_status = 'unchecked';
		$ptype5_status = 'unchecked';
		$ptype6_status = 'unchecked';
		$ptype7_status = 'unchecked';
		$ptype8_status = 'unchecked';
		$ptype9_status = 'unchecked';
		$ptype10_status = 'unchecked';


	//checks for a post from button named Submit - do I need this?
	if (isset($_POST['submit'])) {


	    //gets selected personality answers from the radio buttons
		$selected_ptype1 = $_POST['ptype1'];
		$selected_ptype2 = $_POST['ptype2'];
		$selected_ptype3 = $_POST['ptype3'];
		$selected_ptype4 = $_POST['ptype4'];
		$selected_ptype5 = $_POST['ptype5'];
		$selected_ptype6 = $_POST['ptype6'];
		$selected_ptype7 = $_POST['ptype7'];
		$selected_ptype8 = $_POST['ptype8'];
		$selected_ptype9 = $_POST['ptype9'];
		$selected_ptype10 = $_POST['ptype10'];
			
		//makes sure that each question was answered
		if ($selected_ptype1 !=  '') {
		
				$ptype1_status = 'checked';
		}
		
		if ($selected_ptype2 !=  '') {
		
				$ptype2_status = 'checked';
		}
		
		if ($selected_ptype3 !=  '') {
		
				$ptype3_status = 'checked';
		}
		
		if ($selected_ptype4 !=  '') {
		
				$ptype4_status = 'checked';
		}
		
		if ($selected_ptype5 !=  '') {
		
				$ptype5_status = 'checked';
		}
		
		if ($selected_ptype6 !=  '') {
		
				$ptype6_status = 'checked';
		}
		
		if ($selected_ptype7 !=  '') {
		
				$ptype7_status = 'checked';
		}
		
		if ($selected_ptype8 !=  '') {
		
				$ptype8_status = 'checked';
		}
		
		if ($selected_ptype9 !=  '') {
		
				$ptype9_status = 'checked';
		}
		
				
		if ($selected_ptype10 !=  '') {
		
				$ptype10_status = 'checked';
		}

		//only open connection and put info in database if all questions were answered
		if(($ptype1_status == 'checked') && ($ptype2_status == 'checked') && ($ptype3_status == 'checked')
				&& ($ptype4_status == 'checked') && ($ptype5_status == 'checked') && ($ptype6_status == 'checked')
				&& ($ptype7_status == 'checked') && ($ptype8_status == 'checked') && ($ptype9_status == 'checked')&& ($ptype10_status == 'checked')){
				
				
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
			
			//update interests, user_interests, and personality_qs. Run some matching queries to output matches (later)
				
			
			//first, delete all existing rows connected to this username if there are any.
			
			$deletesql = "DELETE FROM user_interests WHERE user_id='$username'";
			if (!mysql_query($deletesql,$con))
			{
				die('Error: ' . mysql_error());
			}
			
			$deletesql = "DELETE FROM personality_qs WHERE user_id='$username'";
			if (!mysql_query($deletesql,$con))
			{
				die('Error: ' . mysql_error());
			}
			
			//then insert updated info into tables
		
		}
		else{ //if something has not been checked, then refresh and print an error
			
			echo 'Not all fields were checked. Please select a value for all rating categories </br>';
			
		}
		


	}

}

?>