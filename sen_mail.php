<?php
	if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])){
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
	}
    include 'link.php';
    require_once('connection.php');
	
	function validate($m, $k='')
	{
		$m = trim($m);
		if($m == "")
			die("Please Fill the missing Field");

		$val = array('url', 'www', 'http', '.com', 'disclaimar');
		
		if($k == "email")
		{
			if(!filter_var($m, FILTER_VALIDATE_EMAIL))
				die('Enter the valid mail');
		}
		else if($k == "phone")
		{
			if(!preg_match('/^[0-9]+$/', $m))
				die('Enter the valid Mobile Number');
			else if(strlen($m) < 10 || strlen($m) > 10 )
				die('Enter valid 10 digit Mobile Number');
		}	
		else{
			if(strlen($m) > 100){
				die('Message should be at most 100 char');
			}
			else{
				foreach($val as $v){
					if(strpos(strtolower($m), $v) !== false){
						die('You are Robot. Not Allowed');
					}
				}
			}
			
		}
		return $m;
	}

  $fname = validate($_POST['fname']);
	$email = validate($_POST['email'], 'email');
	$phone = validate($_POST['phone'], 'phone');
	$state= validate($_POST['state']);
	$city= validate($_POST['city']);
	$n_graduation = validate($_POST['n_graduation']);
	$n_dept = validate($_POST['n_dept']);
  $ab = $_COOKIE['utm_medium'];


    if(isset($_COOKIE['newcooky'])){
        echo 'You Have Already Submitted The Form!';
    }
    else{
      setcookie("newcooky", 'newcooky', time()+1200);
       $starep = "INSERT INTO n_apply(n_name,n_phone,n_email,n_city,n_course,n_state,n_source,n_graduation) VALUES ('$fname','$phone','$email','$city','$n_dept','$state','$ab','$n_graduation')";
       $r = mysqli_query($conn, $starep);
      echo "y";
    }

?>