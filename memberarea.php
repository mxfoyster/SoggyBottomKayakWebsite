<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['username'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Soggy Bottom Kayak Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/menuStyle.css" />
	<link rel="stylesheet" type="text/css" href="css/memberAreaDataStyle.css" />
	<link rel="stylesheet" type="text/css" href="css/articleBox.css" />
	<!-- The next stylesheet gresy out our redundant menu options as we are in the members area -->
	<link rel="stylesheet" type="text/css" href="css/menuItemsGreyout.css" />
	<script src="include/jquery.js"></script> 
	<script src="include/articleBox.js" defer></script> 
	
</head>

<body>
 
  <!-- This is our hidden article box -->
  <span class="ourArticleBox" id="ourArticleBoxCNT">
	<span class="ourArticleText" id="articleText">Test Text in our alert box</span>
	<input class = "ourArticleExit" type="button" name="closeArticle" value="EXIT"/>
  </span>

<div class="grid-container">

  <!--Header box-->
  <div class="header">
    <?php include_once("include/header.php"); ?>
  </div>
  
  <!--Let's turn our login to a logout-->
   <script type="text/javascript">
	document.getElementById("login").innerHTML="Log Out";
   </script>	

  <!--Left box-->
  <div class="left" style="background-color:#777;">
  <?php include_once("include/leftbox.php"); ?>
  </div>

  <!--Main centre box-->
  <div class="middle" style="background-color:#999;">
	
 
  <p>Members Area</p>
 
  
  <table class="memberDataTable">
	<tr>
	<td style="width: 33%">NEWS</td><td style="width: 33%">EVENTS</td><td style="width: 34%">MEETING MINUTES</td>
	</tr>
	<tr>
	<td>
	
	<!-- We can load our news into here -->
	<?php include_once("include/loadNews.php"); ?>
	</td><td>
	
	<!-- We can load our events into here -->
	<?php include_once("include/loadEvents.php"); ?>
	</td>
	<td>
	
	<!-- We can load our minutes here -->
	<?php include_once("include/loadMinutes.php");?>
	</td>
	</tr>
  </table>
  
  </div>  

  <!--Right box-->
  <div class="right" style="background-color:#aaa;">
  <?php include_once("include/rightbox.php"); ?>
  </div>
  
  <!--Footer box-->
  <div class="footer">
  <p><?php include_once("include/footer.php"); ?></p>
  </div>
</div>

</body>
</html>
