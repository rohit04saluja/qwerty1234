<?php
	# obtaining any get values that exist
	$page = 'login';
	$attempt = False;
	if(!empty($_GET)) {
		
		# obtaining the page type
		if(!empty($_GET['p']) && $_GET['p'] == 'search') {
			$page = 'search';	
		} else {
			$page = 'login';	
		}

		# obtaining if authentication has been attemted or not
		if(!empty($_GET['auth']) && $_GET['auth']=='false') {
			$attempt = True;
			$page = 'login';
		} else {
			$attempt = False;
		}
				
	}

	# display the corresponding page
	if($page == 'login') {
		include_once('login.php');
	} else if($page = "search") {
		include_once('search.php');
	}
?>
		
