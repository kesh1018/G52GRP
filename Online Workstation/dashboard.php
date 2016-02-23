<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="js/jquery-2.2.1.min.js"></script>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet">
<title>Visitor Management System</title>
</head>
<body>
<div id="container"></div>
	<br />
<div id="menubar">
	<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a>
			<ul class="submenu">
				<li><a href="#">AAA</a></li>
				<li><a href="#">BBB</a></li>
			</ul>
		</li>
		<li><a href="#">Services</a>
			<ul class="submenu">
				<li><a href="#">XXX</a></li>
				<li><a href="#">YYY</a></li>
			</ul>
			
		</li>
		<li><a href="#">Contact</a></li>
		<li style="padding-right: 23%"><a href="#"></a></li>
		<li><a href="#" class="in" style="color: black">Log In</a></li>
	</ul>
</div>
</div>

<!-- Header content -->
<header>
  <div class="profileLogo"> 
    <!-- Profile logo. Add a img tag in place of <span>. -->
    <p class="logoPlaceholder"><!-- <img src="logoImage.png" alt="sample logo"> --><span>LOGO</span></p>
  </div>
  <div class="profilePhoto"> 
    <!-- Profile photo --> 
    <img src="images/default-picture.jpg" alt="sample" width="259" height="259"></div>
  <!-- Identity details -->
  <section class="profileHeader">		
    <h1>Visitor Management System</h1>
</section>
</header>
<!-- content -->
<section class="mainContent"> 
  <!-- Contact details -->
  <section class="section1">
<hr class="sectionTitleRule2">
    <div class="section1Content">
		<p><span>Name:</span> <?php echo $row1['visitor_name']; ?></p>
		<p><span>I/C Number:</span> <?php echo $row1['visitor_iumber']; ?></p>
		<p><span>Address:</span> <?php echo $row1['visitor_address']; ?></p>
	</div>
  </section>
</section>
<footer>
  <hr>
  <p class="footerDisclaimer">Get it done dude! - <span>Please refer SRS doc for more functions</span></p>
  <p class="footerNote">GRP - <span>Email us</span></p>
</footer>
</body>
</html>
