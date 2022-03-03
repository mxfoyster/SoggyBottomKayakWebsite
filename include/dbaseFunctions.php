<?php
	function  SetUpConnection($dbase)
	{
	
		$server = "localhost";
		$user = "root";
		$password = "";
		$driver = new mysqli_driver();
		//set report mode for errors
		$driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
		try
		{
			$conn = mysqli_connect($server, $user, $password, $dbase);		
		}
		catch (mysqli_sql_exception $e)
		{
			//echo "Sorry, an Error occurred <br />";
			return false;
		}
		
		return $conn;
	}
	
	function EscapeInput($conn, $input)
	{
		$escapedInput = $conn->real_escape_string($input);
		return $escapedInput;
	}
	?>
