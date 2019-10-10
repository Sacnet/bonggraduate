<div class="col-sm-3">
        <div class="jas">
        <?php
            include_once 'include/function.php';
            $result=mysqli_query($con, "SELECT * FROM newsevent");
            $passw=mysqli_fetch_array($result);
            $title=$passw['1'];
            $time=$passw['time'];
            $dateevent=$passw['dateevent'];
            $cont=$passw['newscont'];
            $result=mysqli_query($con, "SELECT * FROM newsevent1");
            $passwd=mysqli_fetch_array($result);
            $tite=$passwd['1'];
            $times=$passwd['time'];
            $dateevents=$passwd['dateevent'];
            $conts=$passwd['newscont']
        ?>
        <h4>News & Events</h4>
        <section id="testimonial">
									<div class="container45">
                                        
										<div class="row">
											<div class="col-sm-18 col-sm-offset-2">
                                            <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
													<!-- Wrapper for slides -->
													<div class="carousel-inner" role="listbox">
														<div class="item active"><a href="update.php" style="text-decoration:none;">
															<h4 style="font-size:18px; margin-top:-7px;"><?php echo $title; ?></h4>
															<small style="margin-top:-10px;">Time: <?php echo $time; ?>
															Date: <?php echo $dateevent; ?></small>
															<p style="color:#ffffff;  margin-top:-10px;"><?php echo $cont; ?></p>
														</a></div>
														<div class="item"><a href="newsup.php" style="text-decoration:none;">
															<h4 style="font-size:18px; margin-top:-7px;"> <?php echo $tite; ?></h4>
															<small style="margin-top:-10px;">Time: <?php echo $times; ?>
															Date: <?php echo $dateevents; ?>
														</small>
															<p style="color:#ffffff; margin-top:-10px;"><?php echo $conts; ?></p>
													</a></div>
													</div>
											
											</div>
										</div>
									</div>
								</section><!--/#testimonial-->
        </div>
        <div class="jasa">
        <a href="memlogin.php">LOGIN</a><br>
        <a href="https://www.facebook.com/Bong-University-Graduate-Association-662570877457481/?modal=admin_todo_tour"><img src="img/faceso.png" style="margin-left:30%;"></a>
        <a href="https://twitter.com/BongGraduates?lang=en" target="_blank"><img src="img/twitso.png"></a> 
        <a href="https://www.instagram.com/bugaliberia/" target="_blank"><img src="img/youso.png" style=""></a>  
    </div>

        <div class="jasd">
        <h4 style='margin-top:-50px;'>Our Core Values</h4>
            <p>>Diligence</p>
            <p>>Integrity</p>
            <p>>Excellent Service</p>
            <p>>Fear of God</p>
        </div>
</div>
</div>