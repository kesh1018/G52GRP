<?php
	include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Visitor Management System Dashboard</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/jquery.dataTables.css" rel="stylesheet" />
	<script type="text/javascript" language="javascript" src='js/jquery.js'></script>
	<script type="text/javascript" language="javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" language="javascript" src='js/jquery.dataTables.js'></script>
			<script type="text/javascript" language="javascript">
				 $(document).ready(function(){
					var dataTable =$('#example').dataTable({
						"serverSide": true,
						"processing": true,
						 responsive: true,
						"stateSave" : true,
						"autoWidth": true,
						"pagingType": "full_numbers",
						"ajax":{
							url: "server-datatable.php",
						}
						});
					});
			</script>
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
	      	<li><a href="settings.php">Settings</a></li>
	        <li><a href="logout.php">Log out</a></li>
	      </ul>
	    </div>
		</div>
	</nav>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8" style="margin-left:50px">
			<div class="panel panel-default">
				<div class="panel-heading">
					Visitor List
				</div>
				<div class="panel-body">
				<table class="table table-striped table-bordered table-hover" id="example" width="100%" cellspacing="0">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>IC No</th>
		                <th>Address</th>
		                <th>Gender</th>
		                <th>Race</th>
		                <th>Category</th>
		                <th>Date</th>
		                <th>Check In Time</th>
		                <th>Check Out Time</th>
		            </tr>
		       	</thead>
		   		</table>
		   		</div>
			</div>
		</div>
		<div class="col-lg-3">
		<div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
		</div>
	</div>
	</div>
	<div class="row">
	
	</div>
	</div>
</body>
</html>