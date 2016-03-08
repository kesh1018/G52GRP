<?php
	include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Visitor Management System Dashboard</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<script src='js/jquery-2.2.1.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">VMS Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav">
	        <li><a href="dashboard.php">Home</a></li>
	        <li><a href="summary.php">Summary</a></li>
	        <li><a href="visitor.php">Visitor</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      	<p class="navbar-text">Signed in as <?php echo $login_session; ?></p>
	      	<li class="active"><a href="#">Settings <span class="sr-only">(current)</span></a></li>
	        <li><a href="logout.php">Log out</a></li>
	      </ul>
	    </div>
		</div>
	</nav>

	<?php 
		if($login_session=="admin@vms.com"){
		echo "admin stuff goes here";
	}else{
		echo '<div class="alert alert-warning" role="alert">
  			<a href="" class="alert-link">something</a></div>';
	}
	?>
</body>
</html>