<?PHP

		$ptype1_status = 'unchecked';
		$ptype2_status = 'unchecked';
		$ptype3_status = 'unchecked';
		$ptype4_status = 'unchecked';
		$ptype5_status = 'unchecked';
		$ptype6_status = 'unchecked';
		$ptype7_status = 'unchecked';
		$ptype8_status = 'unchecked';
		$ptype9_status = 'unchecked';
		$ptype10_status = 'unchecked';


	if (isset($_POST['submit'])) {


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

		$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

		$server = $url["host"];
		$username = $url["user"];
		$password = $url["pass"];
		$db = substr($url["path"],1);

		mysql_connect($server, $username, $password);
				
		
		mysql_select_db($db);




	}

?>