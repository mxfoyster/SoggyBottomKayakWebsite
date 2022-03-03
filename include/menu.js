document.getElementById("home").addEventListener("click", goHome);
document.getElementById("join").addEventListener("click", goJoin);
document.getElementById("why").addEventListener("click", goWhy);
document.getElementById("equipment").addEventListener("click", goEquipment);
document.getElementById("login").addEventListener("click", goLogin);

function goHome()
{
	$(function()
	  {
		  $("#middle-dest").load("\home.html"); 
	  });
	
}

function goJoin()
{
	$(function()
	  {
		  $("#middle-dest").load("\joinus.html"); 
	  });
}

function goWhy()
{
	$(function()
	  {
		  $("#middle-dest").load("\why.html"); 
	  });
}

function goEquipment()
{
	$(function()
	  {
		  $("#middle-dest").load("\equip.html"); 
	  });
	
}

function goLogin()
{
CallCustomAlert ("Log into Members Area");
}