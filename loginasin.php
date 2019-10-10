<?php

session_start();
$msg='';$msg1='';$msg2='';$msg3='';$msg4='';
include_once 'include/function.php';
if (isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
		
		$msg='<div class="error">Please enter your username</div>';
    }
    elseif(empty($password)){
		
		$msg1='<div class="error">Please enter your password</div>';
    }
    elseif($username){
		$pass=mysqli_query($con, "SELECT password FROM memacc WHERE username='$username' or email='$username'");
		$passw=mysqli_fetch_array($pass);
		$passwrd=$passw['password'];
		if ($passwrd!=$password){
			$msg3='<div class="error">Wrong password entered</div>';
			header('Location:login.php?<?php $msg3; ?>');
		}
		else{
			$_SESSION['username']=$username;
			if ($username=='on'){
				setcookie('username', $username, time()+1500);
			}
			header('Location:membreg.php');
		}
		
	}
	else{
		$msg2='<div class="error">Email does not exist</div>';
	}
} 
?>