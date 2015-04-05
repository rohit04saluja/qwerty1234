<?php
#	if(!empty($_SESSION['username'])) {
		if(empty($_POST)) {
			header();
		}
?>

<!doctype html>

<html>
	<head>

		<meta charset="utf-8">
		<title>PAP | Company</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="../bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Latest complied and minified JQuery -->
        <script src="../bootstrap/jquery-2.1.3.min.js"></script>
    
	    <!-- Custom made CSS file -->
    	<link rel="stylesheet" href="../style.css">
            
	</head>

	<body>
        
        <?php
        	include_once('head.php');
		?>
        
        <div class="body2"></div>
        
        <!-- space from header -->
        <div style="margin-top: 40px;"></div>
        
        <!-- main container for displaying mail -->
		<div class="container">
        	<div class="row">
            	

            	<div class="col-lg-6">
	                <div class="well-lg well">
                        <table class="table table-hover">
                        
                            <thead>
                                <tr>
                                    <th>Roll Number</th>
                                    <th>Full Name</th>
                                    <th>Branch</th>
                                    <th>CGPA</th>
                                </tr>
                            </thead>
                            
                            <!-- display all the interested students -->
                            <tbody>
        
                                    <tr onClick="loadDetails('101203081');">
                                        <td>101203081</td>
                                        <td>Rohit Saluja</td>
                                        <td>COE</td>
                                        <td>6.98</td>
                                    </tr>

                                    <tr onClick="loadDetails('101203081');">
                                        <td>101203081</td>
                                        <td>Rohit Saluja</td>
                                        <td>COE</td>
                                        <td>6.98</td>
                                    </tr>

                                    <tr onClick="loadDetails('101203081');">
                                        <td>101203081</td>
                                        <td>Rohit Saluja</td>
                                        <td>COE</td>
                                        <td>6.98</td>
                                    </tr>
                                
                            </tbody>
                        </table>
	                </div>
                </div>
                
                <div class="col-lg-6">
	                <div class="well-lg well">
                    	Please click on a student entry to view details
    	            </div>
                </div>
                
			</div>
		</div>

        <script>
			// use ajax to populate the 
		</script>

	</body>
</html>

<?php
#	} else {
#		header("Location: /");
#	}
?>