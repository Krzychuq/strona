<?php
	// include database connectivity file

	include_once('/class/class.db.php');

	if (isset($_POST['login'])) {
		
	    $email 	  = $con->real_escape_string($_POST['email']);
	    $password = $con->real_escape_string(md5($_POST['password']));

	    $query  = "INSERT INTO login (email,password) 
	    	      VALUES('$email','$password')";
	    $result = $con->query($query);

            if ($result) {
	         echo json_encode(array('error'=>'0', 'message'=>'Registration successfully Login'));
	    }else{
	        echo json_encode(array('error'=>'1', 'message'=>'Registration Failed try again'));
	    }
	}

?>