<?php
$currentPage = 'contact';
?>
<!DOCTYPE html>
<html class="no-js">
<body>
<?php include('include/header.php'); ?>   

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="block" id="contactinfo">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Our Offices</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                         
                    </p>
                    <div class="contact-form">
                        <div class="col-lg-12 clearfix">
                            <div class="address wow fadeInLeft clearfix" data-wow-duration="500ms" data-wow-delay=".3s">
                                    <div class="col-lg-2" style="padding-top: 8px; padding-left: 30px;">
                                        <i class="ion-ios-location-outline"></i>
                                    </div>
                                 <div class="col-lg-10" style="text-align: left; padding-top:10px;">
                                    <h3>Chicago</h3>
                                    <h4>Mike Falconer</h4>
                                    <h5>1770 President St, GLENDALE HEIGHTS, IL 60139, USA</h5> 
                                    <h5>Telephone: (630) 886-7621</h5>
                                    <h5>Email: michaelf@marquismetal.com</h5>
                                    <!-- <h5>Telephone: +01  </h5> -->
                                 </div>
                            </div>
                        </div>
                                                 
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                         
                        
                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.573474665418!2d-88.09370168455747!3d41.92352697921868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fab5fdee1c36b%3A0x6bfe96338fa2d715!2s1770+President+St%2C+Glendale+Heights%2C+IL+60139%E7%BE%8E%E5%9B%BD!5e0!3m2!1szh-CN!2sca!4v1460662378234" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row address-details">
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+01 518 - 419 6646</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p>support@themefisher.com<br>support@themefisher.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 052 245 022<br>+07 999 999 999</p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- 
================================================== 
    Call To Action Section Start
================================================== -->
<section id="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Us</h2>
					<div class="col-md-12">
						<div class="suc"><span class="noti">Thank you! Your message has been sent!</span></div>
					</div>
					<form id="ajax-contact" method="post" action="mailer.php" role="form">
						<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".1s">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>

						<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".2s">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
						</div>

						<!-- <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="0.3s">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div> -->

						<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="0.4s">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
						</div>


						<div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="0.5s">
							<input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
						</div>                      
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<?php include('include/footer.php'); ?>   
<script type="text/javascript" src="assets/js/app.js"></script>   
</body>
</html>


