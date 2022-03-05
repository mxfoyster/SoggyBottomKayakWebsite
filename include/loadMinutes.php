<?php

if ( isset( $_SESSION['username'] ) ) 
{
	$path="mdata";
	$files = array_diff(scandir($path), array('.', '..')); //gets files into array minus . & .. (root & sub)
	
	//now we will strip off the extension
	foreach ($files as &$fileToTrim) 
	{
		$currentTrimmed = explode( '.', $fileToTrim ); //split by period before extension	
		$fileToTrim = $currentTrimmed[0];
		//$files[$key] = $thisFile[0];
	}
	
	//now to sort them
	usort($files,"SortFnByDate");
	
	//display each one as an anchor
	foreach ($files as $file) 
	{	
		echo "<br/><a href=\"mdata/" . $file . ".pdf\">" . $file . "<br/>"; //and display just the first part
	}
	echo "<br/>";
} 
else //we get here if the user didn't log in and tried to load this page directly!
{
    // Redirect them to the login page
    header("Location: ../index.php");
}

// here's where the date sorting is fed back to the usort. NOTE I've flipped the return vals to get desc.
function SortFnByDate($a,$b)
{
	$aSplit= explode( '-', $a ); //split first by dash
	$bSplit= explode( '-', $b ); //split first by dash
	//echo $aSplit[1];
	
	//year *12 + month for each accounts for months AND years
	if (($aSplit[2] * 12 + $aSplit[1]) < ($bSplit[2] * 12 + $bSplit[1]))
		return +1;
	else
		return -1;
}

?>