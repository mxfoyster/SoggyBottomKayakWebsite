//our handle to the article box exit button
const articleBtn = document.querySelector('input[name="closeArticle"]'); //our 'OK' button for custom alert box

//Handle our exit button 
articleBtn.addEventListener("click", () =>
	{
		document.getElementById("ourArticleBoxCNT").style.visibility="hidden"; //close the box (hide it actually)
	});

// open our article box
//This one takes some explaining.. Within loadNews.php and loadEvents.php we add an onClick event to a div
//	that we build within the output for each row we display in the columns on the member's page. 
//The onClick calls this function, passing it the id and table as parameters (also set within the div).
//We can now use jQuery to call our loadArticle.php WITH qurey strings it uses to select the table and
// 	ID. Now it knows what to search for and can display it in within this box...
function CallArticleBox (id,table)
{
	//show the box
	document.getElementById("ourArticleBoxCNT").style.visibility="visible";
	
	//build our url with query string
	let filename = "include/loadArticle.php?art=" + id + "&tab=" + table;
	
	 //use jQuery to go get the data 
	 $(function()
	  {
		  $("#articleText").load(filename); 
	  });
}

