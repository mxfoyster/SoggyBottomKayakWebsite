document.getElementById("home").addEventListener("click", goHome);
document.getElementById("join").addEventListener("click", goJoin);
document.getElementById("why").addEventListener("click", goWhy);
document.getElementById("equipment").addEventListener("click", goEquipment);
document.getElementById("login").addEventListener("click", goLogin);


//we have evaluated we are NOT in members area BEFORE allowing content to load in each function
function goHome()
{
	if (document.getElementById("login").innerHTML !="Log Out") //if we are logged out
	{	
		$(function()// use jQuery to load in the appropriate html into our middle container
		{
			$("#middle-dest").load("\home.html"); 
		});
	}
}

function goJoin()
{
	if (document.getElementById("login").innerHTML !="Log Out")
	{	
		$(function()
		{
			$("#middle-dest").load("\joinus.html"); 
		});
	}
}

function goWhy()
{
	if (document.getElementById("login").innerHTML !="Log Out")
	{
		$(function()
		{
			$("#middle-dest").load("\why.html"); 
		});
	}
}

function goEquipment()
{
	if (document.getElementById("login").innerHTML !="Log Out")
	{
		$(function()
		{
			$("#middle-dest").load("\equip.html"); 
		});
	}
	
}

function goLogin()
{
	if (document.getElementById("login").innerHTML !="Log Out")
		CallCustomAlert ("Log into Members Area");
	else
		window.location = "include/logout.php";
}