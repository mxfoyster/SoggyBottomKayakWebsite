const loginSubmitBtn = document.querySelector('input[name="getLoginSubmit"]'); //our 'OK' button for custom alert box

loginSubmitBtn.addEventListener("click", () =>
	{
		document.getElementById("ourLoginBoxCNT").style.visibility="hidden"; //close the box (hide it actually)
		//if (toReload) document.location.reload(true); //reload page for another go
	});

//Call our custom alert box (set to visible) and display the text sent in the parameter
function CallCustomAlert (message /*,refreshAfter*/)
{
	document.getElementById("ourLoginBoxCNT").style.visibility="visible";
	document.getElementById("loginText").innerHTML = message;	
	//if (refreshAfter) toReload=true;
}