//our handle to the article box exit button
const articleBtn = document.querySelector('input[name="closeArticle"]'); //our 'OK' button for custom alert box

//Handle our exit button 
articleBtn.addEventListener("click", () =>
	{
		document.getElementById("ourArticleBoxCNT").style.visibility="hidden"; //close the box (hide it actually)
	});

// open our article box
function CallArticleBox (text)
{
	document.getElementById("ourArticleBoxCNT").style.visibility="visible";
	document.getElementById("articleText").innerHTML = text;	
}

