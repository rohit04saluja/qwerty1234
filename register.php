<html>
	<head>

		<!-- meta characters to be inserted to increase searching -->
		<meta charset="utf-8">
		<title>PAP | Login</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Latest complied and minified JQuery -->
        <script src="bootstrap/jquery-2.1.3.min.js"></script>
    
	    <!-- Custom made CSS file -->
    	<link rel="stylesheet" href="style.css">
        
        <!-- link icon file to html page -->
        <link rel="shortcut icon" href="images/logo.ico">
    
	</head>

	<body>
    
	    <?php
			# include the header for this interface file
        	include_once('head.php');
		?>

		<!-- background for the page -->
        <div class="body1"></div>
		
        <!-- main body container -->
        <div class="container">
        	<div class="row">
            
				<div class="col-xs-4"></div>
                
                	<div class="col-md-4 col-xs-4">
                    
                    	<!-- login form -->
                    	<form action="controller/register.php" method="post" class="register form-horizontal">
                    
                       		<div class="form-group">
	                           	<h2>Register</h2>
	                        </div>
                            
                            <div class="form-group <?php echo (!empty($_POST['name']) && ($_POST['name']=='error')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
									<span class="input-group-addon">
                                    	<span class="glyphicon glyphicon-user"></span>
                                    </span>
									<input type="text" class="form-control" name="Name" placeholder="Name" value="" required>
								</div>
                            </div>
                            
                            <div class="form-group <?php echo (!empty($_POST['email']) && ($_POST['email']=='error')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
									<span class="input-group-addon">
                                    	<span class="glyphicon glyphicon-envelope"></span>
                                    </span>
									<input type="email" class="form-control" name="email" placeholder="E-mail" value="" required>
								</div>
                            </div>
                            
                            <div class="form-group <?php echo (!empty($_POST['usertype']) && ($_POST['usertype']=='error')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
                                	<span class="input-group-addon">
                                    	<span class="glyphicon glyphicon-pencil"></span>
                                    </span>
                                    <select name="userType" class="form-control">
	                                	<option value="student">Student</option>
    	                                <option value="coordinator">Coordinator</option>
        	                            <option value="company">Company</option>
            	                        <option value="admin">Admin</option>
                	                </select>
                                </div>
                            </div>
                            
                            <div class="clearfix hidden-xs"></div>
                            
                            <div class="form-group <?php echo (!empty($_POST['username']) && ($_POST['username']=='error')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
									<span class="input-group-addon">
                                    	<span class="glyphicon glyphicon-user"></span>
                                    </span>
									<input type="text" class="form-control" name="username" placeholder="Username" value="" required>
								</div>
                            </div>
                            
                            <div class="form-group <?php echo (!empty($_POST['password']) && ($_POST['password']=='error')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
                                	<span class="input-group-addon">
	                                    <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <input class="form-control" type="password" placeholder="Password" name="password" value="" required />
                            	</div>
                            </div>
                            
                            <div class="form-group <?php echo (!empty($_POST['password']) && ($_POST['email']=='password')) ?"has-error" : ""; ?>">
                            	<div class="input-group">
                                	<span class="input-group-addon">
	                                    <span class="glyphicon glyphicon-lock"></span>
                                    </span>
                                    <input class="form-control" type="password" placeholder="Confirm Password" name="cpassword" value="" required />
                            	</div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-group">Log in</button>
                            </div>
                            
                        </form>
                        
                    </div>
                    <div class="col-xs-4"></div>
                    
            	</div>
        	</div>
        </div>

		<script>
			$(document).ready(function() {
			    $('#identicalForm').formValidation({
			        framework: 'bootstrap',
				        icon: {
				            valid: 'glyphicon glyphicon-ok',
				            invalid: 'glyphicon glyphicon-remove',
				            validating: 'glyphicon glyphicon-refresh'
				        },
				        fields: {
				            confirmPassword: {
				                validators: {
				                    identical: {
				                        field: 'password',
				                        message: 'The password and its confirm are not the same'
                				    }
				                }
				            }
				        }
			    });
			});
		</script>

</body>
</html>