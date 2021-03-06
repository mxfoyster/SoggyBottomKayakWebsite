<?php
session_start();
if ( isset( $_SESSION['username'] ) ) 
{
    // Grab news data from the database.
    // as we can let them access the "logged in only" pages
	require_once("dbasefunctions.php");
	//set up our connection
	$driver2 = new mysqli_driver();
	$dbase = "kayakwebsite";	
	$driver2->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
	try
	{
		//set up our connection
		$conn2 = SetUpConnection($dbase);
		$thisID = $_GET['art']; //from our query string we select the id
		$table = $_GET['tab'];
		
		//we search for our article here		
		$sql = "select article from $table where ID like '$thisID';";
		$error = ""; //Variable for storing our errors.
	
		
		$result = mysqli_query($conn2,$sql); //do the query
		//echo $sql;
		if ($result = mysqli_query($conn2,$sql)) //if a valid search
		{
			//everything's OK, so we can display what data we have here
			while ($row = mysqli_fetch_assoc($result))
				{
					echo $row['article'];
				}
				
			return true;	
		}
		else
		{
			return false;
		}
		
	}
	//we didn't make it through the connection or the search so we send our custom error
	catch (mysqli_sql_exception $e)
	{
	echo "Sorry, an Error occurred <br /> ";
	return false;
	}	
} 
else //we get here if the user didn't log in and tried to load this page directly!
{
    // Redirect them to the login page
    echo "Sorry, you do not have permission";
}
?>