
<?php

include('lock.php');
$user_check=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	function show(id){
	
	if(id == 'profile'){
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("profile").style.display = 'block';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'account'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'block';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'change_password'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'block';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'earn'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'block';
document.getElementById("withdraw").style.display = 'none';
}

else if(id == 'withdraw'){
document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'none';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'block';
}
	
	else{
	
	document.getElementById("profile").style.display = 'none';
document.getElementById("page-wrapper").style.display = 'block';
document.getElementById("account").style.display = 'none';
document.getElementById("change_password").style.display = 'none';
document.getElementById("earn").style.display = 'none';
document.getElementById("withdraw").style.display = 'none';
	
	
	}
}
	
	</script>

</head>



<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Social Money</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_session; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:show('profile')"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                          <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				    <li>
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="active">
                        <a href="javascript:show('page-wrapper')"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:show('profile')"><i class="fa fa-user"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="javascript:show('account')"><i class="fa fa-fw fa-table"></i>Bank Account Detail</a>
                    </li>
                    <li>
                        <a href="javascript:show('change_password')"><i class="fa fa-fw fa-edit"></i>Change Password</a>
                    </li>
                    <!--<li>
                        <a href="javascript:show('earn')"><i class="fa fa-fw fa-desktop"></i>Earning</a>
                    </li> -->
                    
                    <li>
                        <a href="javascript:show('withdraw')" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Request Withdrawl <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="javascript:show('direct_bank')">Direct to Bank</a>
                            </li>
                            <li>
                                <a href="javascript:show('mobile_recharge')">Mobile Recharge</a>
                            </li>
							<li>
                                <a href="javascript:show('cash_back')">Cash Back Shopping</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php
				$sql="SELECT User_Id , FirstName ,LastName,Email,Phone_Number FROM register WHERE Referral_Id='$user_check'"
				
				?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                   



            </div>
            <!-- /.container-fluid -->

        </div>
		
		
		<div id="profile" style="display:none; background-color:white;">
		
            <div class="container-fluid">
			<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#messages" data-toggle="tab">Profile</a></li>
            <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
          </ul>
              
          <div class="tab-content">
		  
             <div class="tab-pane active" id="messages" style="padding-bottom:10%;">
                 
				 
              <?php 
	       $sql=" SELECT User_Id , FirstName ,LastName,Email,Phone_Number FROM register WHERE Email='$user_check' ";
           $result=mysqli_query($con,$sql);		   
		   if (mysqli_num_rows($result) > 0) {
         // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
         echo "User Id: " . $row["User_Id"]. "<br><br>"  . "First Name: " . $row["FirstName"]."<br><br>" ."Last Name:". $row["LastName"]."<br><br>"."Phone Number".$row["Phone_Number"]."<br><br>"."Email :".$row["Email"]."<br><br>";
         }
         } 
	 
			  ?>
               
             </div><!--/tab-pane-->
			 
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="location"><h4>Location/City</h4></label>
                              <input type="text" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="state_name"><h4>State</h4></label>
                              <input type="text" class="form-control" name="state_name" id="state_name" placeholder="enter your state name" title="enter your state name">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="country"><h4>Country</h4></label>
                              <input type="text" class="form-control" name="country" id="country" placeholder="Enter Your State" title="Enter Your State">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>
               
			   
              </div><!--/tab-pane-->
			  
          </div><!--/tab-content-->

        </div><!--/col-9-->
		
		</div>
		
		<div id="account" style="display:none; background-color:white;">
		
	   <div class="container-fluid">
			<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#detail" data-toggle="tab">Account Detail</a></li>
            <li><a href="#edit" data-toggle="tab">Edit Account</a></li>
          </ul>
              
			  
          <div class="tab-content">
             <div class="tab-pane" id="detail">
               <ul class="list-group">
                  <li class="list-group-item text-muted">Bank Account</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  
                </ul> 
               
             </div><!--/tab-pane-->
			 
             <div class="tab-pane" id="edit">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="payee_name"><h4>Payee Name</h4></label>
                              <input type="text" class="form-control" name="payee_name" id="payee_name" placeholder="Name of Account Holder" title="Name which is on your Atm">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="acccount_number"><h4>Account Number</h4></label>
                              <input type="number" class="form-control" name="account_number" id="account_number" placeholder="account Number" title="Account number">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="bank_name"><h4>Bank Name</h4></label>
                              <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Bank Name" title="Bank Name">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="branch_name"><h4>Branch Name</h4></label>
                              <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Branch Name" title="enter your Branch Nname">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="ifsc_code"><h4>IFSC CODE</h4></label>
                              <input type="text" class="form-control" name="ifsc_code" id="ifsc_code" placeholder="Please enter your branch ifsc code you can find it on internet" title="Please enter your branch ifsc code you can find it on internet">
                          </div>
                      </div>
                    <!--  <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div> -->
                      <div class="form-group">
                           <div class="col-xs-12" style="padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              </div>          
			  
              </div><!--/tab-pane-->
			  
			  
          </div><!--/tab-content-->

        </div><!--/col-9-->
		
		</div>
		
		<div id="change_password" style="display:none;">
		
		   <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white; padding-bottom:2%;">
                              <label for="password"><h4>Previous Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Previous Password" title="enter your previous Password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white;padding-bottom:2%;">
                            <label for="newpassword"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" title="enter your New Password.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-12" style="background-color:white;padding-bottom:2%;">
                              <label for="confirm_password"><h4>Confirm Password</h4></label>
                              <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" title=" Confirm Password">
                          </div>
                      </div>
					  
					  <div class="form-group">
                           <div class="col-xs-12" style="background-color:white; padding-bottom:10%;">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
          
                   </form>
		
		</div>
		
		<div id="withdraw" style="display:none">
		
		<div id="direct_bank">
		
		</div>
		
		<div id="mobile_recharge">
		
		</div>
		
		<div id="cash_back" style="display:none">
		
		</div>
		
        </div>        
		
		
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
