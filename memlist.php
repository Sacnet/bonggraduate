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
        <div class="platemem">
        
           
       
                            <h3 style="padding-top:5rem; text-shadow: .1rem .1rem .5rem black;">BUGA MEMBERS LIST</h3>
                            <div class="heading-underline1"></div>
                            <hr>
                            <table class="table table-striped" style="width:100%; content-align:center; font-size:10px; overflow-x: scroll; margin-top:30px; margin-left:10px; background:#fff;">
            <?php if (isset($disUser)) 
            echo $disUser;
            ?>
            
                        <tr>
                            <th>No</th>
                            <th>Pic</th>
                            <th>Surname</th>
                            <th>Firstname</th>
                            <th>Education Level</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Town of Birth</th>
                            <th>County of Birth</th>
                            <th>Clan</th>
                            <th>District</th>
                            <th>Address</th>
                            <th>University</th>
                            <th></th>
                        </tr>
                        <?php 
                        
                            $userData = $usr->getAllEmigAp();
                            if ($userData){
                                $i=0;
                                while ($result = $userData->fetch_assoc()){
                            $i++;
                        ?>

                        <tr>
                            <td><?php 
                                if ($result['status']=='1')
                                {
                                    echo "<span class='error'>".$i."</span>";
                                }
                                else
                                {
                                    echo $i;
                                }
                            ?></td>
                            <td><?php echo "<img src='file/".$result['pic']."' style='margin-top:0px; width:50px; height:50px; border-radius:45px 45px 45px 45px; margin-left:0px;'>"; ?></td>
                            <td><?php echo $result['surname'];?></td>
                            <td><?php echo $result['firstname'];?></td>
                            <td><?php echo $result['level'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['phoneno'];?></td>
                            <td><?php echo $result['gender'];?></td>
                            <td><?php echo $result['townbirth'];?></td>
                            <td><?php echo $result['countybirth'];?></td>
                            <td><?php echo $result['clanor'];?></td>
                            <td><?php echo $result['district'];?></td>
                            <td><?php echo $result['address']; echo $result['addrtown']; echo $result['addrcounty']; ?></td>
                            <td><?php echo $result['univer'];?></td>
                            
                           
                        </tr>
                            <?php }} ?>        
                    </table>

                
    </div>
                    </div>
    </div>
</div>


</body>
</html>