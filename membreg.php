<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Bong University Graduates Association</title>
<?php 
include_once 'includes/config.php';
  
  $msg='';$msg1='';$msg2='';$msg3='';$msg4='';$msg5='';$msg6='';$msg7='';$msg8='';$msg9=''; $msg10='';$msg11='';$msg12='';$msg13='';$msg14='';$msg15='';$msg16='';
  
include_once 'include/function.php';
session_start();
if (logged_in()){
	header("location:memlogin.php");
}
else if (isset($_SESSION['username'])){
    if (isset($_POST['submit']))
{
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
    $FILES = $_FILES['image']['name'];
    $files = $_FILES['image']['tmp_name'];
    $filet = $_FILES['image']['tmp_name'];
    $extensions= array("jpeg", "jpg", "png");
        if ($surname == "" || $firstname == "" || $midname == "" || $email == "" || $phoneno == "" || $dob == "" ||  $gender == "" || $townbirth == "" || $countybirth == "" || $clanor == "" || $district == "" || $address == "" || $addrtown == "" || $addrcounty == "" || $level == "" || $univer == "" || $year == "" || $FILES==""){
                $msg="<div class='error'>Fields must not be Empty !</div>";  
                
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
                $msg1= '<div class="error">Invalid Email Address</div>';
                
        }
       
        else if ($filet>102400){
            $msg12='<div class="error">Picture size must not exceed 100KB</div>';
        }
        else
        { 
            $check = "SELECT * FROM membreg WHERE surname = '$surname' and firstname = '$firstname'";
            $chresult=mysqli_query($con, $check);
            if ($chresult->num_rows>0){
                $msg2="<div class='error'>You are already a registered member</div>";
                 
             }
             else 
             {
                $query = "INSERT INTO membreg(surname, firstname, midname, email, phoneno, dob, gender, townbirth, countybirth, clanor, district, address, addrtown, addrcounty, level, univer, year, pic) VALUE ('$surname', '$firstname', '$midname', '$email', '$phoneno', '$dob', '$gender', '$townbirth', '$countybirth', '$clanor', '$district', '$address', '$addrtown', '$addrcounty', '$level', '$univer', '$year', '$FILES')"; 
                $insert_row =mysqli_query($con,$query); 
                move_uploaded_file($files, "file/".$FILES);
                if ($insert_row){
                    $msg3= "<div class='success'>Member Registration successful</div>";
               
                }
                else {
                    $msg4= "<div class='error'>Error! Not Registered</div>";
                    
                }
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
    include_once 'header.php';
?>  
   

<div class="container-fluid">
    <div class="row">
        
        <div class="col-sm-12" >
        <div class="platereg">
        
           
       
                            <h3 style="padding-top:5rem; text-shadow: .1rem .1rem .5rem black;">Member Registration Form</h3>
                            <div class="heading-underline1"></div>
                            <hr>
                            <span id="state"></span> 
                            <?php echo $msg; ?>
                            <?php        echo $msg1;?>
                             <?php   echo $msg2;?>
                             <?php   echo $msg3;?>
                             <?php   echo $msg4;?>
                              <?php  echo $msg11;?>
                        
                            <form action="" method="POST" id="memberform" enctype="multipart/form-data">
                
                        <div>
                            <label>Surname</label>
                            <input type="text" name="surname" id="surname"  class="form-control" placeholder="Enter your surname">
                            
                        </div>
                        <div>
                            <label>Firstname</label>
                            <input type="text" name="firstname" id="firstname"  class="form-control" placeholder="Enter your firstname">
                        
                        </div>
                        <div>
                            <label>Middle Name</label>
                            <input type="text" name="midname" id="midname"  class="form-control" placeholder="Enter your middle name">
                        
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your email">
                        </div>
                        <div>
                            <label>Phone Number</label>
                            <input type="text" id="phoneno" name="phoneno"  class="form-control" placeholder="Enter your phone number">
                        
                        </div>
                        <div>
                            <label>Date of Birth</label>
                            <input type="date" name="dob" id="dob"  class="form-control" placeholder="Enter your date of birth">
                        
                        </div>
                        <div>
                                <label>Gender</label>
                                <SELECT class="form-control" name="gender" id="gender">
                                    <option value="" class="selected">Select Gender</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    
                                </SELECT>
                                
                                
                                
                            </div>
                            <div>
                            <label>City/Town of Birth</label>
                            <input type="text" id="townbirth" name="townbirth"  class="form-control" placeholder="Enter your city/town of birth">
                        
                        </div>
                        <div>
                            <label>County of Birth</label>
                            <input type="text" id="countybirth" name="countybirth"  class="form-control" placeholder="Enter your county of birth">
                        
                        </div>
                        <div>
                            <label>Clan of Origin</label>
                            <input type="text" id="clanor" name="clanor"  class="form-control" placeholder="Enter your clan of origin">
                        </div>
                        <div>
                                <label>District of Origin</label>
                                <SELECT class="form-control" name="district" id="district" data-validation="required" data-validation-error-msg="Please select a country">
                                    <option class="selected">Select district of Origin in Bong</option>
                                    <option value="Boinsen">Boinsen</option>
                                    <option value="Fuamah">Fuamah</option>
                                    <option value="Jorquelleh">Jorquelleh</option>
                                    <option value="Kokoyah">Kokoyah</option>
                                    <option value="Kpaai">Kpaai</option>
                                    <option value="Panta">Panta</option>
                                    <option value="Salala">Salala</option>
                                    <option value="Sanayea">Sanayea</option>
                                    <option value="Suakoko">Suakoko</option>
                                    <option value="Tukpahblee">Tukpahblee</option>
                                    <option value="Yeallequellah">Yeallequellah</option>
                                    <option value="Zota">Zota</option>
                                </SELECT>
                                
                                
                                
                            </div>
                        <div> 
                            <label>Street Address</label>
                            <input type="text" id="address" name="address"  class="form-control" placeholder="Enter your current address">
                            
                        </div>
                        <div> 
                            <label>Town/City</label>
                            <input type="text" id="addrtown" name="addrtown"  class="form-control" placeholder="Enter your current town address">
                            
                        </div>
                        <div> 
                            <label>County</label>
                            <input type="text" id="addrcounty" name="addrcounty"  class="form-control" placeholder="Enter your county address">
                            
                        </div>
                        <div> 
                            <label>Education Level</label>
                            <SELECT class="form-control" name="level" id="level" data-validation="required" data-validation-error-msg="Please select a country">
                                    <option class="selected">Select your level of education</option>
                                    <option value="Associate of Arts (A.A.)">Associate of Arts (A.A.)</option>
                                    <option value="Associate of Science (A.S.)">Associate of Science (A.S.)</option>
                                    <option value="Associate of Science (A.S.)">Associate of Science (A.S.)</option>
                                    <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
                                    <option value="Bachelor of Applied Science (BAS)">Bachelor of Applied Science (BAS)</option>
                                    <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                                    <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
                                    <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
                                    <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                                    <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
                                    <option value="Doctor of Philosophy (Ph.D.)">Doctor of Philosophy (Ph.D.)</option>
                                    <option value="Doctor of Medicine (M.D.)">Doctor of Medicine (M.D.)</option>
                                    <option value="Doctor of Medicine (M.D.)">Doctor of Medicine (M.D.)</option>
                                    <option value="Doctor of Dental Surgery (DDS)">Doctor of Dental Surgery (DDS)</option>
                                    <option value="Juris Doctor (J.D.)">Juris Doctor (J.D.)</option>
                            </SELECT>
                            
                        </div>
                        <div> 
                            <label>University Name</label>
                            <input type="text" id="univer" name="univer"  class="form-control" placeholder="Enter your last university">
                            
                        </div>
                        <div> 
                            <label>Year of Graduation</label>
                            <SELECT class="form-control" name="year" id="year" data-validation="required" data-validation-error-msg="Please select a country">
                                    <option class="selected">Select year of graduation</option>
                                    <option value="2040">2040</option>
                                    <option value="2039">2039</option>
                                    <option value="2038">2038</option>
                                    <option value="2037">2037</option>
                                    <option value="2036">2036</option>
                                    <option value="2035">2035</option>
                                    <option value="2034">2034</option>
                                    <option value="2033">2033</option>
                                    <option value="2032">2032</option>
                                    <option value="2031">2031</option>
                                    <option value="2030">2030</option>
                                    <option value="2029">2029</option>
                                    <option value="2028">2028</option>
                                    <option value="2027">2027</option>
                                    <option value="2026">2026</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                            </SELECT>
                        </div>
                        <div> 
                            <label>Upload your Picture ( maximum: 200pixel by 200pixel)</label>
                            <input type="file" name="image"  class="form-control" placeholder="Enter your last university">
                            
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary" name='submit' style="width:100%; height:33px; margin-top:5px;">SUBMIT</button>
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