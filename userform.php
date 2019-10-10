<?php
    include_once "lib/session.php";
    Session::init();
    include_once "lib/database.php";
    include_once "helpers/format.php";
    spl_autoload_register(function($class){
        include_once "classess/".$class.".php";
    });
    $db = new Database();
    $fm = new Format();
    $usr = new User();
    $eng = new Exam();
    $pro = new Process();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Bong University Graduates Association</title>
    <?php
    $msg='';$msg1='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';
    include_once 'include/function.php';
if(isset($_POST['submit']))
{
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $FILES = $_FILES['image']['name'];
    $files = $_FILES['image']['tmp_name'];
    $filet = $_FILES['image']['tmp_name'];
    $extensions= array("jpeg", "jpg", "png");
    if ($surname == "" || $email == "" || $phoneno == "" || $username == "" || $password == "" || $FILES==""){
        $msg="<span class='error'>Fields must not be Empty !</span>";  
               
     }
     else if (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
         $msg1="<span class='error'>Invalid Email Address</span>";
         
     }
     else if ($password!=$confirm){
         $msg2="<span class='error'>Passwords entered do not match</span>";
     }
     else
     {
         $password=md5($password);
         $check = "SELECT * FROM regist WHERE surname = '$surname' and firstname = '$firstname'";
         $chresult = mysqli_query($con, $check);
         if ($chresult->num_rows>0){
            $msg3="<span class='error'>User already exit</span>";
             
         }
         else 
         {
            $query = "INSERT INTO regist(surname, firstname, email, phoneno, username, password, picture) VALUE ('$surname', '$firstname', '$email', '$phoneno', '$username', '$password', '$FILES')"; 
            $insert_row = mysqli_query($con,$query); 
            move_uploaded_file($files, "file/".$FILES);
            if ($insert_row){
                $msg4="<span class='success'>User Registration successful</span>";
             
            }
            else {
                $msg5="<span class='error'>Error! Not Registered</span>";
                 
            }
         }
}
}
    ?>
    <link rel="stylesheet" href=css/style.css> 
    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/owl_002.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate_002.css">

    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen"/>
   
    <link rel="stylesheet" href=css/bootstrap.min.css>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/ddsmoothmenu.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
    <script type="text/javascript" language="javascript" src="js/ddsmoothmenu.js">


/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<script src="js/jquery_3.45.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
      
    <script src="js/wow.js"></script>
    <script type="text/javascript" src="js/image_slide.js"></script>
    
    <script src="js/bootstrap.js"></script>
   
   
    
    <script src="js/jquery.js"></script>
    
    
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<?php
        if (isset($_GET['action']) && $_GET['action']=='logout'){
            Session::destroy();
            header("Location:login.php");
            exit();
        }
    ?> 

<?php 
    Session::checkSession();

?>
<?php 
    include_once 'includes/header.php';
?> 
<div class="container-fluid">
    <div class="row">
        
        <div class="col-sm-12" >
        <div class="platereg">
        
           
       
                            <h3 style="padding-top:5rem; text-shadow: .1rem .1rem .5rem black;">User Registration Form</h3>
                            <div class="heading-underline1"></div>
                            <hr>
                <span id="state"></span>   
                <form action="" method="POST" enctype="multipart/form-data">
                            <?php echo $msg; ?>
                            <?php echo $msg1;?>
                            <?php echo $msg2;?>
                            <?php echo $msg3;?>
                            <?php echo $msg4;?>
                            <?php echo $msg5;?>
                        <div>
                            <label>Surname</label>
                            <input type="text" name="surname" id="surname"  class="form-control" placeholder="Enter your Surname">
                            
                        </div>
                        <div>
                            <label>Firstname</label>
                            <input type="text" name="firstname" id="firstname"  class="form-control" placeholder="Enter your Firstname">
                        
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your Email">
                        </div>
                        <div>
                            <label>Phone Number</label>
                            <input type="text" id="phoneno" name="phoneno"  class="form-control" placeholder="Enter your Phone Number">
                        
                        </div>
                        <div>
                            <label>Username:</label>
                            <input type="text" id="username" name="username"  class="form-control" placeholder="Enter your Username">
                        
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" id="password" name="password"  class="form-control" placeholder="Enter your password">
                        </div>
                        <div> 
                            <label>Confirm Password</label>
                            <input type="password" id="confirm" name="confirm"  class="form-control" placeholder="Enter your password again">
                            
                        </div>
                        <div> 
                            <label>Upload your Picture ( maximum: 200pixel by 200pixel)</label>
                            <input type="file" name="image"  class="form-control" >
                            
                        </div>
                        <div>
                            <input type="submit" name="submit" class="btn btn-primary" value='Signup' style="width:100%; height:33px; margin-top:5px;">
                        </div>
                </form>
    </div>
                    </div>
    </div>
</div>

<footer>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center contact-grdr center-grid wow fadeInLeft" data-wow-duration="1400ms" data-wow-delay="800ms" style="visibility: hidden; animation-duration: 1400ms; animation-delay: 800ms; animation-name: none;">
                <img src="img/logo.jpg" alt="">
                
                <p>Bong University Graduate Association, Liberia</p>
                <strong>Contact Info</strong>
                <p>C/O of Inter-Digital Computer School<br>
                Benson Street<br>
                Monrovia, Liberia<br>
                +231-886552470<br>
                +231-77796356<br>
                info@bugaliberia.org</p>
                <a href="https://www.facebook.com/Bong-University-Graduate-Association-662570877457481/?modal=admin_todo_tour" target="_blank"><img src="img/faceso.png" style="width:7%; height:7%; margin-top:-15px;"></a>
                <a href="https://twitter.com/BongGraduates?lang=en" target="_blank"><img src="img/twitso.png" style="width:7%; height:7%; margin-top:-15px;"></a>
                <a href="https://www.instagram.com/bugaliberia/" target="_blank"><img src="img/youso.png" style="width:7%; height:7%; margin-top:-15px;"></a>
                
            </div>
            <hr class="socket">
            &copy; NESTECH (2019)
        </div>
</footer>
</body>
</html>