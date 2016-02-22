<!doctype html>

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "us-cdbr-iron-east-03.cleardb.net";
$username = "b481f533eab2cc";
$password = "fef9929b";
$db = "heroku_ca79ab026f8fabd";

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Check if server is alive
if (mysqli_ping($conn))
  {
  echo "Connection is ok!";
  }
else
  {
  echo "Error: ". mysqli_error($conn);
  }
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="css/style.css" rel="stylesheet">
<title>Visitor Management System</title>
</head>

<div id="container">
</div>
	<br />
<div id="menubar">
	<div class="menu">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a>
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

<body>
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
		<p><span>Etnicity:</span> <?php echo $row1['visitor_etnicity']; ?></p>
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
