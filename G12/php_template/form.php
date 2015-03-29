<?php
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;

	// Check whether the user is registering or logging in
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password1'];
	$password2 = $_REQUEST['password2'];
	
	// Check invalid inputs
	if($email == '' || $password == ''){
		$errmsg_arr[] = 'Invalid email/password';
		$errflag = true;
	}
	if($password2 != '' && $password != $password2){
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the index
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ".HOMEURL);
		exit();
	}
	
	// Registering
	if($password2 != '' && $password == $password2){
		require 'register.php';
	}
	// Log in
	elseif($password2 == ''){
		require 'login.php';
	}
	// Shouldn't reach here
	else{
		$errmsg_arr[] = 'Error';
		$errflag = true;
	}
	
?>