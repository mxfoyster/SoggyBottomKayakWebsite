
//Call our custom alert box (set to visible) and display the text sent in the parameter
function CallCustomAlert (message /*,refreshAfter*/)
{
	loginform ="<br/><br/><form name=\"\" method=\"post\" action=\"include/login.php\">";
	loginform +="<label for=\"\">Username</label>&nbsp;&nbsp;<input type=\"text\" name=\"uName\" value=\"\" id=\"unameID\" maxlength=\"30\" />";
	loginform +="<br/><br/>";
	loginform +="<label for=\"\">Password</label>&nbsp;&nbsp;<input type=\"password\" name=\"pwd\" id=\"pwdID\" size=\"20\" maxlength=\"30\" />";
	loginform +="<br/><br/><input class=\"ourLoginSubmit\" type=\"submit\" value=\"SUBMIT\" /></form>";
	
	document.getElementById("ourLoginBoxCNT").style.visibility="visible";
	document.getElementById("loginText").innerHTML = message + loginform;	
	//if (refreshAfter) toReload=true;
}