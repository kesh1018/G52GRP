<?php
	include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Imports -->
	<meta charset="utf-8" />
	<title>Visitor Management System Dashboard</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/jquery.dataTables.css" rel="stylesheet" />
	<script type="text/javascript" language="javascript" src='js/jquery.js'></script>
	<script type="text/javascript" language="javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" language="javascript" src='js/jquery.dataTables.js'></script>
	<script type="text/javascript" language="javascript" src="js/time.js" ></script>
			<script type="text/javascript" language="javascript">
				 $(document).ready(function(){
					var dataTable =$('#example').dataTable({ // Intialize datatable
						"serverSide": true,
						"processing": true,
						"responsive": true,
						"stateSave" : true,
						"autoWidth": true,
						"columns": [
						null,
						null,
						{"width": "7%"},
						null,
						{"width": "8%"},
						null,
						null,
						null,
						null,
						null,
						{"width": "7%"},
						null,
						null,
						null,
						null,
						null,
						null
						],
						"pagingType": "full_numbers",
						"ajax":{
							url: "server-datatable.php",
						}			
						});
					});
			</script>
</head>
<body style="font-size: 20px;">

	<!-- Initialize navigation  -->
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" style="font-size: 20px;" >VMS Dashboard</a>
			</div>
	<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav navbar-left">
	        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
	       
	       	<li><a href="visitor.php">Visitor</a></li>
	      </ul>
	
	      <ul class="nav navbar-nav navbar-right">
	      	<li><div id="clockbox" style="margin-top: 12px;"></div></li>
	      		<h3 class="navbar-text" style="font-size: 20px;" >Signed in as <?php echo $login_session; ?></h3>
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
	     <button type="button" style="margin-top: 10px;margin-left: 5px;"class="btn btn-info btn-sm" data-toggle="modal" data-target="#logout">Log Out</button>
	      </ul>
	    </div>
		</div>
	</nav>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center;">
					History of Check Ins
				</div>
				<div class="panel-body">
					<div class="table-responsive"> <!-- Initialize table  -->
						<table class="table table-striped table-bordered table-hover" id="example" width="100%" cellspacing="0">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>IC No</th>
				                <th>DOB</th>
				                <th>Gender</th>
				                <th>Address</th>
				                <th>Race</th>
				                <th>Religion</th>
				                <th>Contact Number</th>
				                <th>Vehicle Type</th>
				                <th>Registration Number</th>
				                <th>Date</th>
				                <th>Category</th>
				                <th>Entrypass Number</th>
				                <th>Check In Time</th>
				                <th>Check Out Time</th>
				                <th>Remarks</th>
				               	<th>Blacklist</th>
				            </tr>
				       	</thead>
				   		</table>
				   	</div>
				   	<form action="export.php" method="post" name="export_excel">
		 
					<div class="control-group">
						<div class="controls">
							<button type="submit" id="export" name="export" class="btn btn-info btn-fill" data-loading-text="Loading...">Export Data</button>
						</div>
					</div>
					</form>
		   		</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
	
	</div>
	</div>
</body>
</html>