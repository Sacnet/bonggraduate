<?php 
    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/classess/user.php');
    $usr= new User();
      

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            //exit;
            $surname = $_POST['surname'];
            $firstname = $_POST['firstname'];
            $memtype = $_POST['memtype'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            $userreg = $usr->userMessage($surname, $firstname, $memtype, $email, $message);

        }
?>