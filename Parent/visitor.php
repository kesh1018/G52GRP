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

	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">VMS Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav">
	        <li><a href="dashboard.php">Home</a></li>
	        <li class="active" ><a href="#">Visitor <span class="sr-only">(current)</span></a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
            <li><div id="clockbox" style="margin-top: 15px;"></div></li>
	      	<p class="navbar-text">Signed in as <?php echo $login_session; ?></p>
	      	<li><a href="settings.php">Settings</a></li>
	                 
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
            <button type="button" style="margin-top: 10px;margin-left: 5px;"class="btn btn-info btn-sm" data-toggle="modal" data-target="#logout">Log Out</button>
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
						<form id="myform" role="form" action="add.php" method="POST">
    							<div class="row" style="margin-top: 20px;">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="Name">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>IC Number</label>
                                            <input type="text" class="form-control" placeholder="IC Number" name="IC_No" >
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control" placeholder="Date of Birth" name="DOB" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="Gender" name="gender" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" name="address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Race</label>
                                                <input type="text" class="form-control" placeholder="Race" name="race" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Religion</label>
                                                <input type="text" class="form-control" placeholder="Religion" name="religion" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Contact Number" name="contact_num" >
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Registration Number</label>
                                                <input type="text" class="form-control" placeholder="Registration Number" name="registration_num">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <input type="text" class="form-control" placeholder="Category" name="category" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" placeholder="Date" name="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Check In Time</label>
                                                <input type="time" class="form-control" placeholder="Check In Time" name="check_in">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Check Out Time</label>
                                                <input type="time" class="form-control" placeholder="Check Out Time" name="check_out">
                                            </div>
                                        </div>
        
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Remarks</label>
                                                <input type="text" class="form-control" placeholder="Remarks" name="remarks">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="add" class="btn btn-info btn-fill pull-right">Add</button>
                                    
                                    <button  style="margin-right:20px;"  type="button" id="loadkad" class="btn btn-info btn-fill pull-right">
                                        Load from MyKad
                                    </button>
                                    <div class="clearfix"></div>
						</form>
                </div>

					<div class="tab-pane fade" id="edit">
                        <form role="form" action="edit.php">
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
                                                <input type="text" class="form-control" placeholder="Registration Number">
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
                                                    <input type="text" class="form-control" placeholder="Date" id="datetimepicker4" />
                                            </div>
                                        </div>
                                            <script type="text/javascript">
                                                $(function (){
                                                    $('#datetimepicker4').datetimepicker();
                                                });
                                            </script>
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
                                                <input type="text" class="form-control" placeholder="Remarks">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Edit</button>
                                    <div class="clearfix"></div>
                        </form>
					</div>
					<div class="tab-pane fade" id="blacklist">
						
					</div>
				</div>
			
			</div>
			</div>
		</div>
	</div>
       <script type="text/javascript">
        $("#loadkad").click(function(event){
             try {
                var obj = new ActiveXObject("mykadproweb.mykadproweb.jpn");
                var strRet = obj.BeginJPN("FT SCR2000 0");
                if (strRet == "0") {
                    document.forms[0].IC_No.value = obj.getIDNum();
                    document.forms[0].DOB.value = obj.getBirthDate();
                    document.forms[0].Name.value = obj.getKPTName();
                    document.forms[0].religion.value = obj.getReligion();
                    document.forms[0].gender.value = obj.getGender();
                    document.forms[0].race.value = obj.getRace();
                    document.forms[0].address.value = obj.getAddress();

                    obj.EndJPN();
                }
                else {
                    alert("Error : " + strRet);
                }
            } catch (e) {
                    alert("Check connection with MyKadReader or Contact Admin" + e.message);
            }
    });
            
    </script>
</body>
</html>