<?php
session_start(); //get our session going
require_once("dbasefunctions.php");



$driver = new mysqli_driver();
$dbase = "kayakwebsite";
		
$driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
try
{
	//set up our connection
	$conn = SetUpConnection($dbase);
	
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["uName"]))
	{
		if(empty($_POST["uName"]) || empty($_POST["pwd"]))
		{
			$error = "Both fields are required.";
			echo $error;
		}
		else
		{
			//get our login details
			$uname = $_POST['uName'];
			$pwd = $_POST['pwd'];
	
			//strip anything dodgy from our username and password
			$uname = EscapeInput ($conn,$uname); 
			$pwd = EscapeInput ($conn,$pwd); 
			$sql = "select memberName from members where memberName like '$uname' and password like '$pwd';"; 		
			$result = mysqli_query($conn,$sql); //do the query
	
			if ($result = mysqli_query($conn,$sql)) //if a valid search
			{
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);//extract rows
				if(mysqli_num_rows($result) == 1) //if we have one row match
				{				
					echo "SUCCESS!";
					$_SESSION['username'] = $uname; // Initializing Session
					header("location: ../memberarea.php"); // Redirecting To Other Page
				}
				else //otherwise we re-direct
				{
					header("location: ../index.php");	
				}
				return true;
			}
			else 
			{
				return false;
			}
		}
	}		
		
	/*
			
		
					
			$sql = "select townName as name, county from mytowns where county like '$County';"; 
			$result = mysqli_query($conn,$sql);
			echo "Towns in $County are <br/>";
			
			if ($result = mysqli_query($conn,$sql))
			{
				while ($row = mysqli_fetch_assoc($result))
				{
					echo $row['name'] ." ". $row['county']. " <br/>";
				}
				return true;
			}	
			else 
			{
				return false;
			}
			*/
}
catch (mysqli_sql_exception $e)
{
	echo "Sorry, an Error occurred <br /> ";
	return false;
}
	
	


?>
<p>we got here</p>
