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
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">VMS Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav">
	        <li><a href="dashboard.php">Home</a></li>
	        <li ><a href="summary.php">Summary </a></li>
	        <li class="active" ><a href="#">Visitor <span class="sr-only">(current)</span></a></li>
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

	<div class="row">
		<div class="col-lg-8" style="margin-left:40px">
			<div class="panel panel-default">
				<div class="panel-heading">
					Visitor Information
				</div>
		<div class="panel-body">
			<div role="tabpanel">
				<ul class= "nav nav-tabs">
					<li role="presentation" class="active"><a href="#add" data-toggle="tab">Add Visitor</a></li>
					<li role="presentation"><a href="#edit" data-toggle="tab">Edit Visitor</a></li>
                    <li role="presentation"><a href="#blacklist" data-toggle="tab">Blacklist</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane fade in active" id="add">
						<form role="form">
							<div class="row" style="margin-top: 20px;">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>IC Number</label>
                                                <input type="text" class="form-control" placeholder="IC Number" name="IC_No" id="IC_No">
                                            </div>
                                        </div>
                            </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="Gender" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Race</label>
                                                <input type="text" class="form-control" placeholder="Race" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <input type="text" class="form-control" placeholder="Category" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Check In Time</label>
                                                <input type="time" class="form-control" placeholder="Check In Time">
                                            </div>
                                        </div>
        
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
                                    <div class="clearfix"></div>
						</form>
					</div>
					<div class="tab-pane fade" id="edit">
						<p>yo</p>
					</div>
					<div class="tab-pane fade" id="blacklist">
						<p>yo</p>
					</div>
				</div>
			
			</div>
			</div>
		</div>
	</div>

</body>
</html>