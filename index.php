<!DOCTYPE html>
<html lang="en">
<head>
	<title>Soggy Bottom Kayak Club</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/menuStyle.css" />

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
	<h3>Welcome</h3>
	<p>Welcome to Soggy Bottom Kayak Club. We love our kayaks but we use Paddleboards and Canoes too. 
	In fact, if you can paddle it, we can teach it.</p>
	<p>Set in the heart of the Peak District in Derbyshire, Soggy Bottom Kayak club is based in the 
	village of Moist Derrierre and has some 200 members.</p>
	<p>To learn more about our kayak club, just use the menu at the top to browse through our website.</p>
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
