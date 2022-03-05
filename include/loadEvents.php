<?php

if ( isset( $_SESSION['username'] ) ) 
{
    // Grab news data from the database.
    // as we can let them access the "logged in only" pages
	require_once("dbasefunctions.php");
	//set up our connection
	$driver = new mysqli_driver();
	$dbase = "kayakwebsite";	
	$driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
	try
	{
		//set up our connection
		$conn = SetUpConnection($dbase);
		//we're going to format the date from within the query using the DATE_FORMAT method within MySQL
		// using order by and DESC, we can make sure they appear most recent first.
		$sql = "select ID, title, DATE_FORMAT(startDate, '%d/%m/%Y') as startDate, DATE_FORMAT(endDate, '%d/%m/%Y') as endDate from events order by STR_TO_DATE(startDate, '%d-%m-%y') DESC;";
		$error = ""; //Variable for storing our errors.
		$result = mysqli_query($conn,$sql); //do the query
	
		if ($result = mysqli_query($conn,$sql)) //if a valid search
		{
			//everything's OK, so we can display what data we have here
			while ($row = mysqli_fetch_assoc($result))
				{
					echo "<div class =\"articles\" id=\"eventsArticle".$row['ID']."\"  onclick= \"CallArticleBox('" . $row['ID'] . "','events')\"><h4 class =\"articles\" >". $row['startDate']. "-" . $row['endDate'] ."</h4>". $row['title']. " <br/></div><hr/>";
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
    header("Location: ../index.php");
}
?>