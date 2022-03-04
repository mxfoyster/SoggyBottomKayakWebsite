<!DOCTYPE html>
<html lang="en">
<head>
	<title>Soggy Bottom Kayak Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/menuStyle.css" />
	<link rel="stylesheet" type="text/css" href="css/loginBox.css" />
	<script src="include/jquery.js"></script> 
	<script src="include/index.js" defer></script> 

</head>

<body>


<div class="grid-container">

  <!--Header box-->
  <div class="header">
    <?php include_once("include/header.php"); ?>
  </div>
  
  <!--Left box-->
  <div class="left" style="background-color:#777;">
  <?php include_once("include/leftbox.php"); ?>
  </div>

  <!--Main centre box-->
  <div class="middle" style="background-color:#999;">
	
	<!-- Our custom login box code here -->
	<span class="ourLoginBox" id="ourLoginBoxCNT">
	<span class="ourLoginMessage" id="loginText">Test Text in our alert box</span>
	</span>
  <!--using Jquery to load our middle box content-->
  <script type="text/javascript">
	  $(function()
	  {
		  $("#middle-dest").load("home.html"); 
	  });
  </script>
  
  <span id="middle-dest"></span>
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
