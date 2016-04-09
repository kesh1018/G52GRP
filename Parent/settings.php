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
    <script src='js/guardList.js' type="text/javascript" ></script>
</head>
<body style="font-size: 20px;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size: 20px;">VMS Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		            <li><a href="dashboard.php">Home</a></li>
		            <li><a href="visitor.php">Visitor</a></li>
		        </ul>
      			<ul class="nav navbar-nav navbar-right">
		            <li><div id="clockbox" style="margin-top: 13px;"></div></li>
		        <h3 class="navbar-text" style="font-size: 20px;" >Signed in as <?php echo $login_session; ?></h3>
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


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="margin-left:15px; margin-right:15px;">
                <div class="panel-heading">
                    Guard Information
                </div>
            <div class="panel-body">
                <div role="tabpanel">
                    <ul class= "nav nav-tabs">
                        <li role="presentation" class="active"><a href="#guard_list" data-toggle="tab">Guard List</a></li>
                        <li role="presentation"><a href="#addguard" data-toggle="tab">Add Guard</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="guard_list">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th><input type="checkbox" id="checkall" /></th>
                                    <th>Name</th>
                                    <th>Guard ID</th>
                                    <th>IC/Passport No</th>
                                    <th>Gender</th>
                                    <th>Race</th>
                                    <th>Religion</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Date</th>
                                    <th>Check In Time</th>
                                    <th>Date</th>
                                    <th>Check Out Time</th>
                                    <th>Remarks</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        <td>Suresh Subramaniam</td>
                                        <td>G1</td>
                                        <td>64563223</td>
                                        <td>M</td>
                                        <td>Indian</td>
                                        <td>Christian</td>
                                        <td>Semenyih</td>
                                        <td>0168619386</td>
                                        <td>2016-03-25</td>
                                        <td>12:00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id="delete1"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        <td>Suresh</td>
                                        <td>G2</td>
                                        <td>64563223</td>
                                        <td>M</td>
                                        <td>Indian</td>
                                        <td>Christian</td>
                                        <td>Semenyih</td>
                                        <td>0168619386</td>
                                        <td>2016-03-25</td>
                                        <td>12:00</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id="delete1"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>
                                </tbody>   
                            </table>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <!-- /.modal-dialog --> 
        <div class="modal-dialog">
            <!-- /.modal-content --> 
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Details</h4>
                </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <textarea rows="2" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <!-- /.modal-dialog --> 
        <div class="modal-dialog">
            <!-- /.modal-content -->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this record?</div>
                    </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
            </div>
        </div>
    </div>
                        </div>

                        <div class="tab-pane fade" id="addguard">
                    <form role="form" action="add.php">
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
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" placeholder="Date of Birth" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="Gender" >
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
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Race</label>
                                                <input type="text" class="form-control" placeholder="Race" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <input type="text" class="form-control" placeholder="Religion" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Contact Number" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Registration Number</label>
                                                <input type="date" class="form-control" placeholder="Registration Number">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Check Out Time</label>
                                                <input type="time" class="form-control" placeholder="Check Out Time">
                                            </div>
                                        </div>
        
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input type="time" class="form-control" placeholder="Remarks">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Edit</button>
                                    <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php 
        if($login_session=="admin@vms.com"){
        echo "admin stuff goes here";
    }else{
        echo '<div class="alert alert-warning" role="alert">
            <a href="" class="alert-link">something</a></div>';
    }?>
</body>
</html>