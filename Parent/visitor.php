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
    <link href="css/bootstrap-editable.css" rel="stylesheet">
	<script src='js/jquery-2.2.1.min.js'></script>
	<script src='js/bootstrap.min.js'></script>
    <script src="js/time.js"></script>
    <script src="js/bootstrap-editable.min.js"></script>
</head>
<body style="font-size: 20px;">
    <!-- Initialize navigation  -->
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" style="font-size: 20px;">VMS Dashboard</a>
			</div>
			<div class="collapse navbar-collapse">
      	<ul class="nav navbar-nav">
	        <li><a href="dashboard.php">Home</a></li>
	        <li class="active" ><a href="#">Visitor <span class="sr-only">(current)</span></a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
            <li><div id="clockbox" style="margin-top: 12px;"></div></li>
	      	    <h3 class="navbar-text" style="font-size: 20px;" >Signed in as <?php echo $login_session; ?></h3>
	      	<li><a href="settings.php">Settings</a></li>
	                 
            <li><div class="modal fade" id="logout" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header"><h4 >Log Out<i class="fa fa-lock"></i></h4></div>
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

        <!-- Initialize add visitor  -->
		<div class="col-lg-12" >
			<div class="panel panel-default" style="margin-left:15px; margin-right:15px;">
				<div class="panel-heading" style="text-align: center;">
					Visitor Information
				</div>
    		<div class="panel-body">
    			<div role="tabpanel">
    				<ul class= "nav nav-tabs">
    					<li role="presentation"><a href="#add" data-toggle="tab">Add Visitor</a></li>
    					<li role="presentation"><a href="#edit" data-toggle="tab">Edit Visitor</a></li>
                        <li role="presentation"><a href="#editblacklist" data-toggle="tab">Check Blacklist</a></li>
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
                                                    <input type="text" class="form-control" placeholder="Date" name="date">
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
                            <div class="panel-heading" style="text-align: center; font-size: 20px;">
                                Click to Edit
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="xeditable">
                                      <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>IC No</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Race</th>
                                            <th>Address</th>
                                            <th>Contact Number</th>
                                            <th>Registration Number</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Check In Time</th>
                                            <th>Check Out Time</th>
                                            <th>Remarks</th>
                                            <th>Blacklist</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $connection = mysql_connect("localhost", "root", "");

                                            if(!$connection){
                                                die('Could not connect :' . mysqli_error());
                                            }
                                            $db = mysql_select_db("dbregistration", $connection);
                                            $query = mysql_query("select * from visitor_list");
                                            while($fetch = mysql_fetch_array($query)){
                                                ?>
                                                <tr>
                                                
                                                <td><a id="name" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['name']; ?></a></td>
                                                <td><p id="IC_No" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['IC_No']; ?></p></td>
                                                <td><p id="dob" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['dob']; ?></p></td>
                                                <td><p id="gender" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['gender']; ?></p></td>
                                                <td><p id="race" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['race']; ?></p></td>
                                                <td><p id="religion" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['religion']; ?></p></td>
                                                <td><a id="address" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['address']; ?></a></td>
                                                <td><a id="contact_no" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['contact_no']; ?></a></td>
                                                <td><a id="registration_no" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['registration_no']; ?></a></td>
                                                <td><a id="category" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['category']; ?></a></td>
                                                <td><a id="date" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['date']; ?></a></td>
                                                <td><a id="check_in" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['check_in']; ?></a></td>
                                                <td><a id="check_out" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['check_out']; ?></a></td>
                                                <td><a id="remarks" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['remarks']; ?></a></td>
                                                <td><a id="blacklist" href="#" data-type="text" data-pk=" <?php echo $fetch['ID']; ?>"> <?php echo $fetch['blacklist']; ?></a></td>
                                                
                                                </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    					
    					<div class="tab-pane fade" id="editblacklist">
                            <div class="panel-heading" style="text-align: center; font-size: 20px;">
                                Visitor on Blacklist
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                      <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>IC No</th>
                                            <th>Blacklist</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $connection = mysql_connect("localhost", "root", "");

                                            if(!$connection){
                                                die('Could not connect :' . mysqli_error());
                                            }
                                            $db = mysql_select_db("dbregistration", $connection);
                                            $query = mysql_query("select * from visitor_list where `blacklist` = 'YES'");
                                            while($fetch = mysql_fetch_array($query)){
                                                ?>
                                                <tr>
                                                
                                                <td><p><?php echo $fetch['name']; ?></p></td>
                                                <td><p> <?php echo $fetch['IC_No']; ?></p></td>
                                                <td><p> <?php echo $fetch['blacklist']; ?></p></td>
                                                
                                                </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
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
                    document.forms[0].Name.value = obj.getGMPCName();
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
        <script type="text/javascript">
        $(document).ready(function() {
            $.fn.editable.defaults.mode = 'popup';     
            //make editable
            $('#xeditable td a').editable({
                title: 'Enter edit',
                url: 'edit.php',
                ajaxOptions : {
                    type: 'POST'
                }
            });

        });
        </script>

        <script src='js/jquery.validate.js'></script>

        <script>
        $("#myform").validate({

            rules: {
            Name: {
                required: true
            },
            IC_No: {
                required: true,
                number : true
            },

            DOB : {
                required: true
            },

            gender :{
                required: true
            },

            address: {
                required: true
            },

            race :{
                required: true
            },

            religion: {
                required: true
            },

            contact_num:{
                required: true
            },

            registration_num:{
                required: true
            },

            category:{
                required: true
            },

            date:{
                required: true
            },

            check_in:{
                required: true
            }

        }

        });
        </script> 
</body>
</html>