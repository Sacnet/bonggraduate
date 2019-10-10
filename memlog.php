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
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Bong University Graduates Association</title>
    <link rel="stylesheet" href=css/style.css> 
    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/owl_002.css" rel="stylesheet">
    
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
    <script src="js/customjs.js"></script>
    
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
     include_once 'includes/header.php';
     ?>
<?php 
    Session::checkSession();

?>
<div class="container-fluid">
    <div class="row">
            <div class="col-sm-4" style="background-color:rgb(246, 117, 30);">
            <div class="cont2">
            <p style="padding-top:20px; padding-left:20px; font-size:25px; color:rgb(230, 124, 38);">USER PANEL</p>
     
     <span style="color:#ffff; margin-left:20px;">Welcome: <strong ><?php echo Session::get("surname"); ?></strong></span>
     <?php echo '<img src="file/'.Session::get('picture').'" style="margin-top:-14%; width:90px; height:90px; border-radius:45px 45px 45px 45px; margin-left:60%"/>'; ?>
            </div>
            <div class="cont1">
     

         <ul>
             <li><a href="appmem.php" class="select">Approves Member Application</a></li>
             <li><a href="enadm.php">Enable Admin User</a></li>
             <li><a href="userform.php">Register Admin</a></li>
             <li><a href="memlist.php">Members Log</a></li>
             <li><a href="ctxam.php">Create Member Login Account</a></li>
             <li><a href="memlog.php">Member Login List</a></li>
             <li><a href="newsup">News Update</a></li>
             <li><a href="comment.php">Contact List</a></li>
             
         </ul>
            </div>
    </div>
    <div class="col-sm-8" style="background-color:rgb(246, 117, 30);">
    <div class="plateuser">
        
           
       
        <h3 style="padding-top:2rem; text-shadow: .1rem .1rem .5rem black;">Member Login Account Details</h3>
        <div class="heading-underline1"></div>
        <hr>
        
           
                    <table class="table table-striped" style="width:100%; content-align:center; font-size:12px; overflow-x: scroll; margin-top:30px; margin-left:10px; background:#fff;">
            <?php if (isset($disUser)) 
            echo $disUser;
            ?>
            
                        <tr>
                            <th>No</th>
                            <th>Surname</th>         
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        <?php 
                        
                            $userData = $usr->getAllMem();
                            if ($userData){
                                $i=0;
                                while ($result = $userData->fetch_assoc()){
                            $i++;
                        ?>

                        <tr>
                            <td><?php 
                                
                                    echo $i;
                                
                            ?></td>
                            <td><?php echo $result['surname'];?></td>
                           
                            
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['phoneno'];?></td>
                            <td><?php echo $result['username'];?></td>
                            <td><?php echo ($result['password']);
                    
                            ?>
                        </td>
                            
                        </tr>
                            <?php }} ?>        
                    </table>

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