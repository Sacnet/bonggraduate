<?php 
    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/classess/user.php');
    $usr= new User();
      

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            //exit;
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneno'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            $userreg = $usr->userMember($surname, $email, $phoneno, $username, $password, $confirm);

        }
?>