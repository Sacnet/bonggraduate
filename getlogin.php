<?php 
    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/classess/user.php');
    $usr= new User();
      

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            //exit;
            
            $username = $_POST['username'];
            $password = md5($_POST['password']);
           
            $userlog = $usr->userLog($username,  $password);

        }


?>