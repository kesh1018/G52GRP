<?php
	include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Visitor Management System Dashboard</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">VMS Dashboard</a>
			</div>
	<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav navbar-left">
	        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="summary.php">Summary</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visitor <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Add Visitor</a></li>
	            <li><a href="#">Edit Visitor</a></li>
	            <li><a href="#">Delete Visitor</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      	<p class="navbar-text">Signed in as <?php echo $login_session; ?></p>
	      	<li><a href="settings.php">Settings</a></li>

	      	<!-- Modal -->
	        <li><div class="modal fade" id="logout" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
				    	<div class="modal-header"><h4>Log Out<i class="fa fa-lock"></i></h4></div>
				     		<div class="modal-body"><i class="fa fa-question-circle"></i>Are you sure you want to logout?</div>
				    			<div class="modal-footer">
				     			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove"></i>No</button>
				     			<a href="logout.php" class="btn btn-danger"><i class="fa fa-check"></i>Yes</a>
				    			</div>
				    </div>
				</div>
			</div>
	        </li>

	        <!-- Trigger the modal with a button -->
	        <button type="button" style="margin-top: 10px"class="btn btn-info btn-sm" data-toggle="modal" data-target="#logout">Log Out</button>			
	      </ul>
	    </div>
		</div>
	</nav>

	<script src='js/jquery-2.2.1.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
</body>
</html>