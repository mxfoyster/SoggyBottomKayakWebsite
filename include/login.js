
//Call our custom alert box (set to visible) and display the text sent in the parameter
function CallCustomAlert (message)
{
	loginform ="<br/><br/><form name=\"\" method=\"post\" action=\"include/login.php\">";
	loginform +="<label for=\"\">Username</label>&nbsp;&nbsp;<input type=\"text\" name=\"uName\" value=\"\" id=\"unameID\" maxlength=\"30\" />";
	loginform +="<br/><br/>";
	loginform +="<label for=\"\">Password</label>&nbsp;&nbsp;<input type=\"password\" name=\"pwd\" id=\"pwdID\" size=\"20\" maxlength=\"30\" /><br/><br/>";
	loginform +="<br/><p id=\"capsOffPlaceholder\">&nbsp;</p><p id=\"capsAlert\">Caps lock on!</p>";
	loginform += "<input class=\"ourLoginSubmit\" type=\"submit\" value=\"SUBMIT\" /></form>";
	
	document.getElementById("ourLoginBoxCNT").style.visibility="visible";
	document.getElementById("loginText").innerHTML = message + loginform;	
	//if (refreshAfter) toReload=true;

	//our caps lock checker
	var input = document.getElementById("pwdID");
	var capsOnBox = document.getElementById("capsAlert");
	var capsOffBox = document.getElementById("capsOffPlaceholder");
	input.addEventListener("keyup", function(event) 
	{
		if (event.getModifierState("CapsLock")) 
		{
			capsOnBox.style.display = "block";
			capsOffBox.style.display = "none";
		} 
		else 
		{
			capsOnBox.style.display = "none";
			capsOffBox.style.display = "block";
		}
	});
}

