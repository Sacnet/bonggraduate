<?php 
    $filepath = realpath(dirname(__FILE__));
    
    include_once ($filepath.'/classess/user.php');
    $usr= new User();
      

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            //exit;
            $surname = $_POST['surname'];
            $firstname = $_POST['firstname'];
            $midname = $_POST['midname'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneno'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $townbirth = $_POST['townbirth'];
            $countybirth = $_POST['countybirth'];
            $clanor = $_POST['clanor'];
            $district = $_POST['district'];
            $address = $_POST['address'];
            $addrtown = $_POST['addrtown'];
            $addrcounty = $_POST['addrcounty'];
            $level = $_POST['level'];
            $univer = $_POST['univer'];
            $year = $_POST['year'];
            $FILES = $_POST['filename']['name'];
            $files = $_POST['filesize'];
            $filet = $_POST['filetype'];
            $userreg = $usr->memberRegister($surname, $firstname, $midname, $email, $phoneno, $dob, $gender, $townbirth, $countybirth, $clanor, $district, $address, $addrtown, $addrcounty, $level, $univer, $year, $file, $files, $filet);

            
            
                      
            
        }
?>