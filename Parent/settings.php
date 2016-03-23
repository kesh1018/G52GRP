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
	<script type="text/javascript" src="js/time.js" ></script>
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
	        <li><a href="visitor.php">Visitor</a></li>
	    </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	    <ul class="nav navbar-nav navbar-right">
	    	<li><div id="clockbox" style="margin-top: 15px;"></div></li>
	      <p class="navbar-text">Signed in as <?php echo $login_session; ?></p>
	      	<li class="active"><a href="#">Settings <span class="sr-only">(current)</span></a></li>
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
	        <button type="button" style="margin-top: 10px;margin-left: 5px;"class="btn btn-info btn-sm" data-toggle="modal" data-target="#logout">Log Out</button>
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